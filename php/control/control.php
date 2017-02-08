<?php 

include 'koneksi.php';

$page = $_GET['page'];


$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pangkat = $_POST['pangkat'];
$jabatan = $_POST['jabatan'];
$kesatuan = $_POST['kesatuan'];

//---------------------------------------- TAMBAH PRODUK ----------------------------------//

if ($page == 'tambah-personil') {

	$query = mysql_query("INSERT INTO personil VALUES(NULL,'$nrp','$nama','$pangkat','$jabatan','$kesatuan','$alamat','0','0','0','0','0','0','0','0')");

	if ($query){
		header('location:../../index.php?page=personil&&message=berhasil-tambah');
	}
	else{
		header("location:../../index.php?page=tambah-personil&&message=error");	
	}
}
//----------------------------------------TUTUP TAMBAH PRODUK ----------------------------------//





//---------------------------------------- EDIT PRODUK ----------------------------------//

if ($page == 'edit-personil') {
	if (isset($_GET['key'])) {
		$id = $_GET['key'];
		$sql = mysql_query("UPDATE personil SET nrp='$nrp',nama='$nama',pangkat='$pangkat',jabatan='$jabatan',kesatuan='$kesatuan',alamat='$alamat' WHERE id='$id'");
		if ($sql){
			header('location:../../index.php?page=personil&&message=berhasil-edit');
		}
		else{
			header('location:../../index.php?page=edit-personil&&message=gagal-edit');
		}
	}
}
//----------------------------------------TUTUP EDIT PRODUK ----------------------------------//

?>