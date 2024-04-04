<?php

class Layanan_pegawai extends CI_Controller{
    public function index(){
		$this->load->view('landing_page/template_halaman/header');
		$this->load->view('landing_page/template_utama/menu');
		$this->load->view('landing_page/layanan_pegawai');
		$this->load->view('landing_page/template_halaman/footer');
	}
}
?>