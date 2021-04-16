<?php

	class Home extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('model_ticket');
			$this->load->helper(array('form', 'url'));
			if($this->session->userdata('status') != 'Login'){
				$this->session->set_flashdata("msg","<div class='alert alert-info alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-info'></i> Peringatan!</h4>
                Anda Harus Login terlebih dahulu
              </div>");
			  redirect('login');
			}
		}
		
		function index(){
			$sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket";
			$row_listticket = $this->db->query($sql_listticket)->row();
			$data['jml_ticket'] = $row_listticket->jml_list_ticket;
			
			$sql_beres = "SELECT COUNT(id_ticket) AS jml_beres FROM ticket WHERE status = 'Selesai'";
			$row_beres = $this->db->query($sql_beres)->row();
			$data['jml_beres'] = $row_beres->jml_beres;

			$sql_proses = "SELECT COUNT(id_ticket) AS jml_proses FROM ticket WHERE status = 'Proses Pengerjaan'";
			$row_proses = $this->db->query($sql_proses)->row();
			$data['jml_proses'] = $row_proses->jml_proses;
			
			$sql_tolak = "SELECT COUNT(id_ticket) AS jml_tolak FROM ticket WHERE status = 'Tidak Disetujui'";
			$row_tolak = $this->db->query($sql_tolak)->row();
			$data['jml_tolak'] = $row_tolak->jml_tolak;
			
			$sql_setujui = "SELECT COUNT(id_ticket) AS jml_setujui FROM ticket WHERE status = 'Menunggu Persetujuan'";
			$row_setujui = $this->db->query($sql_setujui)->row();
			$data['jml_setujui'] = $row_setujui->jml_setujui;
			
			$sql_lain = "SELECT COUNT(id_ticket) AS jml_lain FROM ticket WHERE status = 'Disetujui'";
			$row_lain = $this->db->query($sql_lain)->row();
			$data['lainnya'] = $row_lain->jml_lain;

			$sql_pending = "SELECT COUNT(id_ticket) AS jml_pending FROM ticket WHERE status = 'Dipending'";
			$row_pending = $this->db->query($sql_pending)->row();
			$data['jml_pending'] = $row_pending->jml_pending;

			$sql_user = "SELECT COUNT(nik) AS jml_user FROM karyawan WHERE id_jabatan = 2";
			$row_user = $this->db->query($sql_user)->row();
			$data['jml_user'] = $row_user->jml_user;

			$sql_teknisi = "SELECT COUNT(nik) AS jml_teknisi FROM teknisi";
			$row_teknisi = $this->db->query($sql_teknisi)->row();
			$data['jml_teknisi'] = $row_teknisi->jml_teknisi;

			$sql_status = "SELECT COUNT(status) status FROM ticket WHERE status = 'Menunggu Dikerjakan Teknisi'";
			$row_status = $this->db->query($sql_status)->row();
			$data['jml_status'] = $row_status->status;
			
			$id = $this->session->userdata('id_user');
			$data['history'] = $this->model_ticket->get_history1($id);
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('template/dashboard',$data);
		}
		
		function daftar_ticket(){
			$data['daf_ticket'] = $this->model_ticket->get_allticket();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('ticket/daftar_ticket',$data);
		}

		function approval_ticket(){
			$data['daf_ticket'] = $this->model_ticket->get_allticket();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('ticket/daftar_approval',$data);
		}
	
		function edit_user($id){
			$data['profile'] = $this->model_ticket->get_uwser($id);
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('edit_profil',$data);
		}
		
		function assignment(){
			$data['ticket'] = $this->model_ticket->get_assignment();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('ticket/daftar_assignment',$data);
		}

		function history(){
			$data['ticket'] = $this->model_ticket->get_assignment();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('ticket/history',$data);
		}

		function my_ticket($id){
			$data['daf_ticket'] = $this->model_ticket->get_selectedticket($id);
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('ticket/my_ticket',$data);
		}

		function daftar_pegawai(){
			$data['pegawai'] = $this->model_ticket->get_allpegawai();
			$data['jabatan'] = $this->model_ticket->get_jabatan();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('pegawai/daftar_pegawai',$data);
		}

		function daftar_user(){
			$data['pegawai'] = $this->model_ticket->get_alluser();
			$data['kode'] = $this->model_ticket->getkodeuser();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('pegawai/daftar_user',$data);
		}

		function tambah_user(){
			$data['kode'] = $this->model_ticket->getkodeuser();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('pegawai/tambah_user',$data);
		}

		function akun_pegawai(){
			$data['akun'] = $this->model_ticket->get_user();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('pegawai/akun_pegawai',$data);
		}

		function akun_user(){
			$data['akun'] = $this->model_ticket->get_user1();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('pegawai/akun_user');
		}
		
		function tambah_pegawai(){
			$data['jabatan'] = $this->model_ticket->get_jabatan();
			$data['kode'] = $this->model_ticket->getkodekaryawan();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);;
			$this->load->view('pegawai/tambah_pegawai',$data);
		}

		function new_ticket(){
			$data['kategori'] = $this->model_ticket->get_kategori();
			$data['prioritas'] = $this->model_ticket->get_kondisi();	
			$user = $this->session->userdata('id_user');
			$where = array('nik' => $user);
			$data['lapor'] = $this->model_ticket->ambil_data($where,'karyawan')->result();
			$data['kode'] = $this->model_ticket->getkodeticket();
			$id = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('new_ticket',$data);
		}
		
		function full_details(){
			$id = $this->session->userdata('id_user');
			$data['history'] = $this->model_ticket->get_history1($id);
			$data['gambar'] = $this->model_ticket->get_akun($id);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('full_details',$data);	
		}
		
		function detail($id){
			$data['ticket'] = $this->model_ticket->get_detail($id);
			$data['teknisi'] = $this->model_ticket->get_teknis($id);
			$data['history'] = $this->model_ticket->get_history($id);
			$id1 = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id1);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('detail',$data);
		}

		function profile($id){
			$id1 = $this->session->userdata('id_user');
			$data['profile'] = $this->model_ticket->get_uwser($id);
			$data['gambar'] = $this->model_ticket->get_akun($id1);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('profil',$data);
		}
		
		function progress($id){
			$data['ticket'] = $this->model_ticket->get_detail($id);
			$id1 = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id1);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('progres',$data);
		}
		
		function pilih_teknisi($id){
			$data['teknisi'] = $this->model_ticket->get_teknisi();
			$data['daf_ticket'] = $this->model_ticket->get_detail($id);
			$id1 = $this->session->userdata('id_user');
			$data['gambar'] = $this->model_ticket->get_akun($id1);
			$this->load->view('template/header',$data);
			$this->load->view('template/navbar',$data);
			$this->load->view('pilih_teknisi',$data);
		}

		function hapus_pegawai($id){
			$this->model_ticket->hapus_pegawai($id);
			$this->model_ticket->hapus_akun($id);
			redirect('home/daftar_pegawai');
		}
		
		function input_user(){
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$jk = $this->input->post('jk');
			$email = $this->input->post('email');
			$perusahaan = $this->input->post('perusahaan');
			$aplikasi = $this->input->post('aplikasi');
			
			$data = array(
			'id_user' => $nik,
			'nama_user' => $nama,
			'jk_user' => $jk,
			'alamat' => $alamat,
			'alamat_email' => $email,
			'perusahaan' => $perusahaan,
			'aplikasi' => $aplikasi,
			'foto_profil' => 'vatar.png'
			);
			
			$data1 = array(
			'username' => $nik,
			'password' => md5($nik),
			'level' => 2,
			'status' => 'Aktif'
			);
			
			$this->model_ticket->input_data($data,'user');
			$this->model_ticket->input_data($data1,'akun');
			redirect('home/daftar_user');
		}
		
		function input_pegawai(){
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$jk = $this->input->post('jk');
			$email = $this->input->post('email');
			$jabatan = $this->input->post('jabatan');
			$nik = $this->model_ticket->getkodekaryawan();
			
			$put = array(
				'nik' => $nik,
				'nama' => $nama,
				'alamat' => $alamat,
				'jk' => $jk,
				'email' => $email,
				'id_jabatan' => $jabatan
				);
			
			$wel = array(
				'username' => $nik,
				'password' => md5($nik),
				'level' => $jabatan,
				'status' => 'Aktif'
			);
			
			$this->model_ticket->input_data($put,'karyawan');
			$this->model_ticket->input_data($wel,'akun');
			redirect('home/daftar_pegawai');
			}
	
		function edit_mengedit($id){
			$config['upload_path']          = './asset/gambar/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 50000;
			$config['max_width']            = 5000;
			$config['max_height']           = 5000;
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('berkas')){
			$baw = 'Binbin';
			}else{
			$alamat = $this->input->post('alamat');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telepon = $this->input->post('telepon');
			
			$poto = $this->upload->data();
			
			$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email,
			'telepon' => $telepon,
			'gambar' => $poto['file_name']
			);
			
			$this->model_ticket->update('karyawan','nik',$id,$data);
			redirect('home/profile/'.$id);
			}
		}
		
		function input_ticket(){
			$config['upload_path']          = './asset/gambar/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 50000;
			$config['max_width']            = 5000;
			$config['max_height']           = 5000;
 
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('new_ticket', $error);
			}else{
			$kode = $this->model_ticket->getkodeticket();
			$nik = $this->input->post('nik');
			$kategori = $this->input->post('kategori');
			$prioritas = $this->input->post('prioritas');
			$masalah = $this->input->post('masalah');
			$deskripsi = $this->input->post('deskripsi');
			$tanggal = $time = date("Y-m-d  H:i:s");
			
			$poto = $this->upload->data();
			
			$data = array(
			'id_ticket' => $kode,
			'tanggal' => $tanggal,
			'pelapor' => $nik,
			'id_kategori' => $kategori,
			'subjek_masalah' => $masalah,
			'detail_masalah' => $deskripsi,
			'status' => 'Menunggu Persetujuan',
			'progress' => 0,
			'prioritas' => $prioritas,
			'attachment' => $poto['file_name'],
			);
			
			$data1 = array(
			'id_ticket' => $kode,
			'tanggal' => $tanggal,
			'status' => 'Tiket Dibuat',
			);
			
			$this->model_ticket->input_data($data,'ticket');
			$this->model_ticket->input_data($data1,'history');
			redirect('home');
		}
		}
		
		function setuju($id){
		$tanggal = $time = date("Y-m-d  H:i:s");
		$teknisi = $this->input->post('teknisi');
		$nik1 = $this->input->post('nik1');
		$nik = $this->session->userdata('id_user');
		$data = array(
		'id_teknisi' => $teknisi,
		'status' => 'Menunggu Dikerjakan Teknisi'
		);
		
		$data2 = array(
		'id_ticket' => $id,
		'tanggal' => $tanggal,
		'status' => 'Menunggu Dikerjakan Teknisi',
		'dari' => $nik,
		'untuk' => $nik1
		);
		
		$this->model_ticket->update("ticket","id_ticket",$id,$data);	
		$this->model_ticket->input_data($data2,'history');
		redirect('home/approval_ticket');
		}
		
		function tdk_setuju($id){
		$base = $this->db->query("select * from ticket where id_ticket = '$id'");
		foreach($base->result_array() as $z){
				$nik1 = $z['pelapor'];
				}
		$tanggal = $time = date("Y-m-d  H:i:s");
		$nik = $this->session->userdata('id_user');
		$data = array(
		'status' => 'Tidak Disetujui'
		);
		
		$data2 = array(
		'id_ticket' => $id,
		'tanggal' => $tanggal,
		'status' => 'Tidak',
		'dari' => $nik,
		'untuk' => $nik1
		);
		$this->model_ticket->update("ticket","id_ticket",$id,$data);	
		$this->model_ticket->input_data($data2,'history');
		redirect('home/approval_ticket');
		}
		

		function terima($id){
		$bas = $this->db->query("select * from ticket where id_ticket = '$id'");
		foreach($bas->result_array() as $z){
		$nik1 = $z['pelapor'];
		}
		$tanggal = $time = date("Y-m-d  H:i:s");
		$nik = $this->session->userdata('id_user');
		$data = array(
		'tanggal_proses' => $tanggal,
		'status' => 'Proses Pengerjaan'
		);
		
		$data2 = array(
		'id_ticket' => $id,
		'tanggal' => $tanggal,
		'status' => 'Proses Pengerjaan',
		'dari' => $nik,
		'untuk' => $nik1
		);
		
		$data3 = array(
		'status' => 'Bekerja'
		);
		
		$this->model_ticket->update("teknisi","nik",$nik,$data3);	
		$this->model_ticket->update("ticket","id_ticket",$id,$data);	
		$this->model_ticket->input_data($data2,'history');
		redirect('home/assignment');
		}

		function pending($id){
		$base = $this->db->query("select * from ticket where id_ticket = '$id'");
		foreach($base->result_array() as $z){
				$nik1 = $z['pelapor'];
				}
		$tanggal = $time = date("Y-m-d  H:i:s");
		$nik = $this->session->userdata('id_user');
		$data = array(
		'tanggal_proses' => $tanggal,
		'status' => 'Dipending'
		);
		
		$data2 = array(
		'id_ticket' => $id,
		'tanggal' => $tanggal,
		'status' => 'Dipending',
		'nik' => $nik
		);
		$this->model_ticket->update("ticket","id_ticket",$id,$data);	
		$this->model_ticket->input_data($data2,'history');
		redirect('home/assignment');
		}
		
		function proses($id){
		$base1 = $this->db->query("select * from ticket where id_ticket = '$id'");
		foreach($base1->result_array() as $oz){
				$nik1 = $oz['pelapor'];
		}
		$tanggal = $time = date("Y-m-d  H:i:s");
		$nik = $this->session->userdata('id_user');
		$proses = $this->input->post('progress');
		$deskripsi = $this->input->post('deskripsi');
		$desk = "Selesai, barang bisa diambil";
		
		if($proses == 10){
			$status = 'Selesai';
			$selesai = $time = date("Y-m-d H:i:s");
			$data = array(
			'tanggal_solved' => $selesai,
			'progress' => $proses,
			'status' => $status
			);
					
			$data2 = array(
			'id_ticket' => $id,
			'tanggal' => $tanggal,
			'status' => $status,
			'deskripsi' => $desk,
			'dari' => $nik,
			'untuk' => $nik1
			);
			
			$data3 = array (
			'status' => 'Menganggur'
			);
			$this->model_ticket->update("teknisi","nik",$nik,$data3);
		}else{
			$f = 10;
			$status = 'Proses Pengerjaan '.$proses*$f.'%';
			$data = array(
			'progress' => $proses,
			'status' => $status
			);
			
			$data2 = array(
			'id_ticket' => $id,
			'tanggal' => $tanggal,
			'status' => $status,
			'deskripsi' => $deskripsi,
			'dari' => $nik,
			'untuk' => $nik1
			);
		}
		$this->model_ticket->update("ticket","id_ticket",$id,$data);		
		$this->model_ticket->input_data($data2,'history');
		redirect('home/assignment');
		}
		
		
		function banned_user($id){
			$cek = $this->db->query("SELECT * FROM user where id_user = '$id'");
			if ($cek->num_rows() == 1){
				foreach($cek->result_array() as $z){
					$nik = $z['id_user'];
					$nama = $z['nama_user'];
					$email = $z['alamat_email'];
				}
			$pesan ="<h1>Reset Password</h1><p>Saudara ".$nama."</p>
			<p>Mohon Maaf akun dibanned oleh admin dikarenakan anda telah melanggar peraturan yang berlaku</p>
			<br>
			<p>Silahkan hubungi admin untuk informasi lebih lanjut</p>
			<p>Salam</p>
			<br>
			<br>
			<p>Helpdesk Birutekno</p>";
			$ci = get_instance();
			$config['protocol'] = "smtp";
			$config['smtp_host'] = "ssl://smtp.gmail.com";
			$config['smtp_port'] = "465";
			$config['smtp_timeout'] = '7';
			$config['smtp_user'] = "andrianfirmansyah6290@gmail.com";
			$config['smtp_pass'] = "cimenteng";
			$config['charset'] = "utf-8";
			$config['mailtype'] = "html";
			$config['newline'] = "\r\n";
			$config['validation'] = TRUE;
	
			$ci->email->initialize($config);
		
			$ci->email->from('andrianfirmansyah6290@gmail.com','Admin');
			$ci->email->to($email);
			$ci->email->subject('Akun Anda Dibanned !!!');
			$ci->email->message($pesan);
			if($this->email->send()){
			redirect('home');
			}else{
			show_error($this->email->print_debugger());
			}
		}
		}
		
	}