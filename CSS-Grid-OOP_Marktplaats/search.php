<?php
include 'header.php';

include 'classes/article.class.php';
//
//use Article;


?>


<h1>Search page</h1>

<div class="article-container">
    <?php
    

    if (isset($_POST['submit-search'])) {

        
        
      //  $article = Article::create("test", "test", "test");
  
    
        $articles = Article::search($_POST['search']);


        echo "There are  <b>" . count($articles) . "</b> results";

        foreach ($articles as $article) {
            echo "<a href= 'article.php?id=" . $article->getId() . "'><div class='article-box'>
           <h3>" . $article->title . "</h3>
            <p>" . substr($article->text, 0, 200) . "</p>
            <p>" . $article->date . "</p>
            <p>" . $article->author . "</p>
    </div></a>";
        }


//        $search = mysqli_real_escape_string($conn, $_POST['search']);
//       $sql = "SELECT * FROM article WHERE article_title LIKE '%$search%' OR article_text LIKE '%$search%'
//            OR article_author LIKE '%$search%' OR article_date LIKE '%$search%'";
//       $result = mysqli_query($conn, $sql);     
//       $queryResult = mysqli_num_rows($result);
//
//       echo "There are  ".$queryResult." results";
//
//       if ($queryResult > 0) {
//           while ($row = mysqli_fetch_assoc($result)){
//            echo "<a href= 'article.php?title=".$row['article_title']."&date=".$row['article_date']."'><div class='article-box'>
//            <h3>".$row['article_title']."</h3>
//            <p>".$row['article_text']."</p>
//            <p>".$row['article_date']."</p>
//            <p>".$row['article_author']."</p>
//       </div></a>";
        //}}
//       else {
//           echo "There are no results matching your search!";
//       }
    }
    ?>

</div>