<style type="text/css">

	.tes{
		background: red;
		width: 50px;
	}
</style>
<section class="content-header">
   <h1>Sensus Penduduk<small></small></h1>
    <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    </ol>
</section>

<form method="post" id="myForm" enctype="multipart/form-data">
<div id="tabel_range3"></div>

	<section class="content">
    <div class="row">
       
	<div class="col-md-12">

			<div class="box box-primary">				
				<div class="box-body">
	
	<br>


</form>

<table class='table table-striped table-no-bordered table-hover' id='tabel'>
<thead><tr>
  <th>ID</th>
  <th>NAMA DAERAH</th>
  <th>JUMLAH PENDUDUK</th>
  <th>TOTAL PENDAPATAN</th>
  <th>RATA-RATA PENDAPATAN</th>
  <th>STATUS</th>



</tr></thead>
<tbody>
	<?php
    $tampil=mysqli_query($con,"select count(id) AS hasil,sum(income) as income1,id,name,addres,income from person");
		$query=mysqli_num_rows($tampil);

      while($tampil1=mysqli_fetch_array($tampil))
    {
  ?>
  <tr>
    <td><?=$tampil1['id']?></td>
    <td><?=$tampil1['name']?></td>
    <td><?=$tampil1['hasil']?></td>
    <td><?=$tampil1['income1']?></td>
    <td><?php
    		 ini_set('register_globals','ON');
			 error_reporting(E_ALL ^ E_NOTICE);
		    $kelas += $tampil1['income'];
		    $hasil=$kelas/$query;
		   	echo $hasil;

    ?></td>
    <td><input type="text" class="tes"></td>
  </tr>
  <?php }?>
</tbody>
</table>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap-datepicker3.css">

	
	<script src="bootstrap/js/bootstrap.min.js"></script>


<script>
$(document).ready(function() {
$('#tabel').DataTable();
});
</script>
<script type="text/javascript">
	function kls(){
		document.location='home-admin.php?page=data_person&id=' + document.getElementById('id').value;
	}
</script>
