<?php  
    session_start();require('auth.php');
     $connection= mysqli_connect('localhost','root','','transport');

    $select_query="SELECT * FROM `voyagecout`";
    $result= mysqli_query($connection,$select_query);
    $total=0;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>trip Details</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
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
    <?php include 'navbar_admin.php'; ?>
    <br>
    <div class="container">
        <div class="row">
             
            <div class="col-md-12">
                <div class="page-header">
                    <h1 style="text-align: center;">détails du voyage</h1>
                 
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
                        <th>N° Réservation</th>
                        <th>Nom</th>
                        <th>date de début</th>
                        <th>date de fin</th>
                        <th>Total Km</th>
                        <th>petrol cout</th>
                        <th>Extra cout</th>
                        <th> <b>Total cout</b> </th>
                    </thead>
                    <tbody>
                        <?php while($row=mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['reser_id'];   ?></td>
                            <td><?php 
                              $S1= $row['username'];
                               $connection= mysqli_connect('localhost','root','','transport');

                                 $query1= "SELECT  `nom`,`prenom` FROM `client` WHERE username='$S1'";
                                 $result1= mysqli_query($connection,$query1);
                                 $row1= mysqli_fetch_assoc($result1);  
                                 echo @$row1['nom'].' '.@$row1['prenom'];
                             ?></td>
                            <td><?php
                               $S2= $row['reser_id'];
                               $connection= mysqli_connect('localhost','root','','transport');

                                 $query2= "SELECT reservation.req_date,reservation.ret_date FROM reservation 
                                 WHERE reser_id=$S2";
                                 $result2= mysqli_query($connection,$query2);
                                 $row2= mysqli_fetch_assoc($result2);  
                                 echo $row2['req_date'];
                            
                            ?></td>
                            <td><?php echo $row2['ret_date'];   ?></td>
                          
                            <td><?php echo $row['total_km']; ?></td>
                            <td><?php echo $row['petrol_cout']; ?></td>
                            <td><?php echo $row['extra_cout']; ?></td>
                            <td style="color:red;"> <b><?php echo $row['total_cout']; 
                            $total=$row['total_cout']+ $total;
                            ?></b> </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <th colspan="8"><h4> <b><center>Total général des réservations</center> <b> </h4> </th>
                <th colspan="2" style="color:red; font-size: larger;" > <b><?php echo $total; ?> DH</b>  </th>
            
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