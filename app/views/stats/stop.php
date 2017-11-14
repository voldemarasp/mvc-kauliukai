
<!DOCTYPE html>
<html>
<head>
	<title><?= $data['title']; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script
			  src="https://code.jquery.com/jquery-3.2.1.js"
			  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			  crossorigin="anonymous"></script>
	<style>
	.header {
		font-family: 'Oswald', sans-serif;
		background-color: gray;
		color: white;
		padding: 50px 5px 10px 5px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row header">
			<div class="col">
				<h1><?= $data['header']; ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
<canvas id="myChart" width="400"></canvas>
			</div>
			<div class="col-6">
<canvas id="myChart2" width="400"></canvas>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
	<script type="text/javascript" src="http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master/script.js"></script>
</body>
</html>




