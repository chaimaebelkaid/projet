<!DOCTYPE html>
<html>

<head>
	<title>creation offre</title>
	<meta charset="utf-8">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link id="t-colors" href="color/default.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="connexion.css">

</head>
<body>
	<div id="bloc_page">
        
         
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
          <h1> <img src="logoappolo.png" class="logoappolo"></i> Lebontroc</a></h1>
          </div>
          </div>
          <div class="span8">
          <div class="navbar navbar-static-top">
          <div class="navigation">
          <nav>
         
                    
                   
          </nav>
             </div>
              <!-- end navigation -->
             </div>
             </div>
             </div>
             </div>
    </header>

	<!-- on creer un formulaire de creation doffre-->
<form action="insereroffre.php">
	 <div id="wrapper">
  <div id="box">
  <div class="header">
	<label>Description</label>
	<!-- on creer un champs description-->
	<input type="text" name="description">
	<!-- on creer une lise deroulante service-->
	<label>Service</label>
	<select name="service">
	<?php 
	// on se connecte a la bdd
	include "connexion.php";
	// on recupere tout les services
	$req=$cnx->query('SELECT idService,nomService FROM service');
	// on creer notre liste deroulante avec 
	foreach ($req as $value) 
	{
		echo '<option value="'.$value["idService"].'">'.$value["nomService"].'</option>  ';
	}

	 ?>

</select>

<!-- on creer un boutto de confirmation-->
</br>
<input type="submit" name="">
</form>
</body>
</html>