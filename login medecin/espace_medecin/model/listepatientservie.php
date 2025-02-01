<?php 
require("connexion.php");




function get_all_patient_servie()
{

$con=connect_db();

$patient=array();
$sql="SELECT * FROM `patient` WHERE `etat`=1 ";
$result=$con->query($sql);

foreach($result as $ligne){
      $patient[]=$ligne;

}

return $patient;

}

?>