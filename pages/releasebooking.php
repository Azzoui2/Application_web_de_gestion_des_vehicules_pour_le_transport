<?php 
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','transport'); 

    $sql1="SELECT `veh_reg`, `chauff_id` FROM `reservation` WHERE reser_id='$id'";
    $result1=mysqli_query($conn,$sql1);
    $row= mysqli_fetch_assoc($result1);
    $veh_reg=$row['veh_reg']; 
    $chauff_id=$row['chauff_id'];
echo $veh_reg;
echo $chauff_id;
    
    
    
   $sql="UPDATE `vehicle` SET `veh_available`='0' WHERE veh_reg='$veh_reg'; UPDATE `chauffeur` SET `ch_available`='0' WHERE chauff_id='$chauff_id'; UPDATE `reservation` SET `finished`='1' WHERE reser_id='$id'";
    //echo $sql;
   $result=mysqli_multi_query($conn,$sql);
   if($result){
       header("Location: bookinglist.php");
   }else{
         echo "Not freed";
   }
   
?>