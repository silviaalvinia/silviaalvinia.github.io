<?php

	$koneksi = mysqli_connect("localhost", "root", "", "silabkes_xx");
	$buatData = mysqli_query($koneksi, "DELETE FROM data_petugas WHERE id_petugas='".$_GET["id_petugas"]."'");
	
	echo mysqli_error($koneksi);
	if($buatData) {
		echo "<h2>Data berhasil diubah</h2>";
	} else {
		echo "<h2>Data gagal diubah</h2>";
	}

echo '<a href="./daftar_petugas_sil.php">Kembali ke halaman daftar</a>';

?>
