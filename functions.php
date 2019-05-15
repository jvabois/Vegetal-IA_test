<?php
function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.html">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
} //arrêt du php + message d'erreur

function signup()
{
   if(isset($_POST['send'])){
      //echo ("Champs : ".$_POST['first_name'].$_POST['last_name'].$_POST['email'].$_POST['id'].$_POST['password']);
       extract($_POST);

      try {
         $secret = password_hash($password, PASSWORD_BCRYPT);
         //echo'<p>secret : '.$secret.'</p>';
         $sql = "INSERT INTO usr (first_name, last_name, email, id, upassword) VALUES ('$first_name','$last_name','$email','$id','$secret')";
         // use exec() because no results are returned
         $conn->exec($sql);
         echo "<p>Inscription réussie. Bienvenue ! </p>";
      }
      catch(PDOException $e)
      {
         echo $sql . "<br>" . $e->getMessage();
      }
         }

   else{
       echo '<p>Veuillez renseigner tous les champs.</p>';
   }
}

?>