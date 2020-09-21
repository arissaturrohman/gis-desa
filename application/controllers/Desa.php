<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_desa');
    }



	public function index()
	{
		$data = array(
            'title'   => 'Data Desa se-Kecamatan Gajah',
            'desa'    => $this->m_desa->list(),
            'isi'     => 'desa/v_list'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    
    public function input()
    {
        $this->form_validation->set_rules('nama_desa', 'Nama Desa', 'required',array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('telp', 'No Telp', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title'   => 'Input Data Desa se-Kecamatan Gajah',
                'isi'     => 'desa/v_add'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
            
        } else {
            $data = array(
                'nama_desa'  => $this->input->post('nama_desa'),
                'telp'       => $this->input->post('telp'),
                'alamat'     => $this->input->post('alamat'),
                'latitude'   => $this->input->post('latitude'),
                'longitude'  => $this->input->post('longitude'),
                'deskripsi'  => $this->input->post('deskripsi'),
            );
            $this->m_desa->simpan($data);
            $this->session->set_flashdata('pesan', 'Data berhasil disimpan');
            redirect('desa');
        }

    }
}