<?php
	$petak5=(isset($_GET['id']))?$_GET['id']:null;
	include 'koneksi.php';
	if (isset($_POST['tambah'])) {
		$id=$_POST['id'];
		$name1=$_POST['name1'];
		$region_id=$_POST['region_id'];
		$address=$_POST['address'];
		$income=$_POST['income'];



		$simpan=mysqli_query($con,"insert into person (id,name,region_id,addres,income,created_et) values('$id','$name1','$region_id','$address','$income',curdate())");
		if($simpan){
			 echo'<script>alert("data berhasil disimpan")
			    document.location="home-admin.php?page=data_person"
			    </script>';
		}
		else{

		}
	}
	if(isset($_GET['d']))
	{
	  $id=$_GET['d'];
	  $hapus=mysqli_query($con,"delete from person where id='$id'");
	  if($hapus)
	  {
	    echo'<script>alert("data dihapus")
	    document.location="home-admin.php?page=data_person"
	    </script>';
	  }
	}
	if(isset($_GET['e']))
	{
	  $id=$_GET['e'];
	  $cari=mysqli_query($con,"select * from person where id='$id'");
	  $cd=mysqli_fetch_array($cari);
	}
	if(isset($_POST['ubah']))
    { 
	  $id=$_GET['e'];
	      
	      $simpan=mysqli_query($con,"update person set region_id='".$_POST['region_id']."',addres='".$_POST['address']."',income='".$_POST['income']."' where id='$id'");
	      if($simpan)
	      { 
		        echo'<script>alert("Data berhasil diubah")
		        document.location="home-admin.php?page=data_person"
		        </script>';
	      }
	}
	if (isset($_GET['id'])) {
		 $cari=mysqli_query($con,"select * from regions where id='$_GET[id]'");
	  	$cd1=mysqli_fetch_array($cari);
	}
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<style type="text/css">
	.tabel tr{
		margin-bottom: 10px;
	}
	.form-control1,.form-control2{
		width: 50% !important;	
	    height: 34px;
	    padding: 6px 12px;
	    font-size: 14px;
	    line-height: 1.42857143;
	    color: #555;
	    background-color: #fff;
	    background-image: none;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
	    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	}
</style>
<section class="content-header">
    <h1>Data<small>Person</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Profil Karyawan</li>
    </ol>
</section>

<form method="post" id="myForm" enctype="multipart/form-data">
<div id="tabel_range3"></div>

	<section class="content">
    <div class="row">
       
	<div class="col-md-12">

			<div class="box box-primary">				
				<div class="box-body">
	<table width="100%" class='table-striped'>
		<tr>
			<td>ID</td>
			</td>
			<td><select class="form-control" name="id" id="id"   onchange="kls()" autocomplete="off" autofocus="on" style="font-size:15px" id="kegiatan">
			 <option value='kegiatan'>--Pilih ID--</option>
				<?php $cari=mysqli_query($con,'select * from regions');
						while($opt=mysqli_fetch_array($cari)){?>
						<option value='<?=$opt['id']?>' <?php if(isset($_GET['id'])==$opt['id']){echo 'selected=""';}?>><?=$opt['id']?></option>
					<?php }?>
			</select></td>
			<span id="notif"></span>
	</tr>
	<tr>
			<td>NAME</td>
			</td>
			<td><input type="text" required="on" id="name1" name="name1" value="<?php if(isset($_GET['e'])){echo''.$cd['name'].'';} if(isset($_GET['id'])){echo''.$cd1['name'].'';} ?>" class="form-control"></td>
			<span id="notif"></span>
	</tr>
	<tr>
			<td>Region ID</td>
			</td>
			<td><input type="text" required="on" name="region_id" value="<?php if(isset($_GET['e'])){echo''.$cd['region_id'].'';} ?>" class="form-control"></td>
			<span id="notif"></span>
	</tr>
	<tr>
			<td>Address</td>
			</td>
			<td><input type="text" required="on" name="address" value="<?php if(isset($_GET['e'])){echo''.$cd['addres'].'';} ?>" class="form-control"></td>
			<span id="notif"></span>
	</tr>
	<tr>
			<td>Income</td>
			</td>
			<td><input type="text" required="on" name="income" value="<?php if(isset($_GET['e'])){echo''.$cd['income'].'';} ?>" class="form-control"></td>
			<span id="notif"></span>
	</tr>
	</table>
	<br>

	<input type="submit" value="Simpan" <?php if(isset($_GET['e'])){echo'name="ubah"';} else {echo'name="tambah"';} ?>  class="btn btn-primary">
	<input type="button" value="Refresh" onclick="document.location='?p=block'" class="btn btn-warning">

</form>

<table class='table table-striped table-no-bordered table-hover' id='tabel'>
<thead><tr>
  <th>ID</th>
  <th>NAME</th>
  <th>Region ID</th>
  <th>Address</th>
  <th>Income</th>

  <th>Action</th>

</tr></thead>
<tbody>
	<?php
    $tampil=mysqli_query($con,"select * from person");
      while($tampil1=mysqli_fetch_array($tampil))
    {
  ?>
  <tr>
    <td><?=$tampil1['id']?></td>
    <td><?=$tampil1['name']?></td>
    <td><?=$tampil1['region_id']?></td>
    <td><?=$tampil1['addres']?></td>
    <td><?=$tampil1['income']?></td>

    <td><a href="home-admin.php?page=data_person&e=<?php echo $tampil1['id'] ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
    <a href="home-admin.php?page=data_person&d=<?php echo $tampil1['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data??')"><i class="glyphicon glyphicon-remove"></i></a></td>
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
