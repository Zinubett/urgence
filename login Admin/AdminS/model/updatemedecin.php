<?php

require("connexion.php");
$con=connect_db();



$id_medecin=$_POST['id_medecin'];
$nom=$_POST['nom'];

$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$mp=$_POST['mp'];
$cin=$_POST['cin'];
$grade=$_POST['grade'];

$sql="  UPDATE `medecin` SET `nom`='$nom',`prenom`='$prenom',`mail`='$mail',`mp`='$mp' ,`cin`='$cin',`grade`='$grade' WHERE `id_medecin`='$id_medecin' ; " ;




$result=$con->query($sql);
        if ($result) {
        	echo " medecin a été modifié";

        }
        else echo "erreur";


?>