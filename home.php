
<?php  
$connect = mysqli_connect("localhost", "root", "", "pwluas");
if(isset($_POST["submit"]))
{
 if($_FILES['csv']['name'])
 {
  $filename = explode(".", $_FILES['csv']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['csv']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    			$item1 = mysqli_real_escape_string($connect, $data[0]);  
                $item2 = mysqli_real_escape_string($connect, $data[1]);
                $item3 = mysqli_real_escape_string($connect, $data[2]);
                $item4 = mysqli_real_escape_string($connect, $data[3]);
                $item5 = mysqli_real_escape_string($connect, $data[4]);
                $query = "INSERT into members(fullname, email, address, idcompany, idcity) values('$item1','$item2','$item3','$item4','$item5')";
                mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>alert('Import Done');</script>";
  }
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<body>
	<div class="container">
		
			
		<div class="panel panel-default" style="margin-top: 100px">
			
			<label style="font-size: 28px;margin-left: 15px">Data Member</label>
			<div class=“row”>
			<div class="panel panel-body">

				<div class="col-md-6">
				<a href="home.php" class="btn btn-info">1. CRUD Member</a>
				<a href="home_city.php" class="btn btn-info">2. CRUD City</a>
				<a href="home_company.php" class="btn btn-info">3. CRUD Company</a>

				<a href="add_member.php">
				<button type="button" class="btn btn-success">Add Member</button>
				</a>
				</div>
				
				
    			<div class="col-md-6 float-right">
    					<form action="" method="post" enctype="multipart/form-data" class="form-inline">
    				<label>File Csv</label> 
    				<div class="form-group">
     				 	<input type="file" class="form-control" name="csv">
    				</div>
    					<button type="submit" id="submit" name="submit" class="btn btn-primary">Import Csv</button>
						</form>
  				</div>
  				</div>
			
					<div class="table table-responsive" style="margin-top: 10px;">
					<table class="table table-striped">

						<tr>
							<th>No</th>
							<th>Fullname</th>
							<th>Email</th>
							<th>Company</th>
							<th>City</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>


						<?php
							include "koneksiDB.php";
							$query = "SELECT co.idcompany, co.name as companyName, m.id as idMember, m.idcompany, m.idcity, m.fullname as fullname, m.email as email, ci.idcity, ci.cityname as cityName FROM company co JOIN members m ON co.idcompany=m.idcompany JOIN city ci ON m.idcity=ci.idcity";
							$sql = mysqli_query($kon,$query);
							$no=0;
							while ($row = mysqli_fetch_array($sql)) {
								$no++;
						?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row["fullname"]; ?></td>
								<td><?php echo $row["email"]; ?></td>
								<td><?php echo $row["companyName"]; ?></td>
								<td><?php echo $row["cityName"]; ?></td>
								<td>
									 <a href="e_member.php?id=<?php echo $row['idMember'] ?>" title="edit" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<a href="view_detail.php?id=<?php echo $row['idMember'] ?>" title="Detail" class="btn btn-info">Detail</a>
								</td>
								<td>
									<a href="d_member.php?id=<?php echo $row['idMember'] ?>" title="delete" class="btn btn-danger">Delete</a>
								</td>
							</tr>
								<?php
							}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>



