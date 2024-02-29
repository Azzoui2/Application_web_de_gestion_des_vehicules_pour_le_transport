<?php 
    session_start();require('auth.php');
   $id=$_GET['id'];
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $password=$_POST['password'];
   $username=$_POST['username'];
    

   $conn31=mysqli_connect('localhost','root','','transport');
   $sql31="UPDATE client SET client_id='$id',nom='$nom',prenom='$prenom',email='$email',mobile='$mobile',username='$username',password='$password' 
   
   WHERE client_id='$id'";

   if(mysqli_query($conn31,$sql31)){

    $_SESSION['msg']= "<script language='javascript'>
    swal(
         'Success!',
         'client estt modifiee  !',
         'success'
         );
</script>";
 
     header("Location: userlist.php"); 
   }else{
        echo "client non modifiee";
   }
  
?>