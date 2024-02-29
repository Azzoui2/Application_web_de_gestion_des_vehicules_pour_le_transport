<?php  
    $connection= mysqli_connect("localhost","root","","transport");

    session_start();
    // require('auth.php');

    $sql= "SELECT * FROM `chauffeur`";
    $res=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des chauffeurs</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
   <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->
     
     
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>
     

<body > 
  
   <div  id="myDiv">
  
   <?php include 'navbar.php'; ?>
   <br><br><br>
   <div class="container">
      <?php
        if(mysqli_num_rows($res)>0){ ?>
    
      <div class="container">
         <div class="row">
              
             <div >
             <div class="panel panel-primary">
                    <h4 style="text-align: center;"class="panel-heading" class="bg-primary text-white">Liste des chauffeurs</h4>      
                  </div> 
                  <table class="table table-striped table-bordered">
                    <thead class="thead-dark"> 
                        <TR style="text-align: center; font-family: Verdana, Arial, Helvetica, sans-serif;">
                        
                       
                     <?php
                      $connection= mysqli_connect("localhost","root","","transport");
                     $admin= "SELECT `username`FROM `admin`"; 

                     
                     }?>
                        </TR>
                    </thead>  
                    <?php
                    $count = 0;
                    while($row = mysqli_fetch_assoc($res)) {
                        if ($count % 4 == 0) {
                            echo '<tr>';
                        }
                        ?>

                   
                    
                         
                            <td style="width: 25%;"><img height="140px" width="120px" src="index_image/<?php echo $row["chphoto"]; ?>" alt="photo chaufaur">

                            <br> Nom: <?php echo $row["ch_nom"] ?> <br>

                            Type: <?php echo $row["type"] ?>

                            <?php
                      $connection= mysqli_connect("localhost","root","","transport");
                     $admin= "SELECT `username`FROM `admin`"; 

                     if( @$_SESSION['username']=='admin'){

                        echo '<br> <a href="driverprofile.php?chauff_id=';  echo $row["chauff_id"]; echo'"> Contact </a>';
                     }
                     
                     echo'</td>';
                     
                     $count++;
                     if ($count % 4 == 0) {
                         echo '</tr>';
                     }?> 
                        
                    
                <?php              }?>
                </table>
             </div>
             
         </div>
          
      </div>  
       
   </div>
    </div> 
    
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
     
    </script>
     
     </style>

<style type="text/css">
            #bombemaralinga{float: left; margin: 5px;}
            #centralenucleaire{float: right; margin: 5px;}
            section{text-align: justify;}
        </style>
     <?php include 'footer.php'; ?>
</body>
</html>