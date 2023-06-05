<?php

class M_users extends CI_Model
{
    function tampil_role()
    {
        return $this->db->get('tb_roles')->result();
    }

    function tampil_user()
    {
        return $this->db->from('tb_users')
            ->join('tb_roles', 'tb_roles.id_role=tb_users.roles')
            ->get()
            ->result(); 
    }

    public function ambil_kode()
    {
        $this->db->select('RIGHT(tb_users.kd_user,5) as kd_user', FALSE);
        $this->db->order_by('kd_user', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_users');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kd_user) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "USR" . $batas;
        return $kodetampil;
    }

    function simpan($data)
    {
        return $this->db->insert('tb_users', $data);
    }

    public function delete($id, $avatar)
    {
        // query delete
        return $this->db->delete("tb_users", $id_users);
    }
}
