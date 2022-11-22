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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
        <a  href="http://localhost/DBMSPROJECT/insert.php"><h2 style="margin-top:15px;text-align:center;">GO BACK TO INSERTING</h2></a>
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                              <td> PHONE </td> 
                                <  <td> DONAR ID </td> 
                                <td> EDIT  </td> 
                              <td> DELETE </td> 
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
                                        <td><a href="you.php?GetID=<?php echo $Phone_no ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $Phone_no ?>">Delete</a></td>
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