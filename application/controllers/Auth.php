<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    // Fungsi Construct itu adalah fungsi yang pertama kali dipanggil
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    // Fungsi index, semacam index.php
    public function index()
    {
        if ($this->session->userdata('status') == 'logged') {
            redirect('admin');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            // Berada di /application/views/auth/
            $data['title'] = 'Arsip Surat | Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // Jika Validasi Sukses, akan diarahkan ke private function login
            $this->_login();
        }
    }

    // Private Function Login
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $username])->row_array();
        // Apabila Usernya ada
        if ($user) {
            // Jika Passwordnya BENAR
            if (password_verify($password, $user['password'])) {

                if ($user['level'] == 1) {
                    $data = [
                        'status' => 'logged',
                        'username' => $user['username'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } elseif ($user['level'] == 2) {
                    $data = [
                        'status' => 'logged_user',
                        'username' => $user['username'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                }

                // Jika Passwordnya SALAH
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('auth');
            }
        } else {
            // Apabila Usernya tidak ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar</div>');
            redirect('auth');
        }
    }

    // Page Register (Daftar)
    public function register()
    {
        if ($this->session->userdata('status') == 'logged') {
            redirect('admin');
        }

        $this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]', ['is_unique' => 'Username Telah digunakan!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Arsip Surat | Register';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                // htmlspecialchars menconvert spesial karakter, misalnya "spasi" menjadi "&nbsp", "&"  menjadi "&amp"
                'fullname' => htmlspecialchars($this->input->post('fullname', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                // Password default untuk menghash password secara default
                'level' => 1,
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda telah didaftarkan. Silahkan Login!</div>');
            redirect('auth');
        }
    }

    // Fungsi Logout
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Keluar!</div>');
        redirect('auth');
    }
}
