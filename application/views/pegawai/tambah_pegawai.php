<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Pegawai
        <small>Tambah Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<a href="<?php echo base_url('home')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Pegawai</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Pegawai</h3>
            </div>
            <div class="box-body">
			<form action="<?php echo base_url()?>home/input_pegawai" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="text" class="form-control" id="nik"value="<?php echo $kode?>" disabled>
                  <input type="hidden" class="form-control" id="nik" name="nik" value="<?php echo $kode?>">
                </div>
                <div class="form-group">
                  <label for="lengkap">Nama Lengkap</label>
                  <input type="text" class="form-control" id="lengkap" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <label for="Jenis Kelamin">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option value="" disabled selected>Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat" style="resize:none;"></textarea>
                </div>
	            <div class="form-group">
                  <label for="exampleInputEmail1">Alamat E-Mail</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-Mail">
                </div>
				<div class="form-group">
                  <label for="Jenis Kelamin">Jabatan</label>
				  <?php
				  echo "<select name='jabatan' class='form-control' required>
				  <option value='' disabled selected>Jabatan</option>";
				  foreach ($jabatan->result() as $s){
					echo "<option value='".$s->id_jabatan."'>".$s->keterangan."</option>";
				  }
				  echo "</select>";
				  ?>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
              </div>
            </form>
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
	<script src="<?php echo base_url()?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/fastclick/fastclick.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/app.min.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/demo.js"></script>