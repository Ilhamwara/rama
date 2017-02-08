<div class="col-md-12" style="padding: 80px 10px;">
	<div class="panel panel-default text-center">
		<h3 class="text-center"><b>REGISTER PANEL</h3></b>
		<br>
		<div class="panel-body">					
			<form action="php/control/register.php" method="POST" style="margin-left: 150px;">
				<div class="form-group row">
					<label class="col-xs-3 col-form-label">NRP <sup style="color: red;">*</sup></label>
					<div class="col-xs-6">
						<input class="form-control" type="text" placeholder="NRP" name="nrp" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xs-3 col-form-label">Nama Lengkap <sup style="color: red;">*</sup></label>
					<div class="col-xs-6">
						<input class="form-control" type="text" placeholder="Nama Lengkap" name="nama" required>
					</div>
				</div>
				<div class="form-group row">
				<label class="col-xs-3 col-form-label">Alamat <sup style="color: red;">*</sup></label>
					<div class="col-xs-6">
						<input class="form-control" type="text" placeholder="Alamat" name="alamat" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xs-3 col-form-label">Pangkat <sup style="color: red;">*</sup></label>
					<div class="col-xs-6">
						<input class="form-control" type="text" placeholder="Pangkat" name="pangkat" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xs-3 col-form-label">Jabatan <sup style="color: red;">*</sup></label>
					<div class="col-xs-6">
						<input class="form-control" type="text" placeholder="Jabatan" name="jabatan" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xs-3 col-form-label">Kesatuan <sup style="color: red;">*</sup></label>
					<div class="col-xs-6">
						<input class="form-control" type="text" placeholder="Kesatuan" name="kesatuan" required>
					</div>
				</div>
				<div class="form-group">			
					<div class="text-center">
						<button class="btn btn-success" name="reg">Register</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>