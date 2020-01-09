<!DOCTYPE html>
<html>
<head>
	<title>creation demande</title>
		<meta charset="utf-8">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link id="t-colors" href="color/default.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="odd.css">

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
<form action="insererdemande.php">
	<div id="wrapper">
  <div id="box">
  <div class="header">
	<label>description</label>
	<input type="text" name="description">
	<label>service</label>
	<select name="service">
	<?php 
	include "connexion.php";

	$req=$cnx->query('SELECT idService,nomService FROM service');

	foreach ($req as $value) 
	{
		echo '<option value="'.$value["idService"].'">'.$value["nomService"].'</option>  ';
	}

	 ?>

</select>
<input type="submit" name="">
</form>
<div class="copyright">
                <p><span>&copy;Copyrights 2019</span></p>
</body>
</html>