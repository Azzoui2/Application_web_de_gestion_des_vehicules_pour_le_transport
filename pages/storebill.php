<?php     session_start(); require('auth.php');

   $id=$_GET['busid'];
   $salaire=$_POST['salaire'];
   $equipment=$_POST['equipment'];
   $Commentaire=$_POST['Commentaire'];
   $tcout=$_POST['tcout'];
   $username=$_POST['nom'];
   $date=$_POST['date'];

   $conn=mysqli_connect('localhost','root','','transport');
   //$sql="INSERT INTO facture VALUES('','$id','$salaire','$equipment','$petrol','$tcout')";
   $sql= "INSERT INTO `facture`(`facture_id`, `id`, `username`, `salaire`, `equipment`, `Commentaire`, `tcout`,`date` ) VALUES 
   ('','$id','$username','$salaire','$equipment','$Commentaire','$tcout','$date')";
   
   if(mysqli_query($conn,$sql)){
	   
				$msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
        
      header("Location: indexbill.php"); 
   }else{
        echo "Not inserted";
   }
?>