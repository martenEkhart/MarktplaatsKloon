<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css.css">
<title>KloonPlaats</title>
</head>
<body>

<h1>Welkom op KloonPlaats</h1>


<button class="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
<hr>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<div class="zoek">
<p>Zoek hier:</p>
<form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>

<div class="adv">
<h3>Spiderman PS4</h3>
<img src="spiderman.jpg" width="300" height="370">
<p>Prijs:30-, euro</p><br><br>
<p>Levering: ophalen of verzenden</p><br><br>
<p>Verkoper: Marten Ekhart, Groningen Nederland</p>
</div>

<div class="contact">
    <h3>Contact met Verkoper<h3>
    <form class="phpform" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
            Naam:<br> <input class="phpform2" type="text" name="naam"><br></br>
            Email:<br> <input class="phpform2" type="text" name="email"><br></br>
            Tel:<br> <input class="phpform2" type="text" name="tel"><br></br>
            Comment:<br> <textarea class="phpform2" name="comment" rows="5" cols="40"></textarea><br></br>
           
            <br><br/>
            <input type="submit" value="Verzenden">
        </form></div></div>
        <?php
        if (!empty($_POST)) {

            $br = "\r\n";

            $naam = htmlspecialchars($_POST["naam"]);
            $email = htmlspecialchars($_POST["email"]);
            $tel = htmlspecialchars($_POST["tel"]);
            $comment = htmlspecialchars($_POST["comment"]);            
          

            //Dit is het bericht dat je ontvangt.
            $msg = date('Y-m-d H:i:s') . $br;            
            $msg .= "Naam: " . $naam . $br;
            $msg .= "Email: " .$email . $br;
            $msg .= "Tel: " .$tel . $br;
            $msg .= "Comment: " .$comment . $br;
           

            mail("marten@lootgames.nl", "Contact from " . $name, $msg);
        }
        ?>
</div>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html> 