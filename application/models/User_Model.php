<?php
defined('BASEPATH') OR die('No direct script access allowed');

class User_Model extends CI_Model
{
    public function count_all(){
        return $this->db->count_all('users');
        
    }

    public function count_divisi(){
        return $this->db->count_all('divisi');
    }

    public function count_by_level($level){
        $this->db->where('level', $level);
        return $this->db->count_all_results('users');
    }

    public function find_by($field, $value, $return = FALSE)
    {
        $this->db->where($field, $value);
        $data = $this->db->get('users');
        if ($return) {
            return $data->row();
        }
        return $data;
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->update('users', $data);
        return $result;
    }
}

