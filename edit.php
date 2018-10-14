<?php 
include 'konek.php';
	session_start();
	$nim = $_SESSION['nim'];
	$query1 = mysqli_query($konek,"SELECT * FROM `pribadi` WHERE nim='$nim'");
	$akasi = mysqli_fetch_array($query1);
	$array = explode(",", $akasi['Hobi']);
	
 ?>

 <form method="post">
	<table>
		<tr>
			<td>Nama:</td>
			<td><?php echo "<input type='text' name='nama' value='".$akasi['nama']."''>"; ?></td>	
		</tr>
		
		<tr>
			<td>Kelas:</td>
			<td>
		<input type="radio" name="rad" value="D3SI-41-01" <?php echo ($akasi['kelas']=='D3SI-41-01')?'checked':'' ?>>D3SI-41-01<BR>
		<input type="radio" name="rad" value="D3SI-41-02" <?php echo ($akasi['kelas']=='D3SI-41-02')?'checked':'' ?>>D3SI-41-02<BR>
		<input type="radio" name="rad" value="D3SI-41-03" <?php echo ($akasi['kelas']=='D3SI-41-03')?'checked':'' ?>>D3SI-41-03<BR>
		<input type="radio" name="rad" value="D3SI-41-04" <?php echo ($akasi['kelas']=='D3SI-41-04')?'checked':'' ?>>D3SI-41-04</td>
		</tr>

		<tr>
			<td>Jeniskelamin:</td>
			<td><input type="radio" name="jk" value="laki-laki" <?php echo ($akasi['jeniskelamin']=='laki-laki')?'checked':'' ?>>Laki-laki<BR>
			<input type="radio" name="jk" value="Perempuan" <?php echo ($akasi['jeniskelamin']=='Perempuan')?'checked':'' ?>>Perempuan</td>
		</tr>

		<tr>
			<td>Hobi:</td>
			<td>
				<input type="checkbox" name="hob[]" value="Bola" <?php if(in_array('Bola volly', $array)){echo "checked=checked";}?>>Bola volly<br>
				<input type="checkbox" name="hob[]" value="Musik" <?php if(in_array('sepak bola', $array)){echo "checked=checked";}?>>sepak bola<br>
				<input type="checkbox" name="hob[]" value="renang"<?php if(in_array('renang', $array)){echo "checked=checked";}?>>renang<br> 	
				<input type="checkbox" name="hob[]" value="basket"<?php if(in_array('basket', $array)){echo "checked=checked";}?>>basket 	
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
			<td><?php echo "<textarea name='alamat'".">".$aksi['Alamat']."</textarea>"; ?> </td>
		</tr>

		<tr>
			<td><input type="submit" name="send" value="submit"></td>
			<td><button><a href="menuawal.php" style="text-decoration: none">kembali</a></button></td>
		</tr>
	</table>
	<br>

	<br>
	
	
</form>

<?php 
if (isset($_POST['send'])) {
		if (str_word_count($_POST['nama'])<=35) {
			$nama = $_POST['nama'];
		}else{echo "Nama terlalu panjang <br>";}

		$kelas = $_POST['rad'];
		$jenkel = $_POST['jk'];

		$jelas = $_POST['hob'];
		$hobi = implode(",",$jelas);
		$fakultas = $_POST['fakul1'];
		$Alamat = $_POST['alamat'];

		$uplod = mysqli_query($konek,"UPDATE pribadi SET nama='$nama',kelas='$kelas',jeniskelamin='$jenkel',Hobi='$hobi',Fakultas='$fakultas',Alamat='$Alamat' WHERE nim='$nim'");
		if (isset($uplod)) {
			echo "berhasil";
			header("Location:edit.php");
		}
		}

 ?>
