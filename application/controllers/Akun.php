<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('akun_list');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Arsip Surat | Akun';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['totalakun'] = $this->db->get('users')->num_rows();
        $list['listakun'] = $this->akun_list->show_akun();

        $this->load->view('templates/index_header', $data);
        $this->load->view('templates/index_sidebar', $data);
        $this->load->view('templates/index_topbar', $data);
        $this->load->view('akun/index', $list);
        $this->load->view('templates/index_footer');
    }

    function hapus_akun()
    {
        $id_user = $this->input->post('id_user');
        $this->akun_list->hapus_akun($id_user);
        redirect('akun');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil dihapus!</div>');
        redirect('akun');
    }

    function edit()
    {
        $data['title'] = 'Arsip Surat | Edit Akun';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
        $this->form_validation->set_rules('level', 'Level', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/index_header', $data);
            $this->load->view('templates/index_sidebar', $data);
            $this->load->view('templates/index_topbar', $data);
            $this->load->view('akun/edit', $data);
            $this->load->view('templates/index_footer');
        } else {
            $username = $this->input->post('username');
            $fullname = $this->input->post('fullname');
            $level = $this->input->post('level');

            $this->db->set('fullname', $fullname);
            $this->db->set('level', $level);
            $this->db->where('username', $username);
            $this->db->update('users');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil Berhasil diubah!</div>');
            redirect('akun');
        }
    }
}
