<?php  session_start();require('auth.php');
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','transport');
   $sql="SELECT * FROM facture WHERE facture_id='$id'";
   $result=mysqli_query($conn,$sql);

   $bill=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/wickedpicker.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <!-- <script src="sweetalert2/sweetalert2.min.js"></script> -->
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/wickedpicker.min.js"></script>
   <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" /> <title>Facture</title>

   
    
   <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" /></head>
    
  <body>
    
    <br><br><br>
    
	 <?php include 'navbar_admin.php';?>
     
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a class="btn btn-info" href="indexbill.php">Liste de factures</a>
        </div> 
        <div class="col-md-6">
        <h2>informations de facturation</h2>
        <hr>
          
        <table class="table" >


        <tr>
            <th >Nom:</th>
            <td><?php echo $bill['username']; ?></td>
          </tr>
          <tr>
            <th >Date:</th>
            <td><?php echo $bill['date']; ?></td>
          </tr>
          <tr>
            <th >Frais de service:</th>
            <td><?php echo $bill['salaire']; ?></td>
          </tr>
          <tr>
            <th >Équipement:</th>
            <td><?php echo $bill['equipment']; ?></td>
          </tr>
          <tr>
            <th >Description:</th>
            <td><?php echo $bill['Commentaire']; ?></td>
          </tr>
          <tr>
            <th >Coût total:</th>
            <td><?php echo $bill['tcout']; ?></td>
          </tr>
        </table>  

        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 