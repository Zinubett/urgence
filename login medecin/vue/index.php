
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Login medecin</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="js/jquery2.0.3.min.js"></script>
    <script>
$(document).ready(function(){

  $("#submit").click(function(){
    var lg=$('#lg').val();
    var mp=$('#mp').val();
    $.post("model/log.php",
    {
      lg: lg,
      mp: mp
    },
    function(data,status){
    	alert(data);
      if (data=="success") {
        $(location).attr("href","espace_medecin/conindex.php");

      }
      else {
          $("#reponse").html("Probleme de connexion");
          $("#reponse").fadeIn("slow");
          $("#lg").val('');
          $("#mp").val('');
      }

    });
  });

      $("#lg").keypress(function(){
      $("#reponse").text('');
      });

});
</script>

	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Login medecin</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="#" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" placeholder="Adresse mail" required="" id="lg"/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Mot de passe" required="" id="mp"/>
					</div>
					
					<div class="bottom">
						<button   class="btn" id="submit">Log In</button>
					</div>
					
				</form>	
			</div>
			<div class="social">
				
			</div>
		</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p>Urgence:  <a href="http://w3layouts.com/" target="_blank">Espace medecin</a></p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>
</html>