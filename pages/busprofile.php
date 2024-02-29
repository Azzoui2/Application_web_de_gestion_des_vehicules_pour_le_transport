<?php  
    $connection= mysqli_connect("localhost","root","","transport");
    
    session_start(); 

    $veh_id= $_GET['busid']; 

    $sql= "SELECT * FROM `vehicle` WHERE veh_id='$veh_id' or veh_reg='$veh_id'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kech-tranport</title>
    
  
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
    
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   
   
  
  
   <?php  include 'navbar.php';?>
   <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	
   
</div>
       
        <div class="container">
          <div class="row"> 
          <div class="fb-profile-text" id="h1" >
                            <!-- <h2><?php //echo $row['veh_id']; ?></h2> -->
            </div>
            <hr>
           <div class="col-sm-3">
                   <div class="fb-profile">
                        <img height="250" width="250" align="left" class="fb-image-profile thumbnail userpic" src="index_image/<?php echo $row['veh_photo'] ?>" alt="dp"/>
                        
                    </div>
           </div> 
           
           <div class="col-sm-9">
               <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                      <h4><b>à propos vehicle :</b></h4> </a>
                    </li>
                    
                    <!--
                    <li>
                      <a href="#tab_default_2" data-toggle="tab">
                     Bill </a>
                    </li>
                    -->
                  </ul>
                  <div class="tab-content" >
                    <div class="tab-pane active" id="tab_default_1">

                    <table class="table table-striped" border="1">   <tr class="table-success">
                  <td><h4><strong>Marque</strong></h4></td>
                  <td><b><?php echo $row['brand']; ?></b></td>
                  </tr>

                  <tr> <td><h4><strong>Prix</strong></h4></td>
                  <td><b><?php echo $row['prix']; ?> DH </b></td>
                  </tr>

                  <!-- <tr>
                  <td><h4><strong>Chauffeur</strong></h4></td>
                  <td><b><?php // echo $row['chauffeur']; ?></b></td>
                  </tr> -->

                 <tr>
                  <td><h4><strong>nombre de passagers</strong></h4></td>
                  <td><b> <?php echo $row['veh_reg']; ?> </b></td>
                  </tr>

                  <tr>
                  <td><h4><strong>Type</strong></h4></td>
                  <td><b><?php echo $row['veh_type']; ?></b></td>
                  </tr>

                  <tr>
                  <td><h4><strong>N ° de châssis</strong></h4></td>
                  <td><b><?php echo $row['chesisno']; ?></b></td>
                  </tr>
                  <tr>
                  <td><h4><strong>Date d'immatriculation du véhicule</strong></h4></td> 
                  <td><b><?php echo $row['veh_regdate']; ?></b></td>
                  </tr>
                  <tr>
                  <td><h4><strong>Description</strong></h4></td>
                  <td> <p><?php echo $row['veh_description']; ?></p></td>
                  </tr>
                  
                     

                    </div>
                    
                    <?php //if($_SESSION['username']!= null) {  ?>
                    
                    <!--
                    <div class="tab-pane" id="tab_default_2">
                      <div class="row">
                      <div class="col-sm-10">
                       <?php //include 'insertbill.php';?>
                          
                          <?php // } ?>
                      </div>
                      </div>
                    </div>  
                    -->
                            
                  </div>
                  
                   
                  
                
                  
                </div>
              </div>
           </div>
          </div>
        </div>
        
          <!-- /container fluid-->  
        <div class="container">
          <div class="col-sm-12"> 
              
          </div>
    </div>
    
</body>
</html>




