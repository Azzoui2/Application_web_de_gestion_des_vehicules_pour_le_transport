<?php   

    if(!isset($_SESSION)) 
    {   
        
        session_start(); require('auth.php');
    } 
    
    $total=0;
    $username= $_GET['id'];
    //echo $username;
    
    $connection= mysqli_connect('localhost','root','','transport');

    $query= "SELECT  reservation.nom, reservation.reser_id, reservation.req_date,reservation.`ret_date`,reservation.`pickup_point`,
     reservation.`destination`, reservation.`veh_reg`, reservation.`chauff_id`,
     voyagecout.total_km,voyagecout.petrol_cout, voyagecout.extra_cout,voyagecout.total_cout,voyagecout.paye
     FROM `reservation` LEFT JOIN `voyagecout` ON reservation.username=voyagecout.username 
     WHERE reservation.username='$username' AND reservation.reser_id=voyagecout.reser_id;";

        $result= mysqli_query($connection,$query);
       //echo $query;

$nom= "SELECT  reservation.nom
FROM `reservation` LEFT JOIN `voyagecout` ON reservation.username=voyagecout.username 
WHERE reservation.username='$username' AND reservation.reser_id=voyagecout.reser_id;";
   

   
    $res= mysqli_query($connection,$nom); 
    $row1= mysqli_fetch_assoc($res);
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facture</title>
    
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
    
<body>


    <?php 
    
    include 'navbar.php'; ?>
    
    <div class="container">
        <div class="row">
            <div class="page-header">
                <br>
                <h1 style="text-align: center;">Facture</h1>
            </div>
        </div>
        <table border="0">
       <tr> <td  colspan="7" style="width: 130%;"> <h3 style="color: cornflowerblue;">
                 <?php       @$row1 =$row1['nom'];
                            echo  "Bonjour $row1" ; ?>
                 </h3></td> 
          <td><form action="#" method="POST">
                <input type="submit" value="Télécharger en PDF"> </form></td>
  
   </tr></table><br>
         
        <table class="table table-striped table-bordered">
                <thead>
                     
                        <th>Réservation Id</th>
                        <th>Date de Demandé </th>
                        <th>  Date de Retour</th>
                        <th>point de départ</th>
                        <th>Destination</th>
                        <th>Vehicle Registration</th>
                        <th>Chauffeur</th>
                        <th>Total Km</th>
                        <th>petrol cout</th>
                        <th>Extra cout</th>
                        <th>Total cout</th>
                        <th>paye</th>
                    </tr>  
                </thead>

                <tbody>
<?php
    while($row=mysqli_fetch_assoc($result)) {
                
?>
                    <tr>  
                        <td><?php echo $row['reser_id']; ?></td>
                        <td><?php echo $row['req_date']; ?></td>
                        <td><?php echo $row['ret_date']; ?></td>
                        <td><?php echo $row['pickup_point']; ?></td>
                        <td><?php echo $row['destination']; ?></td>
                        <td><a href="busprofile.php?busid=<?php echo $row['veh_reg'] ?>"><?php echo $row['veh_reg'] ?></a></td>
                        <td><a href="driverprofile.php?chauff_id=<?php echo $row['chauff_id'] ?>"><?php echo $row['chauff_id'] ?></a></td>
                        
                        <td><?php echo $row['total_km']; ?></td>
                        <td><?php echo $row['petrol_cout']; ?></td>
                        <td><?php echo $row['extra_cout']; ?></td>
                        <td style="background-color: yellow;"><?php echo  $row['total_cout'].'  '.'Dh'; 
                        $total=$row['total_cout']+$total;
                        ?></td>
                        
                       <?php if($row['paye']=='0'){ ?>
                        <td>No</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                    </tr>  
                                      
                </tbody>
<?php } ?>   <tr>
                 <th colspan="10"><h4> <b>Total</b>  </h4> </th>
                <th colspan="2" style="color:red; font-size: larger;" > <b><?php echo $total; ?> DH</b>  </th>
              </tr>
            </table>
        </div>
    </div>

    <?php   
            for($i=0 ; $i<20 ; $i++){
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