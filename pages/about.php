<?php 
 session_start();
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
    <link rel="stylesheet" href="style.css"> -->-> 
    <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
  
</head>
     
 
<body onload="myFunction()">
    
    
    <div id="myDiv">
      <?php include 'navbar.php';?>
         
    </div> 
<br> <br> <br>
 
    <center>
      <table>
    
  <?php
$images = array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg");
$interval = 3000; // Temps d'affichage en millisecondes (3 secondes)
?>

 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var images = <?php echo json_encode($images); ?>; // Récupérer les images depuis PHP
            var interval = <?php echo $interval; ?>; // Récupérer l'intervalle depuis PHP
            var currentIndex = 0;
            
            function changeImage() {
                $("#slideshow").attr("src", images[currentIndex]); // Changer la source de l'image
                currentIndex = (currentIndex + 1) % images.length; // Passer à l'image suivante (revenir à 0 à la fin)
                setTimeout(changeImage, interval); // Exécuter la fonction après l'intervalle spécifié
            }
            
            changeImage(); // Démarrer le diaporama
        });

    </script>
 


 <h3 style="color:gold;">Gare----> Hotel Mamounya</h3>
    <img id="slideshow" height="400px" width="600px" src="" alt="Image">

    </table>
    <br> <br> <br>    <br> <br> <br>
  
  <iframe width="660" height="415" src="https://www.youtube.com/embed/G8H-_Zzj2jg" frameborder="0" allowfullscreen></iframe>

 
    </center>

    




   

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>

            <?php   
            for($i=0 ; $i<10 ; $i++){
                echo'<br>';

            }   ?>


<style type="text/css">
            #bombemaralinga{float: left; margin: 5px;}
            #centralenucleaire{float: right; margin: 5px;}
            section{text-align: justify;}
        </style>
     <?php include 'footer.php'; ?>

</body>
</html>
