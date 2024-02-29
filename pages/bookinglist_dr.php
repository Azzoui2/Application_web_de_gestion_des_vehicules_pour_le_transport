<?php 
    session_start();  require('auth.php');
     $connection= mysqli_connect('localhost','root','','transport');
     $nom=$_SESSION['username'];
    $select_query="SELECT * FROM `reservation`   ORDER BY reser_id DESC";
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
     <link rel="stylesheet" href="animate.css">
   <!-- <link rel="stylesheet" href="style.css">   -->
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>
    

<body>
<?php include 'navbar_chauffeur.php';?>
  <br><br>
   <div class="container">
        <div class="row">
           <div class="col-md-12">
             <div class="page-header">
                <h1 style="text-align: center;">Liste de réservation </h1>
                 
              </div> 
              <table><tr><td style="width: 68%;"></td> 
                
                <td><div class="input-group">
                  <span class="input-group-addon"><b>Rechercher par Nom</b></span>
                  <input type="text" id="inputRecherche" placeholder="Ecrire un Nom de chauffeur" onkeyup="rechercher()" class="form-control">
                </div></td>
                </tr></table>
                
                <br>

                
   
                <table id="tableau" id="myTable" class="table table-bordered">
                <thead>
                    
                    <th>Id de réservation</th>
                    <th>Nom  client</th>
                    <th>Mobile  client</th>
                    <th>Nom chauffeur</th>
                    <th>Type</th>
                     <th>Date début</th>
                    <th>Date fin </th>
                    <th>Point d'acces</th>
                    <th> point de routeur</th>
                    <th>Finie</th>
                    <th>Payé</th>
                    
                </thead>
                
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                       
                        <td><?php echo $row['reser_id']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <?php  $idch=$row['chauff_id'] ?>

                        <td><?php   
                         $connection= mysqli_connect('localhost','root','','transport');
                        $sql12= "SELECT ch_nom FROM `chauffeur` WHERE chauff_id=' $idch'"; 
    //echo $sql;
    $res12= mysqli_query($connection,$sql12);
    $row12= mysqli_fetch_assoc($res12);  
    @$row122=  $row12['ch_nom'];
                        if (isset($row122)) {
                            echo $row122;
                        } else {
                          echo " <p style='color:green; background-color:yellow'>L'opération est en cours. </p>";
                        }
                        
                        ?></td>
                        <td><?php echo $row['type']; ?></td>


                        <?php if($row['req_time']==''){
                                     $row['req_time']='  0:00 PM';

                        }
                        
                        
                        if($row['ret_time']==''){
                            $row['ret_time']='  0:00 PM';

                        }?>
                        <td style="width:9%;"><?php echo $row['req_date'].'<br>  à<span style="background-color:#ff5c33;"> '.$row['req_time'].'<span>' ; ?></td>
                        <td style="width:9%;"><?php echo $row['ret_date'].' <br> à <span style="background-color:#ff5c33;">'.$row['ret_time'] ; ?></td>
                        <td><?php echo $row['destination']; ?></td>
                        <td><?php echo $row['pickup_point']; ?></td>
                        <td><?php if($row['finished']=='0'){ ?>
                        Non
                        <?php } else { ?>
                        Oui
                        <?php }  ?></td>
                        <td> <?php if($row['paye']=='0'){ ?>
                        Non
                        <?php } else { ?>
                        Yes
                        <?php }  ?></td>
                        
                         
                          
                          
                        
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
        var td = tr[i].getElementsByTagName("td")[3];
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