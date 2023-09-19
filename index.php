<!DOCTYPE html>

<html lang="en">

<head>
   <title>Potluck Sign In</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="style3.css">
</head> 
<body>
    <h3>Please log in to contribute to the potluck</h3>
    <form method="post">
        <div>Username: <input type="text" name="username" autofocus required> </div>
        <div>Password: <input type="password" name="password" required> </div>
        <input type="submit" name="Login" id="Login" value="Login">
        <input type="reset" name="Reset" id="Reset" value="Reset">
    </form>
    </body>
</html>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	session_start();

	// Get values submitted from the login form
	$username = $_POST["username"];
	$password = $_POST["password"];

	if ($username == "potluck" && $password == "feedMeN0w") {

		$_SESSION["username"] = $username;

		header("Location: potluck.php");
		die;
	}
	else {
		echo "<p>Incorrect username or password.</p>";
	}

}

?>