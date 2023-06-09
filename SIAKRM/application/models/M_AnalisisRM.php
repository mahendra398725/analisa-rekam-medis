<?php

class M_AnalisisRM extends CI_Model
{
    public function tampil_rm()
    {
        return $this->db->get('tb_rekam_medis')->result();
    }

    public function import_data($datarm)
    {
        $jumlah = count($datarm);
        if ($jumlah > 0) {
            $this->db->replace('tb_rekam_medis', $datarm);
        }
    }

    public function ambil_kode()
    {
        $this->db->select('RIGHT(tb_rekam_medis.no_rm,6) as no_rm', FALSE);
        $this->db->order_by('no_rm', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_rekam_medis');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->no_rm) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 6, "0", STR_PAD_LEFT);
        $kodetampil = $batas;
        return $kodetampil;
    }

    function simpan($data)
    {
        return $this->db->insert('tb_analisis', $data);
    }
	
	function simpan1($data)
    {
        return $this->db->insert('tb_rekam_medis', $data);
    }

    function lengkap(){
        $this->db->where("status_kelengkapan =","lengkap");
        return $this->db->count_all_results("tb_analisis");
    }

    function tidak_lengkap(){
        $this->db->where("status_kelengkapan =","tidak_lengkap");
        return $this->db->count_all_results("tb_analisis");
    }

    function poli1(){
        $this->db->where("poli_id =", "1");
        return $this->db->count_all_results("tb_analisis");
    }

    function poli2(){
        $this->db->where("poli_id =", "2");
        return $this->db->count_all_results("tb_analisis");
    }

    function poli3(){
        $this->db->where("poli_id =", "3");
        return $this->db->count_all_results("tb_analisis");
    }

    function poli4(){
        $this->db->where("poli_id =", "4");
        return $this->db->count_all_results("tb_analisis");
    }

    public function total($tot){
        $query = $this->db->query("SELECT COUNT($tot) as Jumlah FROM tb_rekam_medis WHERE $tot<>'' ");
        return $query->row();
    }
}
