
<?php
 
  
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$res=false;
$msg=''; 
$connection= mysqli_connect("localhost","root","","transport");

if(isset($_POST['submit'])){
 
   @$nom= $_POST['nom'];
    @$prenom= $_POST['prenom'];
    @$email= $_POST['email'];
	@$prob= $_POST['prob'];

	
@$sql="INSERT INTO `contclient`(`id`, `nom`, `prenom`, `email`, `prob`) VALUES ('','$nom','$prenom','$email','$prob')";
 
$res= mysqli_query($connection,$sql);        
if($res==true){
	$msg= "<script language='javascript'>
							   swal(
									'Success!',
									'Registration Completed!',
									'success'
									);
				  </script>";
}



}
 
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Admin</title> 
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
	<?php include 'navbar_chauffeur.php'; echo @$msg; ?>
	<div class="container">
    <br> <br> <br> <br>  


 
		<h2>Contact  </h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal">
			<div class="form-group <?php echo isset($errors['name']) ? 'has-error' : '';?>">
			  <label for="name" class="control-label col-sm-2">Nom:</label>
			  <div class="col-sm-10">
			    <input type="text" class="form-control" id="name" name="nom"   placeholder="Nom" required>
			    <span class="help-block"><?php echo isset($errors['name']) ? $errors['name'] : '';?></span>
			  </div>
			</div>

            <div class="form-group <?php echo isset($errors['phone']) ? 'has-error' : '';?>">
			  <label for="phone" class="control-label col-sm-2">Prenom:</label>
			  <div class="col-sm-10">
			    <input type="tel" class="form-control" id="phone" name="prenom"   placeholder="Prenom    " required>
			    <span class="help-block"><?php echo isset($errors['phone']) ? $errors['phone'] : '';?></span>
			  </div>
			</div>

			<div class="form-group <?php echo isset($errors['email']) ? 'has-error' : '';?>">
			  <label for="email" class="control-label col-sm-2">Email:</label>
			  <div class="col-sm-10">
			    <input type="email" class="form-control" id="email" name="email"   placeholder=" email" required>
			    <span class="help-block"><?php echo isset($errors['email']) ? $errors['email'] : '';?></span>
			  </div>
			</div>
			
			<div class="form-group <?php echo isset($errors['prob']) ? 'has-error' : '';?>">
			  <label for="email" class="control-label col-sm-2">Probleme:</label>
			  <div class="col-sm-10">
			  <textarea cols="48" rows="5" class="form-control" id="prob" name="prob"   placeholder=" prob" required>
								</textarea>
			  <span class="help-block"><?php echo isset($errors['prob']) ? $errors['prob'] : '';?></span>
			  </div>
			</div>
			
			<div class="form-group">
			  <div class="col-sm-offset-2 col-sm-10">
              <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success">



                  &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                  <a  name="submit" class="btn btn-success" href="index.php"> Retour </a>
                  
                </div>
			  </div>
			</div>
		</form>
	</div>
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
 
</body>
</html>
