<?php 

include 'koneksi.php';

$nrp = $_POST['nrp'];
$nilai1 = $_POST['renang'];
$nilai2 = $_POST['lari'];
$nilai3 = $_POST['pushup'];
$nilai4 = $_POST['pullup'];
$nilai5 = $_POST['situp'];
$nilai6 = $_POST['shuttlerun'];


$krit = mysql_query("SELECT * FROM kriteria");
$cek_krit = mysql_fetch_array($krit);

$tot_nil1 = ($nilai1 * $cek_krit['Renang']);
$tot_nil2 = ($nilai2 * $cek_krit['Lari']);
$tot_nil3 = ($nilai3 * $cek_krit['Pushup']);
$tot_nil4 = ($nilai4 * $cek_krit['Pullup']);
$tot_nil5 = ($nilai5 * $cek_krit['Situp']);
$tot_nil6 = ($nilai6 * $cek_krit['Shuttlerun']);

$total_banget = (($tot_nil1 + $tot_nil2 +  $tot_nil3 + $tot_nil4 + $tot_nil5 + $tot_nil6) / 100);
// echo $total_banget;
if($total_banget >= 7){
	$status = 1;
}
else{
	$status = 2;	
}
$query = mysql_query("UPDATE personil SET renang='$nilai1', lari='$nilai2',pushup='$nilai3',pullup='$nilai4',situp='$nilai5',shuttlerun='$nilai6',hasil='$total_banget',status = $status WHERE nrp = '$nrp'");
if ($query) {
	header('location:../../index.php?page=personil&&message=berhasil-input-nilai');
}
else{
	header('location:../../index.php?page=input-data-pengujian&&message=gagal-input-nilai');	
}
?>