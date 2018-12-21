<?php
// example of how to modify HTML contents
include('../simple_html_dom.php');

// get DOM from URL or file
$html = file_get_html('http://www.doisongphapluat.com/tin-tuc/tin-trong-nuoc/cong-bo-diem-chuan-vao-lop-10-o-tphcm-a101545.html');

// remove all image
foreach($html->find('img') as $e)
    $e->outertext = '';

// replace all input
foreach($html->find('input') as $e)
    $e->outertext = '[INPUT]';

// dump contents
echo $html;
?>