<?php
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysql_select_db("db_cuti");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
?>