<?php


    $connection=mysqli_connect("localhost","root","","transport");

    session_start(); require('auth.php');
    
    $msg="";
    $id=$_GET['id'];
    
    $query= "SELECT  `username` FROM `reservation` WHERE reser_id='$id'";
    $result= mysqli_query($connection,$query);
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
                <form action="billaction.php?id=<?php echo $id; ?>" method="post">
                    <div class="input-group">
                      <span class="input-group-addon"><b>kilométrage total</b></span>
                      <input id="km" type="text" class="form-control" name="total_km" placeholder="Total Km" required>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>pétrole coûtait (litre)</b></span>
                      <input id="petrol" type="text" class="form-control" name="petrol_cout" placeholder="Total petrol" required>
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>coût supplémentaire</b></span>
                      <input id="extra" type="text" class="form-control" name="extra_cout" placeholder="Extra cout" required>
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Coût total</b></span>
                      <input id="total" type="text" class="form-control" name="total_cout" placeholder="Total cout" required>
                    </div>
                    <br>
                    
                     <input type="hidden" name="username" value="<?php echo $row['username']; ?>" >
                     
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                    
                   
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>