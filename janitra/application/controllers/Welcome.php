<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	function ceklogin(){
		if(isset($_POST['login'])){
			$user = $this->input->post('user',true);
			$pass = $this->input->post('pass',true);
			$cek = $this->Login_model->proseslogin($user, $pass);
			$hasil = count((array)$cek);
			if($hasil > 0){
				$yglogin = $this->db->get_where('users',array('username'=>$user, 'password' => $pass))->row();
				$data = array('udhmasuk' => true,
						'nama' => $yglogin->nama, 'email' => $yglogin->email, 'username' => $yglogin->username);
				$this->session->set_userdata($data);
				if($yglogin->level == 'admin'){
					redirect('a_home');
				}elseif($yglogin->level =='member'){
				redirect('u_home');
				}
			}else{
				redirect('');
			}
		}
	}
	function a_home(){
		$data["title"] = "Halaman Admin";
		$this->load->view('a_home', $data);
	}
	function u_home(){
		$data["title"] = "Halaman User";
		$this->load->view('u_home', $data);
	}
	function keluar(){
		$this->session->sess_destroy();
		redirect('http://pendaftaran.dedypriyanto.my.id');
	}
}
