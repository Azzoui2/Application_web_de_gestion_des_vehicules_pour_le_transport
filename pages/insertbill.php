<?php   session_start();
   require('auth.php');
   $conn=mysqli_connect('localhost','root','','transport');
   $sql="SELECT * FROM facture ";
   $result=mysqli_query($conn,$sql);
  
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Insert</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/wickedpicker.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/wickedpicker.min.js"></script>
   <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
     
  </head>
    
  <body>
  <?php include 'navbar_admin.php';?> 
    <br><br><br>
     
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a class="btn btn-info" href="indexbill.php">Liste de factures</a>
        </div> 
        <div class="col-md-8 animated flash">
        <h2>Facturation</h2>
        <hr>

        <form action="storebill.php" method="POST">
          
        
        <div class="input-group">
        <span class="input-group-addon"><b>Nom :</b></span>
       
          <input required type="text" class="form-control" name="nom" placeholder="nom" require>
        </div> <br>

        <div class="input-group">
        <span class="input-group-addon"><b>Date :</b></span>
          
          <input required type="date" class="form-control" name="date" placeholder="date" require>
        </div><br>

        <div class="input-group">
        <span class="input-group-addon"><b>Service Charge :</b></span>
           
          <input required type="text" class="form-control" name="salaire" placeholder="Service Charge" require>
        </div><br>
        
        <div class="input-group">
        <span class="input-group-addon"><b>Equipment</b></span require>
          
          <input type="text" class="form-control" name="equipment" placeholder="Equipment">
        </div><br>

        <div class="input-group">
        <span class="input-group-addon"><b>Description</b></span>
          <textarea rows=5 class="form-control" name="Commentaire" placeholder="Description ....."></textarea>
        </div><br>

        <div class="input-group">
        <span class="input-group-addon"><b>Total cout :</b></span>
          <input type="text" class="form-control" name="tcout" placeholder="Total cout" require>
        </div><br>
        <input type="submit" class="btn btn-info">
      </form>
        
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
  </body>
</html> 