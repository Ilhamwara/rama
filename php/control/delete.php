<?php 

include 'koneksi.php';

$page = $_GET['page'];


// DELETE ADMIN //
if ($page == 'delete-admin') {
	
	if (isset($_GET['key'])) {

		$id_admin = $_GET['key'];
		$query_delete = mysql_query("DELETE FROM admin WHERE id='$id_admin'");
		if ($query_delete) {
			header("Location:../../main.php?page=admin-control");
		}
		else{
			echo "gagal";
		}
	}
}
// TUTUP DELETE ADMIN //


elseif ($page == 'delete-personil') {
	
	if (isset($_GET['key'])) {

		$id = $_GET['key'];
		$query_delete = mysql_query("DELETE FROM personil WHERE id='$id'");
		if ($query_delete) {
			header("Location:../../index.php?page=personil&&message=delete-personil");
		}
		else{
			header("Location:../../index.php?page=personil&&message=gagal-delete-personil");
		}
	}
}

elseif ($page == 'delete-kriteria') {
	
	if (isset($_GET['key'])) {

		$id = $_GET['key'];
		$query_delete = mysql_query("DELETE FROM kriteria WHERE id='$id'");
		if ($query_delete) {
			header("Location:../../index.php?page=kriteria&&message=delete-personil");
		}
		else{
			header("Location:../../index.php?page=kriteria&&message=gagal-delete-personil");
		}
	}
}

?>
