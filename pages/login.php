<?php 
    session_start();
    $connection=mysqli_connect("localhost","root","","transport"); 
    
    $msg="";
    if(isset($_POST['submit'])){
        $email=mysqli_real_escape_string($connection,strtolower($_POST['email']));
        
        $password=mysqli_real_escape_string($connection,$_POST['password']); 
        
        $sql="SELECT * FROM `client` WHERE email='$email' and password='$password'";
        $res= mysqli_query($connection,$sql);
        $row= mysqli_fetch_assoc($res);

        if(mysqli_num_rows($res)>0){ 
           $_SESSION['username']=$row['username'];
            header('Location:index.php');
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
    <title>Inscription</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <link rel="stylesheet" href="animate.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
   
 
<style>
        h1 {
            font-size: 3em;
            color: red;
            text-align: center;
        }

        .input-group-addon {
            background-color: #d3d3d3;
            border-radius: 5px 0 0 5px;
        }

        button.btn-success {
            border-radius: 2px;
        }

        button.btn-success:hover {
            background-color:green;
            
        }

        a.btn-link {
            color: reed;
            text-decoration: none;
        }
    </style>
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
                    <h1>Login</h1>
                </div>
                <form class="form-horizontal animated bounce" action="" method="post" style="  padding-left: 30px;">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="username" type="text" class="form-control" name="email" placeholder="Email" value="">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" value="">
                    </div>
                    <br>
                    <div class="">
                        <button type="submit" name="submit" class="btn btn-success">Connexion</button>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp; 
                        <a href="reset_password.php" class="btn btn-link" style="color: red;"> <b>Mot de passe oublié ?</b> </a>
                    </div>
                    <br>
                    
                    <div class="input-group">
                    
                    <b>Vous n'avez pas encore de compte ? 
                         <a href="signup.php"  > Créer un compte</a></b>
                    </div> 
                </form>
                <br>
                <!-- <div class="input-group">
                    <a href="login_admin.php">Admin Login</a><br>
                    <a href="login_chauffeur.php">Chauffeur Login</a>
                </div> -->
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>