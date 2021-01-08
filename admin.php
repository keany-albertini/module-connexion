<!-- Cette page possède un formulaire permettant à l’utilisateur de modifier ses
informations. Ce formulaire est par défaut pré-rempli avec les informations
qui sont actuellement stockées en base de données. -->
<?php 
session_start();
$title = "admin";
 ?>
<!DOCTYPE html>
<html lang="fr">
	<?php require_once("templates/head.php"); ?>
	<body>
		<?php require_once('templates/header.php'); ?>
		<?php

		require_once('pdo.php');

			//  ajouter "status" dans la base de donnée sous forme de "0" et "1" si une personne a le status 1 alors elle a acces a la page (admin.php)

			if(isset($_SESSION['status']) && $_SESSION['status'] == '1')
			{

    			$db 	   = mysqli_connect('localhost', 'root', '', 'moduleconnexion');
    			$sql 	   = "SELECT * FROM `utilisateurs`";
    			$query 	   = mysqli_query($db, $sql);
    			$resultall = mysqli_fetch_all($query);
    			echo "<table>
    						<tr>
    							<td>id</td>
    							<td>login</td>
    							<td>prenom</td>
    							<td>nom</td>
    							<td>password</td>
    							<td>status</td>

    						</tr>";

    			foreach($resultall as $key=>$values)
    			{
        			echo "<tr>";
        			foreach($values as $key=>$value)
        			{
            			echo "<td>".$value."</td>";
        			}
        			echo "</tr>";
   				}
   				echo "</table>";
			}else
			{
				$_SESSION['error'] = "vous devez etre admin pour acceder a cette page";
    			header("Location: index.php");
			}

?>
		<?php require_once('templates/footer.php'); ?>
	</body>
</html>