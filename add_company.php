<!DOCTYPE html>
<html>
<head>
	<title>Add Company</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<body>
	<div class="container" style="width: 50%;margin-top: 50px">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px">Add Company</label>
			<div class="panel panel-body">
			<form method="POST" action="p_add_company.php" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-lg-12">
						<label for="companyname">Company Name</label>
						<input type="text" name="companyname" id="companyname" class="form-control input-sm">
					</div>
				</div>

				
				 	<div class="form-group row">
					<a href="home_company.php" title="kembali" class="btn btn-warning">Kembali</a>
					
					<input type="submit" name="submit" value="simpan" class="btn btn-info">
				</form>

			</div>
		</div>
	</div>
</body>
</html>