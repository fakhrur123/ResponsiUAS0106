<!DOCTYPE html>
<html>
<head>
	<title>Add City</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<body>
	<div class="container" style="width: 50%;margin-top: 50px">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px">Add City</label>
			<div class="panel panel-body">
			<form method="POST" action="p_add_city.php" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-lg-12">
						<label for="cityname">City Name</label>
						<input type="text" name="cityname" id="cityname" class="form-control input-sm">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">
						<label for="countryname">Country</label>
						<input type="text" name="countryname" id="countryname" class="form-control input-sm">
					</div>
				</div>

				 	<div class="form-group row">
					<a href="home_city.php" title="kembali" class="btn btn-warning">Kembali</a>
					
					<input type="submit" name="submit" value="simpan" class="btn btn-info">
				</form>

			</div>
		</div>
	</div>
</body>
</html>