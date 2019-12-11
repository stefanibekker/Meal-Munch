<?php

include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}



$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$user_check=$_SESSION['login_user1'];
$namesuccess = TRUE;
$emailsuccess = TRUE;
$contactsuccess = TRUE;
$addresssuccess = TRUE;

if($name != NULL){
  $namequery = "UPDATE RESTAURANTS SET name = '$name' WHERE M_ID = '$user_check'" ;
  $namesuccess = $conn->query($namequery);
}

if($email != NULL){
  $emailquery = "UPDATE RESTAURANTS SET email = '$email' WHERE M_ID = '$user_check'" ;
  $emailsuccess = $conn->query($emailquery);
}

if($contact != NULL){
  $contactquery = "UPDATE RESTAURANTS SET contact = '$contact' WHERE M_ID = '$user_check'" ;
  $contactsuccess = $conn->query($contactquery);
}

if($address != NULL){
  $addressquery = "UPDATE RESTAURANTS SET address = '$address' WHERE M_ID = '$user_check'" ;
  $addresssuccess = $conn->query($addressquery);
}

if($address == NULL && $contact == NULL && $email == NULL && $name == NULL){
  ?>
  <!DOCTYPE html>
	<html>
	<head>
		<title>change</title>
  <link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Meal Munch</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h1>Please Enter New Restaurant Information If You Would Like To Update.</h1>
		<p>Go back to your <a href="myrestaurant.php">Restaurant</a></p>
	</div>
</div>

	</body>
	</html>

</div>
</div>
  <?php
} else if (!$namesuccess || !$contactsuccess || !$addresssuccess || !$emailsuccess){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>change</title>
  <link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Meal Munch</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h1>Update Failed.</h1>
		<p>Go back to your <a href="myrestaurant.php">Restaurant</a></p>
	</div>
</div>

	</body>
	</html>

	<?php
}
else {
	header('Location: myrestaurant.php');
}

$conn->close();


?>
