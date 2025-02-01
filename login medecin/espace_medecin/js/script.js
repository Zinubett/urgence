function serviepatient(id_patient){

var conf=confirm("vous êtes sure de servie ce patient  ... ?");

if (conf==true) {

    //appel ajax
        $.post("model/servie.php" ,
        {
           id_patient:id_patient
        },

        function (data,status)
        {
            location.reload(); //recherger la page 
        }

        );

}

}