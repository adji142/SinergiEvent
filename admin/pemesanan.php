<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
    session_start();
    //$vsr = $_SESSION['berhasil'];
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
              <a class="navbar-brand" href="index.php">AIS System</a>
          </div>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Today : <?php echo date('d-M-y')?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a>

    <a href="profil.php?id=<?php echo $_SESSION['berhasil']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
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
                      <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i>Dashboard</a>
                  </li>
                  <li>
                      <a class="active-menu"  href="item.php"><i class="fa fa-edit fa-3x"></i>Item Pemesanan</a>
                  </li>
                  <li>
                      <a class="active-menu"  href="pemesanan.php"><i class="fa fa-sitemap fa-3x"></i>Pemesanan</a>
                  </li>
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
                          $ses = $_SESSION['username'];
                          if($ses==''){
                            //header("location:../login.php");
                            //echo "<meta http-equiv ='restart' content='1;url=../login.php'>";\
                            echo '<script> location.replace(Data Pesanan Mobil.php");</script>';
                          }
                          else{
                            echo $ses;
                          }
                          ?>
                      , Love to see you back. </h5>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              Data Pemesanan <a href="cetak.php" class="btn btn-info btn-xs"> Cetak Laporan</a>
                          </div>
                          <div class="panel-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No. Pesan</th>
                                        <th>Nama</th>
                                        <th>No. KTP</th>
                                        <th>No. Tlp</th>
                                        <th>Nama Item</th>
                                        <!-- <th>Nomer Polisi</th> -->
                                        <th>Tanggal Pakai</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $tanggal = date("Y-m-d");
                                    $query=mysql_query("select * from pemesanan");
                                      while ($data = mysql_fetch_array($query)) {
                                        echo "<tr class='odd gradeX'>";
                                        echo "<td>".$data['id']."</td>";
                                        echo "<td>".$data['nama']."</td>";
                                        echo "<td>".$data['id_numb']."</td>";
                                        echo "<td>".$data['no_hp']."</td>";
                                        echo "<td>".$data['item']."</td>";
                                        // echo "<td>".$data['nopol']."</td>";
                                        echo "<td>".$data['date']."</td>";
                                        echo "<td> <a href='delete.php?id=".$data['id']."' class='btn btn-danger btn-xs'>Delete</a></td>";
                                        echo "</tr>";
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
