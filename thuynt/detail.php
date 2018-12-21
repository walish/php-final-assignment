<?php
include_once('config.php');
include_once('leak_web.php');
$id = $_GET['id'];
$database = new dbconnect();
$link = $database->getConnect();
$leak_web= new leak_web($link);
$page = $leak_web->getPage();
$page = $leak_web->getTitle("http://www.doisongphapluat.com/tin-tuc/",$img,$content);
$page=$leak_web->read();
$row = mysqli_fetch_array($page);

?>
<head>
	<?php echo($row['title']); ?>
</head>
<body>
	<p><?php echo $row['title']; ?></p>
	<p><img src="<?php echo($row['image']); ?>"></p>
	<p><?php echo($content); ?></p>
</body>