<?php
	//check login
	include("session.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Plateforme de gestion</title>
	<!-- JS -->

	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>
	<script src="js/scripts.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">

	<style>
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
		body, h1, h2, h3, h4, h5, h6{
			font-family: 'Open Sans', sans-serif;
		}
	</style>

</head>

<body>
		<div class="image-bg-fluid-height">
			<img class="img-responsive img-center" src="../images/logo.png" alt="">
		</div><br>
	<div class="container">
<div class="row">
 	<div class="col-md-3">
 	<a href="customer-list.php">	
		<div class="alert alert-success" role="alert"><h1 class="text-center"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></h1>
			<p class="text-center">gestion des Clients</p>
		</div>
		</a>
	</div>
 	<div class="col-md-3">
 	<a href="invoice-list.php">
		<div class="alert alert-info" role="alert"><h1 class="text-center"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></h1>
			<p class="text-center">gestion des Devis</p>
		</div>
		</a>
	</div>
 	<div class="col-md-3">
 	<a href="product-list.php">
		<div class="alert alert-danger" role="alert"><h1 class="text-center"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span></h1>
			<p class="text-center">gestion des Produits</p>
		</div>
		</a>
	</div>
 	<div class="col-md-3">
 	<a href="dashboard.php">
		<div class="alert alert-warning" role="alert"><h1 class="text-center"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></h1>
			<p class="text-center">Statistiques</p>
		</div>
		</a>
	</div>
 </div><br>
		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Devis/Factures <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="invoice-create.php">Création des devis</a></li>	    
				<li><a href="invoice-list.php">Gestion des devis</a></li>
				<li><a href="#" class="download-csv">Télechargement</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Produits <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="product-add.php">Ajouter produit/service</a></li>	    
				<li><a href="product-list.php">Gestion des produits</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Clients <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="customer-add.php">Ajouter client</a></li>	    
				<li><a href="customer-list.php">Gestion des clients</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Utilisateurs <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="user-add.php">Ajouter Utilissateur</a></li>	    
				<li><a href="user-list.php">Gestion des utilisateurs </a></li>
		  	</ul>
		</div>

		<div class="top-buttons float-right btn-group">
			<a class="btn btn-info float-right" href="logout.php" role="button">Deconnexion</a>
		</div>

		<div class="top-buttons btn-group float-right">
			<p class="user">Salut, <?php echo $_SESSION['login_username']; ?></p>
		</div>