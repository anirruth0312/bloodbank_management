<?php
require_once ("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  // echo"hi";die;
  $userid=$_POST["uid"];
  $sql="select if(COUNT(*)>0,TRUE,FALSE) as response from donar where Donar_id=$userid";
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo "";
      if($row["response"]==1)
      {
        echo "gfd";
        header("Location: home.php");
      }
      else{
        echo '<script type="text/javascript">
       window.onload = function () { alert("Invalid id"); } 
</script>';
      }
    }
  }
 
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
      .type_of {
        display: flex;
        width: 32%;
        margin: auto;
      }
      a {
        width: 100%;
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
    <div class="type_of">
      <a href="admin.php"
        ><button
          style="background-color: rgb(19, 19, 200); border: 2px solid white"
        >
          Admin
        </button></a
      >
      <a href="user.php">
        <button
          style="background-color: rgb(232, 43, 43); border: 2px solid white"
        >
          User
        </button></a
      >
    </div>
    <form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
      <div class="container">
        <h2>Userlogin</h2>
        <br /><br />
        <label for="uname"><b>User Id</b></label>
        <input type="text" placeholder="Enter Username" name="uid" required />
        <button type="submit">Login</button>

        <!-- <u><a href="usersignup.php">Click here to signup</a></u> -->
      </div>
    </form>
  </body>
</html>
