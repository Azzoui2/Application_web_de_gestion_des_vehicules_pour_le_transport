<?php
 
 if(!isset($_SESSION['username']))
 {
    $_SESSION['auth']=$_SERVER['REQUEST_URI'];
    header('location:index.php');
 }
 ?>