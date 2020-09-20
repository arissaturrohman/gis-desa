<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
    }

	public function index()
	{
		$data = array(
            'title'   => 'Data User',
            'map'     => $this->googlemaps->create_map(),
            'isi'     => 'user/v_list'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
	}
}