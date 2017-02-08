<?php 
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include 'php/include/head.php'; ?>
</head>
<body>
  <div id="wrapper">
    <!-- /. NAV TOP  -->
    <?php include 'php/include/topbar.php'; ?>
    <!-- /. NAV TOP  -->
    <!-- /. NAV SIDE  -->
    <?php include 'php/include/sidebar.php'; ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <!-- /. PAGE INNER  -->
      <div id="page-inner" style="overflow: hidden;">
        <?php 
        error_reporting(0);
        $page = $_GET['page'];
        if($page == 'admin') {
          include 'php/body/admin.php';
        }
        elseif($page == 'personil'){
         include 'php/body/personil.php'; 
       }
       elseif(($page == 'tambah-personil') || ($page == 'edit-personil')){
         include 'php/body/tambah-personil.php'; 
       }
       elseif($page == 'saw'){
         include 'php/body/saw.php'; 
       }
       elseif($page == 'login'){
         include 'php/body/login.php'; 
       }
       elseif($page == 'profile'){
         include 'php/body/profile.php'; 
       }
       elseif($page == 'setting-personil'){
         include 'php/body/setting-personil.php'; 
       }
       elseif($page == 'kriteria'){
         include 'php/body/kriteria.php'; 
       }
       elseif($page == 'input-data-pengujian'){
        include 'php/body/input.php'; 
      }
      elseif($page == 'register'){
       include 'php/body/register.php'; 
     }
     else{
       include 'php/body/dashboard.php'; 
     }
     ?>
   </div>
   <!-- /. PAGE INNER  -->
 </div>
 <!-- /. PAGE WRAPPER  -->
</div>
<?php include 'php/include/footer.php'; ?>
</body>
</html>
