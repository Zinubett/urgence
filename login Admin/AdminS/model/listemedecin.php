<?php 
require("connexion.php");




function get_all_medecin()
{

$con=connect_db();

$medecin=array();
$sql="SELECT * FROM `medecin` ";
$result=$con->query($sql);

foreach($result as $ligne){
      $medecin[]=$ligne;

}

return $medecin;

}

?>