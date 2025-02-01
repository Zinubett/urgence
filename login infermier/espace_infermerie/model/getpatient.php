<?php

require("connexion.php");
$con=connect_db();



$id_patient=$_POST['id_patient'];

$sql="SELECT * FROM `patient` WHERE `id_patient`='$id_patient' ";

$result=$con->query($sql);

if($result){

$patien=$result->fetch();
echo json_encode($patien);
 }




?>