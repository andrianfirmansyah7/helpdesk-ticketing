<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tiket
        <small>My Assignment Ticket</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Daftar Tiket</h2>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Tiket</th>
                  <th>Tanggal</th>
                  <th>Kategori</th>
                  <th>Masalah</th>
                  <th>Prioritas</th>
				  <th>Progress</th>
				  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i = 1;
				foreach($ticket as $s){
				if (($s->id_teknisi == $this->session->userdata('id_user')) && ($s->status != "Selesai")){
				?>
				<tr>
                  <td><?php echo $i++?></td>
				  <?php if (($s->status != "Menunggu Dikerjakan Teknisi")&&($s->status != "Dipending")){?>
				  <td><a href="<?php echo base_url()?>home/progress/<?php echo $s->id_ticket?>"><?php echo $s->id_ticket?></a></td>
				  <?php }else{ ?>
				  <td><?php echo $s->id_ticket?></td>
				  <?php } ?>
				  <td><?php echo $s->tanggal?></td>
				  <td><?php echo $s->nama_kategori?></td>
				  <td><?php echo $s->subjek_masalah?></td>
				  <td><?php echo $s->kondisi?></td>
				  <td><?php echo $s->progress*10?>%</td>
				  <td>
				  <?php if (($s->status == "Menunggu Dikerjakan Teknisi")){?>
				  <div class="btn-group">
                   <a href="<?php echo base_url()?>home/terima/<?php echo $s->id_ticket?>" class="btn btn-info tooltip-position-top" data-toggle="tooltip" data-placement="top" name="edit" title="Terima"><i class="fa fa-wrench"></i></a>
                   <a href="<?php echo base_url()?>home/pending/<?php echo $s->id_ticket?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Pending"><i class="glyphicon glyphicon-ban-circle"></i></a>
				   </div>
				  <?php
					} else if($s->status == 'Dipending') {
				  ?>
				  <div class="btn-group">
                   <a href="<?php echo base_url()?>home/terima/<?php echo $s->id_ticket?>" class="btn btn-info tooltip-position-top" data-toggle="tooltip" data-placement="top" name="edit" title="Terima"><i class="fa fa-wrench"></i></a>
				  <?php } ?>
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