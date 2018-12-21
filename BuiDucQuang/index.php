<?php
// // example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');
 
// // get DOM from URL or file
$html = file_get_html('http://www.doisongphapluat.com/');

// // find all link
// foreach($html->find('a') as $e) 
//    echo $e->href . '<br>';

// // find all image
// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';

// // find all image with full tag
// foreach($html->find('img') as $e)
//     echo $e->outertext . '<br>';

// // find all div tags with id=gbar
// foreach($html->find('div#gbar') as $e)
//     echo $e->innertext . '<br>';

// // find all span tags with class=gb1
// foreach($html->find('span.gb1') as $e)
//     echo $e->outertext . '<br>';

// // find all td tags with attribite align=center
// foreach($html->find('td[align=center]') as $e)
//     echo $e->innertext . '<br>';
    
// // extract text from table
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

// // extract text from HTML
// echo $html->plaintext;

// $title= "";
// foreach($html->find('h1.art-title') as $e)
//     $title = $e->outertext;



// $temp = "";
// foreach($html->find('div#main-detail') as $e)
//     $temp.= $e->innertext;

// echo $title.$temp;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>News</title>
</head>
<body>
<div class="card mb-3">
  
  <?php 
  foreach($html->find('img') as $e){
    echo $e->innertext . '<br>'; 
}
	foreach($html->find('a') as $e){
   echo $e->outertext . '<br>';
	}
?>
  <div class="card-body">
    <h5 class="card-title"><?=$e->innertext?></h5>
    <p class="card-text"><?=$e->outertext?></p>
  </div>
</div>
</body>
</html>