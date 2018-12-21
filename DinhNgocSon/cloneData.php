<?php
include 'simple_html_dom.php';
$html = file_get_html('http://www.doisongphapluat.com/tin-tuc/');
foreach($html->find('a') as $values) 
    echo $values->href . '<hr>';
foreach($html->find('img') as $values)
    echo $values->src . '<hr>';
foreach($html->find('img') as $values)
    echo $values->outertext . '<hr>';
foreach($html->find('div#gbar') as $values)
    echo $values->innertext . '<hr>';
foreach($html->find('span.gb1') as $values)
    echo $values->outertext . '<hr>';
foreach($html->find('td[align=center]') as $values)
    echo $values->innertext . '<hr>';
echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';
echo $html->plaintext;
$title= "";
foreach($html->find('h1.art-title') as $values)
    $title = $values->outertext;
$temp = "";
foreach($html->find('div#main-detail') as $values)
    $temp.= $values->innertext;
echo $title.$temp .'<hr>';
?>