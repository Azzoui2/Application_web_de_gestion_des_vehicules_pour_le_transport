<?php   session_start();
    $connection=mysqli_connect("localhost","root","","transport");

   

   
      
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Transport</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->
    
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>
     
<style>
    
.parallax {
    /* The image used */
    background-image: url("index_image/photo3.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("index_image/photo9.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }
    

</style>

<style type="text/css">
            #bombemaralinga{float: left; margin: 5px;}
            #centralenucleaire{float: right; margin: 5px;}
            section{text-align: justify;}
        </style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   
   
 
       
    
     
     
     
    <!--
    <div>  
       <div class="jumbotron">
          <h2 class="animated bounce">Ruet Vehicle Management</h2>      
          <p>A management system where you can easily manage vehicles.</p>
        </div>
           
       
        
    </div> 
    -->
    <div class="parallax foo">
       <?php include 'navbar.php';?>
    
       <div class="hero-text" style="font-size:50px; text-align:center; position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); color:white;">

           
            <h1 style="background-color:#87CEFA;" class="animated rubberBand" >Système de réservation de véhicules Kech_trans</h1>
          
            
            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="booking.php">Réserver un véhicule</a>
            
            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Connectez-vous pour réserver un véhicule</a> 
            <?php } ?>
            
          </div>
    </div>                 
    
    <div>
       <br><br>
        <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Vehicle</h1>      
          </div> 
          <div class="row">
              <div class="col-md-6 foo">
                <p><b>Toutes les vehicle sont équipées de GPS .</b></p>
                <img src="index_image/photo5.png" class="img-responsive" alt="photo tx" >  
              </div>
              <div class="col-md-6">
                  <br>
                   <iframe src="https://www.google.com/maps/d/embed?mid=1-J-rBNZPsTYT4kx-CvBWlLkXQp4&hl=fr&ie=UTF8&msa=0&ll=31.628537000000012%2C-7.989850000000004&spn=0.016443%2C0.02399&z=15&output=embed" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p></p>
              </div>
          </div>       
        </div>
        
        <br>
        <div class="page-header">
            <h1 style="text-align: center">Cheufaur</h1>      
        </div>
        <div class="parallax1"></div>
        <div id="driver" class="container">
          
          <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 20px;">Les chauffeurs de Kech-tranport sont très ponctuels et ils offrent un excellent 
                  service. Chacun d'entre eux est professionnel et excellent dans son travail</p>
                  
              </div>
          </div>
               
        </div>
        
        
        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Bus </h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                
                <img src="index_image/photo13.png" class="img-responsive" >  
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:20px;"><b>Dans Kech-tranport, nous avons plusieurs bus et chacun d'entre
                     eux est bien entretenu.   et peuvent également être Réserver.</b></p>
              </div>
              
          </div>       
        </div>
        
        
          
          <p></p>      
                
        </div>  
        

<!--  importer la page footer.php -->
      
<footer style="background-color: #2f2f29;
          color: #fff;  " class="container-fluid">
          <table> <tr><td style="width:18%;">
  <div class="social-icons d-inline-block text-left">
    <a href="https://www.facebook.com/mohammad.elazzaoui/" target="_blank" ""><img src="index_image/logo-social/facebook.png "width="20" ><FONT size="1 ">Facebook </FONT>   </a><br>
    <a href="https://www.instagram.com/luxury_transportations/" target="_blank" ><img src="index_image/logo-social/instagram.png"width="20"  ><FONT size="1 ">Instagram </FONT>   </i></a><br>
    <a href="https://twitter.com/"><i class="fa fa-twitter" target="_blank"> <img src="index_image/logo-social/twitter.png "width="20"  ><FONT size="1 ">Twitter </FONT>  </i></a><br>
    <a href="https://www.youtube.com/" target="_blank"><img src="index_image/logo-social/youtube.png" width="20"  ><FONT size="1 ">Youtube </FONT>   </a><br>
  </div></td>


  <td style="width:18%;"><div class="social-icons d-inline-block text-left">
    <a href="https://wa.me/+212628128191" target="_blank"><img src="index_image/logo-social/whatsapp.png"width="20"  > <FONT size="1 ">WhatsApp </FONT>   <i class="fa fa-facebook"></i></a><br>
    <a href=""><img src="index_image/logo-social/telephone.png"width="20"  ><FONT size="1 ">+212 628128191 </FONT>  <i class="fa fa-instagram"></i></a><br>
    <a href="https://maps.google.com" target="_blank"><i class="fa fa-twitter"> <img src="index_image/logo-social/icons.png" width="20" ><FONT size="1 ">Google Maps </FONT>  </i></a><br>
    <a href="contact.php"><img  height="20px" src="index_image/logo-social/contact.png"width="20"  ><FONT size="1 ">Contact </FONT>  <i class="fa fa-globe"></i></a><br>
  </div></td>
  <td style="width:80%;">
 

<figure id="bombemaralinga">
            <img src="index_image/logo2.ico" alt="Kech-transport" width="100" height="100"/>
        </figure>
       
        <section>
            <p class="paragraphe" ><FONT size="1 ">
            <b> Kech-traspot </b>   
            Kech-transport est une application web de gestion des véhicules pour le transport de touristes à Marrakech, 
            au Maroc. Cette application permet aux entreprises de location de voitures et de transport touristique de 
            gérer facilement leur flotte de véhicules, les réservations et les factures. Elle offre également une
             interface pour les chaufeurs de véhicules afin de gérer leur emploi du temps et leurs itinéraires de
              voyage. Les touristes peuvent également utiliser l'application pour réserver des véhicules et suivre 
              en temps réel l'arrivée de leur transport. Kech-transport est un outil efficace pour assurer la
               sécurité et la fiabilité du transport touristique à Marrakech.
          </FONT></p>
        </section>






        

</td>
  </tr>
  </table> 
  <center><p class="text-light mt-3 mb-0">
   &copy; 2023 Tous droits réservés
 </p></center>
  
</footer>


    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>

    <?php    //deconnexion
      if(isset($_GET['logout']))
      {
          // unset($_SESSION['auth']);
          // unset($_SESSION['error']);
          // session_destroy();
          // header("Location: index.php");
      }?>
    
</body>
</html>