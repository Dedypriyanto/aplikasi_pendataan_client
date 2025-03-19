<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class A_home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('A_home_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'a_home/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'a_home/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'a_home/index.html';
            $config['first_url'] = base_url() . 'a_home/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->A_home_model->total_rows($q);
        $a_home = $this->A_home_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'a_home_data' => $a_home,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('a_home/home', $data);
    }

    public function read($id) 
    {
        $row = $this->A_home_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no' => $row->no,
		'tanggal_kedatangan_jam' => $row->tanggal_kedatangan_jam,
		'nama' => $row->nama,
		'tanggal_lahir' => $row->tanggal_lahir,
		'pendidikan_terakhir' => $row->pendidikan_terakhir,
		'kota_asal' => $row->kota_asal,
		'no_hp' => $row->no_hp,
		'keperluan' => $row->keperluan,
		'program_yang_diambil' => $row->program_yang_diambil,
	    );
            $this->load->view('a_home/kedatangan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('a_home'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('a_home/create_action'),
	    'no' => set_value('no'),
	    'tanggal_kedatangan_jam' => set_value('tanggal_kedatangan_jam'),
	    'nama' => set_value('nama'),
	    'tanggal_lahir' => set_value('tanggal_lahir'),
	    'pendidikan_terakhir' => set_value('pendidikan_terakhir'),
	    'kota_asal' => set_value('kota_asal'),
	    'no_hp' => set_value('no_hp'),
	    'keperluan' => set_value('keperluan'),
	    'program_yang_diambil' => set_value('program_yang_diambil'),
	);
        $this->load->view('a_home/kedatangan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tanggal_kedatangan_jam' => $this->input->post('tanggal_kedatangan_jam',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir',TRUE),
		'kota_asal' => $this->input->post('kota_asal',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'keperluan' => $this->input->post('keperluan',TRUE),
		'program_yang_diambil' => $this->input->post('program_yang_diambil',TRUE),
	    );

            $this->A_home_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('a_home'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->A_home_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('a_home/update_action'),
		'no' => set_value('no', $row->no),
		'tanggal_kedatangan_jam' => set_value('tanggal_kedatangan_jam', $row->tanggal_kedatangan_jam),
		'nama' => set_value('nama', $row->nama),
		'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
		'pendidikan_terakhir' => set_value('pendidikan_terakhir', $row->pendidikan_terakhir),
		'kota_asal' => set_value('kota_asal', $row->kota_asal),
		'no_hp' => set_value('no_hp', $row->no_hp),
		'keperluan' => set_value('keperluan', $row->keperluan),
		'program_yang_diambil' => set_value('program_yang_diambil', $row->program_yang_diambil),
	    );
            $this->load->view('a_home/kedatangan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('a_home'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no', TRUE));
        } else {
            $data = array(
		'tanggal_kedatangan_jam' => $this->input->post('tanggal_kedatangan_jam',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir',TRUE),
		'kota_asal' => $this->input->post('kota_asal',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'keperluan' => $this->input->post('keperluan',TRUE),
		'program_yang_diambil' => $this->input->post('program_yang_diambil',TRUE),
	    );

            $this->A_home_model->update($this->input->post('no', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('a_home'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->A_home_model->get_by_id($id);

        if ($row) {
            $this->A_home_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('a_home'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('a_home'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tanggal_kedatangan_jam', 'tanggal kedatangan jam', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
	$this->form_validation->set_rules('pendidikan_terakhir', 'pendidikan terakhir', 'trim|required');
	$this->form_validation->set_rules('kota_asal', 'kota asal', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('keperluan', 'keperluan', 'trim|required');
	$this->form_validation->set_rules('program_yang_diambil', 'program yang diambil', 'trim|required');

	$this->form_validation->set_rules('no', 'no', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file A_home.php */
/* Location: ./application/controllers/A_home.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-03-20 06:35:43 */
/* http://harviacode.com */