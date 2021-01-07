<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Love-Herath</h3>
 
		<div class="footer-links">
		<a href="index.php">Accueil</a>
	
		<?php 
			if(isset($_SESSION['login']))
				echo "<a itemprop=\"item\" href=\"profil.php\"><span itemprop=\"name\">Profil</span></a><meta itemprop=\"position\" content=\"3\" /></li>";
	
			else 
				echo  "<a itemprop=\"item\" href=\"inscription.php\"><span itemprop=\"name\">Inscription</span></a><meta itemprop=\"position\" content=\"3\" /></li>" ;

         ?>
	
		<?php 
			if(isset($_SESSION['login']))
				echo "<a itemprop=\"item\" href=\"deconnexion.php\"><span itemprop=\"name\">Deconnexion</span></a><meta itemprop=\"position\" content=\"3\" /></li>" ;  
			else 
				echo  "<a itemprop=\"item\" href=\"connexion.php\"><span itemprop=\"name\">Connexion</span></a><meta itemprop=\"position\" content=\"3\" /></li>" ;
		?>
	
		<?php 
			if(isset($_SESSION['admin']))
				echo "<a itemprop=\"item\" href=\"admin.php\"><span itemprop=\"name\">Admin</span></a><meta itemprop=\"position\" content=\"3\" /></li>" ;  
		?>	

		</div>
 
		<p class="footer-company-name">keany ALBERTINI &copy; Coding School 2021 @LaPlateforme_</p>
		</div>
 
		<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>4 Rue Fançois Taddei</span> Marseille, France</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>06 21 64 64 51</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="#">keany.albertini@laplateforme.io</a></p>
		</div>
 
		</div>
 
		<div class="footer-right">
 
			<p class="footer-company-about">
			<span>A notre sujet</span>
			Love-Hearth est un blog pour les amoureux de la nature.
			</p>

 
		</div>
 
		</footer>