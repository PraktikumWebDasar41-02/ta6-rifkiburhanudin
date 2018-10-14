<form method="post">
	<table align="left">
		<tr>
			<td><h3>REGISTRASI</h3></td>
		</tr>
		<tr>
			<td>Nim:</td>
			<td><input type="text" name="nim"></td>
		</tr>

		<tr>
			<td>Nama:</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>Kelas:</td>
			<td>
		<input type="radio" name="rad" value="D3SI-41-01">D3SI-41-01<br>
		<input type="radio" name="rad" value="D3SI-41-02">D3SI-41-02<br>
		<input type="radio" name="rad" value="D3SI-41-03">D3SI-41-03<br>
		<input type="radio" name="rad" value="D3SI-41-04">D3SI-41-04</td>
		</tr>

		<tr>
			<td>Jeniskelamin:</td>
			<td><input type="radio" name="jk" value="laki-laki">Laki-laki<br>
			<input type="radio" name="jk" value="Perempuan">Perempuan </td>
		</tr>

		<tr>
			<td>Hobi:</td>
		<td><input type="checkbox" name="hob[]" value="Bola volly">Bola volly <br>
		<input type="checkbox" name="hob[]" value="sepak bola">sepak bola <br>
		<input type="checkbox" name="hob[]" value="renang">renang <br>
		<input type="checkbox" name="hob[]" value="basket">basket <br>
	</td>
		</tr>

		<tr>
			<td>Faklutas:</td>
			<td>
				<select name="fakul1">
				<option>Pilih</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option><br>
				<option value="Fakultas Informatika">Fakultas Informatika</option><br>
				<option value="Fakultas Rekayasa Industri">fakultas Rekayasa Industri</option><br>
				<option value="Fakultas Rekayasa Industri">fakultas Rekayasa Industri</option><br>
				<option value="Fakultas Ekonomi Bisnis">fakultas Ekonomi Bisnis</option><br>
				</select>
			</td>
		</tr>

		<tr>
			<td>Alamat:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="send" value="submit"></td>
			<td align="right"><button><a href="login.php">Masuk</a></button></td>
		</tr>
	</table>	
</form>

<?php 
	include 'konek.php';
	if (isset($_POST['send'])) {
		if (str_word_count($_POST['nama'])<=35) {
			$nama = $_POST['nama'];
		}else{echo "Nama terlalu panjang <br>";}

		if (!is_numeric($_POST['nim'])&&str_word_count($_POST['nim']>10)) {
			echo "NIM harus angka dan max 10 karakter <br>";
		}else{$nim = $_POST['nim'];}

		$kelas = $_POST['rad'];
		$jenkel = $_POST['jk'];

		$jelas = $_POST['hob'];
		$hobi = implode(",",$jelas);
		$fakultas = $_POST['fakul1'];
		$Alamat = $_POST['alamat'];
		if (isset($nama)&&isset($nim)&&isset($kelas)&&isset($jenkel)&&isset($hobi)&&isset($fakultas)&&isset($Alamat)) {
		$query1 = mysqli_query($konek,"INSERT INTO pribadi (nim, nama, kelas, jeniskelamin, Hobi, Fakultas, Alamat) VALUES ('$nim','$nama','$kelas','$jenkel','$hobi','$fakultas','$Alamat')");

		if (isset($query1)) {
			header("Location:login.php");
		}
		}else{echo "Data masih kosong";}
		
	}
 ?>


