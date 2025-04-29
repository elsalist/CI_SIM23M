<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah_model extends CI_Model {
    
    // Mengambil semua data dosen
    public function get_all_matakuliah() {
        return $this->db->get('matakuliah')->result_array(); // Mengembalikan hasil sebagai array
    }
    
    // Menambahkan data dosen
    public function insert_matakuliah($data) {
        return $this->db->insert('matakuliah', $data);
    }
    
    // Menghapus data dosen berdasarkan ID
    public function delete_matakuliah($id) {
        return $this->db->delete('matakuliah', ['idmatakuliah' => $id]);
    }
    
    // Mengambil data dosen berdasarkan ID
    public function get_matakuliah_by_id($id) {
        return $this->db->get_where('matakuliah', ['idmatakuliah' => $id])->row_array();
    }
    
    // Memperbarui data dosen berdasarkan ID
    public function update_matakuliah($id, $data) {
        $this->db->where('idmatakuliah', $id);
        return $this->db->update('matakuliah', $data);
    }
}