<?php

class M_poli extends CI_Model
{
    function tampil_poli()
    {
        return $this->db->from('tb_poli')
            ->get()
            ->result();
    }

    public function ambil_kode()
    {
        $this->db->select('RIGHT(tb_poli.kd_poli,4) as kd_poli', FALSE);
        $this->db->order_by('kd_poli', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_poli');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kd_poli) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "PL" . $batas;
        return $kodetampil;
    }

    function simpan($data)
    {
        return $this->db->insert('tb_poli', $data);
    }
}
