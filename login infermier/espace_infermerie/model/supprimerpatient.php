<?php
require("connexion.php");
$connexion=connect_db();



$id_patient=$_POST['id_patient'];


$sql="DELETE FROM `patient` WHERE `id_patient`='$id_patient'";

$result=$connexion->query($sql);

if($result){
	echo "Patient  a été supprimer !";
}
else echo "Erreur !";
?>