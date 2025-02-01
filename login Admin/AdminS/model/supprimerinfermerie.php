<?php
require("connexion.php");
$connexion=connect_db();



$id_infermerie=$_POST['id_infermerie'];


$sql="DELETE FROM `infermeri` WHERE `id_infermerie`='$id_infermerie'";

$result=$connexion->query($sql);

if($result){
	echo "infermerie  a été supprimer !";
}
else echo "Erreur !";
?>