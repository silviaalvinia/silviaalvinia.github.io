<?php

	$koneksi = mysqli_connect("localhost", "root", "", "silabkes_xx");
	$buatData = mysqli_query($koneksi, "UPDATE data_pasien SET  
										nama_pasien='".$_POST["nama_pasien"]."',
										alamat_pasien='".$_POST["alamat_pasien"]."',
										id_asuransi='".$_POST["id_asuransi"]."',
										WHERE id_pasien='".$_GET["id"]."'");
	
	echo mysqli_error($koneksi);
	if($buatData) {
		echo "<h2>Data berhasil diubah</h2>";
	} else {
		echo "<h2>Data gagal diubah</h2>";
	}

echo '<a href="./daftar_pasien_sil.php">Kembali ke halaman daftar pasien</a>';
?>