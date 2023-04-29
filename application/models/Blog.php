<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_limit($limit,$kategori = '')
    {
        $query = $this->db->select('b.*,k.slug as kategori_slug,k.title as kategori_title');
        $query = $this->db->from('blog as b');
        $query = $this->db->join('kategori as k','k.id = b.kategori_id');
        $query = $this->db->where('b.is_delete',0);
        $query = $this->db->where('k.is_delete',0);
        if(!empty($kategori)){
            $query = $this->db->where('k.slug',$kategori);
        }
        $query = $this->db->limit($limit);
        $query = $this->db->order_by('b.id','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_populer($limit,$kategori = '')
    {
        $query = $this->db->select('b.*,k.slug as kategori_slug,k.title as kategori_title');
        $query = $this->db->from('blog as b');
        $query = $this->db->join('kategori as k','k.id = b.kategori_id');
        $query = $this->db->where('b.is_delete',0);
        $query = $this->db->where('k.is_delete',0);
        if(!empty($kategori)){
            $query = $this->db->where('k.slug',$kategori);
        }
        $query = $this->db->limit($limit);
        $query = $this->db->order_by('b.id','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_where($slug)
    {
        $query = $this->db->select('b.*,k.slug as kategori_slug,k.title as kategori_title');
        $query = $this->db->from('blog as b');
        $query = $this->db->join('kategori as k','k.id = b.kategori_id');
        $query = $this->db->where('b.is_delete',0);
        $query = $this->db->where('k.is_delete',0);
        $query = $this->db->where('b.slug',$slug);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function get_kategori($limit,$slug='')
    {
        $query = $this->db->select('k.*');
        $query = $this->db->from('kategori as k');
        $query = $this->db->where('k.is_delete',0);
        if(!empty($slug)){
            $query = $this->db->where('k.slug',$slug);
        }
        $query = $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function set_log($blog_id){
        $this->load->library('user_agent');
		$device = $this->agent->platform();
		$ip     = $this->input->ip_address();

        $data = array(
            'blog_id' => $blog_id,
            'ip_address' => $ip,
            'device' => $device,
        );

        $get = $this->db->where($data)->get('blog_has_log')->row_array();
        if(empty($get)){
            $data['created_at'] = date('Y-m-d H:i:s');
            $this->db->insert('blog_has_log',$data);
        }else{
            $date = explode(' ',$get['created_at'])[0];
            if($date != date('Y-m-d')){
                $data['created_at'] = date('Y-m-d H:i:s');
                $this->db->insert('blog_has_log',$data);
            }
        }
    }

    public function get_kategori_like($search){
        $query = $this->db->select('k.*');
        $query = $this->db->from('kategori as k');
        $query = $this->db->where('k.is_delete',0);
        $query = $this->db->like('k.title',$search);
        $query = $this->db->limit(5);
        $query = $this->db->get();
        return $query->result_array();
    }

}