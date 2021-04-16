<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Profil
        <small>Akun</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('home')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
		  		<?php
				$i = 1;
				foreach($profile as $s){
				?>
            <div class="box-header">
			  <div class="pull-right">
			  <?php if ($s->nik == $this->session->userdata('id_user')){?>
			  <a href="<?php echo base_url()?>home/edit_user/<?php echo $s->nik?>" class="btn btn-primary">Edit</a>
			  <?php } else if ($s->keterangan == "Teknisi"){ ?>
			  <a href="<?php echo base_url()?>home/laporkan/<?php echo $s->nik?>" class="btn btn-danger">Laporkan</a>
			  <?php } ?>
			  </div>
			  	<div class="pull-left">
				<img src="<?php echo base_url()?>asset/gambar/<?php echo $s->gambar?>" style="width:150px;height:150px;" class="img-circle">
				</div>
            </div>
            <div class="box-body">
                  <div class="list-group">
				  <p class="list-group-item active"><b>PROFIL</b></p>
				<p class="list-group-item"><span><b>NIK</b></span><br><?php echo $s->nik?></p>			
				  <p class="list-group-item"><span><b>Nama</b></span><br><?php echo $s->nama?></p>			
				  <p class="list-group-item"><span><b>Jenis Kelamin</b></span><br><?php echo $s->jk?></p>			
				  <p class="list-group-item"><span><b>Alamat</b></span><br><?php echo $s->alamat?></p>
				  <p class="list-group-item"><span><b>Jabatan</b></span><br><?php echo $s->keterangan?></p>				  		
				  </div>
				 
				<p class="list-group-item active"><b>Kontak</b></p>
				  <p class="list-group-item"><span><b>Nomer Telepon</b></span><br><?php echo $s->telepon?></p>
				  <p class="list-group-item"><span><b>Email</b></span><br><?php echo $s->email?></p>					  		
				  </div>
				<?php
				}
				?>
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