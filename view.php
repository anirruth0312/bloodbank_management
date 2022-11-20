<?php 

    require_once("crudcon.php");
    $query = " select * from phone ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
        <a href="http://localhost/DBMSPROJECT/insert.php">GO BACK TO INSERTING</a>
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> phone </td>
                                <td> donar id </td>
                               <td> Edit  </td>
                                <td> Delete </td>
                            </tr>
<?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Donar_id = $row['Donar_id'];
                                        $Phone_no = $row['Phone_no'];
                                       
                            ?>
                                    <tr>
                                        <td><?php echo $Phone_no ?></td>
                                        <td><?php echo $Donar_id ?></td>
                                        <td><a href="you.php?GetID=<?php echo $Donar_id ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $Donar_id ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>