<div class="content-wrapper">
     <section class="content-header">
      <h1>
        Tiket
        <small>Approval Tiket</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('home')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Approval Ticket</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Approval Tiket</h2>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Pelapor</th>
                  <th>Tanggal</th>
                  <th>Kategori</th>
                  <th>Masalah</th>
                  <th>Prioritas</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i = 1;
				foreach($daf_ticket as $s){
				if ($s->status == "Menunggu Persetujuan"){
				?>
				<tr>
                  <td><?php echo $i++?></td>
				  <td><?php echo $s->nama?></td>
				  <td><?php echo $s->tanggal?></td>
				  <td><?php echo $s->nama_kategori?></td>
				  <td><?php echo $s->subjek_masalah?></td>
				  <td><?php echo $s->kondisi?></td>
				  <td>
				  <div class="btn-group">
                   <a href="<?php echo base_url()?>home/pilih_teknisi/<?php echo $s->id_ticket?>" class="btn btn-info tooltip-position-top" data-toggle="tooltip" data-placement="top" name="edit" title="Setuju"><i class="fa fa-thumbs-o-up"></i></a>
                   <a href="<?php echo base_url()?>home/tdk_setuju/<?php echo $s->id_ticket?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Tidak Setuju"><i class="fa fa-thumbs-o-down"></i></a>
				   </div>
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