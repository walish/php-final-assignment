<?php
include('connect.php');
include('simple_html_dom.php');

$html = file_get_html('http://www.doisongphapluat.com/tin-tuc/');

$data = $html->find("ul.module-vertical-list");

foreach ($data as $value) {
	foreach ($value->find("li") as $value1) {
		$a = $value1->find('h4.title a',0);

		$href = $a->href;

		echo $href;
		echo "<hr/>";


		$img = $value1->find('img',0)->src;

		$folder = 'img/'.basename($img);
		file_put_contents($folder, file_get_contents($img));
		$tenimg = basename($img);

		$desc = $value1->find('p.desc',0)->innertext;

		$query = "INSERT INTO tintuc (title,description,img) VALUES ('".$href."','".$desc."','".$tenimg."')";
		$conn->query($query);
	}
	
}	


?>