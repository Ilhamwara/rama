<div class="col-md-12">
    <h2>Input Data Pengujian Perosnil</h2>
    <hr>
    <?php 
    if($_GET['message'] == 'user'){
        ?>
        <div class="alert alert-danger">
            User tersebut sudah anda inputkan nilainya
        </div>
        <?php } ?>
        <form action="php/control/input.php" method="POST" style="margin-left: 150px;">
            <div class="form-group row">
                <label class="col-xs-3 col-form-label">NRP Personil <sup style="color: red;">*</sup></label>
                <div class="col-xs-6">
                    <select class="form-control pilih" name="nrp" required>
                        <option>-- Pilih NRP personil --</option>
                        <?php 
                        include 'php/control/koneksi.php';
                        $query = mysql_query("SELECT * FROM personil WHERE status = '0'");
                        while ($cek = mysql_fetch_array($query)) {
                         ?>
                         <option value="<?php echo $cek['nrp']; ?>"><?php echo $cek['nrp']; ?> - <?php echo $cek['nama']; ?></option>
                         <?php } ?>
                     </select>
                 </div>
             </div>                
             <div class="form-group row">
                <label class="col-xs-3 col-form-label">Nilai Lari <sup style="color: red;">*</sup></label>
                <div class="col-xs-6">
                    <input class="form-control" type="number" placeholder="Nilai Lari" name="lari" required title="Data ini tidak boleh kosong">
                </div>
            </div> 
            <div class="form-group row">
                <label class="col-xs-3 col-form-label">Nilai Pushup <sup style="color: red;">*</sup></label>
                <div class="col-xs-6">
                    <input class="form-control" type="number" placeholder="Nilai Pushup" name="pushup" required title="Data ini tidak boleh kosong">
                </div>
            </div> 
            <div class="form-group row">
                <label class="col-xs-3 col-form-label">Nilai Pullup <sup style="color: red;">*</sup></label>
                <div class="col-xs-6">
                    <input class="form-control" type="number" placeholder="Nilai Pullup" name="pullup" required title="Data ini tidak boleh kosong">
                </div>
            </div>     
            <div class="form-group row">
            <label class="col-xs-3 col-form-label">Nilai Renang <sup style="color: red;">*</sup></label>
                <div class="col-xs-6">
                    <input class="form-control" type="number" placeholder="Nilai Renang" name="renang" required title="Data ini tidak boleh kosong">
                </div>
            </div> 
            <div class="form-group row">
                <label class="col-xs-3 col-form-label">Nilai Shuttlerun <sup style="color: red;">*</sup></label>
                <div class="col-xs-6">
                    <input class="form-control" type="number" placeholder="Nilai Shuttlerun" name="shuttlerun" required title="Data ini tidak boleh kosong">
                </div>
            </div> 
            <div class="form-group row">
                <label class="col-xs-3 col-form-label">Nilai Situp <sup style="color: red;">*</sup></label>
                <div class="col-xs-6">
                    <input class="form-control" type="number" placeholder="Nilai Situp" name="situp" required title="Data ini tidak boleh kosong">
                </div>
            </div> 
            <div class="form-group">                        
                <div class="text-center">
                    <a href="index.php?page=personil" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <button class="btn btn-success">Proses</button>
                </div>
            </div>
        </form>
    </div>