 

<?php 
	
    $connection=mysqli_connect("localhost","root","","transport");

    session_start();require('auth.php');
	
	$requete="select * from contclient";
	$resultat=$connection->query($requete);
	$les_utilisateurs=$resultat;

?>
   <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
        }
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
         <title> Problem client</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css"> -->->
    
    <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" />
 
    </head>
    
	<body>
		<?php include('navbar_admin.php') ?>
		<br> 
		<div class="container">
        <div class="row">
             
            <div class="col-md-18">
                <div class="page-header">
                    <h1 style="text-align: center;">Liste des problemes concerne Mot de passe </h1></div>
				<div class="panel-body">
                    
				<table style="width: 120%;" id="myTable" class="table table-striped table-bordered">
						<thead>
							<th>ID</th>
							<th>Nom</th>
							<th>prenom</th>
							<th>email </th>
                            <th>Copier </th>
							<th>Commentaire</th>
                            <th>Action</th>
							
						</thead>
							
						<tbody>
						<?php foreach($les_utilisateurs as $utilisateur){ ?>
								<tr>
									<td><?php echo $utilisateur['id'] ?></td>
									<td><?php echo $utilisateur['nom'] ?></td>
									<td> <?php echo $utilisateur['prenom'] ?></td>
                                    <td id="cell1"> <?php echo $utilisateur['email'] ?></td>
                                    <td><button class="copy-button" onclick="copyText('cell1')">Copier</button></td>
									
                                    <td> <?php echo $utilisateur['prob'] ?></td>
										<td>	<a onclick='return confirm("Etes-vous sur???")'
													href="delete_contact.php?id=<?php echo $utilisateur['id'] ?>"
												<span class="btn btn-danger">delete</span> 
											</a>
										
										</td>
									<?php } ?>
									
									
								</tr>
							 
						</tbody>
					</table>
				</div>
			</div>
			 
			
		</div>

  
	</body>

</html>