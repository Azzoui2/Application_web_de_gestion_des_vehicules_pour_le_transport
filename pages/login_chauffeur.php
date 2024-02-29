<?php 
    session_start();
    $connection=mysqli_connect("localhost","root","","transport"); 
    
    $msg="";
    if(isset($_POST['submit'])){
        $email=mysqli_real_escape_string($connection,strtolower($_POST['email']));
        
        $password=mysqli_real_escape_string($connection,$_POST['password']); 
        
        $login_query="SELECT * FROM `chauffeur` WHERE email='$email' and password='$password'";
        
        $login_res=mysqli_query($connection,$login_query);
        $row= mysqli_fetch_assoc($login_res);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['username']=$row['username'];;
            header('Location:chauffeur.php');
        } 
        else{
             $msg= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Unsuccessful!</strong> Login Unsuccessful.
                  </div>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscrire </title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
  </head>
    
<body> 
  <?php include 'navbar.php'; ?>
   
    
    <br>
    <div class="container"> 
     <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6"> 
          <?php echo $msg; ?>
            <div class="page-header">
                <h1 style="text-align: center;">Chauffeur Login</h1>      
          </div> 
            <form class="form-horizontal animated bounce" action="" method="post" style="width:80% ; padding-left: 80px;"> 
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br> 
                
                <div class="input-group">
                  <button type="submit" name="submit" class="btn btn-success">Connexion</button>
                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                  <!-- &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
               &emsp;&emsp;&emsp;&emsp; -->
               <a href="reset_password_ch.php" class="btn btn-link" style="color: red;"><b>Mot de passe oublié ?</b> </a>
               <br> <br> <br>
                </div>

              </form>   
        </div> 
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
    
</body>
</html>