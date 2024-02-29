<?php 
    if(!isset($_SESSION)) 
    { 
          session_start();
        require('auth.php');
    } 
   

    $connection= mysqli_connect('localhost','root','','transport');
    $msg= "" ;     


    if(isset($_POST['submit'])){
        $ch_nom=$_POST['ch_nom'];
        $joindre=$_POST['joindre'];
        $drmobile=$_POST['drmobile'];
        $chcni=$_POST['chcni'];
        $chlicense=$_POST['chlicense'];
        $chlicensevalid=$_POST['chlicensevalid'];
        $chaddress=$_POST['chaddress'];
        //$chphoto=$_FILES['file']['name'];
        $chphoto= $_FILES['file']['name'];
        @$type1=$_POST['type'];
        @$username=$_POST['username'];
        @$password=$_POST['password'];
        @$email=$_POST['email'];
        
        //image Upload
    
       move_uploaded_file($_FILES['file']['name'],"picture/".$_FILES['file']['name']); 
        
        $res=false;
        @$insert_query="INSERT INTO `chauffeur`(`chauff_id`, `ch_nom`, `joindre`, `chmobile`, `chcni`, `chlicense`, `chlicensevalid`, `chaddress`, `chphoto`, `type`, `username`, `password`, `email`) VALUES ('','$ch_nom','$joindre','$drmobile','$chcni','$chlicense','$chlicensevalid','$chaddress','$chphoto','$type1','$username','$password','$email')";
        
        @$res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }

    
        
       
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nouveau chauffeur</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
  
     
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css"> -->
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>
    
<body>  
 <?php include 'navbar_admin.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">Nouveau chauffeur</h1>
            <?php echo $msg; ?>
                              
                  
      
      </div> 
       <div class="col-md-3">
         
       </div>
        <div > 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
            <table class="table table-striped"> <tr><th style="width: 50%; padding-right: 14px;">
                <div class="input-group">
                  <span class="input-group-addon"><b>Nom du chauffeur</b></span>
                  <input id="ch_nom" type="text" class="form-control" name="ch_nom" placeholder="Nom et prenom" required> 
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Mobile</b></span>
                  <input id="drmobile" type="text" class="form-control" name="drmobile" placeholder="Mobile" required>
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>La date de début du chauffeur</b></span>
                  <input id="joindre" type="text" class="form-control" name="joindre" placeholder="rejoignement ">
                </div>
                <br>
                
              
                
                 <script>
                     $(function() {
  $("#joindre").datepicker({
    dateFormat: "dd/mm/yy" // Format de date : jour/mois/année
  });
});

                </script> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>CNI</b></span>
                  <input id="chcni" type="text" class="form-control" name="chcni" placeholder="Cart N" required>
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>N ° de licence</b></span>
                  <input id="chlicense" type="text" class="form-control" name="chlicense" placeholder="N Licence" required>
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Date de fin de licence</b></span>
                  <input id="chlicensevalid" type="text" class="form-control" name="chlicensevalid" placeholder="fin date">
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#chlicensevalid" ).datepicker({
    dateFormat: "dd/mm/yy" // Format de date : jour/mois/année
  });
                      } );
                </script> 
                
                
                </th> <th>
                <div class="input-group">
                      <span class="input-group-addon"><b>Type</b></span> &nbsp;
                      <label><input type="radio" name="type" value="Voitur">Voitur</label> &nbsp;
                      <label><input type="radio" name="type" value="bus">Bus</label>
                    </div>
                    <BR>
                 <div class="input-group">
                  <span class="input-group-addon"><b>Adresse du chauffeur</b></span>
                  <input id="chaddress" type="text" class="form-control" name="chaddress" placeholder="Adress"> 
                  
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><b>Username</b></span>
                  <input id="username" type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <br> 
                <div class="input-group">
                  <span class="input-group-addon"><b>Password</b></span>
                  <input id="password" type="text" class="form-control" name="password" placeholder="Password" required>
                </div>
                <br> 
                <div class="input-group">
                  <span class="input-group-addon"><b>Email</b></span>
                  <input id="email" type="text" class="form-control" name="email" placeholder="email" required>
                </div>
                <br> 
                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file"> 

              </div>
                 </th> </tr></table><div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success">
                  
                </div>
              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
    
</body>
</html>