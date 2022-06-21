<?php

class Pelanggan extends Controller {

	public function index()
	{
		$data['title'] = 'Data Pelanggan';
		$data['pelanggan'] = $this->model('PelangganModel')->getAllPelanggan();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pelanggan/index', $data);
		$this->view('templates/footer');
	}
	public function lihatlaporan()
	{
		$data['title'] = 'Data Laporan Pelanggan';
		$data['pelanggan'] = $this->model('PelangganModel')->getAllPelanggan();
		$this->view('pelanggan/lihatlaporan', $data);
	}

	public function laporan()
	{
		$data['pelanggan'] = $this->model('PelangganModel')->getAllPelanggan();

			$pdf = new FPDF('p','mm','A4');
			// membuat halaman baru
			$pdf->AddPage();
			// setting jenis font yang akan digunakan
			$pdf->SetFont('Arial','B',14);
			// mencetak string 
			$pdf->Cell(190,7,'LAPORAN PELANGGAN',0,1,'C');
			 
			// Memberikan space kebawah agar tidak terlalu rapat
			$pdf->Cell(10,7,'',0,1);
			 
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(85,6,'GOLONGAN',1);
			$pdf->Cell(85,6,'NOMOR',1);
			$pdf->Cell(85,6,'NAMA',1);
			$pdf->Cell(30,6,'ALAMAT',1);
			$pdf->Cell(30,6,'NO HP',1);
			$pdf->Cell(15,6,'KTP',1);
			$pdf->Cell(15,6,'SERI',1);
			$pdf->Cell(25,6,'METERAN',1);
			$pdf->Cell(25,6,'PENGGUNA',1);
			  $pdf->Ln();
			$pdf->SetFont('Arial','',10);
			 
			foreach($data['pelanggan'] as $row) {
				$pdf->Cell(85,6,$row['pel_id_gol'],1);
				$pdf->Cell(85,6,$row['pel_no'],1);
			    $pdf->Cell(85,6,$row['pel_nama'],1);
			    $pdf->Cell(30,6,$row['pel_alamat'],1);
			    $pdf->Cell(30,6,$row['pel_hp'],1);
				$pdf->Cell(15,6,$row['pel_ktp'],1); 
				$pdf->Cell(15,6,$row['pel_seri'],1); 
				$pdf->Cell(15,6,$row['pel_meteran'],1); 
			    $pdf->Cell(25,6,$row['pel_id_user'],1);
			    $pdf->Ln(); 
			}
			
			$pdf->Output('D', 'Laporan Pelanggan.pdf', true);
	}

	public function cari()
	{
		$data['title'] = 'Data Pelanggan';
		$data['pelanggan'] = $this->model('PelangganModel')->cariPelanggan();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pelanggan/index', $data);
		$this->view('templates/footer');
	}

	public function edit($pel_id){

		$data['title'] = 'Detail Pelanggan';
		$data['golongan'] = $this->model('GolonganModel')->getAllGolongan();
		$data['pelanggan'] = $this->model('PelangganModel')->getPelangganById($pel_id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pelanggan/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah(){
		$data['title'] = 'Tambah Pelanggan';		
		$data['pelanggan'] = $this->model('PelangganModel')->getAllPelanggan();		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pelanggan/create', $data);
		$this->view('templates/footer');
	}

	public function simpanPelanggan(){		

		if( $this->model('PelangganModel')->tambahPelanggan($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/pelanggan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/pelanggan');
			exit;	
		}
	}

	public function updatePelanggan(){	
		if( $this->model('PelangganModel')->updateDataPelanggan($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/pelanggan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/pelanggan');
			exit;	
		}
	}

	public function hapus($pel_id){
		if( $this->model('PelangganModel')->deleteBuku($pel_id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/pelanggan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/pelanggan');
			exit;	
		}
	}
}


