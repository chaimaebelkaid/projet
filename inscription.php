<?php session_start(); ?>



<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<title>Inscription</title>
</head>
<body>
 
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link id="t-colors" href="color/default.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="inscription1.css">

  
  
 
  

</head>

<body>
  
    <!-- start header -->
    <header>
    <input type = "button" class="retour" value = "Retour"  onclick = "history.go(-1)">
    <div class="top">
    <div class="container">
    <div class="row">
    <div class="span6">

        <ul class="topmenu">
               
        </ul>
        </div>
        <div class="span6">

            

        </div>
        </div>
        </div>
        </div>
                  


        <div class="container">


        <div class="row nomargin">

        <div class="span4">

        <div class="logo">

        <h1>  <img src="logoappolo.png" class="logoappolo"></i> Lebontroc</a></h1>
        </div>
        </div>

        <div class="span8">
        <div class="navbar navbar-static-top">
        <div class="navigation">
        <nav>
            <ul class="nav topnav">
            <li class="active">
          <a href="accueil.html">Accueil</a>
            </li>
                   
                    
                        <li><a href="formconnexion.php">Connexion</a></li>
                        <li><a href="inscription.php">Inscription</a></li>
                        <li><a href="services.html">Services</a></li>
                        
                        

                </ul>
                    
                   
        </nav>
        </div>
              <!-- end navigation -->
        </div>
        </div>
        </div>
        </div>
    </header>
    <!-- end header -->

    <!-- section intro -->
    <section id="intro">
     <div id="wrapper">
     <div id="box">
     <div class="header">
       <h4 class="h4">Inscription</h4>
    </div>
    <form action="projet_valid_ins.php">
      <?php 

      if (!empty($_SESSION["er_nom"])) 
      {
        echo $_SESSION["er_nom"];
        unset($_SESSION["er_nom"]);
      }

       ?>

      <h6> Nom </h6>
      <input type="text" name="nom" >
            <?php 

      if (!empty($_SESSION["er_login"])) 
      {
        echo $_SESSION["er_login"];
        unset($_SESSION["er_login"]);
      }

       ?>
      <h6>Login</h6>
      <input type="text" name="login" required="">
            <?php 

      if (!empty($_SESSION["er_mail"])) 
      {
        echo $_SESSION["er_mail"];
        unset($_SESSION["er_mail"]);
      }

       ?>
      <h6>E-mail</h6>
      <input type="text" name="mail" placeholder="prefixe@mondomaine.com" required="">
            <?php 

      if (!empty($_SESSION["er_mdp"])) 
      {
        echo $_SESSION["er_mdp"];
        unset($_SESSION["er_mdp"]);
      }

       ?>
      <h6>Mot de passe</h6>
      <input type="password" name="mot_de_passe" placeholder="****" required="">
     
      
    <input type="submit" class="submit" value="S'inscrire" >
  </form>
    </section>
    <!-- /section intro -->

    


   <footer>
    <div class="container">
    <div class="row">
    <div class="span4">
    <div class="widget">
    <div class="footer_logo">
             
    </div>
    <div class="span4">
    </div>
    <div class="span4">
          
    <div class="clear"></div>
    </div>
    </div>
    </div>
    </div>
    <div id="sub-footer">
    <div class="container">
    <div class="row">
    <div class="span6">
    <div class="copyright">




                <p><span>&copy;Copyrights 2019</span></p>
            <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-circled icon-bglight icon-facebook"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-circled icon-bglight icon-twitter"></i></a></li>
                 <li><a href="https://www.instagram.com/lebontroc/" data-placement="bottom" title="instagram"><i class="icon-circled icon-bglight icon-instagram"></i></a></li>    
            
            </ul>
    </div>

    </div>

 <div class="span6">
               <a href="contact.html" > <input type="button" value="Contact" class="contact"> </a>
            </div>
    </div>
    </div>
    </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>

</html>

</body>
</html>