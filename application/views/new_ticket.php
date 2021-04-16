<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Ticket
        <small>New Ticket</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<a href="<?php echo base_url('home')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Ticket</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pelapor</h3>
            <div class="box-body">
			<?php echo form_open_multipart('home/input_ticket');?>
            </div>
			<?php
			foreach($lapor as $l){
			?>
              <div class="box-body">
	            <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="text" class="form-control" id="nik" value="<?php echo $l->nik?>" disabled>
                  <input type="hidden" class="form-control" id="nik" name="nik"value="<?php echo $l->nik?>">
                </div>
	            <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-Mail" value="<?php echo $l->nama?>" disabled>
                </div>
              </div>
			<?php
			}?>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Deskripsi</h3>
            </div>
            <div class="box-body">
              <div class="box-body">
                <div class="form-group">
                  <label>Kategori</label>
				<?php
				  echo "<select name='kategori' class='form-control' required>
				  <option value='' disabled selected>Kategori</option>";
				  foreach ($kategori->result() as $s){
					echo "<option value='".$s->id_kategori."'>".$s->nama_kategori."</option>";
				  }
				  echo "</select>";
				  ?>
                </div>
                <div class="form-group">
                  <label>Prioritas</label>
				<?php
				  echo "<select name='prioritas' class='form-control' required>
				  <option value='' disabled selected>Prioritas</option>";
				  foreach ($prioritas->result() as $s){
					echo "<option value='".$s->id_kondisi."'>".$s->kondisi."</option>";
				  }
				  echo "</select>";
				  ?>
                </div>
	            <div class="form-group">
                  <label for="subjek">Permasalahan</label>
                  <input type="text" name="masalah" class="form-control" id="subjek" placeholder="Permasalahan">
                </div>
		        <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" rows="3" name="deskripsi" placeholder="Deskripsi" style="resize:none;"></textarea>
                </div>
				 <div class="form-group">
                  <label for="inputfile">Attachment</label>
                  <input type="file" name="berkas" id="inputfile">
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