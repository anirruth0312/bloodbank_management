<?php 
    require_once("crudcon.php");
    if(isset($_GET['Del']))
         {
             $Donar_id = $_GET['Del'];
             $query = " delete from Phone where Donar_id = '".$Donar_id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:view.php");
             }
             else
             {
                 echo 'Please Check Your Query';
             }
        }
         else
         {
            header("location:view.php");
         }

         ?>