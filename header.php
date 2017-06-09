<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags "must" come first in the head; any other head content must come *after* these tags -->
		<title>Irigem Template</title>

		<!-- Bootstrap -->
		<link href="css/vendor/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<sript src="js/vendor/html5shivv-3.7.2.min.js"></sript>
			<sript src="js/vendor/respon-1.4.2.min.js"></sript>
		<![endif]-->

		<!-- Custom -->
		<link href="css/custom.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="container"> 
				<nav class="navbar navbar-default">
					<ul class="nav navbar-nav">
			            <li<?php if ($title == "Piemonte") { print ' class="active"';}?>><a class="navbar-brand" href="index.php">Piemonte</a></li>
			            <li<?php if ($title == "Le Alpi") { print ' class="active"';}?>><a href="le-alpi.php">Le Alpi</a></li>
			            <li<?php if ($title == "Novara") { print ' class="active"';}?>><a href="novara.php">Novara</a></li>
			            <li<?php if ($title == "Monumenti e luoghi d'interesse") { print ' class="active"';}?>><a href="monumenti-e-luoghi-d-interesse.php">Monumenti e luoghi d'interesse</a></li>
			            <li<?php if ($title == "Centro storico") { print ' class="active"';}?>><a href="centro-storico.php">Centro storico</a></li>
			            <li<?php if ($title == "Architetture civili") { print ' class="active"';}?>><a href="architetture-civili.php">Architetture civili</a></li>
			            <li<?php if ($title == "Lago Maggiore") { print ' class="active"';}?>><a href="lago-maggiore.php">Lago Maggiore</a></li>
			        </ul>
				</nav>
			</div>
		</header>
		<div class="row">