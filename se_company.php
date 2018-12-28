<?php
	include "koneksiDB.php";

  $id = $_POST['id'];
	$companyname = $_POST['companyname'];



     if (isset($_POST['submit'])) {

     	
     	$query = "UPDATE company SET name = '".$companyname."' WHERE idcompany ='".$id."'";

     	$sql = mysqli_query($kon,$query);
      
     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil diedit');
                window.open('home_company.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal diedit');
                window.open('edit_company.php','_SELF');
              </script>
            <?php
          }
   
     }


?>