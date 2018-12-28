<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<body>

<?php
	include "koneksiDB.php";
	$id = $_GET['id'];
	$query = "SELECT co.idcompany, co.name as companyName, m.id as idMember, m.idcompany, m.idcity, m.fullname as fullname, m.email as email, m.address as address, m.foto as foto, ci.idcity, ci.cityname as cityName, ci.country as country FROM company co JOIN members m ON co.idcompany=m.idcompany JOIN city ci ON m.idcity=ci.idcity WHERE m.id='".$id."'";
	$sql = mysqli_query($kon,$query);
	$row = mysqli_fetch_array($sql);
?>
	<div class="container"  style="width: 50%;margin-top: 50px">
		<div class="panel panel-default">
			<div class="panel panel-body">
				<label><h3><?php echo $row['fullname']; ?></h3></label><br>
				<?php  echo '<img src="upload/'.$row['foto'].'" style="width:90px;height:90px" >'; ?>
				<div class="table table-responsive" style="margin-top: 10px;">
						<table class="table table-striped">
					
							<tr>
								<td>Email</td>
								<td><?php echo $row['email']; ?></td>
							</tr>
							<tr>
								<td>Company</td>
								<td><?php echo $row['companyName']; ?></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><?php echo $row['address']; ?></td>
							</tr>
							<tr>
								<td>City</td>
								<td><?php echo $row['cityName']; ?></td>
							</tr>
							<tr>
								<td>country</td>
								<td><?php echo $row['country']; ?></td>
							</tr>
						</table>
				</div>
				<a href="home.php" title="kembali" class="btn btn-warning">Kembali</a>
			</div>
		</div>
		
	</div>


</body>
</html>