<?php
	
	$koneksi = mysqli_connect("localhost", "root", "", "silabkes_xx");
	$buatData = mysqli_query($koneksi, "INSERT INTO data_pasien(nama_pasien, alamat_pasien, id_asuransi) VALUES ('".$_POST["nama_pasien"]."',
																							  '".$_POST["alamat_pasien"]."',
																							  '".$_POST["id_asuransi"]."')");
															
	
	echo mysqli_error($koneksi);
	if($buatData) {
		echo "<h2>Data berhasil diinput</h2>";
	} else {
		echo "<h2>Data gagal diinput</h2>";
	}
	
echo '<a href="./form_pasien_sil.php">Kembali ke halaman form</a>'
?>