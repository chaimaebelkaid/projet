<?php 
session_start();
include "connexion.php";

$idUser=$_SESSION["idUser"];

$req=$cnx->query("SELECT idDeal,idOffreUser1,idOffreUser2,`dateDeal`,`noteUser1`,nomService, nomUser ,photoUser,`nomEtat`,user.idUser, mail  FROM offre,deal,user,service,etat WHERE deal.`idOffreUser1`=offre.idOffre AND offre.idUser=user.idUser AND 
 offre.idService=service.idService AND deal.idEtat=etat.idEtat AND
 idDeal IN((
SELECT idDeal FROM deal,user,offre WHERE (deal.`idOffreUser1`=offre.idOffre AND offre.idUser=user.idUser AND user.idUser=$idUser) OR
(deal.`idOffreUser2`=offre.idOffre AND offre.idUser=user.idUser AND user.idUser=$idUser)ORDER BY idDeal) ) 
AND deal.idEtat IN(1,2) ORDER BY idDeal; ");//on affiche les demandes de notre utilisateur

$res=$req->fetchAll();//on recupere le resultat

$req2=$cnx->query(" SELECT noteUser2,nomService, nomUser, photoUser, user.idUser , mail FROM offre,deal,user,service WHERE
 deal.`idOffreUser2`=offre.idOffre AND offre.idUser=user.idUser AND  offre.idService=service.idService AND 
idDeal IN((SELECT idDeal FROM deal,user,offre WHERE (deal.`idOffreUser1`=offre.idOffre AND offre.idUser=user.idUser AND user.idUser=$idUser) OR
(deal.`idOffreUser2`=offre.idOffre AND offre.idUser=user.idUser AND user.idUser=$idUser)ORDER BY idDeal))AND deal.idEtat IN(1,2)  ORDER BY idDeal");//on affiche les demandes de notre utilisateur

$res2=$req2->fetchAll();//on recupere le resultat

$affichedeal="";

for ($i=0; $i <count($res) ; $i++) { 
  # code...


    $mailUser =$_SESSION["mail"];

    $nomUser =$_SESSION["nomUser"];

    $photoUser =$_SESSION["photoUser"];

    $class="orange";

    

    $lien='<a href="ajout_note.php?id='.$res[$i]["idDeal"].'" class="btn btn-primary">Noter</a>';

    if ($res[$i]["nomEtat"]=="Validé") 
    {
      $class=" #90EE90";

    }



    if ($mailUser==$res[$i]["mail"]) 
    {

          $affichedeal.=  '<div class="card" style="width: 18rem;background-color:'.$class.';margin-left:5%;margin-bottom:10px;">
       <img src="'.$res2[$i]["photoUser"].'" class="card-img-top" style="border-radius:100%;" >
        <div class="card-body">
        <h5 class="card-title">'.$res2[$i]["nomUser"].'</h5>
       <p class="card-text">'.$res2[$i]["nomService"].'</p>
       <p class="card-text">VS</p>
       <p class="card-text">'.$res[$i]["nomService"].'</p>
       <p class="card-text">'.$res[$i]["noteUser1"].' - '.$res2[$i]["noteUser2"].'</p>
       <p class="card-text">'.$res2[$i]["mail"].'</p>
       <p class="card-text">'.$res[$i]["nomEtat"].'</p>
          '.$lien.'
         </div>
      </div>';

    } else
    {
             $affichedeal.=  '<div class="card" style="width: 18rem;background-color:'.$class.';margin-left:5%;margin-bottom:10px;">
       <img src="'.$res[$i]["photoUser"].'" class="card-img-top" style="border-radius:100%;" >
        <div class="card-body">
        <h5 class="card-title">'.$res[$i]["nomUser"].'</h5>
       <p class="card-text">'.$res[$i]["nomService"].'</p>
       <p class="card-text">VS</p>
       <p class="card-text">'.$res2[$i]["nomService"].'</p>
       <p class="card-text">'.$res2[$i]["noteUser2"].' - '.$res[$i]["noteUser1"].'</p>
       <p class="card-text">'.$res[$i]["mail"].'</p>
       <p class="card-text">'.$res[$i]["nomEtat"].'</p>
          '.$lien.'
      </div>
      </div>';

      

    }

    





}




 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>Lebontroc</title>
   <meta charset="utf-8">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link id="t-colors" href="color/default.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="compteconne.css">

</head>
<body>
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
                      <ul class="nav topnav">
          



                      
                        <li class="active"><a href="compte.php">Home</a></li>
                        <li><a href="offre.php">Offres</a></li>
                        <li><a href="demande.php">Demandes</a></li>
                        <li><a href="deals.php">Deals</a></li>
                        <li><a href="deconnexion.php">Deconnexion</a></li>
                        

                      </ul>
                    
                   
    </nav>
    </div>
              <!-- end navigation -->
    </div>
    </div>
    </div>
    </div>
    </header>

       <section >
        <div id="wrapper">
        <div id="box">
    
<h1 class="h1">Mes deals<button type="button" class="btn ">+</button> </h1>
      <?php echo $affichedeal; ?>    
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
                <li><a href="#" data-placement="bottom" title="Instagram"><i class="icon-circled icon-bglight icon-instagram"></i></a></li>
            
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
 
 
 
 </body>
 </html>