<form method="post">
		<tr>
			<td colspan="2"><H3>HALAMAN AWAL LOGIN</H3></td>
		</tr><br>
		<tr>
			<td>Nim:</td>
			<td><input type="text" name="nim"></td>
		</tr><br>
		<tr>
			<td>Nama:</td>
			<td><input type="text" name="nama"></td>
		</tr><br>
		<tr >
			<td><input type="submit" name="kirim" value="Login"></td>
			<td><button><a href="registrasi.php">Registrasi</a></button></td>
		</tr>
	</table>
</form>

<?php 
include 'konek.php';
if (isset($_POST['kirim'])) {
	session_start();
	if (str_word_count($_POST['nama'])<=20) {
			$nama = $_POST['nama'];
		}else{echo "Nama salah <br>";}

		if (!is_numeric($_POST['nim'])&&str_word_count($_POST['nim']>10)) {
			echo "NIM max 10 karakter <br>";
		}else{$nim = $_POST['nim'];}
		$_SESSION['nama'] = $nama;
		$_SESSION['nim'] = $nim;
		if (isset($nama)&&isset($nim)) {
			$query1 = mysqli_query($konek,"SELECT * FROM pribadi WHERE nim='$nim'");
			$arr = mysqli_fetch_array($query1);
			if ($nama ==$arr['nama']&&$nim ==$arr['nim']) {
				
				header("Location:menuawal.php");
			}else{echo "nim/nama masih salah";}
		}
}
 ?>
 
 
 