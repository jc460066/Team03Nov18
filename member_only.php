<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
	$flg=0;
if(isset($_SESSION['valid_user'])){
	$flg=1;
}else{ $flg=0;}	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <title>my website</title>
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
	
   
        <h1>Member Page</h1>
        <?php
        // check session variable
        if (isset($_SESSION['valid_user']))
        {
            //make the database connection
            $conn  = db_connect();
            $user_check = $_SESSION['valid_user'];

            //make a query to check if a valid user
            $ses_sql = "select userName from users where userName='$user_check'";
            $result = $conn -> query($ses_sql);
            if ($result -> num_rows == 1) {
                //$row = $result -> fetch_assoc();
                //$name = $row['lastName'];
                //echo "<p>Welcome <b>$lastName!</b></p>";
                $lastName = $_SESSION['lastName'];
                echo "<p>Welcome <b>$lastName</b></p>";
                echo "<p><a href=\"logout.php\">Logout</a></p>";
            }
            else {
                echo "<p>Something is wrong.</p>";
                echo "<p><a href=\"login.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">Login</a></p>";
            }
        }
        else
        {
            echo "<p>You are not logged in.</p>";
            echo "<p><a href=\"login.php\" id=\"4\" 
			onClick=\"nav_item_selected(4)\">Login</a></p>";
        }
        ?>
    </div>
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