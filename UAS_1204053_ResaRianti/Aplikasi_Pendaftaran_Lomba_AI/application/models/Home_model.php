<?php

class Home_model extends CI_Model
{
    public function tambahPeserta($name)
    {
        $data = [
            "nama" => $this->input->post("nama", true),
            "jenis_kelamin" => $this->input->post("jenkel", true),
            "asal_sekolah" => $this->input->post("sekolah", true),
            "nohp" => $this->input->post("nohp", true),
            "alamat" => $this->input->post("alamat", true),
            "ide" => $this->input->post("ide", true),
            "email" => $this->input->post("email", true),
            "password" => $this->input->post("password", true),
            "foto" => $name
        ];

        $this->db->insert('peserta', $data);
    }

    public function loginPeserta()
    {
        $email = $this->input->post('email', true);
        $pass = $this->input->post('password', true);

        return $this->db->get_where('peserta', ['email' => $email, 'password' => $pass])->row_array();
    }

    public function getAllPeserta()
    {
        return $this->db->get('peserta')->result_array();
    }

    public function getPesertaByEmail($email)
    {
        return $this->db->get_where('peserta', ['email' => $email])->row_array();
    }

    public function getPesertaById($id)
    {
        return $this->db->get_where('peserta', ['id' => $id])->row_array();
    }

    public function ubahDataPeserta($name)
    {
        $data = array(
            "nama" => $this->input->post("nama", true),
            "jenis_kelamin" => $this->input->post("jenkel", true),
            "asal_sekolah" => $this->input->post("sekolah", true),
            "nohp" => $this->input->post("nohp", true),
            "alamat" => $this->input->post("alamat", true),
            "ide" => $this->input->post("ide", true),
            "password" => $this->input->post("password", true),
            "foto" => $name
        );

        $this->db->update('peserta', $data, ['email' => $this->input->post("email", true)]);
    }

    public function ubahDataPesertaTanpaFoto()
    {
        $data = array(
            "nama" => $this->input->post("nama", true),
            "jenis_kelamin" => $this->input->post("jenkel", true),
            "asal_sekolah" => $this->input->post("sekolah", true),
            "nohp" => $this->input->post("nohp", true),
            "alamat" => $this->input->post("alamat", true),
            "ide" => $this->input->post("ide", true),
            "password" => $this->input->post("password", true)
        );

        $email = $this->input->post("email", true);

        $this->db->where('email', $email);
        $this->db->update('peserta', $data);
    }

    public function deletePeserta()
    {
        $this->db->where('id', $this->input->post('id', true));
        $this->db->delete('peserta');
    }
}
