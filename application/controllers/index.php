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

	public function product(){
		$get = $this->input->get('title',true);
		
		$data['title'] = $this->title;

		$this->load->view('_head',$data);
		if($get === 'my-techanic'){
			$this->load->view('my_techanic');
		}else{
			$this->load->view('techanic_business');
		}
		$this->load->view('_footer');
	}

	public function join_team(){
		$data['title'] = $this->title;

		$this->load->view('_head',$data);
		$this->load->view('join_team');
		$this->load->view('_footer');
	}

	public function about_us(){
		$data['title'] = $this->title;

		$this->load->view('_head',$data);
		$this->load->view('about');
		$this->load->view('_footer');
	}

	public function faq(){
		$data['title'] = $this->title;

		$this->load->view('_head',$data);
		$this->load->view('faq');
		$this->load->view('_footer');
	}
}
