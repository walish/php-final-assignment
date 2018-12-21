<?php
require_once 'config.php';
include 'simple_html_dom.php';
$html = file_get_html('http://www.doisongphapluat.com/tin-tuc/');
$data = array();
$data['title']=[];
$data['des']=[];
$data['img']=[];
$data['link']=[];
$title =  $html->find('.pkg .module-cnt .module-vertical-list li .title');

foreach ($title as $title) {
    
    $title = trim(($title->plaintext));

    array_push ($data['title'],$title);
//     plaintext: Lấy nội dung (text) từ trang web
// innertext: Chỉ lấy nội dung bên trong thẻ..
// outertext: Lấy cả thẻ và nội dung bên trong.
    //$data['title'].push($title->innertext) ;
};
$description =  $html->find('.pkg .module-cnt .module-vertical-list li .desc');
foreach ($description as $description) {
    
    $des= trim(($description->plaintext));

    array_push ($data['des'],$des);
};
$image =  $html->find('.pkg .module-cnt .module-vertical-list li div img');

foreach ($image as $image) {
    $img= trim(($image->src));
    array_push ($data['img'],$img);
};
$link =  $html->find('.pkg .module-cnt .module-vertical-list li h4.title a');
foreach ($link as $link) {
    $link= trim(($link->outertext));
    array_push ($data['link'],$link);
};

for($i= 0 ;$i< count($data['link']); $i++){
    $title =$data['title'][$i];
    $link =$data['link'][$i];
    $img =$data['img'][$i];
    $des =$data['des'][$i];
   
   
    $sql_insert = "INSERT INTO News(title,link,img,des) VALUES( '$title','$link','$img','$des')";
     //echo  $sql_insert;
    if (mysqli_query($conn, $sql_insert)) {
        //  echo "Thêm record thành công";
     } else {
         echo "Lỗi: " . $sql_insert . "<br>" . mysqli_error($conn);
     }
    
    
}

 echo '<pre>';
 print_r($data);
 echo '</pre>';



