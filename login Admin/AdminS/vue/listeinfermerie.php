<?php
  session_start()  ;
   if (!empty ($_SESSION["log"])) {



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
 <script type="text/javascript" src="js/script.js"></script>
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>Urgen<span>CE</span></b></a>
      <!--logo end-->
      
       <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../index.php">Logout</a></li>
        </ul>
      </div>
     
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION["nom"]; ?></h5>
          <li class="mt">
            <li class="mt">
            <a class="active" href="conacceuil.php">
              <i class="fa fa-dashboard"></i>
              <span>Acceuil</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Gestion d'infirmière</span>
              </a>
            <ul class="sub">
              <li><a href="conajoutinfermerie.php">Ajouter</a></li>
              <li><a href="conlisteinfermerie.php">Consulter</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Gestion de medecin</span>
              </a>
            <ul class="sub">
              <li><a href="conajoutermedecin.php">Ajouter</a></li>
              <li><a href="conlistemedecin.php">Consulter</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
           <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Liste des infermiers</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Nom</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Prénom</th>
                    <th><i class="fa fa-bookmark"></i> Grade</th>
                    <th><i class=" fa fa-edit"></i> Num de cin</th>
                    <th><i class=" fa fa-edit"></i>Email</th>
                    <th><i class=" fa fa-edit"></i> Mot de passe</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                 
                  <?php foreach ($infermerie as $me)  :     ?>
          <tr data-expanded="true">
            
            <td><?php echo  $me['nom'] ;  ?></td>
            <td><?php echo  $me['prenom'] ;  ?></td>
            <td><?php echo  $me['grade'] ;  ?></td>
            <td><?php echo  $me['num_cin'] ;  ?></td>
            <td><?php echo  $me['mail'] ;  ?></td>
            <td><?php echo  $me['mp'] ;  ?></td>
           
            
            
           
        
                  
                    
                    <td>
                      
                      <button class="btn btn-primary btn-xs" onclick="getinfirmier(<?php echo  $me['id_infermerie'] ;  ?>)">Modifier</button>
                      <button class="btn btn-danger btn-xs" onclick="suppinfermerie(<?php echo  $me['id_infermerie'] ;  ?>)">Supprimer</button>
                    </td>
                  </tr>
                  <?php  endforeach ;    ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
         
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
         
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          Zainab Abdelkader
        </p>
        <div class="credits">
          Systeme de tri
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>


    <!--modal modofier infirmièr-->
  <div class="modal fade" id="modifierinfirmier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Infirmière</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="cmxform form-horizontal style-form" >
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Nom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="upnom" name="firstname" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Prénom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="upprenom" name="lastname" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Grade</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="upgrade" name="lastname" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Numero de cin</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="upnumcin" name="username" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="upmail" name="email" type="email" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Mot de passe</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="upmd" name="password" type="password" />
                    </div>
                  </div>
                  
                  
               
                     <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <input type="hidden" id="id_infirmier_hidden">  
                                            <button class="btn btn-primary" type="button" onclick="modifierinfirmier()">enregister modification</button>
                                            <button class="btn btn-default" type="button">Cancel</button>
                                        </div>
                                    </div>
                </form>
      </div>
     
    </div>
  </div>
</div>

</body>

</html>
<?php
   }

   else {
      header('Location: index.php');
  
    }



?>