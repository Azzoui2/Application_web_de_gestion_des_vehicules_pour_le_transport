

<!DOCTYPE html>
<html>
<head>
    <title>Exemple de bouton Copier</title>
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
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" /></head>
    
<body>
    <table>
        <tr>
            <td id="cell1">Contenu de la case 1</td>
            <td><button class="copy-button" onclick="copyText('cell1')">Copier</button></td>
        </tr>
        <tr>
            <td id="cell2">Contenu de la case 2</td>
            <td><button class="copy-button" onclick="copyText('cell2')">Copier</button></td>
        </tr>
    </table>
</body>
</html>







------------------------------------------

<?php
// Vérifier si le formulaire a été soumis
if(isset($_POST['copier'])){
  // Copier le texte dans le presse-papiers
  echo '<script> 
         function copyToClipboard(text) {
           const input = document.createElement("textarea");
           input.value = text;
           document.body.appendChild(input);
           input.select();
           document.execCommand("copy");
           document.body.removeChild(input);
         }
        </script>';
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bouton Copier en PHP</title>
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" /></head>
    
<body>
  <h1>Bouton Copier en PHP</h1>
  
  <table>
    <tr>
      <th>Donnée</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>Texte à copier 1</td>
      <td><button onclick="copyToClipboard('Texte ')">Copier</button></td>
    </tr>
    <tr>
      <td>Texte à copier 2</td>
      <td><button onclick="copyToClipboard('Texte ttttttt')">Copier</button></td>
    </tr>
  </table>
  
  <form method="post">
    <input type="hidden" name="copier">
    <button type="submit">Copier via PHP</button>
  </form>
  
</body>
</html>



<?php
// Vérifier si le formulaire a été soumis
if(isset($_POST['copier'])){
  // Copier le texte dans le presse-papiers
  echo '<script> 
         function copyToClipboard() {
           const input = document.getElementById("myInput");
           input.select();
           document.execCommand("copy");
         }
        </script>';
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bouton Copier en PHP</title>
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" /></head>
    
<body>
  <h1>Bouton Copier en PHP</h1>
  
  <input type="text" value="Texte à copier" id="myInput">
  <button onclick="copyToClipboard()">Copier</button>
  
  <form method="post">
    <input type="hidden" name="copier">
    <button type="submit">Copier via PHP</button>
  </form>
  
</body>
</html>


<?php
// Texte à copier
$texteACopier = "Texte à copier";

// Vérifier si le formulaire a été soumis
if(isset($_POST['copier'])){
  // Copier le texte dans le presse-papiers
  echo '<script> 
         function copyToClipboard() {
           const input = document.createElement("input");
           input.value = "'. $texteACopier .'";
           document.body.appendChild(input);
           input.select();
           document.execCommand("copy");
           document.body.removeChild(input);
         }
         copyToClipboard();
        </script>';
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bouton Copier en PHP</title>
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" /></head>
    
<body>
  <h1>Bouton Copier en PHP</h1>
  
  <button onclick="copyToClipboard()">Copier</button>
  
  <form method="post">
    <input type="hidden" name="copier">
    <button type="submit">Copier via PHP</button>
  </form>
  
</body>
</html>












<!DOCTYPE html>
<html>
<head>
  <title>Tableau avec recherche par nom</title>
 <link rel="shortcut icon" type="image/x-icon" href="index_image/logo2.ico" /></head>
    
<body>









<?php
// Adresse e-mail de destination
$destinataire = 'adresse@gmail.com';

// Générer le lien de messagerie
 

// Afficher le lien
echo '<a href="' .  'mailto:' . $destinataire. '">Envoyer un e-mail</a>';
?>

  <h1>Tableau avec recherche par nom</h1>
  
  <input type="text" id="inputRecherche" placeholder="Rechercher par nom" onkeyup="rechercher()">
  
  <table id="tableau">
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Date</th>
    </tr>
    <tr>
      <td>Dupont</td>
      <td>Jean</td>
      <td>01/01/1990</td>
    </tr>
    <tr>
      <td>Durand</td>
      <td>Marie</td>
      <td>15/05/1985</td>
    </tr>
    <tr>
      <td>Leblanc</td>
      <td>Pierre</td>
      <td>10/11/1993</td>
    </tr>
  </table>

  <script>
    function rechercher() {
      var input = document.getElementById("inputRecherche");
      var filter = input.value.toUpperCase();
      var table = document.getElementById("tableau");
      var tr = table.getElementsByTagName("tr");

      for (var i = 1; i < tr.length; i++) {
        var td = tr[i].getElementsByTagName("td")[0];
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
