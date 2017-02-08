<?php 
include 'php/control/koneksi.php';
$page = $_GET['page'];

if ($page == 'tambah-personil') {
        ?>
        <div class="col-md-12">
                <h3 class="text-center"><b>Form</b> Tambah Personil</h3>
                <br>
                <form action="php/control/control.php?page=tambah-personil" method="POST" style="margin-left: 150px;">
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
                                        <button class="btn btn-success" name="tambah">Tambah</button>
                                </div>
                        </div>
                </form>
        </div>
        <?php
} 
elseif ($page == 'edit-personil') { 
        if(isset($_GET['key'])){
                $id = $_GET['key'];
                $query = mysql_query("SELECT * FROM personil WHERE id = $id");
                $cek = mysql_fetch_array($query);
                ?>

                <div class="col-md-12">
                        <h2>Form Edit Personil</h2>
                        <hr>
                        <form action="php/control/control.php?page=edit-personil&&key=<?php echo $id; ?>" method="POST" style="margin-left: 150px;">
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