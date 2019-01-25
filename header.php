<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
		<div class="left">
			<a href="index.php"><h1>Mywebsite</h1></a>		
		</div>
		<div class="right">
			<a href="index.php" class="act"><span >Home</span></a>
			<a href="Aboutus.php"><span>About us</span></a>
 			
			<a href="contacts.php"><span>Contacts</span></a>
            
            <?php if(isset($flg) && $flg==1){ ?>
				<div class="dropdown">
	            <a href="#" class="" >Logout</a>
	            <div class="dropdown-content">
            <?php } else { ?>
	            <div class="dropdown">
	            <a href="#" class="dropbtn">Login and Registration</a>
	            <div class="dropdown-content">
                <a href="login.php"><span>Login</span></a>
	<a href="registration.php"><span>Registration</span></a>
			<?php } ?>
    </div>
</div> 			

			
		</div>