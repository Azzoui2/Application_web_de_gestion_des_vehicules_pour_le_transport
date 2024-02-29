<?php  

if(!isset($_SESSION)) 
{ 
    session_start(); require('auth.php');
} 
    $user=$_SESSION['username'];
   $conn=mysqli_connect('localhost','root','','transport');
   $sql="SELECT * FROM facture where username='$user'";
   $result=mysqli_query($conn,$sql);
   
   
?>


<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Facture Chauffeur</title>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
    </head>


<body> 
 <?php include 'navbar_chauffeur.php';?> 
 <br><br>
 <div class="container">
        <div class="row">
           <div class="col-md-12">
             <div class="page-header">
        <h3 style="text-align: center;">Liste de facturation</h3>

    </div>
       
        <br>   
       
       
               
                
                <br>
  
                <table id="tableau" id="myTable" class="table table-bordered">

        <thead>
              <th>ID</th>
              <th>Nom</th>
              <th>Date</th>
              <th>Service Charge</th>
              <th>Equipment</th>
              <th>Commentaire</th>
              <th >Coût total</th>
              <th >Action</th>
        </thead>

        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){?>
              <tr>
                <td> <?php echo $row['facture_id']?> </td>
                <td> <?php echo $row['username']?> </td>
                <td> <?php echo $row['date']?> </td>
                <td> <?php echo $row['salaire']?> </td>
                <td> <?php echo $row['equipment']?> </td>
                <td> <?php echo $row['Commentaire']?> </td>
                <td> <?php echo $row['tcout']?> </td>
                <td>
                   
				   
                  <a class="btn btn-primary"  href="editbill_dr.php?id=<?php echo $row['facture_id']; ?>">Edit</a>
				   
                  <a class="btn btn-danger" onclick="return confirm('Are u sure?')" href="deletebill.php?id=<?php echo $row['facture_id']; ?>">Supprimer</a>
                </td>
              </tr>
              <?php }?>
            </tbody>

          </table>

</div>

</div></div>

 
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</body> 
</html>  