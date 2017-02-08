<?php 
include 'php/control/koneksi.php';
if ($_GET['kode']) {
$id = $_GET['kode'];
$query = mysql_query("SELECT * FROM barang WHERE id='$id'");
$cek = mysql_fetch_array($query);
?>
<div class="col-md-12">	
<br>	
	<div class="col-md-6">
		<img src="assets/img/laptop/<?php echo $cek['foto']; ?>" style="width:400px; height:auto;"> 
	</div>
	<div class="col-md-6">
		<h3>
			<?php
			echo $cek['nama_barang'];
			?>	
			<div class="pull-right">
				<a href="index.php?page=laptop" class="btn btn-default">Kembali <i class="fa fa-arrow-right"></i></a>
			</div>
		</h3>
		<br>
		<h5> Merk : <b><?php echo $cek['merk']; ?></b></h5>
		<h5> Harga : <b>Rp.<?php echo number_format($cek['harga']); ?>,00</b></h5>
		<h5> Tipe Processor : <b><?php echo $cek['tipe_processor']; ?></b></h5>
		<h5> Processor : <b><?php echo $cek['processor']; ?> Ghz</b></h5>
		<h5> Berat : <b><?php echo $cek['berat']; ?>Kg</b></h5>
		<h5> HDD : <b><?php echo $cek['hdd']; ?> GB</b></h5>
		<h5> RAM : <b><?php echo $cek['ram']; ?> GB</b></h5>
		<h5> Layar : <b><?php echo $cek['layar']; ?> Inch</b></h5>	
	</div>
</div>
<?php
}
?>