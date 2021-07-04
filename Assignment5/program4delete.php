
<?php 

$id = "";
$conn ="";

$conn = mysqli_connect("localhost", "root", "", "assignments");

if(!empty($_POST['accno'])){



$conn = mysqli_connect("localhost", "root", "", "assignments");

// Check connection
if($conn === false){

echo "connection not possible";

}

$id=$_POST['accno'];

$query = "DELETE FROM passport WHERE pnumber='$id'";

if ( $conn->query($query)== TRUE  &&  $conn->affected_rows > 0 ) {

echo " <h4> 1 record successfully deleted !</h4>";

}else{

echo  "<h2>Error:</h2>" . $query  .  "<br>"  . "<h4>This above query doesnt match.! to any record!"  .  $conn->error;
}


}





?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>delete user</title>
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<style type="text/css">

.container{

background-color: greenyellow;
border: 2px solid green;
border-radius: 20px;
text-align: center;
padding: 200px;
}

</style>
</head>
<body>


<div class="container">

<form action="" method="post">

<label>Enter the account number u want to delete.</label>

<input type="number" name="accno" placeholder="Enter account number here!" required>

<br>
<hr>

<input type="submit" name="Delete" value="Delete"> <a href="php4.php" role="button">Go back</a>

</form>

</div>


</body>
</html>