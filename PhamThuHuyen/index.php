<?php 
	include('simplehtmldom_1_5/simple_html_dom.php');
	require_once 'Connection.php';

	$html = file_get_html('http://www.doisongphapluat.com/tin-tuc/');

	// foreach($html->find('ul.module-vertical-list img') as $element){
 	//$image = $element->src."<br>";

	//$sql = "INSERT INTO news(image) VALUE ('".$image."')";
 	//$result = $conn->query($sql);
	
	// }
	// foreach ($html->find('p.desc') as $element) {
	// 	$des = $element->innertext."<br>";
	// 	$desc = trim($des);
	// 	echo $desc;
	// 	$sql = "INSERT INTO news(description) VALUE ('".$desc."')";
 	//  $result = $conn->query($sql);
	// }

	// foreach($html->find('ul.module-vertical-list h4') as $element){
	// 	echo $element->innertext;
	// }
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">NEWS</a></li>
      <li><a href="#">Home</a></li>
      <li><a href="#">Sport</a></li>
      <li><a href="#">Fashion</a></li>
      <li><a href="#">Health</a></li>
      <li><a href="#">World</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="row">

  	 <?php 	foreach($html->find('ul.module-vertical-list li') as $element){
	?>
  	<div class="col-md-10" style="width: 100%;">
  		<!-- <img src="<?=$element->src?>" alt="" style="width: 100%;margin: 20px;"> -->
  		<?php echo $element->innertext ?>
  	</div>
  	<?php } ?>
  </div>
</div>

</body>
</html>