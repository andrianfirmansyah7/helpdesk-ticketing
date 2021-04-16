	<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
		<?php 
		  foreach ($gambar as $d){
        ?>
		  <img src="<?php 
		  echo base_url()?>asset/gambar/<?php echo $d->gambar?>" class="img-circle" alt="User Image">
		  <?php
		  }
		  ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
	  <?php if($this->session->userdata('level')=='Admin'){ ?>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= base_url()?>home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Tiket</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('home/daftar_ticket')?>"><i class="fa fa-circle-o"></i> Daftar Ticket</a></li>
            <li><a href="<?php echo base_url('home/approval_ticket')?>"><i class="fa fa-circle-o"></i> Approval Ticket</a></li>
          </ul>
        </li>
        <li class="treeview">
           <a href="#">
            <i class="fa fa-male"></i> <span>Pegawai</span>
			<span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('home/daftar_pegawai')?>"><i class="fa fa-circle-o"></i> Daftar Pegawai</a></li>
            <li><a href="<?php echo base_url('home/daftar_user')?>"><i class="fa fa-circle-o"></i> Daftar User</a></li>
            <li><a href="<?php echo base_url('home/akun_pegawai')?>"><i class="fa fa-circle-o"></i> Daftar Akun (Pegawai)</a></li>
            <li><a href="<?php echo base_url('home/akun_user')?>"><i class="fa fa-circle-o"></i> Daftar Akun (User)</a></li>
          </ul>
        </li>
      </ul>
	<?php }else if($this->session->userdata('level')=="Teknisi")
	{?>
		<ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= base_url()?>home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url()?>home/assignment">
            <i class="fa fa-briefcase"></i> <span>My Assigment Ticket</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url()?>home/history">
            <i class="fa fa-briefcase"></i> <span>History</span>
          </a>
        </li>
		</ul>
	<?php }else
	{ ?>
		<ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= base_url()?>home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url()?>home/new_ticket">
            <i class="fa fa-ticket"></i> <span>New Ticket</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url()?>home/my_ticket/<?php echo $this->session->userdata('id_user')?>">
            <i class="fa fa-dashboard"></i> <span>My Ticket</span>
          </a>
        </li>
		</ul>
	<?php
	}
	?>
    </section>
  </aside>