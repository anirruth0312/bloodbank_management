<?php

    require_once("crudcon.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['Donar_id']) || empty($_POST['Phone_no']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $Donar_id = $_POST['Donar_id'];
            $Phone_no = $_POST['Phone_no'];
           

            $query = " insert into phone (Donar_id, Phone_no) values('$Donar_id','$Phone_no')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:insert1.php");
    }



?>