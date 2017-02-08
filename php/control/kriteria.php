<?php 

include 'koneksi.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$renang = $_POST['renang'];
	$lari = $_POST['lari'];
	$pushup = $_POST['pushup'];
	$pullup = $_POST['pullup'];
	$shuttlerun = $_POST['shuttlerun'];
	$situp = $_POST['situp'];

	$cek_bobot = mysql_query("SELECT * FROM kriteria");
	$cek = mysql_fetch_array($cek_bobot);
	$total = ($lari + $renang + $pushup + $pullup + $situp + $shuttlerun);
	if ($total > 100) {
		header('location:../../index.php?page=kriteria&&message=kelebihan-bobot');
	}
	else{
		$query = mysql_query("UPDATE kriteria SET Lari=$lari,Renang=$renang,Pushup=$pushup,Pullup=$pullup,Situp=$situp,Shuttlerun=$shuttlerun WHERE id = $id");
		if ($query) {
			header('location:../../index.php?page=kriteria&&message=berhasil-input-data');
		}
		else{
			header('location:../../index.php?page=kriteria&&message=gagal-input-data');	
		}
	}
}
?>