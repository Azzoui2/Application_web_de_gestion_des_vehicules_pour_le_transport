<?php

    $connection=mysqli_connect("localhost","root","","transport");

    session_start();
    
    $msg="";
    $id=$_GET['id'];
    
    $query= "SELECT * FROM `voyagecout` WHERE reser_id='$id'";
   // $query1="UPDATE `reservation` SET `paye`='1' WHERE reser_id='$id'";
   
    //echo $query;
    $result= mysqli_query($connection,$query);
   // $result1= mysqli_query($connection,$query1);
    $row= mysqli_fetch_assoc($result);

    //echo $row['username'];
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
    <link rel="stylesheet" href="style.css"> -->->
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>
    
<body>
    <div class="container">
        <?php include 'navbar_admin.php'; ?>
        <br><br>
        
        <div class="row">
           <div class="page-header">
            <h1 style="text-align: center;">Détails du voyage</h1>
            <?php echo $msg; ?>
           
           
      
          </div> 
            <div class="col-md-3"></div>
            <div class="col-md-6">
                  <p><strong>Id de réservation: </strong><?php echo @$row['reser_id']; ?></p>    
                  <p><strong>Kilométrage total: </strong><?php echo @$row['total_km']; ?></p>    
                  <p><strong>Coût du pétrole: </strong><?php echo @$row['petrol_cout']; ?></p>    
                  <p><strong>Coût supplémentaire: </strong><?php echo @$row['extra_cout']; ?></p>    
                  <p><strong>Coût total: </strong><?php echo @$row['total_cout']; ?></p>
                  
                <form action="confirmpaymentaction.php?id=<?php echo @$row['reser_id']; ?>" method="post">
                    <button class="btn btn-success">Confirmer le paiement</button>
                </form> 
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>