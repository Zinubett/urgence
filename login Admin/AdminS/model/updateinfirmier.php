<?php

require("connexion.php");
$con=connect_db();



$id_infermerie=$_POST['id_infermerie'];
$nom=$_POST['nom'];

$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$mp=$_POST['mp'];
$num_cin=$_POST['num_cin'];
$grade=$_POST['grade'];

$sql="  UPDATE `infermeri` SET `nom`='$nom',`prenom`='$prenom',`mail`='$mail',`mp`='$mp' ,`num_cin`='$num_cin',`grade`='$grade' WHERE `id_infermerie`='$id_infermerie' ; " ;




$result=$con->query($sql);
        if ($result) {
        	echo " infirmière a été modifié";

        }
        else echo "erreur";


?>