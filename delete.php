<?php
include 'koneksi.php';
mysql_safe_query('DELETE FROM pemesanan WHERE id=%s LIMIT 1', $_GET['id']);
redirect('home.php'); ?>