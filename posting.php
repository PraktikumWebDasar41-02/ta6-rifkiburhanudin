<form method="post" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td colspan="2"><H3>POSTINGAN</H3></td>
		</tr>

		<tr>
			<td>riwayat:</td>
			<td><textarea name="story" rows="20" cols="80"></textarea></td>
		</tr>

		<tr>
			<td>gambar:</td>
			<td><input type="file" name="foto"></td>
		</tr>

		<tr align="center">
			<td colspan="2"><input type="submit" name="simpan" value="submit"><button><a href="menuawal.php" style="text-decoration: none">Kembali</a></button></td>
			
		</tr>
	</table>
</form>

<?php 
include 'konek.php';
session_start();
if (isset($_POST['simpan'])) {
	if ($_FILES['foto']['name'] != "") {
		$nim = $_SESSION['nim'];
		$gambar = $_FILES['foto']['name'];
		if (str_word_count($_POST['story'])<=30) {
			$story = $_POST['story'];
		}else{echo "riwayat harus di bawah 30 karakter";}
		
		if (isset($story)&&isset($gambar)) {
			$acti = mysqli_query($konek,"INSERT INTO tambahan(nim, no_file, story, no_gambar) VALUES ('$nim','','$story','$gambar')");
		if (!$acti) {
			die("GAGAL");
		}else{echo "BERHASIL";}	
		}
		
	}
}
 ?>


