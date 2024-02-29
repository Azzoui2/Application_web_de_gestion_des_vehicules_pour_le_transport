<?php
    session_start();require('auth.php');
   $id=$_POST['facture_id'];
   $salaire=$_POST['salaire'];
   $equipment=$_POST['equipment'];
   $petrol=$_POST['Commentaire'];
   $date=$_POST['date'];
   $tcout=$_POST['tcout'];

   $conn=mysqli_connect('localhost','root','','transport');
   $sql="UPDATE facture SET facture_id='$id',salaire='$salaire',equipment='$equipment',Commentaire='$petrol',tcout='$tcout',date='$date' 
   
   WHERE facture_id='$id'";

   if(mysqli_query($conn,$sql)){
      header("Location: indexbill_dr.php"); 
   }else{
        echo "Not inserted";
   }
?>