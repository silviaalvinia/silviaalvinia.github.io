<html>
<head>
	<title> Sistem Informasi Laboratorium Kesehatan</title>
	</head>
	<body>
	<h1>Daftar Petugas</h1>
	<?php
	$koneksi = mysqli_connect("localhost", "root", "", "silabkes_xx");
	
	$daftar = mysqli_query($koneksi, "SELECT * FROM data_petugas");		 
	echo "<table border='1'>";
	echo "<tr><th>ID Petugas</th><th>Nama Petugas</th><th>Bidang Keahlian</th></tr>";
	
	while($row = mysqli_fetch_row($daftar)) {
		echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td>
			<td><a href="./edit_petugas_sil.php?id="'.$row[0].'" />Edit</a> | 
				<a href="./proseshapus_petugas_sil.php?id='.$row[0].'" />Hapus</a>
			</td></tr>';
	}
	echo "</table>";

	echo '<a href="./form_petugas_sil.php">Kembali ke halaman form</a>';
	echo '<br/>';
	echo '<a href="./daftar_petugas_sil.php">Lihat Daftar Petugas</a>';
	?>
	</body>
</html>