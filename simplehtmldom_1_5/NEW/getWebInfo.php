<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
 
// get DOM from URL or file
$html = file_get_html('http://www.doisongphapluat.com/tin-tuc/');

// find all link
$link = array();
foreach($html->find('a') as $e){
    array_push($link, $e->href);
} 
  

// find all image
$image = array();
foreach($html->find('img') as $e){
    array_push($image, $e->href);
}
    

// find all image with full tag
$imageFullTag = array();
foreach($html->find('img') as $e){
    array_push($imageFullTag, $e->href);
}
    

// find all div tags with id=gbar
$tagsGbar = array();
foreach($html->find('div#gbar') as $e){
    array_push($tagsGbar, $e->href);
}
    

// find all span tags with class=gb1
$tagGb1 = array();
foreach($html->find('span.gb1') as $e){
    array_push($tagGb1, $e->href);
}

// find all td tags with attribite align=center
$tagACenter = array();
foreach($html->find('td[align=center]') as $e){
    array_push($tagACenter, $e->href);
}
    
    
// extract text from table
//echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

// extract text from HTML
//echo $html->plaintext;

$title= "";
foreach($html->find('h1.art-title') as $e)
    $title = $e->outertext;



$temp = "";
foreach($html->find('div#main-detail') as $e)
    $temp.= $e->innertext;

//echo $title.$temp;
?>