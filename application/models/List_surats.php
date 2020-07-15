<?php

class List_surats extends CI_Model
{

    function show_surats()
    {
        $hasil = $this->db->query("SELECT * FROM surat");
        return $hasil;
    }
}
