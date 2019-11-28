<?php
	
	$koneksi = mysqli_connect("localhost", "root", "", "silabkes_xx");
	$buatData = mysqli_query($koneksi, "INSERT INTO data_antrian(id_pasien, tanggal_rencana_pemeriksaan)
																					  VALUES ('".$_POST["id_pasien"]."',
																							  '".$_POST["tanggal_rencana_pemeriksaan"]."')");
	
	echo mysqli_error($koneksi);
	if($buatData) {
		echo "<h2>Data berhasil diinput</h2>";
	} else {
		echo "<h2>Data gagal diinput</h2>";
	}
	
echo '<a href="./form_antrian_sil.php">Kembali ke halaman form</a>'
?>