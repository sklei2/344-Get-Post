<!DOCTYPE html>
<html>
	<head>
		<title> GetHomework </title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/site.css">
	</head>
	<body>
		<div class="container content">
			<h2> HTTP: GET - Results </h2>
			<div class="form-display">
				<label> Name: </label>
				<p> <?php echo $_GET["fname"]; ?> <?php echo $_GET["lname"]; ?> </p>	
			</div>
			<div class="form-display">
				<label> Age: </label>
				<p> <?php echo $_GET['age']; ?> </p>
			</div>
			<div class="form-display">
				<label> State: </label>
				<p> <?php echo $_GET['state']; ?> </p>
			</div>
			<div class="form-display">
				<label> Gender: </label>
				<p> <?php echo $_GET['gender']; ?> </p>
			</div>
			<footer>
				<hr>
				<p> Created by: Sean Klei </p>
			</footer>
		</div>
	</body>
</html>