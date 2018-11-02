<?php

/**
 * Description of Article
 *
 * @author Marten
 */
include 'databaseObject.interface.php';

class Article implements iDatabaseObject {

    private $id;
    public $title;
    public $text;
    public $author;
    public $date;

    public function getId() {
        return $this->id;
    }

    private function __construct($row) {
        $this->title = $row['article_title'];
        $this->text = $row['article_text'];
        $this->author = $row['article_author'];
        $this->date = $row['article_date'];
        $this->id = $row['article_id'];
    }

    public function create($title, $text, $author) {
        include("$_SERVER[DOCUMENT_ROOT]/CSS-Grid/includes/dbh.inc.php");
        $stmt = mysqli_stmt_init($conn);
        $sql = "INSERT INTO article (article_title, article_text, article_author) VALUES (?, ?, ?);";
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            mysqli_stmt_bind_param($stmt, "sss", $title, $text, $author);
            mysqli_stmt_execute($stmt);
        }
    }

    public function delete() {
        
    }

    public function read() {
        
    }

    public function update() {
        
    }

    public function search($searchString) {
        include("$_SERVER[DOCUMENT_ROOT]/CSS-Grid/includes/dbh.inc.php");
        $search = mysqli_real_escape_string($conn, $searchString);
        $sql = "SELECT * FROM article WHERE article_title LIKE '%$search%' OR article_text LIKE '%$search%'
            OR article_author LIKE '%$search%' OR article_date LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);

        $articles = array();

        while ($row = mysqli_fetch_assoc($result)) {

            array_push($articles, new Article($row));
        }
        return $articles;
    }

}
