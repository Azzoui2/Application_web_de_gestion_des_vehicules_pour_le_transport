<?php
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
        require('auth.php');
        $user=$_SESSION['username'];
     $connection=mysqli_connect("localhost","root","","transport");
    $requete="select * from reservation WHERE username='$user' ";
	$resultat=$connection->query($requete);
	$res2=$resultat;

    $req="select * from contclient";
	$res=$connection->query($req);
	$les_utilisateurs=$res;

  
    } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->->
    <style>
    .page-header {
        text-align: center;
        margin-bottom: 20px;
    }

    h1 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
    }

    .col-md-2 {
        width: 16.6667%;
        float: left;
    }
 

    b {
        font-weight: bold;
        color: #333;
        font-size: 23px;
    }
</style>

 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" /></head>
    
<body>
   <?php include 'navbar_admin.php'?>
   <br><br>
   <div class="container">
       <div class="row">
           <div class="page-header">
               <h1 style="text-align: center">Admin Panel</h1>
           </div>
           <div class="col-md-2"> <h3>Les Notification </h3></div>
           <br><br><br><br>
           </div>
           <table border="2" class="table table-striped ">
    <tr>
        <td>
            <div>
                <h2>Les réservations</h2>
                <b style="display: inline-block;">
                    Il y a 
                    <?php 
                        $i = 0;
                        foreach ($res2 as $resco) {
                            if ($resco['confirmation'] == 0) {
                                $i++;
                            }
                        }
                        echo '<b style="color:red">' . $i . '</b>';
                    ?> 
                    nouvelles réservations.
                </b>
            </div>
        </td>
        <td>
            <div>
                <h2>Les problèmes client</h2>
                <b>
                    Il y a 
                    <?php
                        $s = 0;
                        foreach ($les_utilisateurs as $utilisateur) {
                            $s++;
                        }
                        echo '<b style="color:red">' . $s . '</b>';
                    ?> 
                    nouvelles problèmes client.
                </b>
            </div>
        </td>
    </tr>
</table>

                

       </div>
   </div>


   
</body>
</html>