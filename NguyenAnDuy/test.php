<?php
<<<<<<< HEAD
include "simple_html_dom.php";

$html = file_get_html('http://www.doisongphapluat.com/tin-tuc/');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

h1 {
    text-align: center;
}
.container {
    margin: 20px auto;
    width: 80%;
}
img {
    width: 70%;
    height: 65%;
    margin: 20px auto;

}

a {
    text-decoration: none;
    color: #0B7FDE;
    font-size: 20px;
    padding: 10px 0px 10px 0px;
}

a:hover {
    color: blue;
}

.head {
    background-coclor: #E7E7E7;

}
</style>

</head>
<body>
<div class="container">
    <div class="head">
    <h1> Doi Song va Phap Luat </h1>
    </div>
        <div class="body">
            <h2> List of Categories </h2>
            <?php
                foreach($html->find('a') as $e){
                    echo $title = $e->outertext . '<br>';
                }
                foreach($html->find('img') as $e){
                    echo $img_full_tag = $e->innertext . '</div>';        
                }

            ?>
        </div>
    
</div>
</body>
</html>
=======

echo "Nguyen An Duy";
?>
>>>>>>> 6cf806b486667aff4bf8c0541ac42aa6cffa8222
