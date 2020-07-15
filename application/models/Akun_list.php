<?php

class Akun_list extends CI_Model
{

    function show_akun()
    {
        $hasil = $this->db->query("SELECT * FROM users");
        return $hasil;
    }

    function hapus_akun($id_user)
    {
        $hasil = $this->db->query("DELETE FROM users WHERE id_user='$id_user'");
        return $hasil;
    }

    function edit_akun($id_user, $username, $password, $fullname)
    {
        $hasil = $this->db->query("UPDATE users SET id_user='$id_user', username='$username', password='$password' WHERE id_user='$id_user'");
        return $hasil;
    }
}
