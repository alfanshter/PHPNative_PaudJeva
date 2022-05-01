<?php

class KeuanganModel
{

    private $table = 'tb_keuangan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // SELECT * FROM keuangan_siswas WHERE YEAR(tanggal) = 2022 AND MONTH(tanggal) = 4
    public function index()
    {
        $query = "SELECT  k.* , monthname(k.tanggal) as bulan ,u.nama
         FROM keuangan_siswas k 
         JOIN biodata_siswas b ON k.biodata_siswa_id = b.id 
         JOIN users u ON b.user_id = u.id 
         ORDER BY k.tanggal DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function cariSiswa()
    {
        $cari = $_POST['cari'];
        
        $query = "SELECT  k.* , monthname(k.tanggal) as bulan ,u.nama
         FROM keuangan_siswas k 
         JOIN biodata_siswas b ON k.biodata_siswa_id = b.id 
         JOIN users u ON b.user_id = u.id 
         WHERE u.nama LIKE :cari
         ORDER BY k.tanggal DESC";
    
        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        return $this->db->resultSet();
    }

    public function cariBulan()
    {
        $kelas = $_POST['kelas'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        
        $query = "SELECT  k.* , monthname(k.tanggal) as bulan ,u.nama
         FROM keuangan_siswas k 
         JOIN biodata_siswas b ON k.biodata_siswa_id = b.id 
         JOIN users u ON b.user_id = u.id 
         WHERE k.kelas LIKE :kelas AND  monthname(k.tanggal) LIKE :bulan AND year(k.tanggal) LIKE :tahun
         ORDER BY k.tanggal DESC";
    
        $this->db->query($query);
        $this->db->bind('kelas', "%$kelas%");
        $this->db->bind('bulan', "%$bulan%");
        $this->db->bind('tahun', "%$tahun%");
        return $this->db->resultSet();
    }

    public function sumbiaya()
    {
        $kelas = $_POST['kelas'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        
        $query = "SELECT  sum(biaya) as total
         FROM keuangan_siswas 
         WHERE kelas LIKE :kelas AND  monthname(tanggal) LIKE :bulan AND year(tanggal) LIKE :tahun";
    
        $this->db->query($query);
        $this->db->bind('kelas', "%$kelas%");
        $this->db->bind('bulan', "%$bulan%");
        $this->db->bind('tahun', "%$tahun%");
        return $this->db->single();
        
    }



    public function getKeuanganDetail($id_keuangan)
    {
        $query = "SELECT * FROM tb_keuangan WHERE id_keuangan = $id_keuangan";
        $this->db->query($query);
        return $this->db->single();
    }


    public function getUangSiswa()
    {
        $id = $_SESSION["id"];
        $query = "SELECT  k.* , monthname(k.tanggal) as bulan ,u.nama
        FROM keuangan_siswas k 
        JOIN biodata_siswas b ON k.biodata_siswa_id = b.id 
        JOIN users u ON b.user_id = u.id 
        where u.id = $id
        ORDER BY k.tanggal DESC";
       $this->db->query($query);
        return $this->db->resultSet();
    }

    public function insert($data)
    {
        $query = "INSERT INTO keuangan_siswas (biodata_siswa_id,kelas,periode,jenis_surat,biaya,status,tanggal)
         VALUES(:biodata_siswa_id,:kelas,:periode,:jenis_surat,:biaya,:status,:tanggal)";
        $this->db->query($query);
        $this->db->bind('biodata_siswa_id', $data['biodata_siswa_id']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('periode', $data['periode']);
        $this->db->bind('jenis_surat', $data['jenis_surat']);
        $this->db->bind('biaya', $data['biaya']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE keuangan_siswas  
        SET
        kelas = :kelas, 
        periode =:periode,
        jenis_surat = :jenis_surat, 
        biaya =:biaya, 
        status =:status,
        tanggal =:tanggal
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('periode', $data['periode']);
        $this->db->bind('jenis_surat', $data['jenis_surat']);
        $this->db->bind('biaya', $data['biaya']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($data)
    {
        $query = "DELETE FROM keuangan_siswas WHERE id = $data";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}