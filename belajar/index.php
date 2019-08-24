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
              <h3 class="box-title">Data Mahasiswa Magang</h3>
          </div>
          <?php    

          if(isset($_GET['pesan'])){
              $pesan = $_GET['pesan'];
              if($pesan == "input"){
               echo "Data berhasil di input.";
           }else if($pesan == "update"){
               echo "Data berhasil di update.";
           }else if($pesan == "hapus"){
               echo "Data berhasil di hapus.";
           }
       }
       ?>
       <!-- /.box-header -->
       <div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Tambah Data
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
<form method="POST"action="proses.php">
            <div class="form-group">
                <label >Nama Mahasiswa </label>
                <input type="text" name="nama_mahasiswa" > <br>
            </div>
            <div class="form-group">
                <label >NIM Mahasiswa </label>  
                <input type="text" name="nim_mahasiswa" id="" cols="30" rows="10"></input> <br> 
            </div>
            <div class="form-group">
                <label >Asal Kampus </label>  
                <input type="text" name="asal_kampus" id="" cols="30" rows="10"></input> <br> 
            </div>
            <div class="form-group">
                <label >Prodi </label>  
                <input type="text" name="prodi" id="" cols="30" rows="10"></input> <br> 
            </div>
            <div class="form-group">
                <label >Tahun Angkatan </label>  
                <input type="text" name="tahun_angkatan" id="" cols="30" rows="10"></input> <br> 
            </div>
                <div class="form-group">
                <label >Email </label>  
                <input type="text" name="email" id="" cols="30" rows="10"></input> <br> 
            </div>
                <div class="form-group">
                <label >No Telephone </label>  
                <input type="text" name="no_telp" id="" cols="30" rows="10"></input> <br> 
            </div>
                <div class="form-group">
                <label >Alamat </label>  
                <input type="text" name="alamat" id="" cols="30" rows="10"></input> <br> 
            </div>
                <div class="form-group">
                <label >Tempat Lahir </label>  
                <input type="text" name="tempat_lahir" id="" cols="30" rows="10"></input> <br> 
            </div>
                <div class="form-group">
                <label >Tanggal Lahir </label>  
                <input type="text" name="tanggal_lahir" id="" cols="30" rows="10"></input> <br> 
            </div>


            <input type="submit" name="tambah" value="Tambah" ><br>
        </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

       <div class="box-body">
         <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="20%">Nama Mahasiswa</th>
                    <th width="15%">NIM Mahasiswa</th>
                    <th width="20%">Asal Kampus</th>
                    <th width="15%">Prodi</th>
                    <th width="15%">Tahun Angkatam</th>
                    <th width="15%">Email</th>

                    <th width="15%">No Telephone</th>
                    <th width="15%">Alamat</th>
                    <th width="15%">Tempat Lahir</th>
                    <th width="15%">Tanggal Lahir</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
             <?php $data_barang=mysqli_query($koneksi, "select * from barang");
             $no=1;
             while($data=mysqli_fetch_assoc($data_barang)) { ?>
                <tr>
                    <td><?=$no++  ?></td>
                    <td><?=$data['nama_mahasiswa']?></td>
                    <td><?=$data['nim_mahasiswa']?></td>
                    <td><?=$data['asal_kampus']?></td>
                    <td><?=$data['prodi']?></td>
                    <td><?=$data['tahun_angkatan']?></td>
                    <td><?=$data['email']?></td>
                    <td><?=$data['no_telp']?></td>
                    <td><?=$data['alamat']?></td>
                    <td><?=$data['tempat_lahir']?></td>
                    <td><?=$data['tanggal_lahir']?></td>

                    <td>
                        <a class="edit" href="edit.php?id=<?php echo $data['idmahasiswa']; ?>">Edit</a> |
                        <a class="hapus" href="proses.php?id=<?php echo $data['idmahasiswa']; ?>">Hapus</a>                 
                    </td>
                </tr>
            <?php } ?>  

        </tbody>

    </table>
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
<!-- /.content-wrapper -->
<?php require 'footer.php'; ?>
