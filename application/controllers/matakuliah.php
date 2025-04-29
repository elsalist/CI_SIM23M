<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('matakuliah_model');
    }

    public function index() {
        $data['matakuliah'] = $this->matakuliah_model->get_all_matakuliah();
        $this->load->view('templates/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->view('templates/header');
        $this->load->view('matakuliah/form_matakuliah');
        $this->load->view('templates/footer');
    }

    public function insert() {
        $data = array(
            'idmatakuliah' => $this->input->post('idmatakuliah'),
            'namamatakuliah' => $this->input->post('namamatakuliah'),
            'namadosen' => $this->input->post('namadosen'),
            'sks' => $this->input->post('sks')

        );

        if ($this->matakuliah_model->insert_matakuliah($data)) {
            $this->session->set_flashdata('success', 'Mata Kuliah berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan Mata Kuliah');
        }
        redirect('matakuliah');
    }

    public function edit($id) {
        $data['matakuliah'] = $this->matakuliah_model->get_matakuliah_by_id($id);
        $this->load->view('templates/header');
        $this->load->view('matakuliah/edit_matakuliah', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data = array(
            'idmatakuliah' => $this->input->post('idmatakuliah'),
            'namamatakuliah' => $this->input->post('namamatakuliah'),
            'namadosen' => $this->input->post('namadosen'),
            'sks' => $this->input->post('sks')
        );

        if ($this->matakuliah_model->update_matakuliah($id, $data)) {
            $this->session->set_flashdata('success', 'Mata Kuliah berhasil diperbarui');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui data Mata Kuliah');
        }
        redirect('matakuliah');
    }

    public function hapus($id) {
        if ($this->matakuliah_model->delete_matakuliah($id)) {
            $this->session->set_flashdata('success', 'Mata Kuliah berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus Mata Kuliah');
        }
        redirect('matakuliah');
    }
}
