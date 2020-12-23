<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>DeckStone</title>
</head>
<body>

		<header id="header_accueil">

      <ul class="dropdownmenu">
        <li id="Acceuil" class="menu_buttons">
          <a href="index.php">Acceuil</a> 
        </li>
        <li>
          <a href="#">Utilisateurs</a>
          <ul>

           <?php 

            if(isset($_SESSION['login']))
            {
              echo "<li><a href='deconnexion.php'>deconnexion</a></li>" ;
            }  
            else echo  "<li><a href='connexion.php'>connexion</a></li>" ;
            	 echo "<li><a href='inscription.php'>inscription</a></li>";
            ?>
                    
          </ul>
        </li>
        <li>

          <a href="#">profil</a>

          <ul>
          	<?php 

            if(isset($_SESSION['login']))
            {
              echo "<li><a href='profil.php'>modifier mon profil</a></li>" ;
            }  
            else  echo "<li><a href='inscription.php'>inscription</a></li>";
            ?>
            
          </ul>
        </li>
      </ul>


    </header>

		<main>
			<div class="presentation">
				
					<img class="logo" src="ressources/hearthstone-logo.png" alt="logo_hearthstone">
				
				
					<article class="article">
						<h3>DeckStone</h3>
						<p>
						DeckStone - est un site qui vous permettra de créer, de partager, d'échanger avec d'autres utilisateurs vos plus beaux deck qui ce soit pour la course en classé ou vos plus belles victoires en champ de bataille.
						</p>
						<div class="img1">
							<img class="img_stone" src="ressources/Hearthstone-Battlegrounds-Header.jpg" alt="hearthstone">
							<p>Amusez-vous bien !</p>
						</div>
					</article>
				
			</div>

			<div class="slide" id="slider">
  				<figure>
  					<img class="images" src="ressources/b035a92ea474a7652e604730da75683a.jpg" alt="Anduin_Wrynn">
    				<img class="images" src="ressources/HS16_019.jpg" alt="h-s1">
    				<img class="images" src="ressources/218367.jpg" alt="murloc1">
    				<img class="images" src="ressources/e4181c103459da19989fe18eff7b04ea.png" alt="dragon1">
    				<img class="images" src="ressources/e00e3dd65c975054c04281efc1bcdaca.png" alt="demon">
    				<img class="images" src="ressources/e8673a081f091245a50acdee1c597029.jpg" alt="mage">
    				<img class="images" src="ressources/350px-Alexstrasza_full.jpg" alt="dragon2">
    				<img class="images" src="ressources/hspriest.jpg" alt="priest">
    				<img class="images" src="ressources/Galakrond,_the_Apocalypse_(Priest)_full.jpg" alt="gala">
  				</figure>
			</div>

			<div class="containeur-jeux">

				<div class="text-hotel">

					<h2>PRESENTATION</h2>

					<p>Le nom du jeu est inspiré d'un objet, l’Hearthstone (la « Pierre de foyer » en français), issu du MMORPG de Blizzard, <strong>World of Warcraft</strong>.<br>
					Dans la version française de <strong>Hearthstone</strong>, l'aubergiste qui accueille les joueurs dans le jeu est nommé « Pierre Defoyer ».<br>
					Au début d'une partie, le joueur choisit un des dix héros du jeu, issus du jeu Warcraft et un jeu de 30 cartes (un «<strong>deck</strong> »), préalablement créé par le joueur, pour disputer une bataille contre un joueur adverse dans l'un des différents modes de jeu. Les deux adversaires s'affrontent sur un plateau de jeu virtuel, similaire à un jeu de plateau.<br>
					Les <strong>Héros</strong> disposent de <strong>30 points de vie</strong> et d'<strong>un point de mana</strong> (ou 0) au premier tour de jeu, la mana augmentant d'un point par tour jusqu’à atteindre un maximum de 10 points. Les points de mana servent à activer les cartes du deck sur le plateau de jeu, ainsi que le pouvoir héroïque du héros. Le but du jeu est de réduire à zéro les points de vie du héros adverse, par l'utilisation de <strong>serviteurs, de sorts, d'armes</strong> (symbolisés par les cartes du deck du joueur) ou par l'utilisation du <strong>pouvoir héroïque</strong> du héros. Si l'un des héros arrive à 0 point de vie, son icône sur le plateau de jeu explose, et son adversaire remporte la partie et les récompenses associées, le cas échéant.<br>
					</p>
			

					<h2>LES CARTES</h2>

					<p>Chaque carte de Hearthstone a un coût en mana pour être jouée, indiqué en haut à gauche de la carte (icône bleue). Les points de mana disponibles pour le joueur à chaque tour de jeu sont indiqués à la droite du portrait du héros.<br>
					Les cartes comprennent des serviteurs (notés x/x pour dégâts et points de vie), des armes (notés x/x pour dégâts et durabilité) et des sorts (avec le cout en mana uniquement). Toutes les cartes incluent une description de leur effet, et une illustration en couleur (qui peut s'animer, si la carte est dorée).</p>
				

					<h2>Les MODES</h2>

					<p>Il existe plusieurs mode de jeux tel que <strong>Arène, Bras de fer, Champ de Bataille, Duel, ou encore classé</strong>.</p>
				
				</div>

				<div class="image-hotel-text">
				
					<img class="img-hotel-text2" src="ressources/dos-carte-vancarte-hearthstone.jpg" alt="dos_de_carte">
					<img class="img-hotel-text1" src="ressources/1867.jpg" alt="carte_de_jeu">
					<button><a href="#" target="BLANK">CREER UN DECK</a></button>
				</div>

				
			</div>

			


			</div>



			<h2 class="hero_h">Les differentes catégories de deck</h2>
			<div class="img_hero">
				<div class="petit-hero">
					<img class="hero" src="ressources/chaman_medaillon.jpg" alt="hero">
					<p class="hero1">CHAMAN</p>
				</div>
				<div class="petit-hero">
					<img class="hero" src="ressources/chasseur_medaillon.jpg" alt="hero1">
					<p class="hero1">CHASSEUR</p>
				</div>
				<div class="petit-hero">
					<img class="hero" src="ressources/demoniste_medaillon.jpg" alt="hero2">
					<p class="hero1">DEMONISTE</p>
				</div>
				<div class="petit-hero">
					<img class="hero" src="ressources/druide_medaillon.jpg" alt="hero3">
					<p class="hero1">DRUIDE</p>
				</div>
				<div class="petit-hero">
					<img class="hero" src="ressources/guerrier_medaillon.jpg" alt="hero4">
					<p class="hero1">GUERRIER</p>
				</div>
				<div class="petit-hero">
					<img class="hero" src="ressources/mage_medaillon.jpg" alt="hero5">
					<p class="hero1">MAGE</p>
				</div>
				<div class="petit-hero">
					<img class="hero" src="ressources/paladin_medaillon.jpg" alt="hero6">
					<p class="hero1">PALADIN</p>
				</div>
				<div class="petit-hero">
					<img class="hero" src="ressources/pretre_medaillon.jpg" alt="hero7">
					<p class="hero1">PRETRE</p>
				</div>
				<div class="petit-hero">
					<img class="hero" src="ressources/voleur_medaillon.jpg" alt="hero8">
					<p class="hero1">VOLEUR</p>
				</div>
				<div class="petit-hero">
					<img class="hero" src="ressources/chasseur-de-demons_medaillon.jpg" alt="hero9">
					<p class="hero1">CHASSEUR DE DEMON</p>
				</div>
			</div>
			
			


		</main>






<!-- 	<footer>
		<?php if (!isset($_SESSION['login'])) : ?>

    	<li><a href="inscription.php">Inscription</a></li>
    	<li><a href="livre-or.php">Livre d'or</a></li>
   		<li><a href="connexion.php">Connexion</a></li>

		<?php else : ?>

    	<li><a href="profil.php">Profil</a></li>
    	<li><a href="livre-or.php">Livre d'or</a></li>

		<?php endif; ?>

	</footer> -->

</body>
</html>