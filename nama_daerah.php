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
<td>Pilih Daerah&nbsp;&nbsp;&nbsp;<select class="form-control1" name="id" id="id"   onchange="kls()" autocomplete="off" autofocus="on" style="font-size:15px" id="kegiatan">
       <option value='kegiatan'>--Pilih ID--</option><br><br>
        <?php $cari=mysqli_query($con,'select * from regions');
            while($opt=mysqli_fetch_array($cari)){?>
            <option value='<?=$opt['id']?>' <?php if(isset($_GET['name'])==$opt['name']){echo 'selected=""';}?>><?=$opt['name']?></option>
          <?php }?>
      </select></td>
<table class='table table-striped table-no-bordered table-hover' id='tabel'>
<thead><tr>
  <th>ID</th>
  <th>NAMA PENDUDUK</th>
  <th>GAJI</th>
  <th>DEARAH</th>




</tr></thead>
<tbody>

  <?php
  if (isset($_GET['id'])) {
    
      $tampil=mysqli_query($con,"select * from person where id='$_GET[id]'");

      while($tampil1=mysqli_fetch_array($tampil))
    {
  ?>
  <tr>
    <td><?=$tampil1['id']?></td>
    <td><?=$tampil1['name']?></td>
    <td><?=$tampil1['income']?></td>
    <td><?=$tampil1['name']?></td>
  
  </tr>
  <?php }}?>
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
    document.location='home-admin.php?page=nama_daerah&id=' + document.getElementById('id').value;
  }
</script>
