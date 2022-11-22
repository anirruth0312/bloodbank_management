<?php
  require_once ("config.php");
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $userid=$_POST["donarid"];
    $bloodtype=$_POST["bloodtype"];
    $blood_id=$_POST["bloodid"];
    $amount=$_POST["amountofblood"];
    $bankid=$_POST["bankid"];
    $stmt4 = $con->prepare("insert into blood(BloodId,bloodType,cost,donarId,BloodBankId) values(?,?,?,?,?)");
    $stmt4->bind_param("isiii",$blood_id,$bloodtype,$amount,$userid,$bankid);
    $execval = $stmt4->execute();
    echo '<script type="text/javascript">
       window.onload = function () { alert("Successfully Donated"); } 
</script>';
header("Location: admin.php");
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
    <hr>

    </div>
    <form method="post">
      <div class="container">
        <h2>Donor Details</h2>
        <br /><br />
        <label for="bloodtype"><b>Blood Type</b></label>
        <input type="text" placeholder="Enter Blood Type" name="bloodtype" required />

        <label for="bloodid"><b>Blood ID</b></label><br/><br/>
        <input  style="height:45px;width:400px;font-size:20px" type="number" placeholder="Enter Blood ID" name="bloodid" required /><br/><br/>
        <label  for="donarid"><b>DonarID</b></label><br/><br/>
        <input  style="height:45px;width:400px;font-size:20px" type="number" placeholder="Enter Donar ID" name="donarid" required /><br/><br/>
        <label for="amountofblood"><b>Amount of Blood</b></label><br/><br/>
        <input  style="height:45px;width:400px;font-size:20px" type="number" placeholder="Enter amount of blood" name="amountofblood" required /><br/>
        <label for="bankid"><b>Blood Bank ID</b></label><br/><br/>
        <input  style="height:45px;width:400px;font-size:20px" type="number" placeholder="Enter Bank ID" name="bankid" required /><br/>
        <button type="submit">Donate</button>
      </div>
    </form>
  </body>
</html>