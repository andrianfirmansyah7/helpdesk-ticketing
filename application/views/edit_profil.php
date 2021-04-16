<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Profil
        <small>Edit Profil</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('home')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Profil</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
		  		<?php
				foreach($profile as $s){
				?>
            <div class="box-header">
				<?php echo form_open_multipart('home/edit_mengedit/'.$s->nik);?>
              <h3 class="box-title">Edit Profil</h3>
            </div>
            <div class="box-body">
              <div class="box-body">
                <div class="form-group">
                  <label for="nik">Foto</label><br>
				  <img src="<?php echo base_url()?>asset/gambar/<?php echo $s->gambar?>" style="width:150px;height:150px;" class="img-circle">
				</div>
                  <input type="file" name="berkas">
                </div>
                <div class="form-group">
                  <label for="lengkap">Nama Lengkap</label>
                  <input type="text" class="form-control" id="lengkap" name="nama" value="<?php echo $s->nama?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat" style="resize:none;"><?php echo $s->alamat?></textarea>
                </div>
	            <div class="form-group">
                  <label for="exampleInputEmail1">Alamat E-Mail</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $s->email?>">
                </div>
	            <div class="form-group">
                  <label for="telpon">Nomer Telepon</label>
                  <input type="text" name="telepon" class="form-control" id="telpon" value="<?php echo $s->telepon?>">
                </div>
				<?php } ?>
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