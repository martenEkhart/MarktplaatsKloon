<?php
  // To make sure we don't need to create the header section of the website on multiple pages, 
  // we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page 
  // on our website. In this way if we need to make a small change to our header we just need to 
  // do it in one place. This is a VERY cool feature in PHP!
  require "header.php";
?>

<div class="sidebar" id="search">
    <form action="search.php" method="POST">
<input class="zoek-input" type="text" name="search" placeholder="Search">
<button class="zoek-button" type="submit" name="submit-search">Search</button>
</form>
    
</div>
<div class="content" id="spotlight">
<div class="spotlight">spotlight 1</div>
<div class="spotlight2">spotlight 2</div>
</div>
 <?php 
 require "footer.php";
 ?>