<?php 

class M_report extends CI_Model {

	public function tampil_analisis()
    {
        return $this->db->from('tb_analisis')
        	->join('tb_rekam_medis', 'tb_rekam_medis.id_rm=tb_analisis.rm_id')
        	->join('tb_poli', 'tb_poli.id_poli=tb_analisis.poli_id')
        	->join('tb_dokter', 'tb_dokter.id_dokter=tb_analisis.dokter_id')
        	->get()
            ->result();
    }

    public function gettahun()
    {
    	$query = $this->db->query("select YEAR(tanggal) as tahun from tb_analisis group by YEAR(tanggal) asc");
        return $query->result();
    }

    public function bytanggal($tanggalawal,$tanggalakhir)
    {
    	$query = $this->db->query("SELECT * FROM tb_analisis WHERE tanggal BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal ASC");
        return $query->result();
    }

    public function bybulan($tahun1,$bulanawal,$bulanakhir)
    {
    	$query = $this->db->query("SELECT * FROM tb_analisis WHERE YEAR(tanggal) = '$tahun1' and MONTH(tanggal) BETWEEN '$bulanawal' AND '$bulanakhir' ORDER BY tanggal ASC");
        return $query->result();
    }

    public function bytahun($tahun1,$bulanawal,$bulanakhir)
    {
    	$query = $this->db->query("SELECT * FROM tb_analisis WHERE YEAR(tanggal) = '$tahun1' ORDER BY tanggal ASC");
    	return $query->result();
    }
}