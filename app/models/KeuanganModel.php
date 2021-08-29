<?php

class KeuanganModel
{

    private $table = 'tb_keuangan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKeuangan()
    {
        $query = "SELECT * FROM tb_keuangan k JOIN tb_siswa s ON k.nik_keuangan = s.nik ORDER BY k.tanggal_bayar DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }


    public function getKeuanganDetail($id_keuangan)
    {
        $query = "SELECT * FROM tb_keuangan WHERE id_keuangan = $id_keuangan";
        $this->db->query($query);
        return $this->db->single();
    }

    public function tambahKeuangan($data)
    {
        $query = "INSERT INTO tb_keuangan (nik_keuangan,periode,jenis_tagihan,nominal,status_bayar,tanggal_bayar)
         VALUES(:nik_keuangan,:periode,:jenis_tagihan,:nominal,:status_bayar,:tanggal_bayar)";
        $this->db->query($query);
        $this->db->bind('nik_keuangan', $data['nik_keuangan']);
        $this->db->bind('periode', $data['periode']);
        $this->db->bind('jenis_tagihan', $data['jenis_tagihan']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->bind('status_bayar', $data['status_bayar']);
        $this->db->bind('tanggal_bayar', $data['tanggal_bayar']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateKeuangan($data)
    {
        $query = "UPDATE tb_keuangan  
        SET
            periode = :periode, 
            jenis_tagihan =:jenis_tagihan,
            nominal = :nominal, 
            status_bayar =:status_bayar, 
            tanggal_bayar =:tanggal_bayar
        WHERE id_keuangan = :id_keuangan";

        $this->db->query($query);
        $this->db->bind('periode', $data['periode']);
        $this->db->bind('jenis_tagihan', $data['jenis_tagihan']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->bind('status_bayar', $data['status_bayar']);
        $this->db->bind('tanggal_bayar', $data['tanggal_bayar']);
        $this->db->bind('id_keuangan', $data['id_keuangan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusKeuangan($data)
    {
        $query = "DELETE FROM tb_keuangan WHERE id_keuangan = $data";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
