<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Pegawai
        <small>Daftar User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<a href="<?php echo base_url('home')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar User</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar User</h3>
			   <a href="<?php echo base_url()?>home/tambah_user" class="btn btn-primary tooltip-position-top" data-toggle="tooltip" data-placement="top" name="edit" title="Tambah Data" style="width:10%;margin-left:950px;margin-top:5	px;">Tambah</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID User</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>E-Mail</th>	
				  <th>Instansi</th>
				  <th>Aplikasi</th>
				  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i = 1;
				foreach($pegawai as $s){
				?>
				<tr>
                  <td><?php echo $i++?></td>
				  <td><?php echo $s->id_user?></td>
				  <td><?php echo $s->nama_user?></td>
				  <td><?php echo $s->alamat?></td>
				  <td><?php echo $s->jk_user?></td>
				  <td><?php echo $s->alamat_email?></td>
				  <td><?php echo $s->perusahaan?></td>
				  <td><?php echo $s->aplikasi?></td>
				  <td>
				  <div class="btn-group">
                   <a href="<?php echo base_url()?>" class="btn btn-info tooltip-position-top" data-toggle="tooltip" data-placement="top" name="edit" title="Edit Data"><i class="fa fa-pencil"></i></a>
                   <a href="<?php echo base_url()?>home/hapus_pegawai/<?=$s->id_user;?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
				  </div>
					</td>
                </tr>
				<?php
				}
				?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
	<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017 <a href="http://birutekno.com">Birutekno Inc</a>.</strong> All rights
    reserved.
	</footer>
	<script src="<?php echo base_url()?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="<?php echo base_url()?>asset/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/fastclick/fastclick.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/app.min.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/demo.js"></script>
	<script>
	$(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
	});
	</script>