<?php
     session_start();require('auth.php');
   $id= $_GET['id'];

   $conn2=mysqli_connect('localhost','root','','transport');
   $sql2="DELETE FROM client WHERE client_id='$id'";
   $result2=mysqli_query($conn2,$sql2);
   if(mysqli_query($conn2,$sql2)){
       header("Location: userlist.php");
   }else{
         echo "Not deleted";
   }
   
?>
