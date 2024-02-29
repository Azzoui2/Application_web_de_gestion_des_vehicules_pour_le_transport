<!DOCTYPE>
<html>
<head>
<title> Navbar </title>
<meta charset ="utf-8">
<meta name ="viewport" content ="width=device-width, initial-scale=1">
<link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
<script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script>
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" /><
 /head>
    
<body><div class="container">
    <!-- <nav class="navbar navbar-default navbar-fixed-top"> -->
    <nav class="navbar navbar-light navbar-fixed-top" style="background-color:#e3f2fd">
        <div class="container-fluid">
            <div class="navbar-header"> 
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="nav navbar-nav">
                    <li><a href="newdriver.php">Ajouter un Chauffeur</a></li>
                    <li><a href="newvehicle.php">Ajouter un véhicule</a></li>
                    <li><a href="indexbill.php">Facturation</a></li>
                    <li><a href="bookinglist.php"> 
                 <style>.notification-count {
                  background-color: red;
                  color: white;
                  padding: 4px;
                  border-radius: 60%;
                }</style> <?php
                    $connection=mysqli_connect("localhost","root","","transport");
                    $requete="select * from reservation  ";
                    $resultat=$connection->query($requete);
                    $res2=$resultat;
                  $i = 0;
                        foreach ($res2 as $resco) {
                            if ($resco['confirmation'] ==0) {
                                $i++;}
                            }?>
                         <span class="notification-count"><?php echo @$i ?> </span> Réservation</a></li>
                    <li><a href="trip_details.php">Détails du voyage</a></li>
                    <li><a href="problem.php">  <style>.notification-count {
                  background-color: red;
                  color: white;
                  padding: 4px;
                  border-radius: 60%;
                }</style> <?php
                    $connection=mysqli_connect("localhost","root","","transport");
                    $req="select * from contclient";
                    $res=$connection->query($req);
                    $les_utilisateurs=$res;
                  $s = 0;
                  foreach ($les_utilisateurs as $utilisateur) {
                    $s++;
                }
                            ?>
                         <span class="notification-count"><?php echo @$s ?> </span> probleme de client</a></li>
                    

                    

 
                    <!-- on generale on utilise $admin apre la selection dans la base de donne (r$req=select usernam from admin.....) -->
                    <?php if( @$_SESSION['username']=="admin"){?>
                <li>
                  <a href="userlist.php">   
                    <span class="fa fa-users"></span> 
                    Les Utilisateurs 
                  </a>
                </li>
              <?php } ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login_admin.php">Déconnecter</a></li>
                    <li><a href="index.php">Visit Site</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>



