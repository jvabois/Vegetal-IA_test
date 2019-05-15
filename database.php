<?php
    try{
    $conn = new PDO("mysql:host=sql313.byethost.com;dbname=b11_23898245_vegetalia",'b11_23898245','vegetalia95');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
    echo "connexion > OK !";
    }catch(PDOException $e){
        echo $e;
    }
?>