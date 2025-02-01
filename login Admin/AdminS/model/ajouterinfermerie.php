<?php

   require("connexion.php");
    $connexion=connect_db();
         

               $Nom=$_POST['Nom'];
               $prenom=$_POST['prenom'];
               $mail=$_POST['mail'];
               $mp=$_POST['mp'];
               $num_cin=$_POST['num_cin'];
               $grade=$_POST['grade'];
               
               
              

                    
$sql="INSERT INTO `infermeri`(`id_infermerie`, `nom`, `prenom`, `mail`, `mp`, `num_cin`, `grade`) VALUES (NULL,'$Nom','$prenom','$mail','$mp','$num_cin','$grade') ;";

                      $resultat=$connexion ->query($sql);

                      if($resultat){
                        echo"Infermerie ajouter";

                      }
                      else echo "erreur ";



                      ?>