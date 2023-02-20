<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->title = 'Techanic';
		$this->titleMyTechanic = 'MyTechanic Platform pencarian tempat reparasi / service mudah & terpercaya';
		$this->titleTechanicBusiness = 'Techanic Business Platform manajemen transaksi jasa reparasi berbasis mobile';
	}

	public function index(){
		$data['title'] = $this->title;

		$this->load->view('_head',$data);
		$this->load->view('index');
		$this->load->view('_footer');
	}

	public function product(){
		// for($x=53; $x <= 111; $x++ ){
		// 	echo '
		// 		if($type == "text_'.$x.'"){<br>
		// 			if($lang == "en-id"){<br>
		// 				return "Connect to Team";<br>
		// 			}else{<br>
		// 				return "Peralatan Rumah Tangga";<br>
		// 			}<br>
		// 		}<br><br>
		// 	';
		// }
		// die;
		$get = $this->input->get('title',true);
		
		$data['title'] = $this->title;

		$this->load->view('_head',$data);
		if($get === 'my-techanic'){
			$data['title'] = $this->titleMyTechanic;
			$this->load->view('my_techanic');
		}else{
			$data['title'] = $this->titleTechanicBusiness;
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
