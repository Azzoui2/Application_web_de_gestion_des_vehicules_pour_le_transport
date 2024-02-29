<?php

    $connection= mysqli_connect('localhost','root','','transport');
    session_start(); require('auth.php');

    $msg="";
    
    if(isset($_POST['submit'])){
        $name=$_POST['nom'];
        $department=$_POST['department'];
        $type=$_POST['type'];
        $req_date=$_POST['req_date'];
        $req_time=$_POST['req_time'];
        $return_date=$_POST['return_date'];
        $return_time=$_POST['return_time'];
        $destination=$_POST['destination'];
        $pickup=$_POST['pickup'];
        $reason=$_POST['reason'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $username= $_POST['username'];
        @$veh_id= $_POST['vehicule'];
        
        $insert_query="INSERT INTO `reservation`(`reser_id`, `nom`,`username` , `department`, `type`, `req_date`, `req_time`, `ret_date`, `ret_time`, `destination`, `pickup_point`, `resons`, `email`, `mobile`, `confirmation`, `veh_reg`, `chauff_id`, `finished`, `veh_id`) VALUES ('','$name','$username','$department','$type','$req_date','$req_time','$return_date','$return_time','$destination','$pickup','$reason','$email','$mobile','','','','','$veh_id')"; 
        echo $name;
        
        
        
        
        $res= mysqli_query($connection,$insert_query);
        
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
    <title>Document</title>
    
    
    
    
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
   
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>
    
<body>
    <?php echo $msg;
    ?>
    
    <script>
    
        var timer = setTimeout(function() {
            window.location='booking.php'
        }, 1000);
    </script>

</body>
</html>
