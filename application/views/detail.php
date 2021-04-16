<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tiket
        <small>Detail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('home')?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="<?php echo base_url('home/daftar_ticket')?>"> Daftar Ticket</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Detail Tiket</h2>
            </div>
            <div class="box-body">
				<?php
				$i = 1;
				foreach($ticket as $s){
				?>
                  <div class="list-group">
				  <p class="list-group-item active"><b>KETERANGAN</b></p>
				  <p class="list-group-item"><span class="fa fa-ticket"></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s->id_ticket?></p>
				  <p class="list-group-item"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s->tanggal?></p>
				  <p class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s->nama_kategori?></p>
				  <p class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s->subjek_masalah?></p>
				  <p class="list-group-item"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s->nama?></p>
				  <p class="list-group-item">
				  <b>Attachment</b><br><img src="<?php echo base_url()?>asset/gambar/<?php echo $s->attachment?>" style="width:250px;height:150px;"></p>
				  </div>
				<?php
				}
				?>
				<?php
				foreach($teknisi as $z){
				?>
                  <div class="list-group">
				  <p class="list-group-item active"><b>TEKNISI</b></p>
				<?php if($z->nama==""){?>
				  <p class="list-group-item"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;Belum Diproses</p>
				<?php } else {?>
				  <p class="list-group-item"><span>Nama Teknisi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $z->nama?></p>
				  <p class="list-group-item"><span>Tanggal Tiket&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $z->tanggal?></p>
				  <p class="list-group-item"><span>Tanggal Proses&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $z->tanggal_proses?></p>
				  <?php if($z->progress <= 50){?>
				  <p class="list-group-item"><span>Proses&nbsp;&nbsp;&nbsp;&nbsp;:</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="bg-red color-palette">&nbsp;&nbsp;<?php echo $z->progress*10?>%&nbsp;&nbsp;</span></p>
				  <?php } ?>
				  <p class="list-group-item"><span>Status&nbsp;&nbsp;&nbsp;&nbsp;:</span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $z->status?></p>
				  <p class="list-group-item"><span>Tanggal Selesai&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $z->tanggal_solved?></p>
				<?php
				 }
				?>
				  </div>
				<?php
				}
				?>
                  <div class="list-group">
				  <p class="list-group-item active"><b>HISTORY</b></p>
				  <table class="table table-stripped">
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Deskripsi</th>
						<th>Oleh</th>
					</tr>
				  <?php
			  	  $p = 1;
				  foreach($history as $s){
				  ?>
					<tr>
						<td><?php echo $p++;?></td>
						<td><?php echo $s->tanggal;?></td>
						<td><?php echo $s->status;?></td>
						<td><?php echo $s->deskripsi;?></td>
						<td><?php echo $s->nama;?></td>
					</tr>	
				  <?php
				  }
				  ?>
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
	<script src="<?php echo base_url()?>asset/plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/fastclick/fastclick.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/app.min.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/demo.js"></script>