<?php

$lg=$_POST['lg'];
$mp=$_POST['mp'];  



$db=mysqli_connect("localhost","root","","systeme_tri");

$sql="SELECT * FROM `infermeri` WHERE `mail`='$lg' and `mp`='$mp' ; ";

$result=mysqli_query($db,$sql);

$count=mysqli_num_rows($result);

if ($count>0)
{$row =mysqli_fetch_assoc($result);

	echo "success";
	session_start();
	$_SESSION["log"]="1";
	$_SESSION["id_infermerie"]=$row["id_infermerie"];
	$_SESSION["nom"]=$row["nom"];
}
else  echo "le mot de passe ou l'adresse mail incorrect";


?>