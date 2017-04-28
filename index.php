<?php


include('header-login.php');
include('functions.php');

?>
<div class="image-bg-fluid-height">
	<h1>Bienvenue</h1>
</div>
<hr>
<div class="row vertical-offset-100">
	<div id="response" class="alert alert-success" style="display:none;">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		<div class="message"></div>
	</div>

	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		  		<h1 class="text-center">
		  		<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
				</h1>
		    	<h3 class="panel-title text-center">Connexion</h3>
		 	</div>
		  	<div class="panel-body">
		    	<form accept-charset="UTF-8" role="form" method="post" id="login_form">
		    		<input type="hidden" name="action" value="login">
	                <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control required" name="username" id="username" type="text" placeholder="Utilisateur" autofocus>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control required" placeholder="Password" name="password" type="password" placeholder="Mot de passe">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Se souvenir de moi
			    	    	</label>
			    	    </div>
			    		<button type="button" id="btn-login" class="btn btn-lg btn-success btn-block">Se Connecter</button><br>
			    	</fieldset>
		      	</form>
		    </div>
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>