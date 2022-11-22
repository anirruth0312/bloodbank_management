<?php 
    require_once("crudcon.php");
    if(isset($_POST['update']))
    {
        $Donar_id = $_POST['Donar_id'];
        $Phone_no = $_POST['Phone_no'];
        $query = " update Phone set Phone_no = '".$Phone_no."', Donar_id='".$Donar_id."' WHERE  Phone_no='".$Phone_no."'";
        $query1 = " update Phone set Phone_no = '".$Phone_no."', Donar_id='".$Donar_id."' WHERE  Donar_id='".$Donar_id."'";
        $result = mysqli_query($con,$query);
        $result1 = mysqli_query($con,$query1);
        if($result and $result1)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }


?>