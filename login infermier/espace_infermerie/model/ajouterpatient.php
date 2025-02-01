<?php

   require("connexion.php");
    $connexion=connect_db();
         

               $Nom=$_POST['Nom'];
               $prenom=$_POST['prenom'];
               $degre_gravite=$_POST['degre_gravite'];
               
               
              

                    
$sql="INSERT INTO `patient`(`id_patient`, `nom`, `prenom`, `degre_gravite`)  VALUES (NULL,'$Nom','$prenom','$degre_gravite') ;";

                      $resultat=$connexion ->query($sql);

                      if($resultat){
                        echo"Patient ajouter";

                      }
                      else echo "erreur ";



                      ?>