<!DOCTYPE HTML>

<html>
	<?php
	session_start();
	mysql_connect("localhost", "root", "")
		or die("Impossible de se connecter : " . mysql_error());;
	$titre="Connexion";
	include("includes/identifiants.php");
	include("includes/functions.php");
	include("includes/constants.php");

	?>

	<head>
		<title>Vegetal'IA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

	
	<div id="page-wrapper">
		<header id="header">
			<h1><a href="index.html">vegetalIA</a></h1>
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="analyse.html">Analyse</a></li>
								<li><a href="interaction.html">Intéragir</a></li>
								<li><a href="deplacement.html">Deplacement</a></li>
								<li><a href="suggestion.html">Suggestion</a></li>
								<li><a href="signUp.html">Sign Up</a></li>
								<li><a href="signIn.html">Sign In</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</header>
		
		<h1>Connexion</h1>
		<?php
		if ($id!=0) erreur(ERR_IS_CO); //verification si déjà connecté ou non

		if (!isset($_POST['pseudo'])) //On verifie si le champs pseudo a été rempli
		{
			echo '<article id="main">
				<header>
					<h2>Connexion</h2>
					<p>Connectez vous pour pouvoir intéragir avec votre vegetalIA</p>
				</header>
				<section class="wrapper style5">
					<div class="inner">

						<h3>CONNECTEZ VOUS POUR AVOIR LACCÈS</h3>
							<form method="post" action="signIn.php">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="email" id="demo-name" placeholder="Identifiant" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="password" name="password" id="demo-email" placeholder="Password" />
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="conexion" class="primary" /></li>
										</ul>
										<p>vous ne possédez pas de compte ? <a href="signUp.html">senregistrer</a></p>
									</div>
								</div>
							</form>
						<hr />

					</div>
				</section>
			</article>
			
			
			</body>
			</html>';
			//<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
			//<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
				
		}

			else
			{
				$message='';
				if (empty($_POST['email']) || empty($_POST['password']) ) //Oublie d'un champ
				{
					$message = '<p>une erreur s\'est produite pendant votre identification.
					Vous devez remplir tous les champs</p>
					<p>Cliquez <a href="./signIn.php">ici</a> pour revenir</p>';
				}
				else //On check le email
				{
					$query=$db->prepare('SELECT email, upassword, first_name
					FROM usr WHERE email = :email');
					$query->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
					$query->execute();
					$data=$query->fetch();

					if ($data['upassword'] == md5($_POST['password'])) // Acces OK !
					{
						$_SESSION['fname'] = $data['first_name'];
						$_SESSION['email'] = $data['email'];
						$_SESSION['id'] = $data['id_usr'];
						$message = '<p>Bienvenue '.$data['first_name'].', vous êtes maintenant connecté!</p>
							<p>Cliquez <a href="./index.html">ici</a> pour revenir à la page d accueil</p>';  
					}
					else // Acces pas OK !
					{
						$message = '<p>Une erreur sest produite 
						pendant votre identification.<br /> Le mot de passe ou le pseudo 
							entré nest pas correcte.</p><p>Cliquez <a href="./signIn.php">ici</a> 
						pour revenir à la page précédente
						<br /><br />Cliquez <a href="./index.html">ici</a> 
						pour revenir à la page d accueil</p>';
					}
					$query->CloseCursor();
				}
				echo $message.'</div></body></html>';
			} 
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; vegetalIA</li><li>Design: <a href="">ElQueNoApoyaNoFo...</a></li>
				</ul>
			</footer>
			
			</div>

			<!-- Scripts -->
				<script src="assets/js/jquery.min.js"></script>
				<script src="assets/js/jquery.scrollex.min.js"></script>
				<script src="assets/js/jquery.scrolly.min.js"></script>
				<script src="assets/js/browser.min.js"></script>
				<script src="assets/js/breakpoints.min.js"></script>
				<script src="assets/js/util.js"></script>
				<script src="assets/js/main.js"></script>
			
		?>
		
	</body>
</html>