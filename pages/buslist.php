<?php  
    $connection = mysqli_connect("localhost", "root", "", "transport");

    session_start();
    // require('auth.php');
    $sql = "SELECT * FROM `vehicle`";
    $res = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des véhicules</title>
  
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

    <style type="text/css">
            #bombemaralinga{float: left; margin: 5px;}
            #centralenucleaire{float: right; margin: 5px;}
            section{text-align: justify;}
        </style>
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>
    

<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   

   <div id="myDiv">

   <?php include 'navbar.php'; ?>
   <br><br><br>
   <div class="container">
      <?php
        if(mysqli_num_rows($res) > 0){ ?>

      <div class="container">
         <div class="row">

             <div >
             <div class="panel panel-primary">
                    <h3 style="text-align: center;" class="panel-heading" class="bg-primary text-white">Liste des véhicules</h3>
                  </div>
                  <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        
                 <?php

                   // accès admin
                   $connection = mysqli_connect("localhost", "root", "", "transport");
                   $sql2 = "SELECT `username` FROM `admin`";
                   $res2 = mysqli_query($connection, $sql2);
                   $row2 = mysqli_fetch_assoc($res2);

                      if (@$_SESSION['username'] == "admin"){

                echo '      ';
                      }

                      // accès utilisateur
                      $connection = mysqli_connect("localhost", "root", "", "transport");
                     $sql1 = "SELECT `username` FROM `client`";
                     $res1 = mysqli_query($connection, $sql1);
                     $row1 = mysqli_fetch_assoc($res1);

                     while($row1 = mysqli_fetch_assoc($res1)) {
                        if (@$_SESSION['username'] == $row1["username"]){

                  echo '    
                  ';
                      }
                     }
                  ?>


                        </tr>
                    </thead>

                    <?php
                    $count = 0;
                    while($row = mysqli_fetch_assoc($res)) {
                        if ($count % 3 == 0) {
                            echo '<tr>';
                        }
                        ?>
                        <td style="width: 20%;"><B><img height="120px" width="170px" src="index_image/<?php echo $row["veh_photo"]; ?>" alt="Photo véhicule"></B>
                          <B>
                            <p>Prix :<span style="color: red; font-size: 14px; background-color:yellow;"><?php echo $row["prix"].' DH';?></span></p> 
                          <B><?php ?><a href="busprofile.php?busid=<?php echo $row["veh_id"]; ?>"> 
                         <!-- <img height="60" src="index_image/clic.png">--> Description</a></B> <br>
                       
                        <?php
                          
                        $connection = mysqli_connect("localhost", "root", "", "transport");
                        $sql1 = "SELECT `username` FROM `client`";
                        $res1 = mysqli_query($connection, $sql1);
                        $row1 = mysqli_fetch_assoc($res1);

                        while($row1 = mysqli_fetch_assoc($res1)) {
                            if (@$_SESSION['username'] == $row1["username"]){?>
                                <B><a href="booking.php?id=<?php echo $row["veh_id"]; ?>"> Reservation</a></B>
                           <?php }
                        }

                        if (@$_SESSION['username'] == "admin"){

                            $connection = mysqli_connect("localhost", "root", "", "transport");
                            $sql3 = "SELECT `veh_id` FROM `vehicle`";
                            $res3 = mysqli_query($connection, $sql3);
                            $row3 = mysqli_fetch_assoc($res3);

                        ?><B style="background-color:  ;"><a href="booking.php?id=<?php echo $row["veh_id"]; ?>">Reservation </a></B> <br>
                           <?php echo ' 
                                   <button href="update.php?veh_id=' . $row3['veh_id'] . '" class="m-2">  <img src="index_image/logo-social/edit1.gif" width="27px"></button>

                                   <button onclick="if(confirm(\'Êtes-vous sûr de vouloir supprimer ?\')){ location.href=\'deletebus.php?veh_id=' . $row3['veh_id'] . '\'; }"><img src="index_image/logo-social/delete.png"  width="27px"> </button>
                              </td>  ';
                        }

                        $count++;
                        if ($count % 3 == 0) {
                            echo '</tr>';
                        }
                    }}
                    ?>
                    </tbody>
                </table>
             </div>
             <div class="col-md-3"></div>
         </div>

      </div>
   </div>
    </div>

    <?php
for ($i = 0; $i <10; $i++) {
    echo "<br>";
}
?>


  <!-- <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script> -->



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
    


</body>
</html>

