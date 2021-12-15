<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    // Halaman Awal
    public function index()
    {
        $data['judul'] = "Artificial Intelligence";
        $this->load->view('template/header', $data);
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }

    public function register()
    {
        $data['judul'] = "Register Peserta";
        $this->load->view('template/header', $data);
        $this->load->view('home/register');
        $this->load->view('template/footer');
    }

    public function tambah_peserta()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('sekolah', 'Asal Sekolah', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required');
        $this->form_validation->set_rules('ide', 'Ide Lomba', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[peserta.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if (empty($_FILES['foto']['name'])) {
            $this->form_validation->set_rules('foto', 'Foto', 'required');
        }

        if ($this->form_validation->run() == FALSE) {
            // INVALID
            $data['judul'] = "Register Peserta";
            $this->load->view('template/header', $data);
            $this->load->view('home/register');
            $this->load->view('template/footer');
        } else {
            // VALID
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                // GAGAL UPLOAD
                if (is_writable('./assets/img/')) {
                    echo "yes";
                }
                echo $this->upload->display_errors();
                die;
            } else {
                // BERHASIL UPLOAD
                $name = $this->upload->data('file_name');
                $this->Home_model->tambahPeserta($name);
            }
            $this->session->set_flashdata('daftar', 'Daftar Berhasil! Silakan Login.');
            redirect(base_url('home/login'));
        }
    }

    public function login()
    {
        $data['judul'] = "Login Peserta";
        $this->load->view('template/header', $data);
        $this->load->view('home/login');
        $this->load->view('template/footer');
    }

    public function login_peserta()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Login Peserta";
            $this->load->view('template/header', $data);
            $this->load->view('home/login');
            $this->load->view('template/footer');
        } else {
            $user = $this->Home_model->loginPeserta();
            if (empty($user)) {
                $this->session->set_flashdata('login-gagal', 'Email atau Password Salah!');
                redirect(base_url("home/login"));
            } else {
                $this->session->set_userdata('email', $user['email']);
                redirect(base_url("home/peserta"));
            }
        }
    }

    // Halaman Peserta
    public function peserta()
    {
        $data['judul'] = "Daftar Peserta";
        $data['peserta'] = $this->Home_model->getAllPeserta();
        if (isset($_SESSION['email'])) {
            $data['login'] = $this->Home_model->getPesertaByEmail($_SESSION['email']);
        }
        $this->load->view('template/header', $data);
        $this->load->view('home/peserta', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['judul'] = "Edit Peserta";
        $data['peserta'] = $this->Home_model->getPesertaById($id);
        $this->load->view('template/header', $data);
        $this->load->view('home/edit', $data);
        $this->load->view('template/footer');
    }

    public function edit_peserta($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('sekolah', 'Asal Sekolah', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required');
        $this->form_validation->set_rules('ide', 'Ide Lomba', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            // INVALID
            $data['judul'] = "Edit Peserta";
            $data['peserta'] = $this->Home_model->getPesertaById($id);
            $this->load->view('template/header', $data);
            $this->load->view('home/edit', $data);
            $this->load->view('template/footer');
        } else {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                // GAGAL UPLOAD
                if ($this->upload->display_errors() == "<p>You did not select a file to upload.</p>") {
                    $this->Home_model->ubahDataPesertaTanpaFoto();
                }
            } else {
                // BERHASIL UPLOAD
                $name = $this->upload->data('file_name');
                $this->Home_model->ubahDataPeserta($name);
            }
            redirect(base_url("home/peserta"));
        }
    }

    public function delete()
    {
        $this->Home_model->deletePeserta();
        $this->logout();
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        redirect(base_url());
    }
}
