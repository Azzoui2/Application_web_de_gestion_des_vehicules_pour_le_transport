<?php  require('auth.php');
    $data1= $_POST['ch_nom1'];
    $data2= $_POST['drmobile1'];
    $data3= $_POST['chcni1'];
    $data4= $_POST['chlicense1'];
    $data5= $_POST['chlicensevalid1'];
    $data6= $_POST['chaddress1'];
    $data7= $_POST['chphoto1'];  

    

    $connection=mysqli_connect("localhost","root","","transport");

    if(isset($_POST['ch_nom1']))
    {
        //$sql= "INSERT INTO `status`(`post_id`, `name`, `status`) VALUES ('','$data1','$data2')";
        
       // $sql= "INSERT INTO `chauffeur`(`chauff_id`, `ch_nom`, `drmobile`, `chcni`, `chlicense`, `chlicensevalid`, `chaddress`, `chphoto`) VALUES ('','$data1','$data2','$data3','$data4','$data5','$data6','$data7'"; 
        
        $sql= "INSERT INTO `chauffeur`(`chauff_id`, `ch_nom`, `drmobile`, `chcni`, `chlicense`, `chlicensevalid`, `chaddress`, `chphoto`) VALUES ('','$data1','$data2','$data3','$data4','$data5','$data6','$data7')";
        
        
        
        
        $result = mysqli_query($connection,$sql);
        
        if ($result)
             echo "done";
         else
             echo "not done"; 
        
         //$data1= $_GET['namee'];
       
        
    } 
	
?>