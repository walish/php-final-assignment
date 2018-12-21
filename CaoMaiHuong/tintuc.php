<?php 
	include "simplehtmldom_1_5/simple_html_dom.php";

    $html = file_get_html('http://www.doisongphapluat.com/tin-tuc/');
    
        $array= array();
        $items= $html->find('.title');
        $titles = array();
		foreach ($items as $item) {
            $t = $item->find('a',0);
            $title = $t->innertext;
            array_push($titles,$title);
        }
        $array["title"] = $titles;

        $description = $html->find('p.desc');
        $descriptions = array();
        foreach($description as $descri){
            $d = $descri->innertext;
            array_push($descriptions,$d);
        }
        array_push($array, $array["description"] = $descriptions);

        $img = $html->find('a[title] img');
        $img_link = array();
        foreach($img as $im){
            $link = $im->src;
            array_push($img_link,$link);
        }
        array_push($array, $array["img"] = $img_link);
     
        $created = array();
        $time= $html->find('p.meta');
        foreach($time as $ti){
            $t = $ti->innertext;
            array_push($created,$t);
        }
        array_push($array, $array["time"] = $created);
        //var_dump($array);

        foreach($array as $a){
            $sql = "INSERT INTO articles(title,descriptionn,img_src,created_date) VALUES ($a['title'],$a['description'],$a['img'],$a['created'])";
            mysqli_query($link, $sql);
        }
?>