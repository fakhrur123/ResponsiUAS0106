<?php
	include "koneksiDB.php";

  $id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$city = $_POST['city'];


	$nama_file = $_FILES['foto']['name'];
	$ukuran_file = $_FILES['foto']['size'];
	$tipe_file = $_FILES['foto']['type'];
	$tmp_file = $_FILES['foto']['tmp_name'];


	$path = "foto/".$nama_file;

     if (isset($_POST['submit'])) {

     	
     	$query = "UPDATE members SET fullname = '".$nama."', email = '".$email."', idcompany = '".$company."', address = '".$address."', idcity = '".$city."', foto = '".$nama_file."' WHERE id ='".$id."'";

     	$sql = mysqli_query($kon,$query);
      
     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil diedit');
                window.open('home.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal diedit');
                window.open('home.php','_SELF');
              </script>
            <?php
          }
   
     }


?>