<?php include 'php/control/koneksi.php'; ?>

<div class="col-md-12">
	<h2>Admin</h2>   
	<!-- <a href="main.php?page=tambah-admin" class="btn btn-primary pull-right" data-toggle="tooltip" title="Add New User"><i class="fa fa-user-plus"></i></a> -->
</div>
<br><br><br>
<div class="table-responsive">
	<table class="table table-bordered" style="text-align:center;">
		<tr>
			<th style="text-align:center;">Username</th>
			<th style="text-align:center;">Password</th>
			<!-- <th style="text-align:center;">Action</th> -->
		</tr>

		<!-- DATA KOSONG -->
		<?php 
		$show = mysql_query("SELECT * FROM admin");
		$row = mysql_num_rows($show);
		if ($row == 0) {
			?>						
			<tr>
				<td colspan="3" class="bg-red"><b>DATA KOSONG</b></td>
			</tr>
			<?php } ?>
			<!-- DATA KOSONG -->

			<!-- SHOW DATA -->

			<?php while ($cek = mysql_fetch_array($show)) {  
				?>
				<tr>
					<td><?php echo $cek['username']; ?></td>
					<td><i class="fa fa-lock fa-2x text-danger"></i></td>
				</tr>
				<?php } ?>
				<!-- SHOW DATA -->
			</table>
		</div>
