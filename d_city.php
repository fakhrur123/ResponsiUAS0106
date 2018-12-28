<?php
	include "koneksiDB.php";
	$id = $_GET['id'];
	$query = "DELETE FROM city WHERE idcity = '".$id."' ";
	$sql = mysqli_query($kon,$query);
	if ($sql) {
		?>
				<script>
					alert('Data Berhasil dihapus');
					window.open('home_city.php','_SELF');
				</script>
			<?php
	}else{
		?>
				<script>
					alert('data gagal dihapus');
					window.open('home_city.php','_SELF');
				</script>
			<?php
	}
?>