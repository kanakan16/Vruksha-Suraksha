<?php 
	//get values of username and password
	$username = "";
	$password= "";
	$usernameErr = "";
	$passwordErr = "";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$usernameSuccess = "";
	$passwordSuccess = "";
	
	//connect to server and db
	define('DB_NAME','government');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_HOST','localhost');

	$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	if(!$link)
	{
		die('could not connect:'.mysql_error());
	}
	$db_selected=mysql_select_db(DB_NAME,$link);
	if(!$db_selected)
	{
		die('can\'t use'.DB_NAME.':'.mysql_error());
	}
	echo "<h2 style=color:#E82102;font-family:High Tower Text;font-weight:bold;text-align:left;text-decoration:;></h2><br>";
	
	/*//emial validation
	if (empty($_POST["username"])) {
    $usernameErr = "Email Id is required";
  } else {
    $username = test_input($_POST["username"]);
	
    // check if e-mail address is well-formed
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
		$username = "";
      $usernameErr = "Invalid email format"; 
    }
  }
  
  //password validation
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
	
    
  }*/
  
	$result = mysql_query("select * from admin where username = '$username' and password = '$password'")
				or die("Failed to query database ".mysql_error());
				
	$row = mysql_fetch_array($result);
	if ( $row['username'] == $username && $row['password'] == $password )
	{
		if (empty($_POST["username"]) && empty($_POST["password"]) ) {
			$usernameErr = "Email Id is required";
			$passwordErr = "Password is required";
			
			echo "<div class=row>
					<div class=col-md-6>
						
						<h2 style=color:#E82102;font-family:High Tower Text;font-weight:bold;text-align:left;text-decoration:;>Empty Input</h2><br>
						<p>Failed To Login.</p><br>
						<p>EmailId & Password Is Required.</p><br>
						<p><a href=admin.php>Go Back</a></p>
					</div>
					<div class=col-md-6>
						<img src=images/error.png class=img-circle  width=400px >
					</div>
				</div>	";
			
			
		}
		else{
			
			echo "<div class=row>
					<div class=col-md-6>
						
						<h2 style=color:#E82102;font-family:High Tower Text;font-weight:bold;text-align:left;text-decoration:;>Login Successfull</h2><br>
						<p>Welcome $row[username]</p>
						
						<p><a href=reports.php>Reports</a></p>
					</div>
					<div class=col-md-6>
						<img src=images/success.jpg class=img-circle  width=400px >
					</div>
				</div>	";
			
			
			
		}
	}
	else
	{
		echo " 
				<div class=row>
					<div class=col-md-6>
						
						<h2 style=color:#E82102;font-family:High Tower Text;font-weight:bold;text-align:left;text-decoration:;>Wrong Input</h2><br>
						<p>Failed to login</p><br>
						<p>Please Input A Valid EmailId & Password.</p><br>
						<p><a href=admi.php>Go Back</a><p>
					</div>
					<div class=col-md-6>
						<img src=images/error.png class=img-circle  width=400px >
					</div>
				</div>	";
				
				
		
	}				
  
 /* function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}  */
	
	
	
?>	s