<!DOCTYPE HTML>
<?php
include "functions.php";
?>

<html>
	<head>
		<title>vegetal'IA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">vegetal'IA</a></h1>
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

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Connexion</h2>
							<p>Connectez vous pour pouvoir intéragir avec votre vegetal'IA</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<h3>CONNECTEZ VOUS POUR AVOIR L'ACCÈS</h3>
                                    <form method="post" action="#">
                                        <div class="row gtr-uniform">
                                            <div class="col-6 col-12-xsmall">
                                                <input type="text" name="log_email" id="demo-name" value="" placeholder="Email" />
                                            </div>
                                            <div class="col-6 col-12-xsmall">
                                                <input type="password" name="log_password" id="demo-email" value="" placeholder="Password" />
                                            </div>
                                            <div class="col-12">
                                                <ul class="actions">
                                                    <li><input type="submit" name='send' value="CONNECTION" class="primary" /></li>
												</ul>
												<p>vous n'avez pas de compte ? <a href="signUp.html">s'enregistrer</a></p>
                                            </div>
										</div>
                                    </form>
								<hr />

								<?php                        
									if(isset($_POST['send'])){
										if(!empty($log_email) && !empty($log_password)){
											$mail = $_POST['log_email'];
											$pass = $_POST['log_password'];

											try {
												$conn = new PDO("mysql:host=sql313.byethost.com;dbname=b11_23898245_vegetalia",'b11_23898245','vegetalia95');
												// set the PDO error mode to exception
												$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$sql = "SELECT email, upassword FROM usr WHERE email= AND upassword=";
												$stmt=$pdo->prepare($sql);
												// use exec() because no results are returned
												//$conn->exec($sql);

												$stmt->bindValue(':email', $log_email);

												$stmt->execute();

												$user = $stmt->fetch(PDO::FETCH_ASSOC);

												if($user === false){
													die('Incorrect username / password combination!');
												} 
												else{
													//User account found. Check to see if the given password matches the
													//password hash that we stored in our users table.
													
													//Compare the passwords.
													$validPassword = password_verify($pass, $user['upassword']);//PAS SUR POUR LE upassword
													
													//If $validPassword is TRUE, the login has been successful.
													if($validPassword){
														//Provide the user with a login session.
														$_SESSION['user_id'] = $user['id'];
														$_SESSION['logged_in'] = time();
														
														//Redirect to our protected page, which we called home.php
														header('Location: logOK.php');
														exit;
													} 
													else{
														die('<p>Aucun mot de passe correspondant à cet email.</p>');
													}
												}
											}
											catch(PDOException $e)
											{
												echo $sql . "<br>" . $e->getMessage();
											}
										}
										else{
											echo '<p> Tous les champs n\'ont pas été remplis</p>';
										}
									}

									else{
										echo '<p>Veuillez renseigner tous les champs.</p>';
									}
								?>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; vegetal'IA</li><li>Design: <a href="">ElQueNoApoyaNoFo...</a></li>
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

	</body>
</html>