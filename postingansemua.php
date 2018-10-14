<?php 
include 'konek.php';
$query = mysqli_query($konek,"SELECT * FROM tambahan");

 ?>

 <tabel align="center">
 	<tr>
 		<td colspan="3" align="center">POSTINGAN SEMUANYA</td>
 	</tr><br>

 	<tr align="center">
 		<td>Nim</td><br>
 		<td>Riwayat</td><br>
 		<td>Gambar</td><br>
 	</tr>
 	<?php 
 			while ($arr = mysqli_fetch_array($query)) {
 				$code = $arr['nim'];
 				$query1 = mysqli_query($konek,"SELECT * FROM pribadi WHERE nim='$code'");
 				$arryy = mysqli_fetch_array($query1);
 				echo "<tr>";
 				echo "<td>".$arr['nim']."<br>".$arryy['nama']."</td>"."<br>";
 				echo "<td>".$arr['story']."</td>"."<br>";
 				echo "<td><img src='gambar/".$arr['no_gambar']."' height='100'></td>"."<br>";
 				
 				echo "<tr>";
 			}
 				 			
 		 ?>

 		 <tr>
 		 	<td colspan="3" align="center"><button><a href="menuawal.php" style="text-decoration: none">Kembali</a></button></td>
 		 </tr>
 </tabel>

