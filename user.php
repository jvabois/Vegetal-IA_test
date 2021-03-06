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