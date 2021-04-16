<?php

	class Login extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('model_ticket');
		}
		
		function index(){
			$this->load->view('login');
		}
		
		function lupa(){
			$this->load->view('lupa');
		}

		function success(){
			$this->load->view('lupa');
		}
		
		function reset_password($id){
			$data['akun'] = $this->model_ticket->get_akun($id);
			$this->load->view('reset',$data);
		}
		
		function edit_password(){
			$nik = $this->input->post('nik');
			$password = md5($this->input->post('pas1'));
			
			$data = array(
			'password' => $password
			);
			$this->model_ticket->update('akun','username',$nik,$data);
			redirect('login');
		}
		
		function check_email(){
			$email = trim($this->input->post('email'));
			$cek = $this->db->query("SELECT * FROM karyawan where email = '$email'");
			if ($cek->num_rows() != 1){
				$this->session->set_flashdata("hah","<div class='callout callout-warning'><h4>Peringatan</h4>
                <p>Email tidak ada!</p>
				</div>");
				redirect('login/lupa');
			}else{
				foreach($cek->result_array() as $z){
					$nik = $z['nik'];
					$nama = $z['nama'];
				}
			$pesan ="<h1>Reset Password</h1><p>Saudara ".$nama."</p>
			<p>Silahkan aktifkan dan isi password akun anda dengan men-klik tautan dibawah ini</p>
			<br>
			<p><a href='http://localhost/ticketing_new/login/reset_password/".$nik."'>http://localhost/ticketing_new/login/reset_password/".$nik."</a></p>";
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
			$ci->email->subject('Reset Password');
			$ci->email->message($pesan);
			if($this->email->send()){
			redirect('login');
			}else{
			show_error($this->email->print_debugger());
			}
		}
		}
		
		function aksi_login(){
			$username = trim($this->input->post('username'));
			$password = trim($this->input->post('password'));
			$hasil = $this->db->query("select A.username, A.level, A.status, B.nama, B.gambar, C.keterangan FROM akun A
			LEFT JOIN karyawan B on B.nik = A.username
			LEFT JOIN jabatan C on C.id_jabatan = A.level
			WHERE A.username = '$username' AND A.password = '$password'");
			
			if ($hasil->num_rows() == 1){
				foreach($hasil->result_array() as $i){
					if($i['status'] == "Aktif"){
					$session['id_user'] = $i['username'];
					$session['nama'] = $i['nama'];
					$session['level'] = $i['keterangan'];
					$session['status'] = 'Login';
					$session['gambar'] = $i['gambar'];
					$this->session->set_userdata($session);
					redirect('home');
				}
				else{
					$this->session->set_flashdata("msg","<div class='callout callout-danger'><h4>Peringatan</h4>
					<p>Akun Anda Disuspend oleh admin! Silahkan hubungi Admin !!!</p>
					</div>");
					redirect('login');
				}
				}
			}else{
				$this->session->set_flashdata("msg","<div class='callout callout-warning'><h4>Peringatan</h4>
                <p>Username/Password salah!</p>
				</div>");
				redirect('login');
			}
		}
		
		function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}	
	}