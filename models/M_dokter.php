<?php

class M_dokter extends CI_Model
{
    public function tampil_poli()
    {
        return $this->db->get('tb_poli')->result();
    }

    public function tampil_dokter()
    {
        return $this->db->from('tb_dokter')
            ->join('tb_poli', 'tb_poli.id_poli=tb_dokter.poli_id')
            ->get()
            ->result();
    }

    public function ambil_kode()
    {
        $this->db->select('RIGHT(tb_dokter.kd_dokter,4) as kd_dokter', FALSE);
        $this->db->order_by('kd_dokter', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_dokter');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kd_dokter) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "DR" . $batas;
        return $kodetampil;
    }

    public function simpan($data)
    {
        return $this->db->insert('tb_dokter', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_dokter', $data['id_dokter']);
        $this->db->delete("tb_dokter", $data);
    }
    
    function edit($data)
    {
        $this->db->where('id_dokter', $data['id_dokter']);
        $this->db->update("tb_dokter", $data);
    }
}
