<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
    }
	
	public function index()
	{
        $config['center']   = '-6.8710208,110.7292704';
        $config['zoom']     = 15;
        $this->googlemaps->initialize($config);
		$data = array(
            'title'   => 'GIS Desa se-Kecamatan Gajah',
            'map'     => $this->googlemaps->create_map(),
            'isi'     => 'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
	}
}