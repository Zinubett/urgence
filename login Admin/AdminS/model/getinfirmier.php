<?php

require("connexion.php");
$con=connect_db();



$id_infermerie=$_POST['id_infermerie'];

$sql="SELECT * FROM `infermeri` WHERE `id_infermerie`='$id_infermerie' ";

$result=$con->query($sql);

if($result){

$infermeri=$result->fetch();
echo json_encode($infermeri);
 }




?>