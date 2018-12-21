<?php
	include('simple_html_dom.php');
Class Article{
	public $id;
	public $title;
 	public $story;
	public $detail;
	private $connection;

	function __construct($connection)
	{
		$this -> connection = $connection;
	}

	function saveArticle()
	{
		$insert = "INSERT INTO article (title, story, detail,image) VALUES (?,?,?,?)";
		if ($stmt= mysqli_prepare($this -> connection, $insert)){
			mysqli_stmt_bind_param($stmt, "ssss",$title, $story, $detail,$image);
			$title = $this -> title;
			$story = $this -> story;
			$detail= $this -> detail;
			$image= $this -> image;
			//if ($first_name != "" && $last_name != "" && $email!="")
			mysqli_stmt_execute($stmt);
			return true;
		}
		mysqli_stmt_close($stmt);
		return false;
	}

	function getAllArticles()
	{
	$url = "http://www.doisongphapluat.com/tin-tuc/";
	$page = file_get_html($url);
	$pages = array();
	foreach($page->find('a') as $element) {
		if (strpos($element, 'doisongphapluat.com/tin-tuc/') == true && !empty(str_replace("www.doisongphapluat.com/tin-tuc/","",$element)))
			$pages[] = $element;
	      //echo $element->href . '<br>';	
		}
		return $pages;
	}	

	function getAllAPI($pages)
	{
	$apis = array();
	foreach($pages as $element) {
		$link = $element -> href;
		$api = str_replace("http://www.doisongphapluat.com/tin-tuc/",'',$link);
	    $apis[] = $api;	
	}
	$apis = array_unique($apis);
	return $apis;
	}
	function getArticleFromDB()
	{
		$title = $_POST['view'];
		$sql = "SELECT * FROM persons WHERE title = $title";
		$result = mysqli_query($this -> connection,$sql);
		//print_r($result);
		return $result;
	}
	function getSingleArticle($url)
	{
		$page = file_get_html($url);
		$title = $page->find('.art-title',0);
		$detail = $page -> find('#main-detail',0);
		$story = $page -> find('.story',0);
		$image = $page -> find('.full_images',0);
		$info = array();
		array_push($info,$title,$story,$detail,$image);
		//var_dump($info);
		return $info;
	}
}
	//test
	// $news = getAllAPI();
	// var_dump($news);
	// $index = 0;
	// foreach ($news as $value){
	// 	if(!empty($value)){
	// 		getSingleArticle("http://www.doisongphapluat.com/tin-tuc/".$value);
	// 		$index ++;
	// 	}
	// 	if ($index == 2)
	// 		break;
	// }
	//foreach()
		//var_dump(getAllAPI());
	//getAllArticles();
	//getSingleArticle('http://www.doisongphapluat.com/tin-tuc/chua-chot-danh-sach-chinh-thuc-dt-an-do-da-den-uae-du-asian-cup-2019-a255935.html');
?>