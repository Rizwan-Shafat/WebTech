<?php?>

<html>
<head>
</head>
<body>

<form method="post" action="login.php">
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="un"/></td>
</tr>
<tr>
<td>Fullname:</td>
<td><input type="text" name="fn"/></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="ue"/></td>
</tr>
<tr>
<td>Phone:</td>
<td><input type="text" name="up"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" name="pw"/></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="text" name="cpw"/></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="gen" value="male"/>male
<input type="radio" name="gen" value="female"/>female
<input type="radio" name="gen" value="others"/>others</td>
</tr>
<tr>
<td>Education:</td>
<td><input type="checkbox" name="edu1[]" value="SSC"/>SSC
<input type="checkbox" name="edu1[]" value="HSC"/>HSC
<input type="checkbox" name="edu1[]" value="BSC"/>BSC
<input type="checkbox" name="edu1[]" value="MSC"/>MSC</td>
</tr>
<tr>
<td><input type="submit"></td>

</tr>
</table>
</form>
</body>
</html>