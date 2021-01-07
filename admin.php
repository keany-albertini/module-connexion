<!-- Cette page possède un formulaire permettant à l’utilisateur de modifier ses
informations. Ce formulaire est par défaut pré-rempli avec les informations
qui sont actuellement stockées en base de données. -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
	<?php require_once("templates/head.php"); ?>
	<body>
		<?php require_once('templates/header.php'); ?>
		<?php

		require_once('pdo.php');

			if(isset($_SESSION['admin']) && $_SESSION['admin']==true)
			{

    			$db 	   = mysqli_connect('localhost', 'root', '', 'moduleconnexion');
    			$sql 	   = "SELECT * FROM `utilisateurs`";
    			$query 	   = mysqli_query($db, $sql);
    			$resultall = mysqli_fetch_all($query);
    echo "<table>";
    foreach($resultall as $key=>$values){
        echo "<tr>";
        foreach($values as $key=>$value){
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}else{
    header("Location: index.php");
}

?>
		<?php require_once('templates/footer.php'); ?>
	</body>
</html>