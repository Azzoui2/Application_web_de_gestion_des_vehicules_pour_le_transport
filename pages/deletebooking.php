<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','transport'); 

   $sql="DELETE FROM `reservation` WHERE reser_id='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: bookinglist.php");
   }else{
         echo "Not deleted";
   }
   
?>
