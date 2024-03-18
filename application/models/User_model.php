<?php
class User_model extends CI_Model {
    // ...
    public function __construct() {
        parent::__construct();
    }

    // public function check_login($username, $password) {
    //     // Implementasi logika otentikasi
    //     $query = $this->db->get_where('tb_user', array('username' => $username, 'password' => password_hash(($password),PASSWORD_BCRYPT)));

    //     if ($query->num_rows() == 1) {
    //         return $query->row();
    //     } else {
    //         return false;
    //     }
    // }

    public function check_login($username, $password) {
        $user = $this->db->get_where('tb_user', array('username' => $username))->row();

        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }

        return false;
    }

    public function save_user($data) {
        return $this->db->insert('tb_user', $data);
    }

    public function get_user($username) {
        $query = $this->db->get_where('tb_user', array('username' => $username));
        return $query->row_array();
    }

    public function logout() {
        // Implementasi logika logout
        // Misalnya, unset session
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('bagian');
        
    }
}
?>
