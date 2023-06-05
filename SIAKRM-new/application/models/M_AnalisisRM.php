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
        $kodetampil = "`" . $batas;
        return $kodetampil;
    }

    function simpan($data)
    {
        return $this->db->insert('tb_analisis', $data);
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
    
    // function rekam1(){
    //     $this->db->select("nama")->count("*");
    //     return $this->db->count_all_results("tb_rekam_medis");
    // }

    // function rekam2(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("no_rm");
    // }

    // function rekam3(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("no_bpjs");
    // }

    // function rekam4(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("no_ktp");
    // }

    // function rekam5(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("JK");
    // }

    // function rekam6(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("tanggal_lahir");
    // }

    // function rekam7(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("umur");
    // }

    // function rekam8(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("alamat");
    // }

    // function rekam9(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("pekerjaan");
    // }

    // function rekam10(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("keluhan");
    // }

    // function rekam11(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("terapi");
    // }

    // function rekam12(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("tensi");
    // }

    // function rekam13(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("nadi");
    // }

    // function rekam14(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("suhu");
    // }

    // function rekam15(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("pernapasan");
    // }

    // function rekam16(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("tinggi");
    // }

    // function rekam17(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("berat");
    // }

    // function rekam18(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("lingkar_perut");
    // }

    // function rekam19(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("id_diagnosa");
    // }

    // function rekam20(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("diagnosa");
    // }

    // function rekam21(){
    //     $this->db->select("*");
    //     return $this->db->count_all_results("tindakan");
    // }
}
