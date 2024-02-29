<?php    session_start();require('auth.php');
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','transport');
   $sql="SELECT * FROM facture WHERE facture_id='$id'";
   $result=mysqli_query($conn,$sql);

   $std=mysqli_fetch_assoc($result);
   
   
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

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
    
    <br><br><br>
	 <?php include 'navbar_admin.php';?>
     
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a class="btn btn-info" href="indexbill.php">Liste de factures</a>
        </div> 
        <div class="col-md-8">
        <h2>Edit facture</h2>
        <hr>

        
        <form action="updatebill.php?id=<?php echo $std['facture_id']; ?>" method="POST">
        
        <div class="form-group">
          <label for="name">ID :</label>
          <input required type="text" class="form-control" name="facture_id" placeholder="id" value="<?php echo $std['facture_id']?>" disabled>
        </div>

        <div class="form-group">
          <label for="Roll">Charge :</label>
          <input required type="text" class="form-control" name="salaire" placeholder="salaire" value="<?php echo $std['salaire']?>">
        </div>

        <div class="form-group">
          <label for="Roll">Date :</label>
          <input required type="date" class="form-control" name="date" placeholder="Date" value="<?php echo $std['date']?>">
        </div>
        
        <div class="form-group">
          <label for="Age">Equipment :</label>
          <input type="text" class="form-control" name="equipment" placeholder="Equipment" value="<?php echo $std['equipment']?>">
        </div>

        <div class="form-group">
          <label for="Address">Commentaire :</label>
          <input type="text" class="form-control" name="Commentaire" placeholder="petrol" value="<?php echo $std['Commentaire']?>">
        </div>

        <div class="form-group">
          <label for="Mobile">Total cout :</label>
          <input type="text" class="form-control" name="tcout" placeholder="Total cout" value="<?php echo $std['tcout']?>">
        </div>

        <button type="submit" class="btn btn-info">Submit</button>
      </form>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 