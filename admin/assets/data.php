<?php
session_start();
$ses = $_SESSION['berhasil'];
$bulan = $_SESSION['bulan'];
//PAKE mysql biasa, bagi yg ga support (PHP 5.5) bisa pake mysqli
mysql_connect("localhost","root","");
mysql_select_db("ppa");
//kita ngambil jumlah penjualan pertahun dan di grup kan tahun nya, karena banyak nilai tahun pada data
$sql="select yearweek(date) as week, count(*) as jml_mingguan from abs_log  where mentor ='$ses' and count =1 and month(date) = $bulan group by date";
//jalankan query
$rs=mysql_query($sql);
//bikin variabel sebagai array untuk menampung data nantinya
$data=array();
//loooooooooop sebagai object, bisa pake fetch_array $row['field']
while ($row = mysql_fetch_object($rs)) {
	$data[]=array(
		'y'=>$row->week, //y sebagai kata kunci nya (tahun)		
		'jumlah'=>$row->jml_mingguan, //jumlah penjualan
		);	
}
	//outputkan sebagai json
	echo json_encode($data);
?>