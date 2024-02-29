 

<?php  
	
   $msg=@$_SESSION['msg']; 
   echo @$msg;
    $connection=mysqli_connect("localhost","root","","transport");

    session_start();require('auth.php');
	
	$requete2="select * from client";
	$resul=$connection->query($requete2);
	$les=$resul;

?>
   <style>
       
      .copy-button {
            cursor: pointer;
            background-color: lightblue;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
        }
    </style>
    <script>
        function copyText(elementId) {
            var text = document.getElementById(elementId).innerText;
            var tempInput = document.createElement("input");
            tempInput.style = "position: absolute; left: -1000px; top: -1000px";
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
        }
    </script>
<html>
	<head>
		<title>utilisateurs</title>
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
    
	<body>
		<?php include('navbar_admin.php') ?>
		<br> 
		<div class="container">
        <div class="row">
             
            <div class="col-md-12">
                <div class="page-header">
                    <h1 style="text-align: center;">Liste des utilisateurs</h1></div>
				 
				  <div class="input-group">
                  <span class="input-group-addon"><b>Rechercher par Nom</b></span>
                  <input type="text" id="inputRecherche" placeholder="Ecrire un email" onkeyup="rechercher()" class="form-control">
                </div>  <br>
                <?php if(@$_SESSION['username']=="admin"){?>
				<a class="btn btn-primary" href="new_utilisateur.php">Nouveal utilisateur</a>
			<?php } ?>
				<table id="tableau" style="width: 120%;" id="myTable" class="table table-striped table-bordered">
						<thead>
							<th>ID</th>
							<th>Nom</th>
							<th>Login</th>
							<th>copier </th>
							<th style="width:6%;">Email</th>
							<th style="width: 12%;">Envoyer Email </th>
							<?php if(@$_SESSION['username']=="admin"){?>
								<th style="width: 13%;">ACTIONS</th
							<?php } ?>
							
						</thead>
							
						<tbody>
						<?php foreach($les as $utilisateur){ ?>
								<tr>
									<td><?php echo $utilisateur['client_id'] ?></td>
									<td><?php echo $utilisateur['nom'] ?></td>
									<td id="cell1"><?php echo 'username:'.$utilisateur['username'].' & password : '.$utilisateur['password'] ?></td>
									<td><button class="copy-button" onclick="copyText('cell1')">Copier</button></td>
									<td><?php echo $utilisateur['email'] ?></td>
									<td><?php           echo '<a href="' .  'mailto:' .$utilisateur['email']. '">Envoyer un mail</a>'; ?></td>
									<?php if(@$_SESSION['username']=="admin"){?>
										<td>
											<a href="edit_utilisateur.php?id=<?php echo $utilisateur['client_id']?>"
												<span class="btn btn-primary" >edit</span> 
											</a>
											&nbsp&nbsp
											<a onclick='return confirm("Etes-vous sur???")'
													href="delete_utilisateur.php?id=<?php echo $utilisateur['client_id'] ?>"
												<span class="btn btn-danger">delete</span> 
											</a>
										
										</td>
									<?php } ?>
									
									
								</tr>
							<?php } ?>
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
        var td = tr[i].getElementsByTagName("td")[4];
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
	</body>

</html>