<?php
	include "koneksiDB.php";

  $id = $_POST['id'];
	$cityname = $_POST['cityname'];
	$countryname = $_POST['countryname'];


     if (isset($_POST['submit'])) {

     	
     	$query = "UPDATE city SET cityname = '".$cityname."', country = '".$countryname."' WHERE idcity ='".$id."'";

     	$sql = mysqli_query($kon,$query);
      
     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil diedit');
                window.open('home_city.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal diedit');
                window.open('home_city.php','_SELF');
              </script>
            <?php
          }
   
     }


?>