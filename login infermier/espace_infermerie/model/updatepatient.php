<?php

require("connexion.php");
$con=connect_db();



$id_patient=$_POST['id_patient'];
$nom=$_POST['nom'];

$prenom=$_POST['prenom'];
$degre_gravite=$_POST['degre_gravite'];


$sql="  UPDATE `patient` SET `nom`='$nom',`prenom`='$prenom',`degre_gravite`='$degre_gravite' WHERE `id_patient`='$id_patient' ; " ;




$result=$con->query($sql);
        if ($result) {
        	echo "patient a été modifié";

        }
        else echo "erreur";


?>