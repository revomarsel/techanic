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

	public function search_faq(){
		$search = $this->input->post('search');
		$data[] = array(
				"id" => 1,
				"title" => "Bagaimana cara mendaftar akun ke Techanic Business ?",
		);
		$data[] = array(
				"id" => 2,
				"title" => "Data apa saja yang perlu diisi di setting awal ?",
		);
		$data[] = array(
				"id" => 3,
				"title" => "Bagaimana Cara Menambahkan Cabang Usaha ?",
		);
		$data[] = array(
				"id" => 4,
				"title" => "Bagaimana cara membuat transaksi ?",
		);
		$data[] = array(
				"id" => 5,
				"title" => "Bagaimana cara export laporan kedalam excel ?",
		);
		$data[] = array(
				"id" => 6,
				"title" => "Bagaimana Cara Menambah Metode Pembayaran Untuk Setiap Cabang ?",
		);

		$return = [];
		foreach ($data as $n=>$c){
			if (similar_text($c['title'], $search) > 5) {
				$return[] = $c;
			}
		}
		echo json_encode($return);
	}
}
