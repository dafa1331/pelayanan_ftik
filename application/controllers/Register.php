<?php
class Register extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('register');
    }

    public function proses_register() {
        $this->form_validation->set_rules('nama_user', 'nama_user', 'required');
        $this->form_validation->set_rules('username', 'username', 'required|is_unique[tb_user.username]');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('confirm_password', 'confirm_password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            // Form validation failed
            $this->load->view('register');
        } else {
            // Form validation passed
            $data = array(
                'nama_user' => $this->input->post('nama_user'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'bagian' => $this->input->post('bagian'),
                'level' => 'pegawai',
                'id_prodi' => 12,
            );

            $this->user_model->save_user($data);
            redirect('auth');
        }
    }
}
?>