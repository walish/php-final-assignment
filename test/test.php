<?php
include_once './../simplehtmldom_1_5/simple_html_dom.php';
// Create DOM from URL or file
$html = file_get_html("http://www.doisongphapluat.com/tin-tuc/");
$news = $html->find('ul[class=module-vertical-list] li');

function removeDump(&$node)
{
    $children = $node->children; // get an array of children
    foreach ($children as $child) {
        $child->outertext = ''; // This removes the element, but MAY NOT remove it from the original $myDiv
    }
}

foreach ($news as $key => $new) {

  echo $new;

    // $title = $new->find('.title');
    // $a = $title[0]->find('a')[0];
    // // removeDump($a);
    // echo $a;
    // echo "<br>";
    // $linkNews = $new->find('a[title]');
    // $linkTitle = $linkNews[0]->href;
    // echo $linkTitle;
    // echo "<br>";
    // $linkImage = $new->find('a[title] img');
    // echo $linkImage[0]->src;
    // echo "<br>";
    // echo $new->find('.desc')[0];
    // echo "<br>";
    // $time = $new->find('.meta')[0];
    // removeDump($time);
    // echo $time;

    // break;
}
