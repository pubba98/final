<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<?php
require('db.php');

$server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "t8jnow42fmp1smpt";
$dbpassword = "fdavedw769oxw5pd";
$dbname = "k2nfay1osz1i59kc";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
       
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
	
        //escapes special characters in a string
 	$username = mysqli_real_escape_string($con,$username);
 	
 	$password = stripslashes($_REQUEST['password']);
 	$password = mysqli_real_escape_string($con,$password);
 	
 	//Checking is user existing in the database or not
        $query = "SELECT * FROM users WHERE username='$username'
		and password='$password'";
 	
 	$result = mysqli_query($conn,$query) or die("error : " . mysqli_error($conn));
 
 	$rows = mysqli_num_rows($result);

 	
 	
 	
 	 if ($result->num_rows == 1) {
     
        while ($row = $result->fetch_assoc()) {
   
            //start a session
            @session_start();
            //set a session variable
            $_SESSION['loggedin'] = true;
            $_SESSION["userID"] = $row["id"];
            $_SESSION["firstname"] = $row["firstname"];
   		
   		header("Location: ../index.php");	         
        }
    } else {
    
    echo "<div class='form'>
			<h3>Username/password is incorrect.</h3>
			<br/>Click here to <a href='login.php'>Login</a>
		</div>";
     }

 	
 	
}else{
?>
	<div class="form">
	<h1>Log In</h1>
	<form action="" method="post" name="login">
	<input type="text" name="username" placeholder="Username" required />
	<input type="password" name="password" placeholder="Password" required />
	<input name="submit" type="submit" value="Login" />
	</form>
	<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
	</div>
	<div class="form">
<a href= "../index.php" ><input type="submit" name="" value="    Back to Home Page    " /></a>

</form>

	<?php } 
?>
</body>
</html>
