<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');

// get DOM from URL or file
$html = file_get_html('http://www.doisongphapluat.com/tin-tuc/');

// find all link
$link = array();
foreach ($html->find('a') as $e) {
    array_push($link, $e->href);
}
//print_r($link);
include('database.php');
mysqli_select_db($conn,'news');
foreach ($link as $value) {
    $sql = "INSERT INTO `href`(link) VALUES ($value)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
// find all image
$image = array();
foreach ($html->find('img') as $e) {
    array_push($image, $e->src);
}
//print_r($image);
// find all image with full tag
$imageFullTag = array();
foreach ($html->find('img') as $e) {
    array_push($imageFullTag, $e->outertext);
}
//print_r($imageFullTag);
// find all div tags with id=gbar
$divTagGBARID = array();
foreach ($html->find('div#gbar') as $e) {
    array_push($divTagGBARID, $e->innertext);
}
//print_r($divTagGBARID);
// find all span tags with class=gb1
$classgb1 = array();
foreach ($html->find('span.gb1') as $e) {
    array_push($classgb1, $e->outertext);
}
//print_r($classgb1);
// find all td tags with attribite align=center
$attribute = array();
foreach ($html->find('td[align=center]') as $e) {
    array_push($attribute, $e->innertext);
}

// extract text from table
//echo $html->find('td[align="center"]', 1)->plaintext . '<br><hr>';

// extract text from HTML
//echo $html->plaintext;

$title = "";
foreach ($html->find('h1.art-title') as $e)
    $title = $e->outertext;


$temp = "";
foreach ($html->find('div#main-detail') as $e)
    $temp .= $e->innertext;

//echo $title . $temp;
?>