<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model {

    public function validation($username, $password) {
        $query = $this->db->get_where('akun', ['username' => $username]);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            password_verify($password, $result['password']) ? $valid = true : $valid = false;

            return $valid;
        } else return false;
    }

    public function set_remember_me($id_akun, $selector, $validator) {
        $data = [
            'selector' => $selector,
            'hashedValidator' => hash('sha256', $validator),
            'id_akun' => $id_akun,
            'expires' => date('Y-m-d H:i:s', time() + 2588400),
        ];

        return $this->db->insert('remember_me', $data);
    }
}
