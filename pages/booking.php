<?php 
    if(!isset($_SESSION)) 
    {           
        session_start();   require('auth.php');
    } 

    @$veh_id= $_GET['id']; 
    $connection= mysqli_connect('localhost','root','','transport');


    $username= $_SESSION['username'];
    //echo $username;
    
    $query= "SELECT  `nom`, `prenom`, `email`, `mobile` FROM `client` WHERE username='$username' ";
    $result= mysqli_query($connection,$query);
    
    $row= mysqli_fetch_assoc($result);
    //$name= $row['first_name']." ". $row['last_name'];
   // echo $name;

   $sql7= "SELECT * FROM `vehicle` WHERE veh_id='$veh_id'"; 
   //echo $sql;
   $res7= mysqli_query($connection,$sql7);
   $row7= mysqli_fetch_assoc($res7);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Réservation</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/wickedpicker.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/wickedpicker.min.js"></script>
   <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
  
</head>
    
<style>
    .navbar-fixed-top.scrolled {
   background-color: ghostwhite;
  transition: background-color 200ms linear;
}    
</style>

<body>
    <?php include 'navbar.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align:center;">Réservation</h1>
                 <?php //echo $msg; ?>
            </div>
            
                <form class="animated bounce" action="bookingaction.php" method="post">
                 <table>  <tr> <th style="width: 50%; padding-right: 14px;">
                    <div class="input-group">
                      <span class="input-group-addon"><b>Nom</b></span>
                      <input id="name" type="text" class="form-control" name="nom" value="<?php echo $row['nom']." ". $row['prenom']; ?>"  required>
                    </div>
                    
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Votre langue</b></span>
                      <input id="department" type="text" class="form-control" name="department" placeholder="Votre langue" required>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Type de Vehicle</b></span>
                      <input id="type" type="text" class="form-control" name="type" placeholder="Bus ou Voiture" value="<?php echo @$row7['veh_type']; ?>">
                    </div>
                    <!-- <div class="input-group">
                      <span class="input-group-addon"><b> Type de Vehicle </b></span> &nbsp;
                      <label><input type="radio" name="type" value="voiture">Voiture</label> &nbsp;
                      <label><input type="radio" name="type" value="bus">Bus</label>
                    </div> -->

                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Date de besoin</b></span>
                      <input id="req_date" type="text" class="form-control" name="req_date" placeholder="Date de besoin" required>
                      <input type="text" name="req_time" id="req_time" class="form-control"/>
                      
                    </div>
                    
                    <script>
                      $( function() {
                        $( "#req_date" ).datepicker({ dateFormat: "dd/mm/yy" });
                        $("#req_time").wickedpicker();
                        
                      } ); 
                        
                    
                    </script> 
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Date de retour</b></span>
                      <input id="return_date" type="text" class="form-control" name="return_date" placeholder="Date de retour" required>
                      <input type="text" name="return_time" id="return_time" class="form-control"/>
                    </div>
                    
                    <script>
                      $( function() {
                        $( "#return_date" ).datepicker({ dateFormat: "dd/mm/yy" });
                        $( "#return_time" ).wickedpicker();
                      } );
                    </script>

                      </th> <th>
                        <br>
                      <div class="input-group">
                      <span class="input-group-addon"><b>Id Vehicule </b></span>
                      <input id="destination" type="text" class="form-control" name="vehicule"  value="<?php echo @$veh_id;?>" disabled>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Point de départ</b></span>
                      <input id="pickup" type="text" class="form-control" name="pickup" placeholder="point de départ">
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Point de retour</b></span>
                      <input id="destination" type="text" class="form-control" name="destination" placeholder="Car Destination" required>
                    </div>
                    <br>
                    
                   
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Raison de la réservation</b></span>
                      <input id="reason" type="text" class="form-control" name="reason" placeholder="Raison">
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Email</b></span>
                      <input id="email" type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Mobile</b></span>
                      <input id="mobile" type="text" class="form-control" name="mobile" value="<?php echo @$row['mobile']; ?>"  required>
                    </div>
                    <br>
                    
                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                    
                   
                    </th>
                    </tr>
                    </table>   
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
</script>  
</body>
</html>