  <div class="row">
  	<div class="col-lg-12 ">
  		<div class="alert alert-info">
  			<strong>Welcome <?php if($_SESSION['id']){echo 'ADMIN';} ?> ! </strong>
  		</div>
  	</div>
  </div>

  <div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="assets/img/tni.jpg" width="100%">
        </div>
        <div class="item">
          <img src="assets/img/tni2.jpg" width="100%">
        </div>
        <div class="item">
          <img src="assets/img/tni3.jpg" width="100%">
        </div>
        <div class="item">
          <img src="assets/img/tni4.jpg" width="100%">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <p class="text-center">
  	
  </p>
  <br><br>
  <div class="col-md-6">
  	<div class="table-responsive">
  		<h4 class="text-center"><b>Info tes pengujian kenaikan pangkat personil</b></h4><br>
  		<table class="table table-striped text-center" style="border: 1px solid #ddd;">
  			<tr>
  				<th class="text-center">No</th>
  				<th class="text-center">Nama Tes</th>  				  				
  			</tr>
        <tr>
         <td>1</td>
         <td>Renang</td>  					
       </tr>
       <tr>
         <td>2</td>
         <td>Lari</td>            
       </tr>
       <tr>
         <td>3</td>
         <td>Pushup</td>            
       </tr>
       <tr>
         <td>4</td>
         <td>Pullup</td>            
       </tr>
       <tr>
         <td>5</td>
         <td>Situp</td>            
       </tr>
       <tr>
         <td>6</td>
         <td>Shuttlerun</td>            
       </tr>
     </table>
   </div>
 </div>

 <div class="col-md-6">
  <div class="table-responsive">
    <h4 class="text-center"><b>List personil pengajuan untuk kenaikan pangkat</b></h4><br>
    <table class="table table-hover text-center" style="border: 1px solid #ddd;">
      <tr>  					
       <th class="text-center">NRP</th>  				
       <th class="text-center">Nama</th>
       <th class="text-center">Pangkat</th>
       <th class="text-center">Jabatan</th>
       <th class="text-center">Kesatuan</th>
     </tr>
     <?php 
     include 'php/control/koneksi.php';
     $kriteria = mysql_query("SELECT * FROM personil WHERE status = '0'");
     $no=0;
     while ($cek = mysql_fetch_array($kriteria)) {
       $no=$no+1;
       ?>
       <tr>  					
        <td><?php echo $cek['nrp']; ?></td>  						
        <td><?php echo $cek['nama']; ?></td>
        <td><?php echo $cek['pangkat']; ?></td>
        <td><?php echo $cek['jabatan']; ?></td>
        <td><?php echo $cek['kesatuan']; ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
