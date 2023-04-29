<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->title = 'Techanic';
		$this->titleMyTechanic = 'MyTechanic Platform pencarian tempat reparasi / service mudah & terpercaya';
		$this->titleTechanicBusiness = 'Techanic Business Platform manajemen transaksi jasa reparasi berbasis mobile';
		$this->load->model('blog');
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
		if($get === 'my-techanic'){
			$data['blog'] = $this->blog->get_limit(4);
			$data['title'] = $this->titleMyTechanic;
			$this->load->view('_head',$data);
			$this->load->view('my_techanic',$data);
		}else{
			$data['title'] = $this->titleTechanicBusiness;
			$this->load->view('_head',$data);
			$this->load->view('techanic_business',$data);
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
	
	
	public function blog(){
		$data['title'] = $this->title;
		$data['type_head'] = 'active';
		$slug_kategori = clean_str($this->uri->segment(2));
		$data['blog'] = $this->blog->get_limit(4,$slug_kategori);

		$data['kategori'] = [];
		$kategori = $this->blog->get_kategori(1,$slug_kategori);
		if(!empty($kategori)){
			$data['kategori'] = $kategori[0];
		}

		$this->load->view('_head',$data);
		$this->load->view('blog');
		$this->load->view('_footer');
	}
	
	public function blog_detail(){
		$data['title'] = $this->title;
		$data['type_head'] = 'active';
		$slug_kategori = clean_str($this->uri->segment(2));
		$data['kategori'] = $this->blog->get_kategori(10);
		$data['blogs'] = $this->blog->get_populer(5);
		
		$slug = clean_str($this->uri->segment(3));
		
		$data['blog'] = $this->blog->get_where($slug);

		$this->blog->set_log($data['blog']['id']);

		$this->load->view('_head',$data);
		$this->load->view('blog_detail');
		$this->load->view('_footer');
	}

	public function search(){
		$search = $this->input->post('search',true);
		$type = $this->input->post('type',true);
		$return = [];
		if($type === 'faq'){
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

			foreach ($data as $n=>$c){
				if (similar_text($c['title'], $search) > 5) {
					$return[] = $c;
				}
			}
		}

		if($type === 'blog'){
			$get = $this->blog->get_kategori_like($search);

			foreach($get as $t => $l){
				$return[] = array(
					'id' => $l['id'],
					'slug' => $l['slug'],
					'title' => $l['title'],
				);
			}
		}
		echo json_encode($return);
	}
}
