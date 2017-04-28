<?php
include('header.php');
?>

<h1>Ajouter produit/services</h1>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Informations du produit</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="add_product" enctype="multipart/form-data">
					<input type="hidden" name="action" value="add_product">

					<div class="row">
						<div class="col-xs-3">
							<input type="text" class="form-control required" name="product_name" placeholder="Nom du produit">
						</div>
						<div class="col-xs-3">
							<input type="text" class="form-control required" name="product_desc" placeholder="Description">
						</div>
						<div class="col-xs-2">
							<div class="input-group">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" name="product_price" class="form-control required" placeholder="Prix hors tax" aria-describedby="sizing-addon1">
							</div>
						</div>
						<div class="col-xs-2">
							<div class="input-group">
								<span class="input-group-addon">TVA/TAX</span>
								<input type="text" name="product_tva" class="form-control required" placeholder="%" aria-describedby="sizing-addon1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
				<input type="submit" id="action_add_product" name="action_add_product" class="btn btn-success float-right" value="Valider" data-loading-text="Ajout en cours">
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<div>

<?php
	include('footer.php');
?>