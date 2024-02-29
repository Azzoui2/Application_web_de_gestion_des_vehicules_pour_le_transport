<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php     session_start(); require('auth.php');

   
   $salaire=$_POST['salaire'];
   $equipment=$_POST['equipment'];
   $Commentaire=$_POST['Commentaire'];
   $tcout=$_POST['tcout'];
   $username=$_POST['nom'];
   $date=$_POST['date'];

   $conn=mysqli_connect('localhost','root','','transport');
   //$sql="INSERT INTO facture VALUES('','$id','$salaire','$equipment','$petrol','$tcout')";
   $sql= "INSERT INTO `facture`(`facture_id`, `username`, `salaire`, `equipment`, `Commentaire`, `tcout`,`date` ) VALUES 
   ('','$username','$salaire','$equipment','$Commentaire','$tcout','$date')";
   
   if(mysqli_query($conn,$sql)){
	   
				$msg= "
                <script>
                  swal('Success!', 'Registration Completed!', 'success');
                </script>
                ";
                          
    header("Location:chauffeur.php"); 
   }else{
        echo "Not inserted";
   }

   echo "Succès! ', 'Inscription terminée!', 'succès'";
?>