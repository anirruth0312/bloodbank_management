<?php
  require_once ("config.php");
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $userid=rand(100000,999999);
    $name=$_POST["uname"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
    $address=$_POST["address"];
    $phone_no=$_POST["phno"];
    $recept_id=$_POST["rec_id"];
    $sql="INSERT INTO `donar` (Donar_id,DName,Dsex,DAddress,recept_id) VALUES($userid,$name,$age,$gender,$address,$recept_id);";
    mysqli_query($con,$sql);   
     
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        font-size: 20px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      button {
        background-color: #04aa6d;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.8;
      }

      .container {
        padding: 16px;
        margin: auto;
      }
      form {
        margin-top: 100px;
        margin: auto;
        width: 30%;
        border: 2px solid #04aa6d;
      }
 
    </style>
  </head>
  <body style="margin: 0; padding: 0">
    <h1 style="text-align: center; color: brown">
      Bloodbank Management system
    </h1>
    <p>
      ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    </p>
 
    </div>
    <form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
      <div class="container">
        <h2>User Signup</h2>
        <br /><br />
        <label for="uname"><b>Name</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required />
        <label for="age"><b>Age</b></label>
        <input type="text" placeholder="Enter Age" name="age" required />
        <label for="age"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address" required />
        <label for="phno"><b>Phone number</b></label>
        <input type="text" placeholder="Enter phone number" name="phno" required />
        <label for="gender"><b>Gender</b></label>
        <input type="radio" name="gender" value="M">Male</input>
        <input type="radio" name="gender" value="F">Female</input><br/><br/>
        <label for="phno"><b>Receptionist Id</b></label>
        <input type="text" placeholder="Enter receptionist id " name="rec_id" required />
        <button type="submit">Submit</button>
      </div>
    </form>
  </body>
</html>
