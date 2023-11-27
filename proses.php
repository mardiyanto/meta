<?php
	$host = "localhost";
	$user = "id21579097_meta";
	$pass = "!Bnl4mpung";
	$db   = "id21579097_meta";
	$koneksi = mysqli_connect($host, $user, $pass, $db);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="tema/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="tema/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="tema/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="tema/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="tema/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="tema/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="tema/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="proses.php?aksi=index" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="tema/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="proses.php?aksi=index"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
    
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="proses.php?aksi=index"><i class="fa fa-dashboard"></i> <span>BERANDA</span> </a></li>
            <li>
              <a href="proses.php?aksi=tampil">
                <i class="fa fa-th"></i> <span>Tampil data</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li><a href="proses.php?aksi=kelas"><i class="fa fa-book"></i> <span>KELAS</span></a></li>
            <li><a href="proses.php?aksi=dosen"><i class="fa fa-circle-o text-red"></i> <span>DATA DOSEN</span></a></li>
            <li><a href="proses.php?aksi=jurusan"><i class="fa fa-circle-o text-red"></i> <span>DATA JURUSAN</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
<?php
if($_GET['aksi']=='index'){
echo " <div class='col-md-12'>
<div class='box box-primary'>
   <div class='box-header with-border'>
   </div><!-- /.box-header -->
   <!-- form start -->
   <form role='form' action='proses.php?aksi=daftar' name='form' method='post'>
     <div class='box-body'>
     <div class='form-group'>
     <label for='exampleInputEmail1'>NAMA</label>
     <input type='text' class='form-control' name='nama'>
     </div>
     <div class='form-group'>
     <label for='exampleInputEmail1'>NPM</label>
     <input type='text' class='form-control' name='npm'>
     </div>
     <div class='form-group'>
     <label for='exampleSelect' class='form-label'>Select Example</label>
        <select class='form-select' nama='kelas' aria-label='Example select with button addon'>
            <option selected>Select an option</option>
            <option value='1'>Option 1</option>
            <option value='2'>Option 2</option>
            <option value='3'>Option 3</option>
        </select>
     
     </div>
     <div class='form-group'>
       <label for='exampleInputEmail1'>EMAIL</label>
       <input type='email' class='form-control' name='email' >
     </div>
     <div class='form-group'>
     <label for='exampleInputEmail1'>NAMA AYAH</label>
     <input type='text' class='form-control' name='nama_ibu'>
     </div>
     <div class='form-group'>
     <label for='exampleInputEmail1'>NAMA IBU</label>
     <input type='text' class='form-control' name='nama_ayah'>
     </div>
     <div class='form-group'>
     <label for='exampleInputEmail1'>ALAMAT</label>
     <input type='text' class='form-control' name='alamat'>
     </div>
     </div><!-- /.box-body -->
     <div class='box-footer'>
     <button type='submit' class='btn btn-primary'>Submit</button>
     </div>
   </form>
   </div><!-- /.box -->
</div><!-- /.col-->";  
}          
elseif($_GET['aksi']=='daftar'){
    mysqli_query($koneksi,"insert into mhs (nama,npm,kelas,email,nama_ibu,nama_ayah,alamat) 
	values ('$_POST[nama]','$_POST[npm]','$_POST[kelas]','$_POST[email]','$_POST[nama_ibu]','$_POST[nama_ayah]','$_POST[alamat]')");  
	echo "<script>window.location=('proses.php?aksi=tampil')</script>";  
} 
elseif($_GET['aksi']=='tampil'){
   echo"<div class='col-md-12'>
   <div class='box box-primary'>
      <div class='box-header with-border'>
      <a class='btn btn-primary' href='index.php'>kembali</a>
      <a class='btn btn-primary' href='proses.php?aksi=index'><i class='fa fa-dashboard'></i> <span>INPUT DATA</span> </a></li>
      </div><!-- /.box-header -->
   <table class='table table-striped' >
 <tbody>
   <tr>
   <td>no</td>
     <td>nama</td>
     <td>npm</td>
     <td>kelas</td>
     <td>email</td>
     <td>aksi</td>
   </tr> ";
    $no=0;
    $sql=mysqli_query($koneksi," SELECT * FROM mhs");
    while ($t=mysqli_fetch_array($sql)){	
    $no++; 
    echo"
    <tr>
    <td>$no</td>
      <td>$t[nama]</td>
      <td>$t[npm]</td>
      <td>$t[kelas]</td>
      <td>$t[email]</td>
      <td><a href='proses.php?aksi=edit&id_mhs=$t[id_mhs]'>edit</a> | <a href='proses.php?aksi=hapus&id_mhs=$t[id_mhs]'>hapus</a></td>
    </tr>
    ";
    }
    echo"</tbody>
    </table>
    </div><!-- /.box -->
    </div><!-- /.col-->";
}
elseif($_GET['aksi']=='edit'){
  $sql=mysqli_query($koneksi," SELECT * FROM mhs WHERE id_mhs=$_GET[id_mhs]");  
  $t=mysqli_fetch_array($sql);
  echo " <div class='col-md-12'>
  <div class='box box-primary'>
     <div class='box-header with-border'>
     </div><!-- /.box-header -->
     <!-- form start -->
     <form role='form' action='proses.php?aksi=prosesedit&id_mhs=$t[id_mhs]' name='form' method='post'>
       <div class='box-body'>
       <div class='form-group'>
       <label for='exampleInputEmail1'>NAMA</label>
       <input type='text' class='form-control' value='$t[nama]' name='nama'>
       </div>
       <div class='form-group'>
       <label for='exampleInputEmail1'>NPM</label>
       <input type='text' class='form-control' value='$t[npm]' name='npm'>
       </div>
       <div class='form-group'>
       <label for='exampleInputEmail1'>KELAS</label>
       <input type='text' class='form-control' value='$t[kelas]' name='kelas'>
       </div>
       <div class='form-group'>
         <label for='exampleInputEmail1'>EMAIL</label>
         <input type='email' class='form-control' value='$t[email]' name='email' >
       </div>
       <div class='form-group'>
       <label for='exampleInputEmail1'>NAMA AYAH</label>
       <input type='text' class='form-control' value='$t[nama_ibu]' name='nama_ibu'>
       </div>
       <div class='form-group'>
       <label for='exampleInputEmail1'>NAMA IBU</label>
       <input type='text' class='form-control' value='$t[nama_ayah]' name='nama_ayah'>
       </div>
       <div class='form-group'>
       <label for='exampleInputEmail1'>ALAMAT</label>
       <input type='text' class='form-control' value='$t[alamat]' name='alamat'>
       </div>
       </div><!-- /.box-body -->
       <div class='box-footer'>
       <button type='submit' class='btn btn-primary'>Submit</button>
       </div>
     </form>
     </div><!-- /.box -->
  </div><!-- /.col-->";
}
elseif($_GET['aksi']=='prosesedit'){
  mysqli_query($koneksi,"UPDATE mhs SET nama='$_POST[nama]',npm='$_POST[npm]',kelas='$_POST[kelas]',email='$_POST[email]',
  nama_ibu='$_POST[nama_ibu]',nama_ayah='$_POST[nama_ayah]',alamat='$_POST[alamat]'
  WHERE id_mhs='$_GET[id_mhs]'");
  echo "<script>window.location=('proses.php?aksi=tampil')</script>";
}
elseif($_GET['aksi']=='hapus'){
  mysqli_query($koneksi,"DELETE FROM mhs  WHERE id_mhs='$_GET[id_mhs]'");
  echo "<script>window.location=('proses.php?aksi=tampil')</script>";
}
elseif($_GET['aksi']=='kelas'){
  echo"<div class='col-md-12'>
  <div class='box box-primary'>
     <div class='box-header with-border'>
     <a class='btn btn-primary' href='index.php'>kembali</a>
     <a class='btn btn-primary' href='proses.php?aksi=inputkelas'><i class='fa fa-dashboard'></i> <span>INPUT DATA</span> </a></li>
     </div><!-- /.box-header -->
  <table class='table table-striped' >
<tbody>
  <tr>
  <td>no</td>
    <td>nama</td>

    <td>aksi</td>
  </tr> ";
   $no=0;
   $sql=mysqli_query($koneksi," SELECT * FROM kelas");
   while ($t=mysqli_fetch_array($sql)){	
   $no++; 
   echo"
   <tr>
   <td>$no</td>
     <td>$t[nama_kelas]</td>
     <td><a href='proses.php?aksi=editkelas&id_kelas=$t[id_kelas]'>edit</a> | <a href='proses.php?aksi=hapuskelas&id_kelas=$t[id_kelas]'>hapus</a></td>
   </tr>
   ";
   }
   echo"</tbody>
   </table>
   </div><!-- /.box -->
   </div><!-- /.col-->";
}
elseif($_GET['aksi']=='inputkelas'){
  echo " <div class='col-md-12'>
  <div class='box box-primary'>
     <div class='box-header with-border'>
     </div><!-- /.box-header -->
     <!-- form start -->
     <form role='form' action='proses.php?aksi=prosesinputkelas' name='form' method='post'>
       <div class='box-body'>
       <div class='form-group'>
       <label for='exampleInputEmail1'>NAMA KELAS</label>
       <input type='text' class='form-control' name='nama_kelas'>
       </div>
      
       </div><!-- /.box-body -->
       <div class='box-footer'>
       <button type='submit' class='btn btn-primary'>Submit</button>
       </div>
     </form>
     </div><!-- /.box -->
  </div><!-- /.col-->";  
  }  
  elseif($_GET['aksi']=='prosesinputkelas'){
    mysqli_query($koneksi,"insert into kelas (nama_kelas) 
	values ('$_POST[nama_kelas]')");  
	echo "<script>window.location=('proses.php?aksi=kelas')</script>";  
}  
elseif($_GET['aksi']=='editkelas'){
  $sql=mysqli_query($koneksi," SELECT * FROM kelas WHERE id_kelas=$_GET[id_kelas]");  
  $t=mysqli_fetch_array($sql);
  echo " <div class='col-md-12'>
  <div class='box box-primary'>
     <div class='box-header with-border'>
     </div><!-- /.box-header -->
     <!-- form start -->
     <form role='form' action='proses.php?aksi=proseseditkelas&id_kelas=$t[id_kelas]' name='form' method='post'>
       <div class='box-body'>
       <div class='form-group'>
       <label for='exampleInputEmail1'>NAMA KELAS</label>
       <input type='text' class='form-control' value='$t[nama_kelas]' name='nama_kelas'>
       </div>
      
       </div><!-- /.box-body -->
       <div class='box-footer'>
       <button type='submit' class='btn btn-primary'>Submit</button>
       </div>
     </form>
     </div><!-- /.box -->
  </div><!-- /.col-->";  
  }  
  elseif($_GET['aksi']=='proseseditkelas'){
    mysqli_query($koneksi,"UPDATE kelas SET nama_kelas='$_POST[nama_kelas]'
    WHERE id_kelas='$_GET[id_kelas]'");
    echo "<script>window.location=('proses.php?aksi=kelas')</script>";
  }
  elseif($_GET['aksi']=='hapuskelas'){
    mysqli_query($koneksi,"DELETE FROM kelas  WHERE id_kelas='$_GET[id_kelas]'");
    echo "<script>window.location=('proses.php?aksi=kelas')</script>";
  }  
  elseif($_GET['aksi']=='jurusan'){
    echo"<div class='col-md-12'>
    <div class='box box-primary'>
       <div class='box-header with-border'>
       <a class='btn btn-primary' href='index.php'>kembali</a>
       <a class='btn btn-primary' href='proses.php?aksi=inputjurusan'><i class='fa fa-dashboard'></i> <span>INPUT DATA</span> </a></li>
       </div><!-- /.box-header -->
    <table class='table table-striped' >
  <tbody>
    <tr>
    <td>no</td>
      <td>nama</td>
  
      <td>aksi</td>
    </tr> ";
     $no=0;
     $sql=mysqli_query($koneksi," SELECT * FROM jurusan");
     while ($t=mysqli_fetch_array($sql)){	
     $no++; 
     echo"
     <tr>
     <td>$no</td>
       <td>$t[nama_jurusan]</td>
       <td><a href='proses.php?aksi=editjurusan&id_jurusan=$t[id_jurusan]'>edit</a> | <a href='proses.php?aksi=hapusjurusan&id_jurusan=$t[id_jurusan]'>hapus</a></td>
     </tr>
     ";
     }
     echo"</tbody>
     </table>
     </div><!-- /.box -->
     </div><!-- /.col-->";
  }
  elseif($_GET['aksi']=='inputjurusan'){
    echo " <div class='col-md-12'>
    <div class='box box-primary'>
       <div class='box-header with-border'>
       </div><!-- /.box-header -->
       <!-- form start -->
       <form role='form' action='proses.php?aksi=prosesinputjurusan' name='form' method='post'>
         <div class='box-body'>
         <div class='form-group'>
         <label for='exampleInputEmail1'>NAMA KELAS</label>
         <input type='text' class='form-control' name='nama_jurusan'>
         </div>
        
         </div><!-- /.box-body -->
         <div class='box-footer'>
         <button type='submit' class='btn btn-primary'>Submit</button>
         </div>
       </form>
       </div><!-- /.box -->
    </div><!-- /.col-->";  
    }  
    elseif($_GET['aksi']=='prosesinputjurusan'){
      mysqli_query($koneksi,"insert into jurusan (nama_jurusan) 
    values ('$_POST[nama_jurusan]')");  
    echo "<script>window.location=('proses.php?aksi=jurusan')</script>";  
  }  
  elseif($_GET['aksi']=='editjurusan'){
    $sql=mysqli_query($koneksi," SELECT * FROM jurusan WHERE id_jurusan=$_GET[id_jurusan]");  
    $t=mysqli_fetch_array($sql);
    echo " <div class='col-md-12'>
    <div class='box box-primary'>
       <div class='box-header with-border'>
       </div><!-- /.box-header -->
       <!-- form start -->
       <form role='form' action='proses.php?aksi=proseseditjurusan&id_jurusan=$t[id_jurusan]' name='form' method='post'>
         <div class='box-body'>
         <div class='form-group'>
         <label for='exampleInputEmail1'>NAMA KELAS</label>
         <input type='text' class='form-control' value='$t[nama_jurusan]' name='nama_jurusan'>
         </div>
        
         </div><!-- /.box-body -->
         <div class='box-footer'>
         <button type='submit' class='btn btn-primary'>Submit</button>
         </div>
       </form>
       </div><!-- /.box -->
    </div><!-- /.col-->";  
    }  
    elseif($_GET['aksi']=='proseseditjurusan'){
      mysqli_query($koneksi,"UPDATE jurusan SET nama_jurusan='$_POST[nama_jurusan]'
      WHERE id_jurusan='$_GET[id_jurusan]'");
      echo "<script>window.location=('proses.php?aksi=jurusan')</script>";
    }
    elseif($_GET['aksi']=='hapusjurusan'){
      mysqli_query($koneksi,"DELETE FROM jurusan  WHERE id_jurusan='$_GET[id_jurusan]'");
      echo "<script>window.location=('proses.php?aksi=jurusan')</script>";
    }  
    elseif($_GET['aksi']=='dosen'){
      echo"<div class='col-md-12'>
      <div class='box box-primary'>
         <div class='box-header with-border'>
         <a class='btn btn-primary' href='index.php'>kembali</a>
         <a class='btn btn-primary' href='proses.php?aksi=inputdosen'><i class='fa fa-dashboard'></i> <span>INPUT DATA</span> </a></li>
         </div><!-- /.box-header -->
      <table class='table table-striped' >
    <tbody>
      <tr>
      <td>no</td>
        <td>nama</td>
        <td>nidn</td>
        <td>aksi</td>
      </tr> ";
       $no=0;
       $sql=mysqli_query($koneksi," SELECT * FROM dosen");
       while ($t=mysqli_fetch_array($sql)){	
       $no++; 
       echo"
       <tr>
       <td>$no</td>
         <td>$t[nama_dosen]</td>
         <td>$t[nind]</td>
         <td><a href='proses.php?aksi=editdosen&id_dosen=$t[id_dosen]'>edit</a> | <a href='proses.php?aksi=hapusdosen&id_dosen=$t[id_dosen]'>hapus</a></td>
       </tr>
       ";
       }
       echo"</tbody>
       </table>
       </div><!-- /.box -->
       </div><!-- /.col-->";
    }
    elseif($_GET['aksi']=='inputdosen'){
      echo " <div class='col-md-12'>
      <div class='box box-primary'>
         <div class='box-header with-border'>
         </div><!-- /.box-header -->
         <!-- form start -->
         <form role='form' action='proses.php?aksi=prosesinputdosen' name='form' method='post'>
           <div class='box-body'>
           <div class='form-group'>
           <label for='exampleInputEmail1'>NAMA DOSEN</label>
           <input type='text' class='form-control' name='nama_dosen'>
           </div>
           <div class='form-group'>
           <label for='exampleInputEmail1'>NIDN</label>
           <input type='text' class='form-control' name='nind'>
           </div>
           <div class='form-group'>
           <label for='exampleInputEmail1'>NOMOR HP</label>
           <input type='text' class='form-control' name='no_hp'>
           </div>
           <div class='form-group'>
           <label for='exampleInputEmail1'>ALAMAT</label>
           <input type='text' class='form-control' name='alamat'>
           </div>
           <div class='form-group'>
           <label for='exampleInputEmail1'>EMAIL DOSEN</label>
           <input type='text' class='form-control' name='email_dosen'>
           </div>
           </div><!-- /.box-body -->
           <div class='box-footer'>
           <button type='submit' class='btn btn-primary'>Submit</button>
           </div>
         </form>
         </div><!-- /.box -->
      </div><!-- /.col-->";  
      }  
      elseif($_GET['aksi']=='prosesinputdosen'){
        mysqli_query($koneksi,"insert into dosen (nama_dosen,no_hp,alamat) 
      values ('$_POST[nama_dosen]','$_POST[no_hp]','$_POST[alamat]')");  
      echo "<script>window.location=('proses.php?aksi=dosen')</script>";  
    }  
    elseif($_GET['aksi']=='editdosen'){
      $sql=mysqli_query($koneksi," SELECT * FROM dosen WHERE id_dosen=$_GET[id_dosen]");  
      $t=mysqli_fetch_array($sql);
      echo " <div class='col-md-12'>
      <div class='box box-primary'>
         <div class='box-header with-border'>
         </div><!-- /.box-header -->
         <!-- form start -->
         <form role='form' action='proses.php?aksi=proseseditdosen&id_dosen=$t[id_dosen]' name='form' method='post'>
           <div class='box-body'>
           <div class='form-group'>
           <label for='exampleInputEmail1'>NAMA KELAS</label>
           <input type='text' class='form-control' value='$t[nama_dosen]' name='nama_dosen'>
           </div>
          
           </div><!-- /.box-body -->
           <div class='box-footer'>
           <button type='submit' class='btn btn-primary'>Submit</button>
           </div>
         </form>
         </div><!-- /.box -->
      </div><!-- /.col-->";  
      }  
      elseif($_GET['aksi']=='proseseditdosen'){
        mysqli_query($koneksi,"UPDATE dosen SET nama_dosen='$_POST[nama_dosen]'
        WHERE id_dosen='$_GET[id_dosen]'");
        echo "<script>window.location=('proses.php?aksi=dosen')</script>";
      }
      elseif($_GET['aksi']=='hapusdosen'){
        mysqli_query($koneksi,"DELETE FROM dosen  WHERE id_dosen='$_GET[id_dosen]'");
        echo "<script>window.location=('proses.php?aksi=dosen')</script>";
      }  
?>
          </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>


      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="tema/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="tema/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="tema/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="tema/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="tema/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="tema/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="tema/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="tema/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="tema/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="tema/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="tema/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="tema/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="tema/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="tema/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="tema/dist/js/demo.js"></script>
    
  </body>
</html>




