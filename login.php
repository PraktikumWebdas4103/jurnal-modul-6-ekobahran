<form action=" " method="POST">
	<table>
		<tr>
			<td>Username : </td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
	 		<td>Password :</td>
	 		<td><input type="Password" name="pass"></td>
	 	</tr>
	 	<tr>
	 		<td></td>
	 		<td><input type="submit" name="submit"></td>
	 	</tr>
	 </table>
	</form>

<?php
session_start();
$tiara=array(
	"user"=>"eko",
	"pass" =>"1111"
);
		if(isset($_POST['submit'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];


			if($user== $eko["user"] && $pass==$eko["pass"]){
				$_session['user']=$user;
				header("location:registrasi.php");
			}else{
				header("location:login.php");
			}

		}
?>