<?php
 echo "<h1>Registration Successful</h1><br>";
$user=$_POST['un'];
$full=$_POST['fn'];
$email=$_POST['ue'];
$phone=$_POST['up'];
$pass=$_POST['pw'];
$conpass=$_POST['cpw'];
$gender=$_POST['gen'];
$edu=$_POST['edu1'];
echo "Username:".$user;
echo "<br>Fullname:".$full;
echo "<br>Email:".$email;
echo "<br>Phone:".$phone;
echo "<br>Password:".$pass;
echo "<br>Confirm Password:".$conpass;
echo "<br>Gender:".$gender;
echo "<br>Education: ";
echo "<ul>";
foreach($edu as $ed)
{
	echo $ed."<li>".$ed."</li>";
}
echo "<ul>";
?>