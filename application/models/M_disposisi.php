<?php

class M_Disposisi extends CI_Model
{

    function show_disposisi()
    {
        $hasil = $this->db->query("SELECT * FROM disposisi");
        return $hasil;
    }

    function hapus_jenissurat($id_jenissurat)
    {
        $hasil = $this->db->query("DELETE FROM jenis_surat WHERE id_jenissurat='$id_jenissurat'");
        return $hasil;
    }

    function dd_surat()
    {
        // ambil data dari db
        $this->db->order_by('id_surat', 'asc');
        $result = $this->db->get('surat');
        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dd[''] = 'Please Select';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->id_surat] = $row->id_surat;
            }
        }
        return $dd;
    }

    function dd_user()
    {
        // ambil data dari db
        $this->db->order_by('fullname', 'asc');
        $result = $this->db->get('users');
        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dd[''] = 'Please Select';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->id_user] = $row->fullname;
            }
        }
        return $dd;
    }

    function hapus_disposisi($id_disposisi)
    {
        $hasil = $this->db->query("DELETE FROM disposisi WHERE id_disposisi='$id_disposisi'");
        return $hasil;
    }
}
