<?php
include 'header.php';
?>



<h1>Article page</h1>

<div class="article-container">
   <?php

   $id = mysqli_real_escape_string($conn, $_GET['id']);
   

   $sql = "SELECT * FROM article Where article_id='$id'";
   $result = mysqli_query($conn, $sql);
   $queryResults = mysqli_num_rows($result); 

   if ($queryResults > 0) {
       while ($row = mysqli_fetch_assoc($result)){
         echo "<div class='article-box'>
              <h3>".$row['article_title']."</h3>
              <p>".$row['article_text']."</p>
              <p>".$row['article_date']."</p>
              <p>".$row['article_author']."</p>
         </div>";
       }
   }
   ?>

</div>
</body>
</html>
