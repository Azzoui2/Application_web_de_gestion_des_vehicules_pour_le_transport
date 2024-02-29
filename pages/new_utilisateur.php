<?php 

session_start();  require('auth.php');
    $connection=mysqli_connect("localhost","root","","transport");

    
    $msg="";
    
    if(isset($_POST['submit'])){
        $firstname= mysqli_real_escape_string($connection,strtolower($_POST['firstname']));
        $lastname= mysqli_real_escape_string($connection,strtolower($_POST['lastname']));
        $email= mysqli_real_escape_string($connection,strtolower($_POST['email']));
        $username= mysqli_real_escape_string($connection,strtolower($_POST['username']));
        $password= mysqli_real_escape_string($connection,strtolower($_POST['password']));
          $mobile= mysqli_real_escape_string($connection,strtolower($_POST['mobile']));  
        
        
        $signup_query= "INSERT INTO `client`(`client_id`, `Nom`, `prenom`, `email`, `username`, `password`, `mobile`) VALUES ('','$firstname','$lastname','$email','$username','$password','$mobile')"; 
        
        $check_query= "SELECT * FROM `client` WHERE username='$username' or email='$email'";
        
        $check_res=mysqli_query($connection,$check_query);
        
        if(mysqli_num_rows($check_res)>0){
             $msg= '<div class="alert alert-warning" style="margin-top:30px";>
                      <strong>Failed!</strong> Username ou Email existe déjà.
                      </div>';
            
        }
        
        else{
            $signup_res= mysqli_query($connection,$signup_query); 
                 $msg= '<div class="alert alert-success" style="margin-top:30px";>
                      <strong>Success!</strong> inscription réussi.
                      </div>';
            
        }
        
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscrire</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="swal/sweetalert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="swal/sweetalert.js"></script>
     <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->-> 
    <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
 
</head>
    
<body data-spy="scroll" data-target=".navbar" data-offset="50"> 
    <?php include 'navbar_admin.php';?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php echo $msg; ?>
                <div class="page-header">
                    <h1 style="text-align: center;">Ajouter Client</h1>
                </div>
                <form class="form-horizontal animated bounce" action=""  method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Lastname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                            <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Mobile" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="username" type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success">Inscrire</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

              </form>   
        </div> 
        <div class="col-md-3"></div>
         
     </div> 
    
    </div> 
    
   
    
</body>
</html>