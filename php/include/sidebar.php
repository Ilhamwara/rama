<?php 
error_reporting(0);
?>
<nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
      <?php $page = $_GET['page']; ?>
      <li <?php if(!$page){   ?> class="active-link" <?php }  ?> >
        <a href="index.php?page=dashboard" ><i class="fa fa-desktop "></i>Dashboard</a>
      </li>     
      <li <?php if($page == 'saw'){   ?> class="active-link" <?php } else{}?> >
        <a href="index.php?page=saw" ><i class="fa fa-database "></i>Data</a>
      </li>
      <?php 
      if ($_SESSION['id']) { 
        ?>       
        <li <?php if($page == 'personil'){   ?> class="active-link" <?php } else{}?> >
          <a href="index.php?page=personil" ><i class="fa fa-group "></i>Data Personil</a>
        </li>       
        <li <?php if($page == 'kriteria'){   ?> class="active-link" <?php } else{}?> >
          <a href="index.php?page=kriteria" ><i class="fa fa-list-ol "></i>Data Kriteria</a>
        </li>
        <li <?php if($page == 'input-data-pengujian'){   ?> class="active-link" <?php } else{}?> >
          <a href="index.php?page=input-data-pengujian" ><i class="fa fa-indent "></i>Input Data Pengujian</a>
        </li> 
        <li>
          <a href="php/control/logout.php" ><i class="fa fa-sign-out "></i>Logout</a>
        </li>    
        <?php  
      }
      else{
        ?>
        <li <?php if($page == 'login'){   ?> class="active-link" <?php } else{}?> >
          <a href="index.php?page=login" ><i class="fa fa-sign-in "></i>Login Admin</a>
        </li>
        <li <?php if($page == 'register'){   ?> class="active-link" <?php } else{}?> >
          <a href="index.php?page=register" ><i class="fa fa-pencil "></i>Register</a>
        </li>
        <?php   } ?>
      </ul>
    </div>
  </nav>