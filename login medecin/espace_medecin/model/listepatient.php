<?php 
require("connexion.php");




function get_all_patient()
{

$con=connect_db();

$patient=array();
$sql="SELECT * FROM `patient` WHERE `etat`=0 ORDER BY `degre_gravite` ";
$result=$con->query($sql);

foreach($result as $ligne){
      $patient[]=$ligne;

}

return $patient;

}

?>