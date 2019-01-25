<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');

//Password Matching Validation 
if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 	
}

/*if ($_POST["password"] === $_POST["confirm_password"]) {
}else {
	$error_message = 'Passwords should be same<br>'; 
}*/

if(!isset($error_message)) {
	$success_message="done";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    
    <title>My Website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
     <meta http-equiv="Content-Style-Type" content="text/css">
     <LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
</head>
<body onLoad="run_first()">
<table width="1000" border="0" cellspacing="0" cellpadding="0" height="100%"  class="page">
  <tr>
    <td width="1000" height="90" valign="top" class="top">
<?php include("header.php") ?>
   </td>
  </tr>
  <tr>
    <td width="1000" height="295" valign="top" class="header">	
	</td>
  </tr>
  <tr>
    <td width="1000" valign="top" height="30"></td>
  </tr>
  <tr>
    <td width="1000" class="line_border" valign="top"></td>
  </tr>
<tr>
    <td width="1000" valign="top" height="30"></td>
  </tr>
  <tr>
    <td width="1000" height="100" valign="top">
		<table width="1000" border="0" cellspacing="0" cellpadding="0" height="100">
  <tr>
<?php
if(isset($_POST['userName'], $_POST['firstName'], $_POST['lastName'], $_POST['userEmail'],$_POST['password'],$_POST['gender'])) {
    //make the database connection
    $conn  = db_connect();
    $userName = $conn -> real_escape_string($_POST['userName']);
    $firstName = $conn -> real_escape_string($_POST['firstName']);
	$lastName = $conn -> real_escape_string($_POST['lastName']);
	$userEmail = $conn -> real_escape_string($_POST['userEmail']);
    $password = $conn -> real_escape_string($_POST['password']);
    $gender = $conn -> real_escape_string($_POST['gender']);
    $sql = "insert into users (userName, firstName, lastName, userEmail, password,gender) 
			VALUES ('$userName', '$firstName','$lastName','$userEmail', '$password','gender')";
?>
</table>
	</td>
  </tr>
  <tr>
    <td width="1000" valign="top" height="30"></td>
  </tr>
  <tr>
    <td width="1000" class="line_border" valign="top"></td>
  </tr>
<tr>
    <td width="1000" valign="top" height="30"></td>
  </tr>
  <tr>
    <td width="1000" height="120" valign="top" class="bg_brown">
		
<?php  include("footer.php") ?>
	</td>
  </tr>
</table>
</body>
</html>
