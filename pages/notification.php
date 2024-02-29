<?php  session_start();

require('auth.php');
    

    $connection=mysqli_connect("localhost","root","","transport");
 
	$user=$_SESSION['username'];
	$requete="select * from reservation WHERE username='$user' ";
	$resultat=$connection->query($requete);
	$res=$resultat;

  

?>


<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title> notification</title>   
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
    <style>
        .message {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        .message p {
            margin: 0;
            padding: 0;
        }

        .accepted {
            color: green;
        }

        .rejected {
            color: blue;
        }

        .in-progress {
            color: orange;
        }
    </style>
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>
    


<body>


<?php include 'navbar.php';?>  
<br> <br> <br><br>


<div style="width: 80%; padding-left: 140px;">
<!-- <?php
    // Vérifier si le bouton a été cliqué
    // if (isset($_POST['bouton'])) {
    //     // Afficher le message
    //     echo "Le bouton a été cliqué !";
    // }
    ?>

    <form method="post">
        <input type="submit" name="bouton" value="Notivication 1">
    </form> -->

   <?php $i=0;
     foreach($res as $resco){
            if( $resco['confirmation']==0 ){?>
                <div class="message"> <span style="color: red; background-color: yellow; font-size: 16px;"> <?php echo $i+1 ?></span>
                <B>Votre réservation numéro <?php  echo $resco['reser_id']?> de  
                 <?php echo $resco['pickup_point']?>  à <?php echo $resco['destination']?>  
                        
                 pour la date  <?php echo $resco['req_date']?> à <?php if($resco['req_time']=='') {
                    $resco['req_time']='00:00';

                 }echo $resco['req_time']?>
                est en cours d'exécution.</b> <br>
                <b class="in-progress">Statut : En cours</B>
            </div>

           <?php }
               if( $resco['confirmation']==1 & $resco['paye']==1 & $resco['finished']==0 ){?>
                <div class="message">
                <B>Votre réservation numéro <?php echo $resco['reser_id']?> de  
                 <?php echo $resco['pickup_point']?>  à <?php echo $resco['destination']?>  
                        
                 pour la date  <?php echo $resco['req_date']?> à <?php if($resco['req_time']=='') {
                    $resco['req_time']='00:00';

                 }echo $resco['req_time']?> 
                 a été acceptée.</b> <br>
                 <button class="bouton-blue"> envoyer </button>
                 Veuillez envoyer le paiement de ?? euros vers ce compte ?? et spécifier l'identifiant de réservation 
               <br> <b class="accepted"> Statut : acceptée</B>
            </div>

           <?php }
              
             if( $resco['confirmation']==1 & $resco['paye']==1 & $resco['finished']==1  ){?>
              <div class="message"><span style="color: red; background-color: yellow; font-size: 16px;"> <?php echo $i+1 ?></span>
              <B>Votre réservation numéro <?php $i++; echo $resco['reser_id'];?> de  
               <?php echo $resco['pickup_point']?>  à <?php echo $resco['destination']?>  
                      
               pour la date  <?php echo $resco['req_date']?> à <?php if($resco['req_time']=='') {
                  $resco['req_time']='00:00';  }echo $resco['req_time']?> 
               est terminée.</b> 
                <br> <b class="rejected"> Statut : terminée.</B>
          </div>

         <?php }
         
        $_SESSION['i']=$i;}
                
            ?>
            
    

     


        </div>













	  
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        
</script>
<?php   
            for($i=0 ; $i<100 ; $i++){
                echo'<br>';

            }   ?>


<style type="text/css">
            #bombemaralinga{float: left; margin: 5px;}
            #centralenucleaire{float: right; margin: 5px;}
            section{text-align: justify;}
        </style>
     <?php include 'footer.php'; ?>
    
    
    
    </div>







</body>  

</html>