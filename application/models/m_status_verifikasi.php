<?php

class M_status_verifikasi extends CI_Model
{

    public function get_all_status_verifikasi()
    {
        $hasil = $this->db->query("SELECT * FROM status_verifikasi");
        return $hasil;
    }

    public function update_id_status_verifikasi($id_user, $status_verifikasi, $pesan) {
        // Lakukan operasi update data ke database
        $data = array(
            'id_status_verifikasi' => $status_verifikasi,
        );

        $this->db->where('id_user_detail', $id_user);
        $result = $this->db->update('user_detail', $data);

        return $result;
    }

    /*public function update_status_verifikasi_user($status_verifikasi, $id_user)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user_detail SET id_status_verifikasi='$status_verifikasi' WHERE id_user_detail='$id_user'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }*/

    public function update_status_verifikasi_perusahaan($status_verifikasi, $id_perusahaan_details)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE perusahaan_detail SET id_status_verifikasi='$status_verifikasi' WHERE id_perusahaan_detail='$id_perusahaan_details'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

}

