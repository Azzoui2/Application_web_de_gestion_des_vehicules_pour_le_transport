
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
	<?php include 'navbar.php'; echo @$msg; ?>
	<div class="container">
    <br> <br> <br> <br>  


 
	<h2> &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		&#160;&#160;&#160;&#160;&#160;&#160;
		Réinitialisation du mot de passe </h2><br>
	
        <form action="#" method="POST" style="width: 80%; padding-left: 130px;">

		 
        <div class="input-group">
                  <span class="input-group-addon"><b>Nom</b></span>
          <input required type="text" class="form-control" name="nom" placeholder="Nom">
        </div>
        <br>
        <div class="input-group">
                  <span class="input-group-addon"><b>Prenom</b></span>
          <input required type="text" class="form-control" name="prenom" placeholder="Prenom"  >
        </div>
        <br>
        <div class="input-group">
                  <span class="input-group-addon"><b>Email</b></span>
          <input type="text" class="form-control" name="email" placeholder="email ou mobile"  >
        </div>
        <br>
       
		<div class="input-group">
                  <span class="input-group-addon"><b>Commentaire</b></span>
                     <textarea rows="5" id="prob" type="text" class="form-control" name="prob" placeholder="Commentaire ou problemes"> </textarea>
                  
                </div>
        <br>
			
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
