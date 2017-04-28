<?php
/*******************************************************************************
* PHP Invoice System                                                *
*                                                                              *
* Version: 1.1.3	                                                               *
* Author:  Keyta                                  				   *
*******************************************************************************/

include('header-first.php');
include('functions.php');

?>
<hr>
<div class="row">
<div class="jumbotron">
  <h1>Salut, <?php echo $_SESSION['login_username']; ?></h1>
  <p style="font-size: 10px;">
  <?php
	echo "Début de Session".$_SESSION['log_time'];
    echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
  ?> 
  </p>
  <hr>
 <div class="row">
	 <div class="col-md-3"><h5>Demandes de devis <span class="label label-info">15</span></h5></div>
	 <div class="col-md-3"><h5>Commandes Validées <span class="label label-success">76</span></h5></div>
	 <div class="col-md-3"><h5>Clients <span class="label label-warning">689</span></h5></div>
	 <div class="col-md-3"><h5>Commandes en cours <span class="label label-danger">3</span></h5></div>
 </div><hr>
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
      

 </div>
</div>
	

</div>

<?php
include('footer.php');
?>