<?php
session_start();
?>

<html>

  <head>
    <title> Home | Meal Munch </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

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


<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Order Here </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]);
              echo "$count";
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>

            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/logo.jpg"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Meal Munch</div>
    </div>
    <br>
    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>

    <div class="col-xs-12 line"><hr></div>

     <div class="col-xs-12 line"><hr></div>

     <div class="paragraph1">
     <h1>Welcome to MEAL MUNCH</h1>
    <p><br>
      <h4>Remember when you wanted to have friends over but didn't have any food to serve them? Or that time you got home starving after a long day at work but forgot to get food at the store? Sometimes deciding what to eat can be stressful or people can be unhappy if they're not able to get the food they want.
    </p>
    <p>
      <font color="green"><strong>Well Meal Munch is here to help you out!</strong></font></h4>
    </p>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
     <h1>OUR GOAL</h1>
    <p><br>
      <h4>
      Meal Munch will help in making your quest for enjoying a good breakfast, lunch, or dinner all the more interesting by simplifying the process and bringing the grub to you!
      </h4>
    </p>
    <p>
      <h4>
        This is how you can <font color="green"><strong>order food online</strong></font> with us. Open our user friendly website, create a user account and login. Once logged in, you have many delicious options to pick from. <font color="green"><strong>Simply add food to your cart and check out!</strong></font>
      </h4>
    </p>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
          <h1>HOW TO ORDER?</h1>
          <p>
            <h4>
              All it takes is 3 easy steps:
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>LOGIN OR CREATE A NEW ACCOUNT</u>
            </h3>
          </p>
          <p>
            <h4>
              A list of yummy food options will be presented to you!
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>SELECT YOUR ITEMS</u>
            </h3>
          </p>
          <p>
            <h4>
              You can select your choice of food from delicious options like <font color="green"><strong>soup, salads, and sandwiches.</strong></font>
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>CONFIRM YOUR DISHES AND CHEKCOUT</u>
            </h3>
          </p>
          <p>
            <h4>
              Add your choices to your cart and choose to checkout. You can choose from paying online with a credit card or paying the delivery driver when they arrive.
            </h4>
          </p>
          <p>
            <h4>
              And that's all! We hope you enjoy. <font color="green"><strong>Coming soon to a city near you!</strong></font>
            </h4>
          </p>
      </div>

        <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Meal Munch 2019 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>
