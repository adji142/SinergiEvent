<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title> Solo Rent Car</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<?php
include "index_header.php";
?>
                    <div class="sinergi-topheader">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div id="newsticker">
                              <div class="first">
                                <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; margin: 0px; overflow: hidden; position: relative; width: 1000px; height: 35px;">
                                  <dl id="ticker-1" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; margin: 0px; width: 2640px; height: 35px; z-index: auto; left: -10.9916px;">
                                    <dt><marquee>SINERGI EVENT CREATIF INOVATIF DAN UNIK APAPUN ACARANYA SINERI EVENT EO NYA</marquee></dt>
                                  </dl>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="rental-welcome">
                      <h1>Solo Rent Car</h1>
                      <p></p>
                      <p style="text-align: center;"><strong>Selamat Datang di Website kami</strong><br>
                      <?php 
                        error_reporting(0);
                          $id = $_GET['id'];
                          if($id=="success"){
                           echo "<font color='blue'>Anda Berhasil Memesan,Silahkan Hubungi 082221227298 untuk mengkonfirmasi pesanan anda.</font";
                          }
                          elseif($id == "error"){
                            echo "<font color='blue'>Data gagal di teruskan ke admin,silahkan coba lagi</font>";
                          }
                        ?>
                      </p>
                      <p></p>
                    </div>
                    <div class="rental-konten">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="boxer1">
                              <!-- Start hire -->
                              <?php
                                include 'koneksi.php';
                                $query = mysql_query("select id,nama,img from item");
                                while ($data = mysql_fetch_array($query)) {
                              echo '
                                <div class="col-md-4">
                                  <div class="rental-produk">
                                    <div class="rental-gambar-center">
                                      <div class="rental-gambar"><img src="'.$data[img].'" alt="Toyota Avanza" width="220" height="123">  </div>
                                    </div>
                                    <div class="rental-title-produk"><a href= title="Toyota avanza">'.$data[nama].'</a></div>
                                    
                                   <div class="tombol">
<a href="detail.php?nama='.$data[id].'" class="small beli blue">Pesan Sekarang</a>
</div>
                                  </div>
                                </div>';
                              }
                                ?>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="rental-testimoni">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div id="testimoni" class="carousel slide">
                                      <div class="carousel-inner">
                                        <div class="item">
                                          <div class="testimoni">
                                            
                                            
                                          </div>
                                        </div>
                                        <div class="item active"></div>
                                        <div class="item">
                                          <div class="testimoni">
                                            <h3> admin - </h3>
                                            <p> Pokoke mantab !</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tombol"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- footer -->
                    <div class="sinergi-footer">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="sidebar-box">
                              <h4 align="center">SINERGI EVENT</h4>
                              <p align="center">Dari Surakarta untuk Indonesia</p>
                              <div class="textwidget"></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="sidebar-box">
                              <h4 align="center">SINERGI EVENT</h4>
                              <p align="center">Keep You're Happynes Moment</p>
                            </div>
                          </div>
                          <div class="col-md-3"></div>
                          <div class="col-md-3"></div>
                        </div>
                      </div>
                    </div>
                    <div class="rental-footer">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12"><a href=>Sinergi Event Surakarta</a>
                            <a href= class="keatas" style="display: none;"><span class="glyphicon glyphicon-arrow-up"></span></a> </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body></html>