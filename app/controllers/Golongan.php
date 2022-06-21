<?php

class Golongan extends Controller {

	public function index()
	{
		$data['title'] = 'Data Golongan';
		$data['golongan'] = $this->model('GolonganModel')->getAllGolongan();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('golongan/index', $data);
		$this->view('templates/footer');
	}
	public function cari()
	{
		$data['title'] = 'Data Golongan';
		$data['golongan'] = $this->model('GolonganModel')->cariGolongan();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('golongan/index', $data);
		$this->view('templates/footer');
	}

	public function edit($gol_id)
	{
		$data['title'] = 'Detail Golongan';
		$data['golongan'] = $this->model('GolonganModel')->getGolonganById($gol_id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('golongan/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah() 
	{
		$data['title'] = 'Tambah Golongan';		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('golongan/create', $data);
		$this->view('templates/footer');
	}

	public function simpanGolongan()
	{		
		if( $this->model('GolonganModel')->tambahGolongan($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/golongan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/golongan');
			exit;	
		}
	}

	public function updateGolongan(){	
		if( $this->model('GolonganModel')->updateDataGolongan($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/golongan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/golongam');
			exit;	
		}
	}

	public function hapus($gol_id){
		if( $this->model('GolonganModel')->deleteKategori($gol_id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/golongan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/golongan');
			exit;	
		}
	}
}
