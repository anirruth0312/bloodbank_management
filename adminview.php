<?php
  require_once ("config.php");
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
   
   
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
          Go back
        </button></a
      >
 
    </div>
    <form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
          
    </form>
  </body>
</html>
