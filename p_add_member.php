<?php
	include "koneksiDB.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$city = $_POST['city'];

	$path = "upload/".$nama_file;
  function upload() {
  $namaFile = $_FILES['foto']['name'];
  $ukuranFile = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tempName = $_FILES['foto']['tmp_name'];
  if($error === 4) {
    echo "
      <script>
        alert('pilih gambar terlebih dahulu');

      </script>
    ";
  }
  //check extensi file

  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "
        <script>
          alert('yang anda upload bukan gambar');

        </script>";
    return false;
  }
  //cek jika ukuran gambar terlalu besar
  if($ukuranFile > 1000000){
    echo "
        <script>
          alert('yang anda upload kebesaran');

        </script>";
    return false;
}
$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

//lolos pengecekan
move_uploaded_file($tempName, 'upload/' . $namaFileBaru);
return $namaFileBaru;

}


     if (isset($_POST['submit'])) {
              //upload gambar
        $gambar = upload();
        if(!$gambar) {
          return false;
        }
           	
     	$query = "INSERT INTO members (fullname,email,address,foto,idcompany,idcity) VALUES ('".$nama."','".$email."','".$address."','".$gambar."','".$company."','".$city."')";
     	$sql = mysqli_query($kon,$query);

     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil disimpan');
                window.open('home.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal disimpan');
                window.open('add_member.php','_SELF');
              </script>
            <?php
          }
   
     }



?>