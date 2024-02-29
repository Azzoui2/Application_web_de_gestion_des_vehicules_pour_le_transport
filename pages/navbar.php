<?php 
 
// require('auth.php');
 @$com=$_SESSION['i'];
  
    if(isset($_SESSION['username'])==false) {
        
?>  
 


  <div class="container">
      
         <nav class="navbar navbar-inverse navbar-fixed-top gabanav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav gabali">
                 <li><img src="index_image/logo2.ico" porder="1"  padding-top="89px" alt="Logo" width="50" height="46"></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="buslist.php">véhicule</a></li>
                <!-- <li><a href="driverlist.php">Chauffeur</a></li> -->
                 <li><a href="about.php">À propos de</a></li>
              
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href=""><span ></span> Fr </a></li> -->

             <li>   <div class="language-switcher">
             <!-- <select class="btn btn-primary language-button" id="language-select" onchange="changeLanguage(value)">
      <option value="fr">FR</option>
      <option value="en">ENG</option>
      <option value="ar">عربي</option> -->
      
<script>
function changeLanguage(languageCode) {
  // Code pour changer la langue de votre application ou votre site web
  // ...

  // Exemple de logique de changement de langue
  if (languageCode =='fr') {
    // Changer la langue vers le français
    
  } else if (languageCode =='en') {
    // Changer la langue vers l'anglais
   
  } else if (languageCode =='ar') {
    // Changer la langue vers l'arabe
  
  }
}
</script>
      
    <!-- </select> -->

     </div></li>

       
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div> 

            </div>   
        </nav>
             
      
       
  </div>
   
       
    <?php } else { 
      
      
      
      ?> 
    <div class="container">
       <nav class="navbar navbar-inverse navbar-fixed-top gabanav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav gabali">
              <li><img src="index_image/logo2.ico" porder="1"  padding-top="89px" alt="Logo" width="50" height="46"></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="buslist.php">véhicule</a></li>
                <!-- <li><a href="driverlist.php">Chauffeur</a></li> -->
                <li><a href="about.php">À propos de</a></li>
                <style>.notification-count {
                  background-color: red;
                  color: white;
                  padding: 5px;
                  border-radius: 50%;
                }</style>
                                <li>
                  <a href="notification.php"><span class="notification-count"><?php echo $com ?></span>Notification</a>
                </li>
                <li><a href="informations.php">Mes info</a></li>

                <li><a href="mybill.php?id=<?php echo $_SESSION['username']; ?>">Mon compte</a></li>
                <?php if( @$_SESSION['username']=="admin1111"){?>
                <li>
                  <a href="userlist.php">   
                    <span class="fa fa-users"></span> 
                    Les Utilisateurs 
                  </a>
                </li>
              <?php } ?>	
              <?php if( @$_SESSION['username']=="admin"){?> <li><a href="admin.php">Retour</a></li> <?php } ?>	
                <!--
                 <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="newdriver.php">Add New Driver</a></li>
                    <li><a href="newvehicle.php">Add New Vehicle</a></li>
                    <li><a href="indexbill.php">Billing System</a></li>
                    <li><a href="bookinglist.php">Booking</a></li>
                    <li><a href="trip_details.php">Trip Details</a></li>
                  </ul>
                </li>
                -->

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Déconnecter</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Welcome <?php echo $_SESSION['username']; ?></a></li>
              </ul>
            </div> 

        </div> 
      
    </nav> 
    </div>


 

    
    
    
    <?php } ?> 
    
    
    
    
   
    
    