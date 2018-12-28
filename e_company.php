<!DOCTYPE html>
<html>
<head>
	<title>Edit Company</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<body>
<?php
	include "koneksiDB.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM company WHERE idcompany='".$id."'";
	$sql = mysqli_query($kon,$query);
	$row = mysqli_fetch_array($sql);
?>

	<div class="container" style="width: 50%;margin-top: 50px">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px">Edit Member</label>
			<div class="panel panel-body">
			<form method="POST" action="se_company.php">
				<div class="form-group row">
					<div class="col-lg-12">
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"  >
	
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">
						<label>Company Name</label>
						<input type="text" name="companyname" class="form-control input-sm" value="<?php echo $row['name']; ?>">
					</div>
				</div>

				



				<div class="form-group row">
					<a href="home_company.php" title="kembali" class="btn btn-warning">Kembali</a>
					<input type="submit" name="submit" value="simpan" class="btn btn-info">
				</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>