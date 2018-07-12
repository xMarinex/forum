<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Forum Simplonien</title>

	<?php include('../include/include.php'); ?>
	
	<link rel="stylesheet" type="text/css" href="../css/index.view.css">

</head>
<body>
	<header>
	<?php include ("../src/header.php"); ?>
	</header>
<div class="container-fluid">
	<div id="corp_page" class="row">
		<div class="col-md-8" id="principal">
			<h2 align="center" id="title_news">Connexion</h2>
			<br /><br />
			<?php 	if(isset($erreur))
						echo '<p class="erreur">'.$erreur.'</p>';

					elseif(isset($validate))
						echo '<p class="validate">'.$validate.'</p>';
			  ?>
			<form method="POST" action="">
				<div class="form">
					<label for="mail">Mail</label>
					<input class="form-control" id="mail" type="email" name="mail" placeholder="Votre eMail"/>
					<label for="password">Mot de passe</label>
					<input class="form-control" id="password" type="password" name="password" placeholder="Mot de passe" />
					<input class="btn btn-primary btn-block" type="submit" name="form_connexion" value="Connexion">
				</div>
			</form>
		</div>
		<div id="right" class="col-md-4">
			<div id="post_recents">
				<h2>Post récents</h2>
				<?php include('../include/post_récents.php'); ?>
			</div>
			<div id="new_topic">
				<h2>Nouveaux sujets</h2>
				<?php include('../include/nouveaux_sujets.php'); ?>
			</div>
			<div id="site_ressources">
				<h2>Sites incontournables</h2>
				<div >
					<ul>
						<?php include('../include/sites_incontournables.php'); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
	<footer>
		<?php include ("../src/footer.php") ?>
	</footer>
</body>
</html>