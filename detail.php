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
        <p style="text-align: center;"><strong>Pemesanan Mobil </strong></p>
        <p></p>
      </div>
      <div align="center"></div>
      <?php
        $harga = '';
        $harga_sebelumtambah='';
        $nama = $_GET['nama'];
        $query = mysql_query("select * from item where id ='$nama'");
        while ($data = mysql_fetch_array($query)) {
          $_SESSION['id_m']=$data['id'];
      ?>
      <p>&nbsp;</p>
      <div class="rental-gambar-center">
        <div class="rental-gambar" align="center"><img src="<?php echo $data['img'];?>" alt="Toyota Alphard / Vellfire" width="220" height="122">  </div>
                                    </div>
                                    <form method="post" action="">
                                    <div class="rental-title-produk" align="center"><a href= title="Toyota alphard / vellfire"><?php echo $data['nama'];?></a></div>
                                    <div class="widget biz_hours-widget list">
                                      <ul class="unstyled">
                                        <li>
                                          <div align="center"><span>Harga :</span> <span class="right"><strong style="color: #ff6600;">Rp <?php echo $data['harga']; $harga=$data['harga'];?></strong></span></div>
                                        </li>
                                        <li>
                                          <div align="center"><span>Keterangan :</span> <span class="right"><?php echo $data['vasilitas'];?>  </span></div>
                                        </li>
                                        <li>
                                          <div align="center"><span>Kapasitas :</span> <span class="right"><?php echo $data['kapasitas'];} ?></span></div>
                                        </li>
                                        </form>
                                      </ul>
                                    </div>
      <table width="716" align="center">
      <form method="post" action="">
	<th colspan="2" align="left" ><div style="margin:0 0 0 20px">
	  <h4 align="center">Pesan Mobil</h4><br>

	</div>
        <div align="center"></div></th>
    <tr>
      <td><label>Id pesan</label></td>
      <td><input name="id" id="id" value="<?php echo rand(0,9999);?>" readonly/></td>
    </tr>
    <tr>
      <td><label>No. KTP/SIM</label></td>
      <td><input name="ktp" id="ktp" /></td>
    </tr>
		<tr>
			<td><label >Nama</label></td>
			<td><input name="nama" id="nama" /></td>
		</tr>
		<tr>
			<td><label for="no_hp">no hp</label></td>
			<td><input name="no_hp" id="no_hp"></input></td>
		</tr>
    <tr>
      <td><label for="harga">Ongkos Penyewaan</label></td>
      <td><input name="harga" id="harga" value="<?php echo $harga;?>"></input></td>
    </tr>
    <tr>
      <td><label>Tanggal Penyewaan</label></td>
      <td><input type = "date" name="tgl" id="id" /></td>
    </tr>
		<tr>
			<td></td>
			<td><button class="btn btn-primary"  type="submit" name="pesan">Pesan</button></td>
		</tr>
		<th colspan="2" align="left" ><div align="center">Silahkan masukkan Nama ,Kode ,Nomer HP yang ingin anda pesan </div></th>
    </form>
	</table>
  <?php
    if (isset($_POST['pesan'])) {
      echo $harga;
include 'koneksi.php';
$id = $_POST['id'];
$ktp = $_POST['ktp'];
$nama = $_POST['nama'];
$no = $_POST['no_hp'];
$tgl= $_POST['tgl'];
$id_m = $_SESSION['id_m'];
$jenis_item = '';
$a = $_POST['harga'];
$query = mysql_query("select nama from item where id = '$id_m'");
while ($data = mysql_fetch_array($query)) {
  $jenis_item = $data['nama'];
}
$input = mysql_query("insert into pemesanan values($id,$ktp,'$nama','$jenis_item','$no','$tgl','Belum Bayar','')") or die(mysql_error());
if($input){
  echo "<script>window.alert('Pesanan Sudah di terima silakan melakukan pembayaran');
          window.location='pembayaran.php?id=$id'</script>";
}
else{
echo "<script>window.alert('Pesanan Gagal');
          window.location='pembayaran.php'</script>";
}
    }
  ?>
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
</div></div>



</div>
</div>	
</div>
</div>


</div>
</div>
</body></html>