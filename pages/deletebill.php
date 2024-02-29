<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','transport');
   $sql="DELETE FROM facture WHERE facture_id='$id'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
    if($_SESSION['username']=='admin')
       header("Location: indexbill.php");
       else
       header("Location: indexbill_dr.php");
   }else{
         echo "Not deleted";
   }
   
?>
