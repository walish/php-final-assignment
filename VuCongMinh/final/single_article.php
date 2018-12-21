<?php
	include('article.php');
	include_once('database.php');
	$database = new Database();
	$link = $database -> getConnection();
	$article = new Article($link);
	print_r($_POST);
	$thisArticle = $article -> getArticleFromDB();
?>
<html>
<head>
	<title>Viewing photo</title>
</head>
<body>
	<?php
	while($value = mysqli_fetch_array($thisArticle)){
	  	echo $value['title'];
	   	echo $value['story'];
	   	echo $value['detail'];  
	   }	
   	?>
</body>
</html>