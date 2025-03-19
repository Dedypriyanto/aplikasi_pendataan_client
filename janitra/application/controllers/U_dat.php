<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class U_dat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('U_dat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'u_dat/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'u_dat/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'u_dat/index.html';
            $config['first_url'] = base_url() . 'u_dat/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->U_dat_model->total_rows($q);
        $u_dat = $this->U_dat_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'u_dat_data' => $u_dat,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('u_dat/kedatangan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->U_dat_model->get_by_id($id);
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
            $this->load->view('u_dat/kedatangan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('u_dat'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('u_dat/create_action'),
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
        $this->load->view('u_dat/kedatangan_form', $data);
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

            $this->U_dat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('u_dat'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->U_dat_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('u_dat/update_action'),
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
            $this->load->view('u_dat/kedatangan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('u_dat'));
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

            $this->U_dat_model->update($this->input->post('no', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('u_dat'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->U_dat_model->get_by_id($id);

        if ($row) {
            $this->U_dat_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('u_dat'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('u_dat'));
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

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "DataClient.xls";
        $judul = "DataClient";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Kedatangan Jam");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Pendidikan Terakhir");
	xlsWriteLabel($tablehead, $kolomhead++, "Kota Asal");
	xlsWriteLabel($tablehead, $kolomhead++, "No Hp");
	xlsWriteLabel($tablehead, $kolomhead++, "Keperluan");
	xlsWriteLabel($tablehead, $kolomhead++, "Program Yang Diambil");

	foreach ($this->U_dat_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_kedatangan_jam);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pendidikan_terakhir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kota_asal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_hp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keperluan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->program_yang_diambil);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
}

/* End of file U_dat.php */
/* Location: ./application/controllers/U_dat.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-03-28 07:37:35 */
/* http://harviacode.com */