<?php
    
    session_start(); require('auth.php');
     $connection= mysqli_connect('localhost','root','','transport');

    $select_query="SELECT * FROM `reservation` ORDER BY reser_id DESC";
    $result= mysqli_query($connection,$select_query);
    

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste de réservation</title>
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
  <?php include 'navbar_admin.php'; ?>
  <br><br>
   <div class="container">
        <div class="row">
           <div class="col-md-12">
             <div class="page-header">
                <h1 style="text-align: center;">Liste de réservation </h1>
                 
              </div> 
              <table><tr><td style="width: 69%;"></td> 
                
                <td><div class="input-group">
                  <span class="input-group-addon"><b>Rechercher par Nom</b></span>
                  <input type="text" id="inputRecherche" placeholder="Ecrire un Nom" onkeyup="rechercher()" class="form-control">
                </div></td>
                </tr></table>
                
                <br>

                
   
                <table id="tableau" id="myTable" class="table table-bordered">
                <thead>
                    
                    <th>Id de réservation</th>
                    <th>Nom</th>
                    <th>Type</th>
                    
                    <th>Supprimer</th>
                    <th>Libérer</th>
                    <th>Confirmer le voyage</th>
                    <th>Vérifié</th>
                    <th>Finie</th>
                    <th>Facture</th>
                    <th>Confirmer le paiement</th>
                    <th>Payé</th>
                    
                </thead>
                
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                       
                        <td><?php echo $row['reser_id']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                       
                        
                        <td><a class="btn btn-danger" href="deletebooking.php?id=<?php echo $row['reser_id']; ?>">Delete</a></td>
                        
                        <?php if($row['confirmation']==0 or $row['finished']==1)  { ?>
                        <td><a class="btn btn-default disabled" href="releasebooking.php?id=<?php echo $row['reser_id']; ?>">Release Vehicle</a></td>
                        <?php } else{ ?>
                        <td><a class="btn btn-default" href="releasebooking.php?id=<?php echo $row['reser_id']; ?>">Release Vehicle</a></td>
                        <?php } ?>
                        
                        <?php if($row['confirmation']=='0'){ ?>
                        <td><a class="btn btn-success" href="confirmbooking.php?id=<?php echo $row['reser_id']; ?>">Confirm</a></td>
                        <?php } else { ?>
                        <td><a class="btn btn-success disabled" href="confirmbooking.php?id=<?php echo $row['reser_id']; ?>">Confirm</a></td>
                        <?php } ?>
                        
                        <?php if($row['confirmation']=='0'){ ?>
                        <td>Non</td>
                        <?php } else { ?>
                        <td>Oui</td>
                        <?php }  ?>
                        
                        <?php if($row['finished']=='0'){ ?>
                        <td>Non</td>
                        <?php } else { ?>
                        <td>Oui</td>
                        <?php }  ?>
                        
                        
                        
                        <?php if($row['finished']=='1' and $row['paye']==0 ){  ?>
                        <td><a class="btn btn-primary" href="bill.php?id=<?php echo $row['reser_id']; ?>">Bill</a></td> 
                         <?php } else if($row['paye']==1 ) { ?>
                          <td><a class="btn btn-primary disabled" href="bill.php?id=<?php echo $row['reser_id']; ?>">Bill</a></td> 
                          <?php }  ?>
                          
                         
                          <td><a href="confirmpayment.php?id=<?php echo $row['reser_id']; ?>">Confirm</a></td>
                          
                          <?php if($row['paye']=='0'){ ?>
                        <td>Non</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                          
                          
                          
                        
                    </tr>
                    

                    <?php }   ?>
                </tbody>
            </table>
            </div>
        </div>
        
        
   </div>  
     
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