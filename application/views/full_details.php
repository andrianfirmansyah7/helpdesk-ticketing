 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Semua Notifikasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <section class="col-lg-12 connectedSortable">
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Notifikasi</h3>
            </div>
            <div class="box-body chat" id="chat-box">
				<?php foreach ($history as $his){ ?>
              <div class="item">
				<?php
				$h = $his->tanggal;
				$a = date_create($h);
				$b = date_create();
				$c = date_diff($a,$b);
				?>
                <img src="<?php echo base_url()?>asset/gambar/<?php echo $his->gambar?>" alt="user image" class="online">
                <p class="message">
                  <a href="<?php echo base_url()?>home/profile/<?php echo $his->dari?>" class="name">
                    <small class="text-muted pull-right">
					<?php 
					if(($c->h==0)&&($c->i<=5)&&($c->d==0)){
					echo 'Baru Saja';
					}else if (($c->d==0)&&($c->h==0)){
					echo $c->i.' Menit Yang Lalu';	
					}else if(($c->d==0)&&($c->h<24)){
					echo $c->h.' Jam Yang Lalu';
					}else if($c->d<7){
					echo $c->d.' Hari Yang Lalu';
					}else{
					echo $h;
					}
					?></small>
                    <?php echo $his->nama?>
                  </a>
				  <?php if($his->status == "Menunggu Disetujui Teknisi"){?>
				  <b>Laporan Disetujui</b><br>
				  <?php }else{ ?>
				  <b><?php echo $his->status?></b><br>
                  <?php
				  }
				  if($his->status == "Dipending"){
					echo "Mohon maaf laporan anda dipending terlebih oleh saya karena ada beberapa hal";
				  }else if($his->status == "Menunggu Disetujui Teknisi"){
					echo "Laporan anda kami setujui untuk diperbaiki, silahkan tunggu notifikasi selanjutnya";
				  }
				  echo $his->deskripsi
				  ?>
                </p>
              </div>
				<?php
				} 
				?>
            </div>
            </div>
			</section>
            </div>
  </div>
  <footer class="main-footer" class="width:650px">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017 <a href="http://birutekno.com">Birutekno Inc</a>.</strong> All rights
    reserved.
	</footer>
	<script src="<?php echo base_url()?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/morris/morris.min.js"></script>
	<script type="text/javascript">
    Morris.Donut({
        element: 'ticket-chart',
        colors: ['#00a65a', '#00c0ef', '#dd4b39', '#f39c12 ', '#001F3F','#605ca8'],
        data: [{
                label: "Selesai",
                value: <?php echo $jml_beres ?>
            }, {
                label: "Sedang Diproses",
                value: <?php echo $jml_proses ?>
            }, {
                label: "Ditolak",
                value: <?php echo $jml_tolak ?>
            },{
				label: "Dipending",
				value: <?php echo $jml_pending ?> 
			},{
				label: "Lainnya",
				value: <?php echo $lainnya ?> 
			},{
				label: "Menunggu Teknisi",
				value: <?php echo $jml_status ?> 
			}],
        resize: true,
    })

	</script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script>
	$.widget.bridge('uibutton', $.ui.button);
	</script>
	<script src="<?php echo base_url()?>asset/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url()?>asset/plugins/fastclick/fastclick.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/app.min.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/pages/dashboard.js"></script>
	<script src="<?php echo base_url()?>asset/dist/js/demo.js"></script>