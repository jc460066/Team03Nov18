<?php

session_start();
include_once('include/config.php');
if (isset($_SESSION['valid_user'])) {
    header("location: member_only.php");
}
//make the database connection
$conn  = db_connect();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $userName = $conn -> real_escape_string($_POST['userName']);
    $password = $conn -> real_escape_string($_POST['password']);
	$sql = "select * from users where userName='$userName' and password='$password'";
    $result = $conn -> query($sql);
    $numOfRows = $result -> num_rows;
    $row = $result -> fetch_assoc();
    if ($numOfRows == 1) {
        $_SESSION['valid_user'] = $userName;
        //get the first word of the name and uppercase the first letter
        $tempStr = trim($row["lastName"]);
        $tempArr = explode(' ',$tempStr);
        $_SESSION['lastName'] = ucwords($tempArr[0]);
        header("location: member_only.php");
    }else {
        $error = 'Your Login Name or Password is invalid';
    }
}
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>My Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Password Matching Validation */
	if($_POST['password'] != "admin"){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	

	

	if(!isset($error_message)) {
		session_start();  
        $_SESSION['sess_user']=$user;  
      
        /* Redirect browser */  
        header("Location: welcome.php");  
          
		} else {
			$error_message = "Problem in login. Try Again!";	
		}
	
}
?>
<style>
body{
	width:610px;
	font-family:calibri;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background: #fff;
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
</style>




</head>
<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0" height="100%"  class="page">
  <tr>
    <td width="1000" height="90" valign="top" class="top">
		<?php include("header.php"); ?>
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
    <td width="1000" valign="top" height="25"></td>
  </tr>
  <tr>
    <td width="1000" height="100" valign="top">
		
			<table width="1000" border="0" cellspacing="0" cellpadding="0" height="100">
			  <tr>
				<td width="1000" height="100" valign="top" align="center">
 <form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>User Name</td>
<td><input type="userName" class="demoInputBox" id="userName" name="userName" required <?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>

</tr>

<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" id="password" name="password" ></td>
</tr>

<tr>
<td colspan=2>
<input name="submit" type="submit" class="btnRegister" id="submit" value="submit"></td>
</tr>
</table>
</form>

				</td>
				
			  </tr>
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
		<?php include("footer.php"); ?>
	</td>
  </tr>
  
</table>


</body>
</html>
