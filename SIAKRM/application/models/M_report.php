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

    public function byDate($dateFirst,$dateLast)
    {
         return $this->db->from('tb_analisis')
            ->join('tb_rekam_medis', 'tb_rekam_medis.id_rm=tb_analisis.rm_id')
            ->join('tb_poli', 'tb_poli.id_poli=tb_analisis.poli_id')
            ->join('tb_dokter', 'tb_dokter.id_dokter=tb_analisis.dokter_id')
            ->where("substr(tb_analisis.tanggal,1,10)>='$dateFirst'")
            ->where("substr(tb_analisis.tanggal,1,10)<='$dateLast'")
            ->get()
            ->result();
    }
}