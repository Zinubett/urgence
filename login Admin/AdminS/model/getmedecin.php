<?php

require("connexion.php");
$con=connect_db();



$id_medecin=$_POST['id_medecin'];

$sql="SELECT * FROM `medecin` WHERE `id_medecin`='$id_medecin' ";

$result=$con->query($sql);

if($result){

$medecin=$result->fetch();
echo json_encode($medecin);
 }




?>