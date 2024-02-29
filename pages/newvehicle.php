<?php  
    if(!isset($_SESSION)) 
    { 
      session_start();
      require('auth.php');
    } 
    

    $connection= mysqli_connect('localhost','root','','transport');
     
    
    if(isset($_POST['submit'])){
        $regno= $_POST['vehregno'];
        $type= $_POST['type'];
        $chesisno= $_POST['vehchesis'];
        $brand= $_POST['vehbrand'];
        $color= $_POST['vehcolor'];
        $regdate= $_POST['vehregdate'];
        $description= $_POST['vehdescription'];
        $photo= $_FILES['file']['name'];
        $prix= $_POST['prix'];
        $_Var=' - '.$_POST['autre'];
        $chauffeur= $_POST['chauffeur'].'  '.$_Var;
        
        //image Upload
    
        move_uploaded_file($_FILES['file']['name'],"index_image/".$_FILES['file']['name']); 
        
        
        //move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']); 
        $res=false;
        $insert_query="INSERT INTO `vehicle`(`veh_id`, `veh_reg`, `veh_type`, `chesisno`, `brand`, `veh_color`, `veh_regdate`, `veh_description`, `veh_photo`, `prix`, `chauffeur`) 
        VALUES ('','$regno','$type','$chesisno','$brand','$color','$regdate','$description','$photo','$prix','$chauffeur')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
        }
        
    }
    
    //$msg="";

    
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Driver</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <!-- <link rel="stylesheet" href="animate.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->

    
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
</head>
    
<body>  
 <?php include 'navbar_admin.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">Nauveau vehicule </h1>
            <?php echo @$msg; ?>
      </div> 
       <div class="col-md-3">
        
         <!--
          <br> 
          <form action="" method="post" enctype="multipart/form-data">
              <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input id="chphoto" type="file" class="form-control" name="file"> 

              </div>
              <input type="submit" name="psubmit" class="btn btn-success btn-small">
              
          </form>
           
         -->  
       </div>
        <div > 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <table class="table table-striped"> <tr><th style="width: 50%; padding-right: 14px;">
                <div class="input-group">
                  <span class="input-group-addon"><b>Numéro d'enregistrement  </b></span>
                  <input id="vehreg" type="text" class="form-control" name="vehregno" placeholder="Numero" required>
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Type</b></span>
                  <label class="radio-inline">
                      <input type="radio" name="type" value="bus">Bus
                    </label>
                <label class="radio-inline">
                  <input type="radio" name="type" value="car">Voiteur
                </label>
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Numéro de châssis</b></span>
                  <input id="vehchesis" type="text" class="form-control" name="vehchesis" placeholder="châssis" required>
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Marque</b></span>
                  <input id="vehbrand" type="text" class="form-control" name="vehbrand" placeholder="Marque" required >
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Couleur</b></span>
                  <input id="vehcolor" type="text" class="form-control" name="vehcolor" placeholder="Couleur">
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Date d'inscription</b></span>
                  <input id="vehregdate" type="text" class="form-control" name="vehregdate" placeholder="date d'inscription">
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#vehregdate" ).datepicker({
    dateFormat: "dd/mm/yy" // Format de date : jour/mois/année
  });
                      } );
                </script>  <br>
                 </th><th>

                     <div class="input-group">
                  <span class="input-group-addon"><b>Prix (DH)</b></span>
                  <input id="prix" type="is_double" class="form-control" name="prix" placeholder="prix" required >
                </div>
                <br>

                <div class="input-group"><span class="input-group-addon"><b>Cheufaur</b></span>

                <select name="chauffeur" class="form-control"  style=" font-size: 1.25rem; " >
                <option value="" disabled selected > sélectionner un chauffeur</option>
                              
                            <?php 
                           
                           
                            $connection= mysqli_connect('localhost','root','','transport');
                            
                            $sql="SELECT distinct ch_nom FROM chauffeur ";
                            $stmt=$connection->query($sql);
                            //l'application de query() à l'objet de connexion retourne un objet
                            //de type PDOStatement
                            $rows=$stmt;
                            foreach($rows as $V): 
                                      
                                echo  "<option value=".$V['ch_nom'].">"; echo $V['ch_nom']   ;   echo  '</option>';
                                    endforeach ; 
                                     ?>
                           
                 </select> <span class="input-group-addon"><b>Autre</b></span>
                  <input id="autre" type="text" class="form-control" name="autre" placeholder="Autre Cheufaur"></div >
                        
                 <br>
                 <div class="input-group">
                  <span class="input-group-addon"><b>Description</b></span>
                     <textarea rows="5" id="chaddress" type="text" class="form-control" name="vehdescription" placeholder="Address"> </textarea>
                  
                </div>
                <br>
                
                <!--
                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input id="vehphoto" type="file" class="form-control" name="file">
                </div>
                <br>
                -->
                <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file" required> 

              </div>
                
                
                 
                
               </th>
               </tr> 
                <tr>
                  <td colspan="3"><div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success">
                  
                </div></td></tr>   
                 
              </form>   
        </div>  
         
         
         
     </div>
         
   
    </div> 
    
     
      
    
</body>
</html>