<?php
require("connexion.php");
$connexion=connect_db();



$id_medecin=$_POST['id_medecin'];


$sql="DELETE FROM `medecin` WHERE `id_medecin`='$id_medecin'";

$result=$connexion->query($sql);

if($result){
	echo "Medecin  a été supprimer !";
}
else echo "Erreur !";
?>