<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tiket
        <small>Progress</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('home')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Progress</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Progress</h2>
            </div>
            <div class="box-body">
				<?php
				$i = 1;
				foreach($ticket as $s){
				$d = $s->progress;
				$f = $s->nama_kategori;
				?>
                  <div class="list-group">
				  <p class="list-group-item active">KETERANGAN</p>
				  <p class="list-group-item"><span>ID Tiket&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $s->id_ticket?></p>
				  <p class="list-group-item"><span>Tanggal Lapor&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $s->tanggal?></p>
				  <p class="list-group-item"><span>Jenis Masalah&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $s->nama_kategori?></p>
				 <p class="list-group-item"><span>Subjek&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $s->subjek_masalah?></p>
				  <p class="list-group-item"><span>Detail Masalah&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $s->detail_masalah?></p>
				  <p class="list-group-item"><span>Pelapor&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $s->nama?></p>
				  <p class="list-group-item">
				  <b>Foto</b><br><img src="<?php echo base_url()?>asset/gambar/<?php echo $s->attachment?>" style="width:250px;height:150px;"></p>
				  </div>
				  <form method="post" action="<?php echo base_url()?>home/proses/<?php echo $s->id_ticket?>">
				<?php
				}
				?>
				<label>Progress</label>
				<?php
				  echo "<select name='progress' class='form-control' required>
				  <option value='' disabled selected>Progress</option>";
				  $v = $d+1;
				  $e = 10;
				  for($i=$v;$i<=10;$i++){
					echo "<option value='".$i."'>".$i*$e." Persen</option>";	
				  }
				  echo "</select>";
				 ?>
				 <br>
				 <label>Deskripsi</label>
				 <textarea class="form-control" name="deskripsi" rows="3"style="resize:none;" placeholder="Deskripsi....."></textarea>
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
	<script src="<?php echo base_url()?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/fastclick/fastclick.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/app.min.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/demo.js"></script>