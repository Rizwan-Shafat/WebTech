<?php
$nameErr = $usernameErr = $emailErr = $passwordErr = $confirmpasswordErr = $genderErr = $educationErr = "";
$name = $username = $email = $password = $confirmpassword = $gender = $education = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$name)) {
      $nameErr = "Give a valid name";
    }
  }
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z1-9._-]*$/",$username)) {
      $usernameErr = "Give a valid username";
    }
  }
 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html>
<head>
<title>Shafat</title>
</head>
<body>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table style="text-align:left;">
<tr>
<th>Name:</th>
<th><input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span></th>
</tr>
<tr>
<th>Username:</th>
<th><input type="text" name="username" value="<?php echo $username;?>">
<span class="error">* <?php echo $usernameErr;?></span></th>
</tr>
<tr>
<th>Email:</th>
<th><input type="text" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span></th>
</tr>
<tr>
<th>Password:</th>
<th><input type="text" name="password"></th>
</tr>
<tr>
<th>Confirm password:</th>
<th><input type="text" name="confirmpassword"></th>
</tr>
<tr>
<th>Gender:</th>
<th><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="others">Others</th>
</tr>
<tr>
<th>Education:</th>
<th><input type="checkbox" name="education" value="SSC">SSC
<input type="checkbox" name="education" value="HSC">HSC
<input type="checkbox" name="education" value="BSC">BSC
<input type="checkbox" name="education" value="MSC">MSC</th>
</tr>
<tr>
<th><input type="submit"></th>
</tr>
</table>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$gender=$_POST['gender'];
	$education=$_POST['education'];
	echo "Name:".$name."<br>";
	echo "Username:".$username."<br>";
	echo "Email:".$email."<br>";
	echo "Password:".$password."<br>";
	echo "Confirm passwprd:".$confirmpassword."<br>";
	echo "Gender:".$gender."<br>";
	echo "Education:".$education;
	echo "<ul>";
	foreach ($education as $e)
	{
		echo "<li>".$e."<li>";
	}
	echo "</ul>";
}
?>
</body>
</html>