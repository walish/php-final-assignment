<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');

function connect()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "simplehtml";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	} 

	return $conn;
}
 
// get DOM from URL or file
$html = file_get_html('http://www.doisongphapluat.com/tin-tuc/');

$post_results = [];
//đầu tiên sẽ lấy các bài viết
$containers = $html->find('.module.module-cate.pkg.delta.fl-right>.module-cnt>.module-vertical-list');
echo '<pre>';
foreach ($containers as $container) {
	
	
	//lấy các bài viết
	$posts = $container->find('li');
	$i = 0;
	foreach ($posts as $post) {
		//lấy link bài viết
		$links = $post->find('h4>a');
		foreach ($links as $link) {

			//lấy source code của cái link bài viết
			$post_html = file_get_html($link->href);

			$post_content_containers = $post_html->find('article.detail');
			foreach ($post_content_containers as $post_content_container) {
				//lấy tiêu đề bài viết
				$header_elements = $post_content_container->find('header>h1');
				foreach ($header_elements as $header_element) {
					$header = $header_element->plaintext;

				}

				
				$post_results[$i] = ['header' => $header];
				$content_containers = $post_content_container->find('#main-detail');
				foreach ($content_containers as $content_container) {
					$contents = $content_container->find('table, p');
					$post_results[$i]['content'] = '';
					foreach ($contents as $content) {
						$post_results[$i]['content'] .= $content;
					}
				}
			}
			
		}
		$i++;
	}
}
$conn = connect();
foreach ($post_results as $post) {
	$stmt = $conn->prepare("INSERT INTO `posts` (`title`, `content`) VALUES (?, ?)");
	$stmt->bind_param($post['header'], $post['content']);
	
	$stmt->execute();
}
echo 'done!!!';
?>