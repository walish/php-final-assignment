<?php
	include('article.php');
	include_once('database.php');
	$database = new Database();
	$link = $database -> getConnection();
	$article = new Article($link);
	$pages = $article ->getAllArticles();
	$articleList = $article -> getAllAPI($pages);
	foreach ($articleList as $value)
	{
		$info = $article->getSingleArticle("http://www.doisongphapluat.com/tin-tuc/".$value);
		$article -> title = $info['0'];
		$article -> story = $info['1'];
		$article -> detail = $info['2'];
		$article -> image = $info['3'];
	    $article->saveArticle();    
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title> Newspaper </title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<?php
			$i=0;
			foreach ($articleList as $value){
				if(!empty($value)){
				$info = $article->getSingleArticle("http://www.doisongphapluat.com/tin-tuc/".$value);
				echo "<div class ='col-3'>";
				echo "	<div class='card' style="."width: 18rem;".">";
				echo $info[3];
				echo "		<div class="."card-body".">";
				echo "	    	<p class="."card-text".">Title: ".$info[0]."</p>";
				echo "	    	<p class="."card-text".">Story: ".$info[1]."</p>";
				echo "<form method ='post' action = 'single_article.php'>";
				echo "	<input type ='submit' name='submit' value ='View (not functional)'/><br/>";
				echo "	<input type='"."hidden'"."name='view' value='".$info[0]."'>";
				echo "</form>";
	  			echo "		</div>";
	   			echo "	</div>";
	   			echo "</div>";
	   			$i ++;
	   			if ($i == 8)
	   				break;
	   			}
   			}
   			?>
		</div>
	</div>
</body>
</html>
