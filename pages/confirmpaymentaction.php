<?php
    $connection= mysqli_connect('localhost','root','','transport');
    session_start();

    $id= $_GET['id'];

    $sql= "UPDATE `voyagecout` SET `paye`='1' WHERE reser_id='$id'";
    $sql2= "UPDATE `reservation` SET `paye`='1' WHERE reser_id='$id'";

    $result= mysqli_query($connection,$sql);
    $result= mysqli_query($connection,$sql2);

    if($result){
        header ('Location: bookinglist.php');
    }
?>