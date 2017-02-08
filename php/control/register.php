<?php 

include 'koneksi.php';


if (isset($_POST['reg'])) {
	$nrp = $_POST['nrp'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$kesatuan = $_POST['kesatuan'];
	

	$query = mysql_query("INSERT INTO personil VALUES(NULL,'$nrp','$nama','$pangkat','$jabatan','$kesatuan','$alamat','0','0','0','0','0','0','0','0')");

	if ($query) {
		header("location:../../index.php?page=dashboard&&message=success");
	}
	else{
		header("location:../../index.php?page=register&&message=error");	
	}
}
?>