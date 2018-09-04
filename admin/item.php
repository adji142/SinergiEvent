<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
    session_start();
    include '../koneksi.php';
   ?>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EO Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />-->
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
  <div id="wrapper">
      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              
          </div>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Today : <?php echo date('d-M-y')?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> 
    
</div>
      </nav>
         <!-- /. NAV TOP  -->
              <nav class="navbar-default navbar-side" role="navigation">
          <div class="sidebar-collapse">
              <ul class="nav" id="main-menu">
      <li class="text-center">
                  <img src="assets/img/find_user.png" class="user-image img-responsive"/>
        </li>
                  <li>
                      <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i>Hari Ini</a>
                  </li>
                  <li>
                      <a class="active-menu"  href="#"><i class="fa fa-edit fa-3x"></i>Item Pemesanan</a>
                  </li>
                  <li>
                      <a class="active-menu"  href="index.php"><i class="fa fa-sitemap fa-3x"></i>Pemesanan</a>
                  </li>
                <!--<li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i>Programs<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Jadwal Kegiatan</a>
                        </li>
                        <li>
                          <a href="#">Kelas Pilihan<span class="fa arrow"></span></a>
                          <ul class="nav nav-third-level">
                              <li>
                                  <a href="#">Enterprenour</a>
                              </li>
                              <li>
                                  <a href="#">Music</a>
                              </li>
                              <li>
                                  <a href="#">Creative</a>
                              </li>
                              <li>
                                  <a href="#">Educations</a>
                              </li>
                          </ul>
                        </li>
                    </ul>
                  </li>-->
              </ul>

          </div>

      </nav>
      <!-- /. NAV SIDE  -->
      <div id="page-wrapper" >
          <div id="page-inner">
              <div class="row">
                  <div class="col-md-12">
                   <h2>Admin Dashboard</h2>
                      <h5>Welcome
                        <?php
                          echo $_SESSION['username'];
                          ?>
                      , Love to see you back. </h5>
                      <?php 
                        error_reporting(0);
                          $id = $_GET['id'];
                          if($id=="success"){
                           echo "<font color='blue'>Data Mobil berhasil di tambahkan.</font>";
                          }
                          elseif($id == "error"){
                            echo "<font color='Red'>Data gagal di posting</font>";
                          }
                          elseif($id == "error_up"){
echo "<font color='blue'>Terupload tanpa gambar.</font>";
                          }
                        ?>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              Input Data Aset Mobil
                          </div>
                        <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover">
                                <form role="form" action="p_item.php" method="post" enctype="multipart/form-data">
                                    <tr>
                                      <td>ID Pemesanan</td>
                                      <td><input type="text" class="form-control" name="id" value="<?php echo rand(0,9999);?>" readonly></td>
                                    </tr>
                                    <tr>
                                      <td>Nama Item</td>
                                      <td><input type="text" class="form-control" name="nama"></td>
                                    </tr>
                                    <tr>
                                      <td>Harga</td>
                                      <td><input type="number" class="form-control" name="harga"></td>
                                    </tr>
                                    <tr>
                                      <td>Keterangan</td>
                                      <td><input type="text" class="form-control" name="Fasilitas"></td>
                                      </tr>
                                    <tr>
                                      <td>Kapasitas</td>
                                      <td><input type="number" class="form-control" name="kapasitas"></td>
                                    </tr>
                                    <tr>
                                      <td>Gambar Sample</td>
                                      <td><input type="file" class="form-control" name="gambar"></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><input type ="submit" Value ="input" class="btn btn-warning"></td>
                                    </tr>
                                  </form>
                              </table>
                          </div>


                        </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              Data Item
                          </div>
                          <div class="panel-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Item</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $query=mysql_query("select * from item");
                                      while ($data = mysql_fetch_array($query)) {
                                        echo "<tr class='odd gradeX'>";
                                        echo "<td>".$data['id']."</td>";
                                        echo "<td>".$data['nama']."</td>";
                                        echo "<td>".$data['harga']."</td>";
                                        echo "<td><a href='edit_item.php?id=".$data['id']."' class='btn btn-info btn-xs'>Edit</a> <a href='delete_m.php?id=".$data['id']."' class='btn btn-danger btn-xs'>Delete</a></td>";
                                      }
                                  ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>

          <script src="assets/js/jquery-1.10.2.js"></script>
            <!-- BOOTSTRAP SCRIPTS -->
          <script src="assets/js/bootstrap.min.js"></script>
          <!-- METISMENU SCRIPTS -->
          <script src="assets/js/jquery.metisMenu.js"></script>
           <!-- MORRIS CHART SCRIPTS -->
          <!--<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
          <script src="assets/js/morris/morris.js"></script>-->
            <!-- CUSTOM SCRIPTS -->

          <script src="assets/js/dataTables/jquery.dataTables.js"></script>
          <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
          <script>
              $(document).ready(function () {
                  $('#dataTables-example').dataTable();
              });
      </script>
          <script src="assets/js/custom.js"></script>
</body>
</html>
