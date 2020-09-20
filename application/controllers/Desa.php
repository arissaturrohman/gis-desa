<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
    }

	public function index()
	{
		$data = array(
            'title'   => 'Data Desa se-Kecamatan Gajah',
            'map'     => $this->googlemaps->create_map(),
            'isi'     => 'desa/v_list'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
	}
}