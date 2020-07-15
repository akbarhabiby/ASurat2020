<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_surat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('list_surat');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Arsip Surat | Jenis Surat';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $data['listjenissurat'] = $this->list_surat->show_surat();

        $this->load->view('templates/index_header', $data);
        $this->load->view('templates/index_sidebar', $data);
        $this->load->view('templates/index_topbar', $data);
        $this->load->view('jenis_surat/index', $data);
        $this->load->view('templates/index_footer');
    }

    public function tambah_jenissurat()
    {
        $data['title'] = 'Arsip Surat | Tambah Jenis Surat';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();


        $this->form_validation->set_rules('jenis_surat', 'Jenis_surat', 'required');

        $this->load->view('templates/index_header', $data);
        $this->load->view('templates/index_sidebar', $data);
        $this->load->view('templates/index_topbar', $data);
        $this->load->view('jenis_surat/tambah_jenissurat', $data);
        $this->load->view('templates/index_footer');

        // Tambah Surat
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Arsip Surat | Tambah Jenis Surat';
            $this->load->view('templates/index_header', $data);
            $this->load->view('templates/index_sidebar', $data);
            $this->load->view('templates/index_topbar', $data);
            $this->load->view('jenis_surat/tambah_jenissurat', $data);
            $this->load->view('templates/index_footer');
        } else {
            $data = [
                'jenis_surat' => ($this->input->post('jenis_surat', true)),
            ];

            $this->db->insert('jenis_surat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jenis Surat Berhasil ditambahkan!</div>');
            redirect('jenis_surat/index');
        }
    }
    public function hapus_jenissurat()
    {
        $this->load->view('templates/index_header');
        $id_jenissurat = $this->input->post('id_jenissurat');
        $this->list_surat->hapus_jenissurat($id_jenissurat);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jenis Surat Berhasil dihapus!</div>');
        redirect('jenis_surat');
    }
}
