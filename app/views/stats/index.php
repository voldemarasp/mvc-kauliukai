
<!DOCTYPE html>
<html>
<head>
	<title><?= $data['title']; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
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
			<div class="col">
				<table class="table text-center">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Sukimas</th>
							<th scope="col">Rezas</th>
							<th scope="col">Vardas</th>
							<th scope="col">Data</th>
						</tr>
					</thead>
					<tbody>
							<?php 
							foreach ($data['my_stats'] as $row) {
								echo "<tr>";
								echo "<td>" . $row['id'] . "</td>";
								echo "<td>" . $row['sukimas'] . "</td>";
								echo "<td>" . $row['rezultatas'] . "</td>";
								echo "<td>" . $row['vartotojas'] . "</td>";
								echo "<td>" . $row['data'] . "</td>";
								echo "</tr>";
							} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>




