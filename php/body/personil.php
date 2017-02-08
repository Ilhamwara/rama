<?php include 'php/control/koneksi.php'; ?>
<div class="col-md-12">
	<div>
		<h2>Data Personil </h2>
	</div>   
	<!-- <a href="index.php?page=tambah-personil" class="btn btn-primary pull-right">Tambah Data Personil</a> -->
	<br><br>
	<table class="table">
		<tr>
			<th class="text-center">No</th>
			<th class="text-center">NRP</th>
			<th class="text-center">Nama</th>
			<th class="text-center">Pangkat</th>
			<th class="text-center">Jabatan</th>
			<th class="text-center">Kesatuan</th>
			<th class="text-center">Alamat</th>
			<th class="text-center">Status</th>
			<th class="text-center">Action</th>
		</tr>
		<?php
		$per_page = 50;

		$page_query = mysql_query("SELECT COUNT(*) FROM personil");
		$pages = ceil(mysql_result($page_query, 0) / $per_page);

		$hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
		$start = ($hal - 1) * $per_page;
		$show = mysql_query("SELECT * FROM personil LIMIT $start, $per_page");

		$row = mysql_num_rows($show);
		if ($row == 0) {
			?>
			<tr>
				<td colspan="9" class="text-center" style="background: #e74c3c; color: #fff;">Data saat ini masih kosong</td>
			</tr>
			<?php
		}
		$no = 0;
		while ($cek = mysql_fetch_array($show)) { 
			$no = $no + 1;
			?>
			<tr>
				<td class="text-center"><?php echo $no; ?></td>
				<td><?php echo $cek['nrp']; ?></td>
				<td><?php echo $cek['nama']; ?></td>
				<td><?php echo $cek['pangkat']; ?></td>
				<td><?php echo $cek['jabatan']; ?></td>
				<td><?php echo $cek['kesatuan']; ?></td>
				<td><?php echo $cek['alamat']; ?></td>
				<td>
					<?php 
					if($cek['status'] == '0'){ ?>
					<div class="btn btn-success">
						Masih Proses
					</div>
					<?php
				} 
				elseif($cek['status'] == '1'){ ?>
				<div class="btn btn-primary">
					Lulus Pangkat
				</div>
				<?php
			} 
			elseif($cek['status'] == '2'){ ?>
			<div class="btn btn-danger">
				Tidak Lulus
			</div>
			<?php
		}
		?>					
	</td>
	<td class="text-center">
		<a href="index.php?page=edit-personil&&key=<?php echo $cek['id']; ?>" class="btn btn-warning">Edit</a>
		<a href="php/control/delete.php?page=delete-personil&&key=<?php echo $cek['id']; ?>" class="btn btn-danger">Hapus</a>
	</td>
</tr>
<?php 
}
?>
</table>

<nav aria-label="Page navigation" style="text-align:center; clear: both;">
	<ul class="pagination">
		<?php
		if($pages >= 1 && $hal <= $pages)
		{
			for($x=1; $x<=$pages; $x++)
			{
                                          //echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
				if($x == $hal){
					echo '  <li class="active"><a href="?page=laptop&&hal='.$x.'">'.$x.'</a></li> ';
				}
				else{
					echo ' <li><a href="?page=laptop&&hal='.$x.'">'.$x.'</a></li>';
				}
			}
		}
		?>
	</ul>
</nav> 

</div>