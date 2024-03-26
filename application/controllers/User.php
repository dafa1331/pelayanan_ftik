<?php

class User extends CI_Controller{
    public function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
    }

    public function index(){
        $data['result'] = $this->m_layanan->get_data_user();
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_user', $data);
        $this->load->view('template_datatable/footer');
    }

    public function insert_user(){
        $this->load->view('template_datatable/header');
        $this->load->view('template/sidebar');
        $this->load->view('f_user');
        $this->load->view('template_datatable/footer');
    }

    public function proses_insert(){
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
                'level' => 'prodi',
                'id_prodi' => 12,
            );

            $this->user_model->save_user($data);
            redirect('user');
        }
    }

    
}
?>