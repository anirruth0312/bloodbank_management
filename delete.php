<?php 
    require_once("crudcon.php");
    if(isset($_GET['Del']))
         {
             $Phone_no = $_GET['Del'];
             $query = " delete from Phone where Phone_no = '".$Phone_no."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("Location: view.php");
             }
             else
             {
                 echo 'Please Check Your Query';
             }
        }
         else
         {
            header("Location: view.php");
         }

         ?>