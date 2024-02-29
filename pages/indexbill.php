<?php   if(!isset($_SESSION)) 
    { 
        session_start(); require('auth.php');
    } 
   $conn=mysqli_connect('localhost','root','','transport');
   $sql="SELECT * FROM facture ";
   $result=mysqli_query($conn,$sql);
   
   
?>


<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Facture</title>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->->


    <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>

<body> 
 <?php include 'navbar_admin.php';?> 
 <br><br>
 <div class="container">
        <div class="row">
           <div class="col-md-12">
             <div class="page-header">
        <h3 style="text-align: center;">Liste de facturation</h3>

    </div>
        <a href="insertbill.php" class="btn btn-info" > <b> Ajoute facture </b></a> 
        <br>   
       
       
               <table><tr><td style="width: 69%;"></td> 
                <td><div class="input-group">
                  <span class="input-group-addon"><b>Rechercher par Nom</b></span>
                  <input type="text" id="inputRecherche" placeholder="Ecrire un Nom" onkeyup="rechercher()" class="form-control">
                </div></td>
                </tr></table>
                
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
                  <a class="btn btn-info" href="showbill.php?id=<?php echo $row['facture_id']; ?>">Voir</a>
				   
                  <a class="btn btn-primary" href="editbill.php?id=<?php echo $row['facture_id']; ?>">Edit</a>
				   
                  <a class="btn btn-danger" onclick="return confirm('Are u sure?')" href="deletebill.php?id=<?php echo $row['facture_id']; ?>">Supprimer</a>
                </td>
              </tr>
              <?php }?>
            </tbody>

          </table>

</div>

</div></div>

<script>
    function rechercher() {
      var input = document.getElementById("inputRecherche");
      var filter = input.value.toUpperCase();
      var table = document.getElementById("tableau");
      var tr = table.getElementsByTagName("tr");

      for (var i = 1; i < tr.length; i++) {
        var td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          var nom = td.textContent || td.innerText;
          if (nom.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script> 
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</body> 
</html>  