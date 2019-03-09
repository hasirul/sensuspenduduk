<?php

$con = new mysqli('localhost', 'root', '', 'penduduk');
if($con->connect_error){die('Connection failed: '.$con->connect_error);}
?>
