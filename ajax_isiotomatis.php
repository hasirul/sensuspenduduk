<?php
include "../../koneksi.php";
$query = mysqli_query($con, "SELECT * from regions where id='$_GET[id]'");
$kuku = mysqli_fetch_array($query);
$data = array( 'name1'     =>  $kuku['name1'] );
				
				
			 
 echo json_encode($data);
?>