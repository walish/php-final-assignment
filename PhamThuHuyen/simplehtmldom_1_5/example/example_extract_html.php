<?php
include_once('../simple_html_dom.php');

echo file_get_html('http://www.doisongphapluat.com/tin-tuc/tin-trong-nuoc/cong-bo-diem-chuan-vao-lop-10-o-tphcm-a101545.html')->plaintext;
?>