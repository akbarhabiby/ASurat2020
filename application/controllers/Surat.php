<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('list_surats');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Arsip Surat | Surat';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['listsurats'] = $this->list_surats->show_surats();
        $this->load->view('templates/index_header', $data);
        $this->load->view('templates/index_sidebar', $data);
        $this->load->view('templates/index_topbar', $data);
        $this->load->view('surat/index', $data);
        $this->load->view('templates/index_footer');
    }

    public function tambah_surat()
    {
        $data['title'] = 'Arsip Surat | Tambah Surat';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->model('list_surat');
        $this->load->helper('form_helper');
        $datajs = array(
            'dd_jenissurat' => $this->list_surat->dd_jenissurat(),
            'jenissurat_selected' => $this->input->post('jenis_surat') ? $this->input->post('jenis_surat') : '',
            'dd_user' => $this->list_surat->dd_user(),
            'user_selected' => $this->input->post('fullname') ? $this->input->post('fullname') : '',
        );
        // Validasi
        $this->form_validation->set_rules('tgl_masuk', 'Tgl_masuk', 'required');
        $this->form_validation->set_rules('kode_surat', 'Kode_surat', 'required');
        $this->form_validation->set_rules('tgl_surat', 'Tgl_surat', 'required');
        $this->form_validation->set_rules('pengirim', 'Pengirim', 'required');
        $this->form_validation->set_rules('kepada', 'Kepada', 'required');
        $this->form_validation->set_rules('id_jenissurat', 'Id_jenissurat', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('id_user', 'Id_user', 'required');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Arsip Surat | Tambah Surat';
            $this->load->view('templates/index_header', $data);
            $this->load->view('templates/index_sidebar', $data);
            $this->load->view('templates/index_topbar', $data);
            $this->load->view('surat/tambah_surat', $datajs);
            $this->load->view('templates/index_footer');
        } else {
            $data = [
                'tgl_masuk' => ($this->input->post('tgl_masuk', true)),
                'kode_surat' => ($this->input->post('kode_surat', true)),
                'tgl_surat' => ($this->input->post('tgl_surat', true)),
                'pengirim' => ($this->input->post('pengirim', true)),
                'kepada' => ($this->input->post('kepada', true)),
                'id_jenissurat' => ($this->input->post('id_jenissurat', true)),
                'subject' => ($this->input->post('subject', true)),
                'keterangan' => ($this->input->post('keterangan', true)),
                'id_user' => ($this->input->post('id_user', true)),
            ];

            $this->db->insert('surat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Surat Berhasil di Input</div>');
            redirect('surat');
        }
    }
}
