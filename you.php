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
    <link rel="stylesheet" href="CSS/bootstrap.css"/>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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