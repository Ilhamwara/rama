<style type="text/css">
	.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td{
		border-top: solid 1px #fff;
	}
</style>
<div class="col-md-12">
	<h2>Rekap Data Hasil Penilaian</h2>
	<br>
	<ul class="nav nav-tabs">
		<li role="presentation" class="active"><a href="#ujian" data-toggle="tab"><b>Daftar Personil Ujian</b></a></li>
		<li role="presentation"><a href="#lulus" data-toggle="tab"><b>Personil Lulus</b></a></li>
		<li role="presentation"><a href="#tidaklulus" data-toggle="tab"><b>Personil Tidak Lulus</b></a></li>
	</ul>
	<br>
	<div class="tab-content">
		<div id="ujian" class="tab-pane fade in active">
			<div class="table-responsive">
				<table class="table table-hover text-center" id="myTable">
					<tr>
						<th class="text-center">NRP</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Renang</th>
						<th class="text-center">Lari</th>
						<th class="text-center">Pushup</th>
						<th class="text-center">Pullup</th>
						<th class="text-center">Situp</th>
						<th class="text-center">Shuttlerun</th>
						<th class="text-center">Hasil</th>
						<th class="text-center">Status</th>
					</tr>
					<?php 
					include 'php/control/koneksi.php';
					$query = mysql_query("SELECT * FROM personil WHERE status = '0'");
					if (mysql_num_rows($query) == 0) { ?>
					<tr>
						<td colspan="10" style="background-color: #E74C3C; color: #fff;">Data Kosong</td>
					</tr>
					<?php }
					while ($cek = mysql_fetch_array($query)) {
						?>
						<tr>
							<td><?php echo $cek['nrp']; ?></td>
							<td><?php echo $cek['nama']; ?></td>
							<td><?php echo $cek['renang']; ?></td>
							<td><?php echo $cek['lari']; ?></td>
							<td><?php echo $cek['pushup']; ?></td>
							<td><?php echo $cek['pushup']; ?></td>
							<td><?php echo $cek['situp']; ?></td>
							<td><?php echo $cek['shuttlerun']; ?></td>
							<td><?php echo $cek['hasil']; ?></td>
							<td><div class="label label-success" style="padding: 10px;">Masih Proses</div></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div id="lulus" class="tab-pane fade">
			<div class="table-responsive">
				<table class="table table-hover text-center" id="myTable">
					<tr>
						<th class="text-center">NRP</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Renang</th>
						<th class="text-center">Lari</th>
						<th class="text-center">Pushup</th>
						<th class="text-center">Pullup</th>
						<th class="text-center">Situp</th>
						<th class="text-center">Shuttlerun</th>
						<th class="text-center">Hasil</th>
						<th class="text-center">Status</th>
					</tr>
					<?php 
					include 'php/control/koneksi.php';
					$query = mysql_query("SELECT * FROM personil WHERE status = '1'");
					if (mysql_num_rows($query) == 0) { ?>
					<tr>
						<td colspan="10" style="background-color: #E74C3C; color: #fff;">Data Kosong</td>
					</tr>
					<?php }
					while ($cek = mysql_fetch_array($query)) {
						?>
						<tr>
							<td><?php echo $cek['nrp']; ?></td>
							<td><?php echo $cek['nama']; ?></td>
							<td><?php echo $cek['renang']; ?></td>
							<td><?php echo $cek['lari']; ?></td>
							<td><?php echo $cek['pushup']; ?></td>
							<td><?php echo $cek['pushup']; ?></td>
							<td><?php echo $cek['situp']; ?></td>
							<td><?php echo $cek['shuttlerun']; ?></td>
							<td><?php echo $cek['hasil']; ?></td>
							<td><div class="label label-primary" style="padding: 10px;">Lulus</div></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div id="tidaklulus" class="tab-pane fade">
			<div class="table-responsive">
				<table class="table table-hover text-center" id="myTable">
					<tr>
						<th class="text-center">NRP</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Renang</th>
						<th class="text-center">Lari</th>
						<th class="text-center">Pushup</th>
						<th class="text-center">Pullup</th>
						<th class="text-center">Situp</th>
						<th class="text-center">Shuttlerun</th>
						<th class="text-center">Hasil</th>
						<th class="text-center">Status</th>
					</tr>
					<?php 
					include 'php/control/koneksi.php';
					$query = mysql_query("SELECT * FROM personil WHERE status = '2'");
					if (mysql_num_rows($query) == 0) { ?>
					<tr>
						<td colspan="10" style="background-color: #E74C3C; color: #fff;">Data Kosong</td>
					</tr>
					<?php }
					while ($cek = mysql_fetch_array($query)) {
						?>
						<tr>
							<td><?php echo $cek['nrp']; ?></td>
							<td><?php echo $cek['nama']; ?></td>
							<td><?php echo $cek['renang']; ?></td>
							<td><?php echo $cek['lari']; ?></td>
							<td><?php echo $cek['pushup']; ?></td>
							<td><?php echo $cek['pushup']; ?></td>
							<td><?php echo $cek['situp']; ?></td>
							<td><?php echo $cek['shuttlerun']; ?></td>
							<td><?php echo $cek['hasil']; ?></td>
							<td><div class="label label-danger" style="padding: 10px;">Tidka Lulus</div></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>