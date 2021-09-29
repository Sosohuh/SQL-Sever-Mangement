<?php
  include ("connect.php");

  function getData() {
    $data = array();
    $data[1] = $_POST['id'];
    $data[2] = $_POST['fname'];
    $data[3] = $_POST['lname'];
    $data[4] = $_POST['dob']; 
    return $data;
  }
  if (isset($_POST['insert'])) {
    $info = getData();
    $insert = "INSERT INTO [userdata] ([ID]
    ,[FNAME]
    ,[LNAME]
    ,[DOB]) VALUES ('$info[1]', '$info[2]', '$info[3]', '$info[4]')";
    $result = odbc_exec($connection, $insert);
  }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <form method="POST" action="connect.php">
        <label>ID:</label><input type="text" name="id" id="id"><br>
        <label>First Name:</label><input type="text" name="fname" id="fname"><br>

        <label>Last Name:</label><input type="text" name="lname" id="lname"><br>

        <label>Date Of Birth</label><input type="text" name="dob" id="dob"><br>

        <button type="submit" name="insert">Submit</button>
    </form>
</body>
</html>
