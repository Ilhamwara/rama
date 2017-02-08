<div class="col-md-12" style="padding: 80px 10px;">
	<div class="panel panel-default text-center">
		<h3 class="text-center"><b>LOGIN ADMIN</b></h3>
		<div class="panel-body">	
			<?php
			if ($_GET['message'] == 'error') { ?>
			<div class="alert alert-danger">
				<strong>Kesalahan pada username atau password anda! Silahkan coba lagi</strong>
			</div>
			<?php
		}
		elseif ($_GET['message'] == 'success') { ?>
		<div class="alert alert-success">
		<strong>Akun anda berhasil di buat silahkan login disini</strong>
		</div>
		<?php
	}
	?>			
	<form action="php/control/login.php" method="POST" style="margin-left: 150px;">
		<div class="form-group row">
			<label class="col-xs-2 col-form-label">Username <sup style="color: red;">*</sup></label>
			<div class="col-xs-6">
				<input class="form-control" type="text" placeholder="Username" name="username" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-xs-2 col-form-label">Password <sup style="color: red;">*</sup></label>
			<div class="col-xs-6">
				<input class="form-control" type="password" placeholder="Password" name="password" required>
			</div>
		</div>
		<div class="form-group">			
			<div class="text-center col-md-5">
				<button class="btn btn-success" name="login">Login</button>
			</div>
		</div>
	</form>
</div>
</div>
</div>