<!-- Une page d’accueil qui présente votre site (index.php) -->
<?php 
	session_start(); 
	$title = "accueil";
?>

<!DOCTYPE html>
<html lang="fr">
	<?php require_once("templates/head.php") ?>
	<body class="body-accueil">
		<?php require_once("templates/header.php") ?>
		<main class="'container">

			<h1 class="h1-accueil">LOVE-HEARTH</h1>
			<?php 
			if (isset($_SESSION['error'])) 
			{ 
				echo "<p class=\"error-2\">" .   $_SESSION['error'] . "</p>";
			} ?>
			<article class="article-accueil">
				<h3>Bienvenue amoureux de la nature !</h3>			
				<p>Ici, vous pourrez <strong> voyager, découvrir,</strong> sans même bouger de chez vous.<br> 
				Pour accéder à des milliers d'images<strong> gratuites</strong>, il vous suffit de vous <strong>enregistrer</strong> puis de vous <strong>connecter.</strong>
				</p>
			</article>
			<div class="voyager">
				<div class="voyager_1">
					<article>
						<h3>Découvrez de nouvelles contrées..</h3>
						<p><strong>P</strong>artez a la découverte de nouveaux horizons, que vous préférier la neige, la forêt ou bien le désert.<br> <strong>I</strong>ci vous trouverez de magnifique lieux dans lesquels vous pourrez vous évader le temps d'un instant. <br>
						N'hésitez pas à vous inscrire afin de recevoir les alertes des nouvelles photos</p>
					</article>
					<img class="image" src="ressources/snow.jpg" alt="snow_way">
				</div>
				<div class="voyager_2">
					<img class="image" src="ressources/desert.jpg" alt="desert_vay">
					<img class="image" src="ressources/forest.jpg" alt="foret_way">
				</div>
			</div>
		</main>
		<?php require_once('templates/footer.php'); ?>
	</body>
</html>
