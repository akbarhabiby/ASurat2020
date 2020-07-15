<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Disposisi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('m_disposisi');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Arsip Surat | Disposisi';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['surat'] = $this->db->get_where('surat', ['id_surat'])->row_array();

        $data['listdisposisi'] = $this->m_disposisi->show_disposisi();

        $this->load->view('templates/index_header', $data);
        $this->load->view('templates/index_sidebar', $data);
        $this->load->view('templates/index_topbar', $data);
        $this->load->view('disposisi/index', $data);
        $this->load->view('templates/index_footer');
    }

    public function tambah_disposisi()
    {
        $data['title'] = 'Arsip Surat | Tambah Disposisi';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->model('m_disposisi');
        $this->load->helper('form_helper');

        // Validasi
        $this->form_validation->set_rules('penerima_disposisi', 'Penerima_disposisi', 'required');
        $this->form_validation->set_rules('tglsurat_balasan', 'Tglsurat_balasan', 'required');
        $this->form_validation->set_rules('uraian', 'Uraian', 'required');
        $this->form_validation->set_rules('id_surat', 'Id_surat', 'required');
        $this->form_validation->set_rules('id_user', 'Id_user', 'required');

        if ($this->form_validation->run() == false) {
            $datasu = array(
                'dd_surat' => $this->m_disposisi->dd_surat(),
                'surat_selected' => $this->input->post('id_surat') ? $this->input->post('id_surat') : '',
                'dd_user' => $this->m_disposisi->dd_user(),
                'user_selected' => $this->input->post('id_user') ? $this->input->post('id_user') : '',
            );
            $data['title'] = 'Arsip Surat | Tambah Disposisi';
            $this->load->view('templates/index_header', $data);
            $this->load->view('templates/index_sidebar', $data);
            $this->load->view('templates/index_topbar', $data);
            $this->load->view('disposisi/tambah_disposisi', $datasu);
            $this->load->view('templates/index_footer');
        } else {
            $data = [
                'penerima_disposisi' => ($this->input->post('penerima_disposisi', true)),
                'tglsurat_balasan' => ($this->input->post('tglsurat_balasan', true)),
                'uraian' => ($this->input->post('uraian', true)),
                'id_surat' => ($this->input->post('id_surat', true)),
                'id_user' => ($this->input->post('id_user', true)),
            ];

            $this->db->insert('disposisi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Disposisi Berhasil di Input</div>');
            redirect('disposisi');
        }
    }
    public function hapus_disposisi()
    {
        $this->load->view('templates/index_header');
        $id_disposisi = $this->input->post('id_disposisi');
        $this->m_disposisi->hapus_disposisi($id_disposisi);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jenis Surat Berhasil dihapus!</div>');
        redirect('jenis_surat');
    }
}
