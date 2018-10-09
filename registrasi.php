<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body style="font-family: mimich">
	<center>
		<h2><p>REGISTRASI</p></h2>
	<form action="database.php" method="POST">
		<table>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" required=""></td>
			</tr>
			<tr>
				<td>KELAS</td>
				<td><input type="radio" name="kelas" value="kelas" required="">D3MI-41-01<br></td>
				<td><input type="radio" name="kelas" value="kelas">D3MI-41-02<br></td>
				<td><input type="radio" name="kelas" value="kelas">D3MI-41-03<br></td>
				<td><input type="radio" name="kelas" value="kelas">D3MI-41-04<br></td>
			</select>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jeniskelamin" value="Male" required="">Male<br></td>
				<td><input type="radio" name="jeniskelamin" value="Female">Female<br></td>
				<td><input type="radio" name="jeniskelamin" value="lain">Other<br></td>
			</select>
			</tr>
			<tr>
				<td><b>Hobi</b></td>
			<td>
				<input type="checkbox" name="hoby[]" value="Acting" required="">Berenang <br>
				<input type="checkbox" name="hoby[]" value="Mendengarkan Musik">Mendengarkan Musik 
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Badminton" >Badminton<br>
				<input type="checkbox" name="hoby[]" value="Membaca Novel">Membaca Novel
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Menulis">Menulis<br>
				<input type="checkbox" name="hoby[]" value="Other Hobby">Dan lain-lain
    			</select>
    			</td>
    		</tr>
			<tr>
				<td>fakultas</td>
				<td>
				<select name="fakultas" required="">
    				<option value="ilmu terapan">ilmu terapan</option>
    				<option value="fakultas ekonomi dan bisnis">fakultas ekonomi dan bisnis</option>
    				<option value="fakultas komunukasu bisnis">fakultas ekonomi bisinis</option>
    			</select>
			</td>
			</tr>
			<tr>
			<td>alamat</td>
			<td> <input type="textarea" name="alamat" value="alamat"></td>
		</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send" style="color: black; width: 100px;height: 40px;border-radius: 10px"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$kelas=$_POST['kelas'];
		$jenisk=$_POST['jeniskelamin'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$hoby=$_POST['hoby'];
		$hoby = implode(", ", $_POST['hoby']);
		$jumlahob=count($hoby);
		for($x=0;$x<$jumlahob;$x++){
			mysql_query("insert into data values('','$hobi[$x]')");
		

		$error=array();
		} if(strlen($_POST['nama']) <= 35){
			$error['nama']=="Harus 25";
		}if(strlen($_POST['nim']) != 10){
			$error['nim']=="Harus 10";
		} if(empty($kelas)){
			$error['kelas']=="kelas harus diisi";
		}if(empty($jeniskelamin)){
			$error['jeniskelamin']=="Jenis Kelamin harus diisi";
		}if(empty($fakultas)){
			$error['fakultas']=="fakultas harus diisi";
		} if(empty($alamat)){
			$error['alamat']=="alamat harus diisi";	
		} if(empty($hoby)){
			$error['hoby']=="Hobby harus diisi";
		}
}
?>

	