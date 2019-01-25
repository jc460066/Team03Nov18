<?php
//include('kcaptcha/kcaptcha.php');
?>
<?php
if(!empty($_POST["selfCC"])) {

	if($_POST["posEmail"]=="")
$error_message = "email field is required";

if($_POST["posText"]=="")
$error_message = "Comment is required ";
if($_POST["posName"]=="")
$error_message = "Name is required ";
	

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["posEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

	
	

	if(!isset($error_message)) {
		$success_message="done";
		} else {if(empty($error_message)) 
			$error_message = "Problem in contact form. Try Again!";	
		}
	
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>My Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
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
	background: #fff;//#d9eeff;
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
    <td width="1000" height="90" valign="top" class="top"><?php include("header.php");?>
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
				<td width="375" height="100" valign="top">
					<h2>Contact Address</h2>
					<img src="images/photo_contacts.jpg" border="0" align="left" class="contacts">
					
					<div class="clear"></div><br>
					<strong>The Companyname </strong><br>
					Address Line1<br>
					State<br>
					Telephone:    +611212121<br>
					E-mail: <a href="mailto:">dilbaghsingh@gmail.com</a>


				</td>
				<td width="25" height="100" valign="top">&nbsp;</td>
				<td width="585" height="100" valign="top">
				<h2>Contact Form</h2>
					 <p id="emailSuccess"><strong></strong></p>
				<p id="emailError"><strong style="color:#FF0000;"></strong>	</p>
				
		<form name="cForm" action="" method="post" id="cForm">
				<input type="hidden" name="act" value="y" />

	<table width="580">

<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
			<tr>
				<td width="130"><label for="posName" ><span class="red">*</span><span class="black">Your Name:</span></label></td><td><input  class="input_contact"  type="text" size="25" name="posName" id="posName" value="" /></td>
			</tr>
			<tr>
				<td><label for="posEmail"><span class="red">*</span>E-Mail Address:</label></td><td><input   class="input_contact" type="text" size="25" name="posEmail" id="posEmail" value=""/></td>
			</tr>
				<tr>
				<td><label for="posCountry">Country:</label></td><td><input  class="input_contact" type="text" size="25" name="posCountry" id="posCountry" value=""/></td>
			</tr>
			<tr>
				<td><label for="posRegard">Phone:</label></td><td><input  class="input_contact" type="text" size="25" name="posRegard" id="posRegard" value=""/></td>
			</tr>		
			<tr>
				<td><label for="posText"><span class="red">*</span>Comments:</label></td><td><textarea class="textarea_contact" rows="5" name="posText" id="posText"></textarea></td>
			</tr>
		<!--	<tr>
			<td><label for="posCaptcha"><span class="red">*</span>Security code:</label><br></td><td><input  class="input_contact" style="width:150px; float:left;" type="text" size="25" name="keystring" id="keystring" /> <img src="kcaptcha?<?php echo session_name()?>=<?php echo session_id()?>" style="height:35px; float:right">
		</td>
			</tr> -->
			<tr>
			<td>&nbsp;</td><td><input class="submit_registry" type="submit" name="selfCC" id="selfCC" value="Submit" /></td>
			</tr>
			</table>
			</form>
				</td>
				
				<td width="15" height="100" valign="top">&nbsp;</td>
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
		<?php include("footer.php");?>
	</td>
  </tr>
  <tr>
   
  </tr>
</table>


</body>
</html>
