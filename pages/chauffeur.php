<?php   
    $connection= mysqli_connect("localhost","root","","transport");
    session_start();
    require('auth.php');

    $username= $_SESSION['username']; 
     
    @$sql= "SELECT * FROM `chauffeur` WHERE username='$username'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transport</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->

 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>
    
<body>  
  
   <?php include 'navbar_chauffeur.php';?>
   <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	
   
</div>
       
        <div class="container">
          <div class="row"> 
          <div class="fb-profile-text" id="h1" >
                            <h2><?php echo @$row['ch_nom']; ?></h2>
            </div>
            <hr>
           <div class="col-sm-3">
                   <div class="fb-profile">
                        <img height="250" width="250" align="left" class="fb-image-profile thumbnail userpic" src="index_image/<?php echo $row['chphoto'] ?>" alt="dp"/>
                        
                    </div>
           </div> 
           
           <div class="col-sm-9">
               <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                      <b> <span style="color:DodgerBlue;" >Les informations</span> </b>  </a>
                    </li>
                   
                    <li>
                      <a href="#tab_default_2" data-toggle="tab">
                      <b> <span style="color:DodgerBlue;">Contact</span>  </b> </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                    <table class="table table-striped" border="1">
                    <tr class="table-success">
                        <td><h4><strong>Nom</strong></h4></td>
                        <td><b><?php echo @$row['ch_nom']; ?> </b></td>
                      </tr>

                      <tr class="table-success">
                        <td><h4><strong>Rejoint</strong></h4></td>
                       <td><b><?php echo @$row['joindre']; ?></b></td> 
                      </tr>

                      <tr>
                        <td>  <h4><strong>N° Carte d'identité</strong></h4>   </td>
                              <td><b> <?php echo @$row['chcni']; ?></b></td>
                      </tr>

                      <tr>
                        <td><h4><strong>Permis de conduire</strong></h4></td>
                            <td> <b> <?php echo @$row['chlicense']; ?></b></td>
                      </tr>
                      
                      <tr>
                        <td>  <h4><strong>Permis valide jusqu'au</strong></h4>  </td>
                        <td><b><?php echo @$row['chlicensevalid']; ?></b></td> 
                      </tr>

                      <tr>
                        <td>  <h4><strong>type</strong></h4>  </td>
                        <td><b><?php echo @$row['type']; ?></b></td> 
                      </tr>
                      <!--
                      <h4><strong>Skills</strong></h4>
                      <p><?php //echo $skills; ?></p>
                      -->
                   
                      
                      
                      </table>
                    

                    </div>

                    
                                      <div class="tab-pane" id="tab_default_2">
                    <table class="table table-striped" border="1">
                      <tr class="table-success">
                        <th><h4><strong>Numéro de téléphone</strong></h4></th>
                        <th><p  style="padding-top: 8px;" ><?php echo @$row['chmobile']; ?></p></th>
                      </tr>
                      <tr>
                        <td><h4><strong>Adresse</strong></h4></td>
                        <td><b><?php echo @$row['chaddress']; ?></b></td>
                      </tr>
                    </table>
                  </div>

                      
                      
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




