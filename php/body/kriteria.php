<?php  
include 'php/control/koneksi.php';
?>
<div class="col-md-12">
    <h2>Data Kriteria Pengujian</h2>
    <hr>
    <?php
    if ($_GET['message'] == 'kelebihan-bobot') { ?>
    <div class="alert alert-danger">
        Batas Maksimal Total Keseluruhan Bobot Hanya 100 !
    </div>
    <?php
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $krit = mysql_query("SELECT * FROM kriteria WHERE id = $id");
    $cek_krit = mysql_fetch_array($krit);
    ?>
    <form action="php/control/kriteria.php?id=<?php echo $id; ?>" method="POST" style="margin-left: 150px;">    
        <div class="form-group row">
            <label class="col-xs-3 col-form-label">Lari <sup style="color: red;">*</sup></label>
            <div class="col-xs-6">
                <input class="form-control" type="text" value="<?php echo $cek_krit['Lari']; ?>" name="lari" required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')">
            </div>
        </div>    
        <div class="form-group row">
            <label class="col-xs-3 col-form-label">Renang <sup style="color: red;">*</sup></label>
            <div class="col-xs-6">
                <input class="form-control" type="text" value="<?php echo $cek_krit['Renang']; ?>" name="renang" required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')">
            </div>
        </div>                
        <div class="form-group row">
            <label class="col-xs-3 col-form-label">Pushup <sup style="color: red;">*</sup></label>
            <div class="col-xs-6">
                <input class="form-control" type="text" value="<?php echo $cek_krit['Pushup']; ?>" name="pushup" required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')">
            </div>
        </div>   
        <div class="form-group row">
            <label class="col-xs-3 col-form-label">Pullup <sup style="color: red;">*</sup></label>
            <div class="col-xs-6">
                <input class="form-control" type="text" value="<?php echo $cek_krit['Pullup']; ?>" name="pullup" required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')">
            </div>
        </div> 
        <div class="form-group row">
            <label class="col-xs-3 col-form-label">Situp <sup style="color: red;">*</sup></label>
            <div class="col-xs-6">
                <input class="form-control" type="text" value="<?php echo $cek_krit['Situp']; ?>" name="situp" required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')">
            </div>
        </div>      
        <div class="form-group row">
            <label class="col-xs-3 col-form-label">Shuttlerun <sup style="color: red;">*</sup></label>
            <div class="col-xs-6">
                <input class="form-control" type="text" value="<?php echo $cek_krit['Shuttlerun']; ?>" name="shuttlerun" required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')">
            </div>
        </div>      
        <div class="form-group">                        
            <div class="text-center">
                <a href="index.php?page=kriteria" class="btn btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                <button class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
    <?php } ?>
</div>
<?php             
$kriteria = mysql_query("SELECT * FROM kriteria");
$cek = mysql_fetch_array($kriteria);
?>
<div class="col-md-12">
<a href="index.php?page=kriteria&&id=<?php echo $cek['id']; ?>" class="btn btn-primary pull-right">Ubah Nilai Bobot</a>
    <br><br>
    <div class="table-responsive">    
        <table class="table table-striped text-center">
            <tr>
                <th class="text-center">Nama</th>
                <th class="text-center">Bobot</th>
            </tr>
            <tr>
                <td class="text-center">Lari</td>
                <td><?php echo $cek['Lari']; ?></td>
            </tr>
            <tr>
                <td class="text-center">Renang</td>
                <td><?php echo $cek['Renang']; ?></td>
            </tr>
            <tr>
                <td class="text-center">Shuttlerun</td>
                <td><?php echo $cek['Shuttlerun']; ?></td>
            </tr>
            <tr>
                <td class="text-center">Pushup</td>
                <td><?php echo $cek['Pushup']; ?></td>
            </tr>
            <tr>
                <td class="text-center">Pullup</td>
                <td><?php echo $cek['Pullup']; ?></td>
            </tr>
            <tr>
                <td class="text-center">Situp</td>
                <td><?php echo $cek['Situp']; ?></td>
            </tr>
        </table>
    </div>
</div>