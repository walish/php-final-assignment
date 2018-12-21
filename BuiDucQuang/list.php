<?php 
	include 'connection.php';
	include 'simple_html_dom.php';	

	$query = "SELECT * FROM news";
	
	$result = $conn->query($query);

 ?>

<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>News</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<body>
		<div class="container" style="width: 80%;margin:20px auto;">
		<caption><h3>News</h3></caption>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Title</th>
						<th>Image</th>
						<th>Description</th>
					</tr>	
				</thead>
				<tbody>
					<?php while($row = $result->fetch_assoc()) {	 ?>
					<tr>
						<td><?=$row['title']?></td>
						<td><?=$row['img']?></td>
						<td><?=$row['description']?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
</div>	
	</body>
</html>