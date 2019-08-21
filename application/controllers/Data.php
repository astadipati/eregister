<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('M_register');
	}
	
	public function index()
	{
		$this->load->library('pagination');
        $config['base_url'] = base_url().'/data/index/';
        $config['total_rows'] = $this->M_register->tampilkan_data()->num_rows(); //dari tampilkan data menghitung jumlah record
        $config['per_page'] = 10;
        $this->pagination->initialize($config);
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman ==''?0:$halaman;
        $data ['data']    = $this->M_register->tampilkan_data_paging($halaman,  $config['per_page']);
		$this->load->view('template/header');
		$this->load->view('content/register',$data);
		$this->load->view('template/footer');
	}
}
