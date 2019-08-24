<?php require 'header.php';
require 'sidebar.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">

        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
          </div>
          <form method="POST"action="proses.php">
            <div class="form-group">
                <label >Nama Mahasiswa </label>
                <input type="text" name="nama_mahasiswa" > <br>
            </div>
            <div class="form-group">
                <label >NIm Mahasiswa </label>  
                <textarea name="nim_mahasiswa" id="" cols="30" rows="10"></textarea> <br> 
            </div>
            <input type="submit" name="tambah" value="Tambah" ><br>
        </form>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<?php require 'footer.php'; ?>