function insertinfermerie(){
    var Nom=$("#addnom").val();
    var prenom=$("#addprenom").val();
    var num_cin=$("#addnumcin").val();
    var grade=$("#addgrade").val();
    var mail=$("#addmail").val();
     var mp=$("#addmd").val();
      
   
   
    


    $.post("model/ajouterinfermerie.php",
        {        
         Nom:Nom,
         prenom:prenom,
         num_cin:num_cin,
         grade:grade,
         mail:mail,
         mp:mp
         
         
        
     },
           function(data,status){
            alert(data);
            $("#reponse").html(data);

           }

);
}
function insertmedecin(){
    var Nom=$("#addnom").val();
    var prenom=$("#addprenom").val();
    var num_cin=$("#addnumcin").val();
    var grade=$("#addgrade").val();
    var mail=$("#addmail").val();
     var mp=$("#addmd").val();
      
   
   
    


    $.post("model/ajoutermedecin.php",
        {        
         Nom:Nom,
         prenom:prenom,
         num_cin:num_cin,
         grade:grade,
         mail:mail,
         mp:mp
         
         
        
     },
           function(data,status){
            alert(data);
            $("#reponse").html(data);
      
           }


);
}
function suppinfermerie(id_infermerie){

var conf=confirm("vous etes sure de supprimer cette infermerie... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimerinfermerie.php" ,
        {
           id_infermerie: id_infermerie
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}
function suppmedecin(id_medecin){

var conf=confirm("vous etes sure de supprimer cette medecin... ?");

if (conf==true) {

    //appel ajax
        $.post("model/supprimermedecin.php" ,
        {
           id_medecin: id_medecin
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}


function getinfirmier(id_infermerie){
    $("#id_infirmier_hidden").val(id_infermerie);

$.post("model/getinfirmier.php",
{

  id_infermerie:id_infermerie 
},
 function(data,status)
 {
  var infirmier=JSON.parse(data);
        $("#upnom").val(infirmier.nom);
     $("#upprenom").val(infirmier.prenom);
   
     $("#upgrade").val(infirmier.grade);
    
      $("#upnumcin").val(infirmier.num_cin);
     $("#upmail").val(infirmier.mail);
     $("#upmd").val(infirmier.mp);
 } );
     
$("#modifierinfirmier").modal("show");
}


function modifierinfirmier(){

    var nom = $("#upnom").val();
    var prenom =$("#upprenom").val();
   
    var grade= $("#upgrade").val();
    
    var num_cin= $("#upnumcin").val();
    var mail= $("#upmail").val();
    var mp= $("#upmd").val();

    var id_infermerie= $("#id_infirmier_hidden").val();

    $.post("model/updateinfirmier.php",

       {nom:nom,
        prenom:prenom,
        grade:grade,
        num_cin:num_cin,
        mail:mail,
        mp:mp,
        id_infermerie:id_infermerie



       } ,
       function (data,status){//alert(data);

    location.reload();

}
);
}


function getmedecin(id_medecin){
    $("#id_medecin_hidden").val(id_medecin);

$.post("model/getmedecin.php",
{

  id_medecin:id_medecin 
},
 function(data,status)
 {
  var medecin=JSON.parse(data);
        $("#uppnom").val(medecin.nom);
     $("#uprenom").val(medecin.prenom);
   
     $("#uppgrade").val(medecin.grade);
    
      $("#uppcin").val(medecin.cin);
     $("#uppmail").val(medecin.mail);
     $("#uppmd").val(medecin.mp);
 } );
     
$("#modifiermedecin").modal("show");
}


function modifiermedecin(){

    var nom = $("#uppnom").val();
    var prenom =$("#uprenom").val();
   
    var grade= $("#uppgrade").val();
    
    var cin= $("#uppcin").val();
    var mail= $("#uppmail").val();
    var mp= $("#uppmd").val();

    var id_medecin= $("#id_medecin_hidden").val();

    $.post("model/updatemedecin.php",

       {nom:nom,
        prenom:prenom,
        grade:grade,
        cin:cin,
        mail:mail,
        mp:mp,
        id_medecin:id_medecin



       } ,
       function (data,status){//alert(data);

    location.reload();

}
);
}
