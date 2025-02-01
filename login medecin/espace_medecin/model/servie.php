<?php
require("connexion.php");
$connexion=connect_db();



$id_patient=$_POST['id_patient'];


$sql="UPDATE `patient` SET `etat`='1' WHERE `id_patient`='$id_patient'";

$result=$connexion->query($sql);

if($result){
	echo "Patient  a été servie !";
}
else echo "Erreur !";
?>