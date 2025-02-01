<?php 
require("connexion.php");




function get_all_infermerie()
{

$con=connect_db();

$infermerie=array();
$sql="SELECT * FROM `infermeri` ";
$result=$con->query($sql);

foreach($result as $ligne){
      $infermerie[]=$ligne;

}

return $infermerie;

}

?>