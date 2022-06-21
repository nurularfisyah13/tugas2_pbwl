<?php

class About extends Controller {

	public function index()
	{
		$data['title'] = 'Halaman AboutMe';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
}