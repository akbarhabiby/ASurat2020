<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Arsip Surat | Dashboard';
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        $data['totalakun'] = $this->db->get('users')->num_rows();
        $data['totalsurat'] = $this->db->get('surat')->num_rows();
        $data['totaldisposisi'] = $this->db->get('disposisi')->num_rows();
        $data['totaljenissurat'] = $this->db->get('jenis_surat')->num_rows();

        $this->load->view('templates/index_header', $data);
        $this->load->view('templates/index_sidebar', $data);
        $this->load->view('templates/index_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/index_footer');
    }
}
