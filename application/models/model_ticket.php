<?php

	class Model_ticket extends CI_Model{
		public function getkodeticket()
		{
        $query = $this->db->query("select max(id_ticket) as max_code FROM ticket");

        $row = $query->row_array();

        $max_id = $row['max_code'];
        $max_fix = (int) substr($max_id, 9, 4);

        $max_nik = $max_fix + 1;

        $tanggal = $time = date("d");
        $bulan = $time = date("m");
        $tahun = $time = date("Y");

        $nik = "T".$tahun.$bulan.$tanggal.sprintf("%04s", $max_nik);
        return $nik;
		}

		public function getkodekaryawan()
		{
        $query = $this->db->query("select max(nik) as max_code FROM karyawan");

        $row = $query->row_array();

        $max_id = $row['max_code'];
        $max_fix = (int) substr($max_id, 1, 4);

        $max_nik = $max_fix + 1;

        $nik = "A".sprintf("%04s", $max_nik);
        return $nik;
		}

		public function getkodeuser()
		{
        $query = $this->db->query("select max(id_user) as max_code FROM user");

        $row = $query->row_array();

        $max_id = $row['max_code'];
        $max_fix = (int) substr($max_id, 1, 4);

        $max_nik = $max_fix + 1;

        $nik = "U".sprintf("%04s", $max_nik);
        return $nik;
		}
		
		function get_allticket(){
		$query = $this->db->query("SELECT A.id_ticket, A.subjek_masalah, A.tanggal, A.pelapor, A.status, A.prioritas, A.progress, B.nama_kategori, C.nama, D.kondisi
		FROM ticket A
		LEFT JOIN kategori B ON B.id_kategori = A.id_kategori
		LEFT JOIN karyawan C ON C.nik = A.pelapor
		LEFT JOIN kondisi D ON D.id_kondisi = A.prioritas
		");
		return $query->result();
		}

		function get_selectedticket($id){
		$query = $this->db->query("SELECT A.id_ticket, A.subjek_masalah, A.tanggal, A.pelapor, A.status, A.prioritas, A.progress, B.nama_kategori, C.nama, D.kondisi
		FROM ticket A
		LEFT JOIN kategori B ON B.id_kategori = A.id_kategori
		LEFT JOIN karyawan C ON C.nik = A.pelapor
		LEFT JOIN kondisi D ON D.id_kondisi = A.prioritas
		where A.pelapor = '$id'
		");
		return $query->result();
		}
		
		function get_akun($id){
		$query = $this->db->query("SELECT * FROM karyawan where nik = '$id'");
		return $query->result();
		}
		
		function get_detail($id){
		$query = $this->db->query("SELECT A.id_ticket, A.subjek_masalah, A.tanggal, A.tanggal_proses, A.tanggal_solved, A.detail_masalah, A.pelapor, A.status, A.prioritas, A.progress, A.attachment, B.nama_kategori, C.nama, D.kondisi
		FROM ticket A
		LEFT JOIN kategori B ON B.id_kategori = A.id_kategori
		LEFT JOIN karyawan C ON C.nik = A.pelapor
		LEFT JOIN kondisi D ON D.id_kondisi = A.prioritas
		WHERE  A.id_ticket = '$id' 
		");
		return $query->result();
		}
		
		function get_teknis($id){
		$query = $this->db->query("SELECT A.tanggal, A.tanggal_proses, A.tanggal_solved, A.progress, A.status, B.nama
		FROM ticket A
		LEFT JOIN karyawan B ON B.nik = A.id_teknisi
		WHERE A.id_ticket = '$id'
		");
		return $query->result();
		}
		
		function get_history($id){
		$query = $this->db->query("SELECT A.tanggal, A.id_ticket, A.status, A.deskripsi, B.nama
		FROM history A
		LEFT JOIN karyawan B ON B.nik = A.dari
		WHERE A.id_ticket = '$id'
		");
		return $query->result();		
		}
		
		function get_history1($id){
		$query = $this->db->query("SELECT A.tanggal, A.id_ticket, A.status, A.dari,A.deskripsi, B.nama, B.gambar
		FROM history A
		LEFT JOIN karyawan B ON B.nik = A.dari
		WHERE A.untuk = '$id'
		");
		return $query->result();		
		}
		
		function get_uwser($id){
		$query = $this->db->query("SELECT A.nama, A.jk, A.alamat, A.email, A.gambar,A.telepon, A.nik, B.keterangan
		FROM karyawan A
		LEFT JOIN jabatan B on B.id_jabatan = A.id_jabatan
		where nik = '$id'");
		return $query->result();
		}

		function get_allpegawai(){
		$query = $this->db->query("SELECT A.nik, A.nama, A.alamat, A.jk, A.email, B.keterangan
		FROM karyawan A
		LEFT JOIN jabatan B ON B.id_jabatan = A.id_jabatan
		");
		return $query->result();
		}

		function get_alluser(){
		$query = $this->db->query("SELECT * FROM user");
		return $query->result();
		}
		
		function get_assignment(){
		$query = $this->db->query("SELECT A.id_ticket, A.subjek_masalah, A.tanggal, A.status, A.tanggal_proses, A.tanggal_solved, A.id_teknisi, A.prioritas, A.progress, B.nama_kategori, C.nama, D.kondisi
		FROM ticket A
		LEFT JOIN kategori B ON B.id_kategori = A.id_kategori
		LEFT JOIN karyawan C ON C.nik = A.pelapor
		LEFT JOIN kondisi D ON D.id_kondisi = A.prioritas
		");
		return $query->result();
		}
		
		function get_user(){
		$query = $this->db->query("SELECT A.username, A.level, A.status, B.nama, C.keterangan
		FROM akun A
		LEFT JOIN karyawan B ON B.nik = A.username
		LEFT JOIN jabatan C ON C.id_jabatan = A.level
		");
		return $query->result();
		}

		function get_user1(){
		$query = $this->db->query("SELECT A.username, A.level, A.status, B.nama_user, C.keterangan
		FROM akun A
		LEFT JOIN user B ON B.id_user = A.username
		LEFT JOIN jabatan C ON C.id_jabatan = A.level
		");
		return $query->result();
		}
		
		function cek_login($username,$password){
			$query = $this->db->query("select A.username, A.level, A.status, B.nama, B.gambar, C.keterangan FROM akun A
			LEFT JOIN karyawan B on B.nik = A.username
			LEFT JOIN jabatan C on C.id_jabatan = A.level
			WHERE A.username = '$username' AND A.password = '$password'");
			return $query->result();
		}
		
		function cek_email($email){
			$query = $this->db->query("SELECT * FROM karyawan where email = '$email'");
			return $query->result();
		}
		
	    function hapus_pegawai($id)
		{
        $this->db->where('nik', $id);
		$this->db->delete('karyawan');
		}

	    function hapus_akun($id)
		{
        $this->db->where('username', $id);
		$this->db->delete('akun');
		}
		
		function get_divisi(){
		return $this->db->get('divisi');
		}

		function get_jabatan(){
		return $this->db->get('jabatan');
		}

		function get_kategori(){
		return $this->db->get('kategori');
		}

		function get_teknisi(){
		$query = $this->db->query("SELECT A.spesialis, A.nik, B.nama
		FROM teknisi A
		LEFT JOIN karyawan B ON B.nik = A.nik
		WHERE A.status = 'Menganggur'
		");
		return $query->result();
		}
		
		function get_kondisi(){
		return $this->db->get('kondisi');
		}
		
		function ambil_data($where,$table){		
		return $this->db->get_where($table,$where);
		}
		
		function input_data($data,$table){
		$this->db->insert($table,$data);
		}
		
		function update($table,$id,$val,$data)
		{
		$this->db->where($id, $val);
		$this->db->update($table, $data); 
		}
		
	}