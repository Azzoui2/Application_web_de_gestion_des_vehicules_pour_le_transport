<?php 
session_start();require('auth.php');
$id= $_GET['id'];
$conn=mysqli_connect('localhost','root','','transport');
$sql3="SELECT * FROM client WHERE client_id='$id'";
$result3=mysqli_query($conn,$sql3);

$std3=mysqli_fetch_assoc($result3);


?>

<html>
	<head>
		<title>Modifier utilisateur</title>
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
       
        <div style="width: 70%; padding-left: 160px;" class="col-md-8">
        <h2>Modifier Client</h2>
        <hr>

        
        <form action="updateuser.php?id=<?php echo $std3['client_id']; ?>" method="POST">
        
        <div class="input-group">
                  <span class="input-group-addon"><b>ID</b></span>
          <input required type="text" class="form-control" name="client_id" placeholder="id" value="<?php echo $std3['client_id']?>" disabled>
        </div>
        <br>
        <div class="input-group">
                  <span class="input-group-addon"><b>Nom</b></span>
          <input required type="text" class="form-control" name="nom" placeholder="Nom" value="<?php echo $std3['nom']?>">
        </div>
        <br>
        <div class="input-group">
                  <span class="input-group-addon"><b>Prenom</b></span>
          <input required type="text" class="form-control" name="prenom" placeholder="Prenom" value="<?php echo $std3['prenom']?>">
        </div>
        <br>
        <div class="input-group">
                  <span class="input-group-addon"><b>Email</b></span>
          <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $std3['email']?>">
        </div>
        <br>
        <div class="input-group">
                  <span class="input-group-addon"><b>Mobile</b></span>
          <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $std3['mobile']?>">
        </div><br>
        <div class="input-group">
                  <span class="input-group-addon"><b>Password</b></span>
          <input type="text" class="form-control" name="password" placeholder="password" value="<?php echo $std3['password']?>">
        </div>
        <br>
        <div class="input-group">
                  <span class="input-group-addon"><b>Username</b></span>
          <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $std3['username']?>">
        </div>

        <br>

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