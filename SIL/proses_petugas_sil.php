<?php
	
	$koneksi = mysqli_connect("localhost", "root", "", "silabkes_xx");
	$buatData = mysqli_query($koneksi, "INSERT INTO data_petugas(id_petugas, nama_petugas, keahlian_petugas) VALUES ('".$_POST["id_petugas"]."',
																													'".$_POST["nama_petugas"]."',
																													'".$_POST["keahlian_petugas"]."')");
	
	echo mysqli_error($koneksi);
	if($buatData) {
		echo "<h2>Data berhasil diinput</h2>";
	} else {
		echo "<h2>Data gagal diinput</h2>";
	}
	
echo '<a href="./form_petugas_sil.php">Kembali ke halaman form</a>';
echo '<br/>';
echo '<a href="./daftar_petugas_sil.php">Lihat Daftar Petugas</a>';
?>