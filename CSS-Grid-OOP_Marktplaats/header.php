
<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  include "includes/dbh.inc.php";
  
?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="javascript.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" type="text/css" href="css.css">
<title>Page Title</title>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="grid">
<div class="title">
    <!-- Here is the header where I decided to include the login form for this tutorial. -->
    <h1>Marktplaats</h1>
    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
          <!-- <img src="" alt="marten logo"> -->
        </a>
        <ul>
          <li class="home"><a href="index.php">Home</a></li>
          <li><a href="#search" onclick="scrollToDiv()">Search</a></li>
          <li><a href="#spotlight" onclick="scrollToDiv()">Spotlight</a></li>
          <li><a href="#contact" onclick="scrollToDiv()">Contact</a></li>
        </ul>
      </nav>
     
      <div class="header-login">
        <!--
        Here is the HTML login form.
        Notice that the "method" is set to "post" because the data we send is sensitive data.
        The "inputs" I decided to have in the form include username/e-mail and password. The user will be able to choose whether to login using e-mail or username.

        Also notice that using PHP, we can choose whether or not to show the login/signup form, or to show the logout form, if we are logged in or not. We do this based on SESSION variables which I explain in more detail in the login.inc.php file!
        -->
        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
    </header>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <!--
          We can choose whether or not to show ANY content on our pages depending on if we are logged in or not. I talk more about SESSION variables in the login.inc.php file!
          -->
          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p class="login-status">Uitgelogd!</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<p class="login-status">Ingelogd!</p>';
          }
          ?>
        </section>
     </div>
    </main>
</div>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


