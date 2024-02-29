 

<?php  
	
    $connection=mysqli_connect("localhost","root","","transport");

    session_start();require('auth.php');
	$user=$_SESSION['username'];
	$sql="select * from client where username='$user'";
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

?>
 
 
<html>
	<head>
		<title>Mes informations</title>
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
		<?php include('navbar.php') ?>
		<br> 
		<div class="container">
        <div class="row">
             
            <div class="col-md-12">
                <div class="page-header">
                    <h1 style="text-align: center;">Mes informations</h1></div>
				 
<center>
				 
                <table id="tableau" style="width: 60%;" id="myTable"  class="table table-striped table-bordered table-hover table-responsive">
  
						<tr>
							<th>Numero client </th> <td><?php echo $row['client_id'] ?></td>  </tr>
                            <tr><th>Nom</th> 	<td><?php echo $row['nom'] ?></td></tr>
                            <tr><th>Prenom</th>	<td><?php echo $row['prenom'] ?></td></tr>
                            <tr><th>Email</th>	<td><?php echo $row['email'] ?></td></tr>
                            <tr><th>Mobile</th>	<td><?php echo $row['mobile'] ?></td></tr>

						 
							
					  
							 </tr>
					 
					</table></center>
				</div>
			</div>
		 
			
		</div>

	 
	</body>

</html>