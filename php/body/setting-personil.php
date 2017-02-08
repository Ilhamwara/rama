<?php
include 'php/control/koneksi.php';
$page = $_GET['page'];
if ($page == 'setting-personil') { 
        if(empty($_SESSION['id'])){
                $id = $_SESSION['id'];
                $query = mysql_query("SELECT * FROM personil WHERE id = $id");
                $cek = mysql_fetch_array($query);
                ?>
                <div class="col-md-12">
                        <h2>Form Setting Personil</h2>
                        <hr>
                        <form action="php/control/control.php?page=edit-personil" method="POST" style="margin-left: 150px;">
                                <div class="form-group row">
                                        <label class="col-xs-3 col-form-label">NRP <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-6">
                                                <input class="form-control" type="text" placeholder="NRP" name="nrp" value="<?php echo $cek['nrp']; ?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-3 col-form-label">Nama Lengkap <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-6">
                                                <input class="form-control" type="text" placeholder="Nama Lengkap" name="nama" value="<?php echo $cek['nama']; ?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-3 col-form-label">Alamat <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-6">
                                                <input class="form-control" type="text" placeholder="Alamat" name="alamat" value="<?php echo $cek['alamat']; ?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-3 col-form-label">Username <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-6">
                                                <input class="form-control" type="text" placeholder="Username" name="username" value="<?php echo $cek['username']; ?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-3 col-form-label">Password <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-6">
                                                <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo $cek['password']; ?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-3 col-form-label">Pangkat <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-6">
                                                <input class="form-control" type="text" placeholder="Pangkat" name="pangkat" value="<?php echo $cek['pangkat']; ?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-3 col-form-label">Jabatan <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-6">
                                                <input class="form-control" type="text" placeholder="Jabatan" name="jabatan" value="<?php echo $cek['jabatan']; ?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-3 col-form-label">Kesatuan <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-6">
                                                <input class="form-control" type="text" placeholder="Kesatuan" name="kesatuan" value="<?php echo $cek['kesatuan']; ?>">
                                        </div>
                                </div>
                                <div class="form-group">                        
                                        <div class="text-center">
                                                <a href="index.php?page=personil" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                                                <button class="btn btn-success">Edit</button>
                                        </div>
                                </div>
                        </form>
                </div>

                <?php
        }
}
?>