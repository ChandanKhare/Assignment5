
  
<?php 

$cookie_name = "user";

$cookie_value = "Chandan Khare";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cookies data!</title>
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

<style type="text/css">

body{

background-color: tomato ;
}

header h1{

text-align: center;

color : white;
}

.p{
    text-align : center;

    color : white;
}

.container{

background-color: lightyellow;

border: 3px solid black;

border-radius: 3px;
 
text-align: center;

}

</style>
</head>
<body>



<header>


<h1>COOKIE COUNTER</h1>

</header>





<div class="container">


<form action="" method="post">

<label>Enter The Details...</label>
<br>
<br>
<label>First Name :</label>
<input type="text" name="fname" required>
<br>
<br>
<label>Second Name :</label>
<input type="text" name="sname" required>

<br>
<br>

<label>Email :</label>
<input type="email" name="email" required>
<br>
<br>

<label>Contact Number :</label>
<input type="tel" name="contact" required>

<br>
<br>

<input type="submit" name="submit" value="submit">
<input type="reset" name="" value="reset">


</form>

<?php

$fname;



if(isset($_POST['submit']))
{

$fname  =  $_POST["fname"];
$sname =  $_POST['sname'];
$email =  $_POST['email'];
$phone  =  $_POST['contact'];

echo "First Name :" . $fname . "<br>";

echo "Second Name :" . $sname . "<br>";

echo "Email ID :" . $email . "<br>";

echo "Contact Number :" . $phone . "<br>";

}



?>

<hr>

<?php

if(!isset($_COOKIE[$cookie_name])){

echo "cookie named  " . $cookie_name . "is not set";

}else{

echo "cookie " . $cookie_name . "is set!<br>";

echo "value is " . " " . $_COOKIE[$cookie_name];
}
?>
<hr>

<?php 

//set visit cookie....

$timedate = 60 * 60 * 24 * 60 +time();

setcookie('lastvisit', date("G:i - m/d/y"), $timedate);

if(isset($_COOKIE['lastvisit'])){

$visit = $_COOKIE['lastvisit']; 

echo"Last Visit : ". $visit;

}else

echo"Welcome! This is Your First Visit";

?>


</div>
<hr>
<p class="p"><strong>Note:</strong> You might have to reload the page to see the new value of the cookie.</p>


</body>
</html>