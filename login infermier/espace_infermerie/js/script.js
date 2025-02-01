function supppatient(id_patient){

var conf=confirm("vous etes sure de supprimer ce patient ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimerpatient.php" ,
        {
           id_patient: id_patient
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}





function insertpatient(){
    var Nom=$("#addnom").val();
    var prenom=$("#addprenom").val();
    var degre_gravite=$("#addgravite").val();
   
   
    


    $.post("model/ajouterpatient.php",
        {        
         Nom:Nom,
         prenom:prenom,
         degre_gravite:degre_gravite
         
        
     },
           function(data,status){
            alert(data);
            $("#reponse").html(data);

           }

);
}




function getpatient(id_patient){
    $("#id_patient_hidden").val(id_patient);

$.post("model/getpatient.php",
{

  id_patient:id_patient
},
 function(data,status)
 { 
  var patient=JSON.parse(data);
        $("#upnom").val(patient.nom);
     $("#upprenom").val(patient.prenom);
   
     $("#updescription").val(patient.description);
    
      $("#upgravite").val(patient.degre_gravite);

 } );

     
$("#modifierpatient").modal("show");
}

function modifierpatient(){

    var nom = $("#upnom").val();
    var prenom =$("#upprenom").val();
   
    var degre_gravite= $("#upgravite").val();
    
   


    var id_patient= $("#id_patient_hidden").val();

    $.post("model/updatepatient.php",

       {nom:nom,
        prenom:prenom,
        degre_gravite:degre_gravite,
        id_patient:id_patient



       } ,
       function (data,status){alert(data);

    location.reload();

}
);
}
