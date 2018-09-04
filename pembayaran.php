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
                      <h1>Sinergi Event Surakarta</h1>
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
                              
                                <div class="col-md-12">
                                  <div class="rental-produk">
                                    Terimakasih sudah melakukan pemesanan secara online. Silahkan melakukan Pembayaran ke Nomer Rekening berikut :<br>
                                    <p>
                                      BCA :000-000-0000-0000 A.N :<BR>
                                      BRI :000-000-0000-0000 A.N<BR>
                                      BNI :000-000-0000-0000 A.N :<BR>
                                    </p>
                                    <P>
                                      Jika sudah melakukan pembayaran silahkan upload bukti pembayaran di bawah ini :
                                    </P>
                                    <p>
                                      <form method="post" action="" enctype="multipart/form-data">
                                        <input type="file" name="gambar" class="form-control"></input>
                                        <button name="input" type="submit" class="btn btn-primary">Konfirmasi</button>
                                      </form>
                                    </p>
                                    <p>
                                      <?php
  include "koneksi.php";
  $id = $_GET['id'];
  $nama_file = $_FILES['gambar']['name'];
  $ukuran_file = $_FILES['gambar']['size'];
  $tipe_file = $_FILES['gambar']['type'];
  $tmp_file = $_FILES['gambar']['tmp_name'];
  $path = "bukti/".$nama_file;

  if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG

  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB

    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload

    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak

      // Jika gambar berhasil diupload, Lakukan : 
      // Proses simpan ke Database

      $query = "update pemesanan set status_bayar = 'dibayar',bukti='$path' where id=$id";
      $sql = mysql_query($query) or die(mysql_error()); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
          echo "<script>window.alert('Pembayaran selesai, silahkan hubungi 082221227298.');
          window.location='index.php'</script>";

      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.<br> ini isinya";
  echo $nama_file;
}
                                ?>
                                    </p>
                                  </div>
                                </div>
                                
                                <!-- <div class="col-md-4">
                                  <div class="rental-produk">
                                    <div class="rental-gambar-center">
                                      <div class="rental-gambar"><img src="gambar/Grand-Livina-300x150-220x109.jpg" alt="Grand Livina" width="220" height="109">  </div>
                                    </div>
                                    <div class="rental-title-produk"><a href= title="Grand livina">Grand Livina</a></div>
                                    <div class="tombol">
<a href="livina.php" class="small beli blue">Pesan Sekarang</a>
</div>
                                  </div>
                                </di -->
                                <!-- <div class="col-md-4">
                                  <div class="rental-produk">
                                    <div class="rental-gambar-center">
                                      <div class="rental-gambar"><img src="gambar/apv-arena-300x168-220x123.gif" alt="APV Arena" width="220" height="123">  </div>
                                    </div>
                                    <div class="rental-title-produk"><a href= title="APV arena">Suzuki APV </a></div>
                                     <div class="tombol">
<a href="apv.php" class="small beli blue">Pesan Sekarang</a>
</div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="rental-produk">
                                    <div class="rental-gambar-center">
                                      <div class="rental-gambar"><img src="gambar/toyota+grand+innova1-220x122.jpg" alt="Toyota Grand Innova" width="220" height="122">  </div>
                                    </div>
                                    <div class="rental-title-produk"><a href= title="Toyota grand innova">Toyota Grand Innova</a></div>
                                     <div class="tombol">
<a href="inova.php" class="small beli blue">Pesan Sekarang</a>
</div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="rental-produk">
                                    <div class="rental-gambar-center">
                                      <div class="rental-gambar"><img src="gambar/toyota+fortuner-220x122.jpg" alt="Toyota Fortuner" width="220" height="122">  </div>
                                    </div>
                                    <div class="rental-title-produk"><a href= title="Toyota fortuner">Toyota Fortuner</a></div>
                                    <div class="tombol">
<a href="fortuner.php" class="small beli blue">Pesan Sekarang</a>
</div>
                                   </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="rental-produk">
                                    <div class="rental-gambar-center">
                                      <div class="rental-gambar"><img src="gambar/toyota+alphard+vellfire-220x122.jpg" alt="Toyota Alphard / Vellfire" width="220" height="122">  </div>
                                    </div>
                                    <div class="rental-title-produk"><a href= title="Toyota alphard / vellfire">Toyota Alphard / Vellfire</a></div>
                                     <div class="tombol">
<a href="alphard.php" class="small beli blue">Pesan Sekarang</a>
</div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="rental-produk">
                                    <div class="rental-gambar-center">
                                      <div class="rental-gambar"><img src="gambar/toyota+camry-220x122.jpg" alt="Toyota Camry" width="220" height="122">  </div>
                                    </div>
                                    <div class="rental-title-produk"><a href= title="Toyota camry">Toyota Camry</a></div>
                                    <a href="camry.php" class="small beli blue">Pesan Sekarang</a>
</div>
                                  </div>
                                </div>
                                
                                <div class="col-md-4">
                                  <div class="rental-produk">
                                    <div class="rental-gambar-center">
                                      <div class="rental-gambar"><img src="gambar/isuzu+elf+microbus1-220x122.jpg" alt="New Isuzu Elf" width="220" height="122">  </div>
                                    </div>
                                    <div class="rental-title-produk"><a href=title="New isuzu elf">New Isuzu Elf</a></div>
                                    
                                       <a href="elf.php" class="small beli blue">Pesan Sekarang</a>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                  <div class="rental-produk">
                                    <div class="rental-gambar-center">
                                      <div class="rental-gambar"><img src="gambar/mitsubishi+pajero-220x122.jpg" alt="Mitsubishi Pajero" width="220" height="122">  </div>
                                    </div>
                                    <div class="rental-title-produk"><a href= title="Mitsubishi pajero">Mitsubishi Pajero</a></div>
                                     <a href="pajero.php" class="small beli blue">Pesan Sekarang</a>
</div>
                                  </div> -->
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