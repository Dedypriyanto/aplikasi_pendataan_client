<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Client extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Client_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'client/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'client/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'client/index.html';
            $config['first_url'] = base_url() . 'client/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Client_model->total_rows($q);
        $client = $this->Client_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'client_data' => $client,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('client/client_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Client_model->get_by_id($id);
        if ($row) {
            $data = array(
		'No' => $row->No,
		'Kedatangan' => $row->Kedatangan,
		'Nama' => $row->Nama,
		'Lahir' => $row->Lahir,
		'Pendidikan' => $row->Pendidikan,
		'Kota' => $row->Kota,
		'No_Hp' => $row->No_Hp,
		'Keperluan' => $row->Keperluan,
		'Program' => $row->Program,
		'Status' => $row->Status,
	    );
            $this->load->view('client/client_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('client'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('client/create_action'),
	    'No' => set_value('No'),
	    'Kedatangan' => set_value('Kedatangan'),
	    'Nama' => set_value('Nama'),
	    'Lahir' => set_value('Lahir'),
	    'Pendidikan' => set_value('Pendidikan'),
	    'Kota' => set_value('Kota'),
	    'No_Hp' => set_value('No_Hp'),
	    'Keperluan' => set_value('Keperluan'),
	    'Program' => set_value('Program'),
	    'Status' => set_value('Status'),
	);
        $this->load->view('client/client_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'No' => $this->input->post('No',TRUE),
		'Kedatangan' => $this->input->post('Kedatangan',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Lahir' => $this->input->post('Lahir',TRUE),
		'Pendidikan' => $this->input->post('Pendidikan',TRUE),
		'Kota' => $this->input->post('Kota',TRUE),
		'No_Hp' => $this->input->post('No_Hp',TRUE),
		'Keperluan' => $this->input->post('Keperluan',TRUE),
		'Program' => $this->input->post('Program',TRUE),
		'Status' => $this->input->post('Status',TRUE),
	    );

            $this->Client_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('client'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Client_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('client/update_action'),
		'No' => set_value('No', $row->No),
		'Kedatangan' => set_value('Kedatangan', $row->Kedatangan),
		'Nama' => set_value('Nama', $row->Nama),
		'Lahir' => set_value('Lahir', $row->Lahir),
		'Pendidikan' => set_value('Pendidikan', $row->Pendidikan),
		'Kota' => set_value('Kota', $row->Kota),
		'No_Hp' => set_value('No_Hp', $row->No_Hp),
		'Keperluan' => set_value('Keperluan', $row->Keperluan),
		'Program' => set_value('Program', $row->Program),
		'Status' => set_value('Status', $row->Status),
	    );
            $this->load->view('client/client_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('client'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('', TRUE));
        } else {
            $data = array(
		'No' => $this->input->post('No',TRUE),
		'Kedatangan' => $this->input->post('Kedatangan',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Lahir' => $this->input->post('Lahir',TRUE),
		'Pendidikan' => $this->input->post('Pendidikan',TRUE),
		'Kota' => $this->input->post('Kota',TRUE),
		'No_Hp' => $this->input->post('No_Hp',TRUE),
		'Keperluan' => $this->input->post('Keperluan',TRUE),
		'Program' => $this->input->post('Program',TRUE),
		'Status' => $this->input->post('Status',TRUE),
	    );

            $this->Client_model->update($this->input->post('', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('client'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Client_model->get_by_id($id);

        if ($row) {
            $this->Client_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('client'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('client'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('No', 'no', 'trim|required');
	$this->form_validation->set_rules('Kedatangan', 'kedatangan', 'trim|required');
	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('Lahir', 'lahir', 'trim|required');
	$this->form_validation->set_rules('Pendidikan', 'pendidikan', 'trim|required');
	$this->form_validation->set_rules('Kota', 'kota', 'trim|required');
	$this->form_validation->set_rules('No_Hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('Keperluan', 'keperluan', 'trim|required');
	$this->form_validation->set_rules('Program', 'program', 'trim|required');
	$this->form_validation->set_rules('Status', 'status', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "client.xls";
        $judul = "client";
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
	xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Kedatangan");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Pendidikan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kota");
	xlsWriteLabel($tablehead, $kolomhead++, "No Hp");
	xlsWriteLabel($tablehead, $kolomhead++, "Keperluan");
	xlsWriteLabel($tablehead, $kolomhead++, "Program");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Client_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->No);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Kedatangan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Pendidikan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Kota);
	    xlsWriteLabel($tablebody, $kolombody++, $data->No_Hp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Keperluan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Program);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=client.doc");

        $data = array(
            'client_data' => $this->Client_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('client/client_doc',$data);
    }

}

/* End of file Client.php */
/* Location: ./application/controllers/Client.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-11-05 05:04:03 */
/* http://harviacode.com */