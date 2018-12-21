<?php
include_once('simple_html_dom.php');
include_once('config.php');
 
 class web{
 	public $id;
 	public $title;
 	public $img;
 	public $content;
 	private $conn;
 	public function __construct($db){
 		$this->conn = $db;
 	}
 	function getPage(){
 		for($page= 1; $page<=411; $page++){
 			$src= 'http://www.doisongphapluat.com/tin-tuc/'.$page;
		$html = file_get_html($src);
          $item = $page->find('a',0);
         $link= $item->href;
         return $link;

 		}
 		function getTitle($page,$title,$img,$content){
 			$page = file_get_title($src);
 			$title = $page->find('h4',0);
 			$img = $page->find('img',0);
 			$content = $page->find('#main-detail',0);
            $result = array();
            return $result;
 		}
 		 function add(){
 			$sql = "INSERT INTO db_web(title,content,image) VALUES($title,$content,$img)";
 			$query = mysqli_query($this->conn,$sql);
 			return $query;
 		}
      function read(){
      	$id = $_GET['id'];
      	$sql = "SELECT * FROM db_web WHERE id= $id ";
      	$query = mysqli_query($this->conn,$sql);
      	return $query;
      }
 	}
}


?>