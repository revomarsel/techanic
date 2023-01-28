<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->title = 'My TECHANIC Platform pencarian tempat reparasi / service mudah & terpercaya | TECHANIC Business Platform manajemen transaksi untuk alat elektronik';
	}

	public function index(){
		$data['title'] = $this->title;

		$this->load->view('_head',$data);
		$this->load->view('index');
		$this->load->view('_footer');
	}
}
