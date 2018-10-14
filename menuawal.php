<?php 
	include 'konek.php';
	session_start();
	$nim = $_SESSION['nim'];
	$query1 = mysqli_query($konek,"SELECT * FROM `pribadi` WHERE nim='$nim'");
	$aksi = mysqli_fetch_array($query1);

 ?>

<table>
 	<tr>
 		<td colspan="5"><h3>HALAMAN UTAMA</h3></td>
 	</tr>
 	<tr>
 		<td>Nim</td>
 		<td align="right"><?php echo $aksi['nim']; ?></td>
 	</tr>

 	<tr>
 		<td>Nama</td>
 		<td align="right"><?php echo $aksi['nama']; ?></td>
 	</tr>

 	<tr>
 		<td>kelas</td>
 		<td align="right"><?php echo $aksi['kelas']; ?></td>
 	</tr>

 	<tr>
 		<td>jenis kelamin</td>
 		<td  align="right"><?php echo $aksi['jeniskelamin']; ?></td>
 	</tr>

 	<tr>
 		<td>Hobi</td>
 		<td align="right"><?php echo $aksi['Hobi']; ?></td>
 	</tr>

 	<tr>
 		<td>fakultas</td>
 		<td align="right"><?php echo $aksi['Fakultas']; ?></td>
 	</tr>

 	<tr>
 		<td>Alamat</td>
 		<td align="right"><?php echo $aksi['Alamat']; ?></td>
 	</tr>
 	<tr>
 		<td ><button><a href="posting.php" style="text-decoration: none">POSTING</a></button></td>
 		<td><button><a href="postingansemua.php" style="text-decoration: none">POSTINGAN SEMUA</a></button></td>
 		<td><button><a href="edit.php" style="text-decoration: none">EDIT PROFIL</a></button></td>
 		<td><button><a href="keluar.php" style="text-decoration: none">KELUAR</a></button></td>

 	</tr>
 </table>
