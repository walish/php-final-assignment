<?php
    class Article {
        private $title;
        private $url;
        private $imageSource;
        private $publishDate;
        private $desc;
        private $content;
        public $conn;

        function __construct($title, $url, $imgsrc, $datetime, $desc, $content) {
            $this->title = $title;
            $this->url = $url;
            $this->imageSource = $imgsrc;
            $this->publishDate = $datetime;
            $this->desc = $desc;
            $this->content = $content;

            include_once "Connection.php";
            $connection = new Connection();
            $this->conn = $connection->connectToDb();
        }

        public function addToDb() {
            $isReadyToAdd = true;
            $sql_check_valid_title = "SELECT Title FROM Article WHERE Title = ?";
            if ($stmt = mysqli_prepare($this->conn, $sql_check_valid_title)) {
                mysqli_stmt_bind_param($stmt, "s", $title);
                $title = $this->title;
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                
                if (mysqli_stmt_num_rows($stmt) > 0) {
                    $isReadyToAdd = false;
                }
            }
            $sql_check_valid_url = "SELECT ArticleUrl FROM Article WHERE ArticleUrl = ?";
            if ($stmt = mysqli_prepare($this->conn, $sql_check_valid_url)) {
                mysqli_stmt_bind_param($stmt, "s", $url);
                $url = $this->url;
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                
                if (mysqli_stmt_num_rows($stmt) > 0) {
                    $isReadyToAdd = false;
                }
            }
            
            if ($isReadyToAdd) {
                $sql_add_new_article = "INSERT INTO Article (Title, ArticleUrl, ImageSource, PublishDateTime, ArticleDescription, Content) VALUES (?, ?, ?, ?, ?, ?)";
                if ($stmt = mysqli_prepare($this->conn, $sql_add_new_article)) {
                    mysqli_stmt_bind_param($stmt, "ssssss", $title, $url, $imgsrc, $datetime, $desc, $content);
                    $title = $this->title;
                    $url = $this->url;
                    $imgsrc = $this->imageSource;
                    $datetime = $this->publishDate;
                    $desc = $this->desc;
                    $content = $this->content;

                    mysqli_stmt_execute($stmt);

                    // close statement
                    mysqli_stmt_close($stmt);
                }
                else {
                    echo "<script language='javascript'>";
                        echo "alert('Error while crawling artilce titled' . $this->title . ');'";
                    echo "</script>";
                }
            }
        }

        public function showAllArticle() {
            $sql = "SELECT * FROM Article";
            if ($stmt = mysqli_prepare($this->conn, $sql)) {
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);

                $allArticles = array();
                if (mysqli_stmt_num_rows($stmt) > 0) {
                    $stmt->bind_result($id, $title, $url, $imgSrc, $publishDate, $desc, $content);
                    while ($stmt->fetch()) {
                        $article = new Article($title, $url, $imgSrc, $publishDate, $desc, $content);
                        $allArticles[] = $article;
                    }

                    mysqli_stmt_free_result($stmt);
                    // close statement
                    mysqli_stmt_close($stmt);
                }
            }
            else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->conn);
            }

            return $allArticles;
        }

    }