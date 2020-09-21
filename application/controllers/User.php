<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
        
	public function index()
	{
		$data = array(
            'title'   => 'Data User',
            'isi'     => 'user/v_list'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
	}
}