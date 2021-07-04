<?php

session_start();

$message="";

if(count($_POST)>0)
{
//making connection...
$con = mysqli_connect('localhost','root','','assignments') or die('Unable To connect');

$result = mysqli_query($con,"SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password = '".   $_POST["password"]."'");

$row  = mysqli_fetch_array($result);

if(is_array($row)) {

$_SESSION["id"] = $row['id'];

$_SESSION['username'] = $row['username'];

} else {

$message = "Invalid Username or Password!";

}
}
if(isset($_SESSION["id"])) {

$logincount ++;

header("Location:program31.php");
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>login form</title>
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">


<style type="text/css">

body{
background-color: white;
}

.frame{

margin-top: 250px;
background-color: white;
margin-left: 500px;
margin-right: 400px;
border:  3px solid skyblue;
border-radius:  24px;
}

.container{

margin-left: 250px;

}
table,th,tr{

border: 3px solid black;
border-radius: 10px;

}
table,th{

text-align: center;
}
table{

margin-top: 50px;
}


</style>

</head>

<body>

<div class="frame">

<div class="container">

<form action="" method="post">

<header><h1>LOGIN FORM</h1></header>
<table>
<tr>
<div>
<th colspan="2">USER LOGIN FORM</th>
</tr>

<tr>
<td><label>USERNAME:</label></td>

<td><input type="text" name="username" required></td>

</tr>


<tr>
<td><label>PASSWORD:</label></td>

<td><input type="PASSWORD" name="password" required></td>

</tr>

<tr>


<th colspan="2"><input type="submit" name="submit" value="login">
 <input type="reset" > </td>

</tr>

</div>
</table>

<?php   echo " " . $message; ?>

</form>
</div>

</div>

</body>
</html>