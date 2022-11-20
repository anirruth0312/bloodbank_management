<?php
require_once("crudcon.php");
    $Donar_id = $_GET['GetID'];
    $query = " select * from phone where Donar_id='".$Donar_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Donar_id = $row['Donar_id'];
        $Phone_no = $row['Phone_no'];
       
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                        <form action="update.php?ID=<?php echo $Donar_id ?>" method="post">
                                <input type="int" class="form-control mb-2" placeholder="Phone_no" name="Phone_no" value="<?php echo $Phone_no ?>">
                                <input type="int" class="form-control mb-2" placeholder="Donar_id" name="Donar_id" value="<?php echo $Donar_id ?>">
                                
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                    </div>
            </div>
        </div>
    
</body>
</html>