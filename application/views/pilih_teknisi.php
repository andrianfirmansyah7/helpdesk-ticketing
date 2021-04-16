<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tiket
        <small>Pilih Teknisi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('home')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Ticket</li>
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
			<h4>Detail</h4>
				<?php
				$i = 1;
				foreach($daf_ticket as $s){
				$f = $s->nama_kategori;
				?>
                  <div class="list-group">
				  <a href="#" class="list-group-item active"><span class="fa fa-ticket">&nbsp;&nbsp;&nbsp;<?php echo $s->id_ticket?></a>
				  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;<?php echo $s->tanggal?></a>
				  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span> &nbsp;&nbsp;&nbsp;<?php echo $s->nama_kategori?></a>
				  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span> &nbsp;&nbsp;&nbsp;<?php echo $s->subjek_masalah?></a>
				  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp;&nbsp;<?php echo $s->nama?></a>
				  </div>
				  <form method="post" action="<?php echo base_url()?>home/setuju/<?php echo $s->id_ticket?>">
				  <input type="hidden" value="<?php echo $s->pelapor?>" name="nik1">
				<?php
				}
				?>
				<label>Nama Teknisi</label>
				<?php
				  echo "<select name='teknisi' class='form-control' required>
				  <option value='' disabled selected>Nama Teknisi</option>";
				  foreach ($teknisi as $q){
					if ($q->spesialis == $f){
					echo "<option value='".$q->nik."'>".$q->nama."</option>";
					}	
				  }
				  echo "</select>";
				 ?>
				 <br>
				 <input type="submit" value="Submit" class="btn btn-primary">
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