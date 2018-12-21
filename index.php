<?php
include_once('config.php');
include_once('leak_web.php');
$database = new dbconnect();
$link = $database->getConnect();
$leak_web= new leak_web($link);
$page = $leak_web->getPage();
$page = $leak_web->getTitle("http://www.doisongphapluat.com/tin-tuc/",$img,$content);
$page=$leak_web->read();
?>
<head>
	<title>Homepage</title>
</head>
<body>
	<?php 
     while ($row = mysqli_fetch_array($page)) {
     	?>
        <div>
        	<h4><?php echo($row['title']); ?></h4>
        	<p><img src="<?php echo($row['image']);?>"></p>
        	<p><?php $content1=($row['content']);
        	$sub = substr($content1, 0, 300);
        	echo($sub);
        	 ?></p>
        	<p><a href="detail.php?id=<?php echo($row['id']); ?>">See more...</a></p>
        </div>

     	<?php
     }


	?>
</body>