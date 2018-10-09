<?php
	$hostname   = "localhost";
	$username = "root";
	$pass     = "";
	$db       = "datamahasiswa";
	$con     = new mysqli($hostname, $username, $pass, $db);

	if($con==false){
		die("koneksi gagal". $con->connect_error);
	}
		if (isset($_POST['submit'])) {
			$nama=$_POST['nama'];
			$nim=$_POST['nim'];
			$kelas=$_POST['kelas'];
			$jeniskelamin=$_POST['jeniskelamin'];
			$fakultas=$_POST['fakultas'];
			$alamat=$_POST['alamat'];
			$hobi=$_POST['hoby'];
	
	$sql="INSERT INTO datamahasiswa(nama,nim,kelas,jeniskelamin,fakultas,alamat,hoby) VALUES ('$nama','$nim','$kelas','$jeniskelamin,'fakultas','$alamat','$hoby')";
	if(mysqli_query($con,$sql)){
				echo "Database sudah masuk";
			}else{
				echo "error";
			}
}
	?>

		