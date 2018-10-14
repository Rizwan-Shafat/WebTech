<?php

session_start();

echo "<h1>Registration Successful</h1><br>";
$user=$_POST['un'];
$full=$_POST['fn'];
$email=$_POST['ue'];
$phone=$_POST['up'];
$pass=$_POST['pw'];
$conpass=$_POST['cpw'];
$gender=$_POST['gen'];
$edu=$_POST['edu1'];
echo "Username:".$user."<br>";
echo "Fullname:".$full."<br>";
echo "Email:".$email."<br>";
echo "Phone:".$phone."<br>";
echo "Password:".$pass."<br>";
echo "Confirm Password:".$conpass."<br>";
echo "Gender:".$gender."<br>";
echo "Education: ";
echo "<ul>";
foreach($edu as $e)
{
	echo "<li>".$e."</li>";
}
echo "</ul>";
?>