<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Pegawai
        <small>Akun</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('home')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Akun</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Daftar Akun Pegawai</h2>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Status</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i = 1;
				foreach($akun as $s){
				if ($s->keterangan != 'User'){
				?>
				<tr>
                  <td><?php echo $i++?></td>
				  <td><?php echo $s->username?></td>
				  <td><?php echo $s->nama?></td>
				  <td><?php echo $s->keterangan?></td>
				  <td><?php echo $s->status?></td>
				  <td>
				  <div class="btn-group">
                  	<a href="<?php echo base_url()?>home/banned/<?=$s->username?>" class="btn btn-danger tooltip-position-top" data-toggle="tooltip" data-placement="top" name="banned" title="Banned"><i class="fa fa-minus-circle"></i></a>
					</td>
                </tr>
				<?php
				}
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