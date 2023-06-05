<?php 
require_once('admin_dbcon.php');




if(isset($_POST['submit-btn'])){
	$sname=$_POST['sname'];
	$username=$_POST['username'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$pasword=$_POST['pasword'];
	$c_password=$_POST['c_password'];

		if($pasword==$c_password){
			
			$insert="INSERT INTO `reg_form`(`sname`, `username`, `mobile`, `email`, `pasword`, `c_password`) VALUES ('$sname','$username','$mobile','$email','$pasword','$c_password')";
			if(mysqli_query($admin_dbcon,$insert)){
				echo "<script>
				
				alert('successfully inserted');
				
				
				</script>";
			}
			
		}
else{
	echo "do not match";
	
}
	
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="reg_form">
	 
	 <h1>FCTI SOFTWARE REGISTER</h1> 
	 
	 <form action="" method="POST">
	   
	   <input type="text" placeholder="Enter your name" name="sname" id="name" required />
	   <input type="text" placeholder="User name" name="username" id="user name" required />
	   <input type="text" placeholder="Mobile" name="mobile" id="mobile"/>
	   <input type="text" placeholder="Email" name="email" id="email"/>
	   <input type="text" placeholder="Pasword" name="pasword" id="pasword"/>
	   <input type="text" placeholder="Confirm Password " name="c_password" id="confirm     password"/>
		<input type="submit" value="Submit" id="submit-btn" name="submit-btn" />
	
	 </form>
	 
	 </div>
	 
</body>
</html>