<?php

class NilaiModel
{

    private $table = 'tb_nilai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function index()
    {
        $query = "SELECT n.* ,u.nama, b.kelas
         FROM nilais n
         JOIN biodata_siswas b ON n.biodata_siswa_id = b.id 
         JOIN users u ON b.user_id = u.id 
         ORDER BY n.tanggal DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function cariNilai()
    {
        $cari = $_POST['cari'];

        $query = "SELECT n.* ,u.nama, b.kelas
                FROM nilais n
                JOIN biodata_siswas b ON n.biodata_siswa_id = b.id 
                JOIN users u ON b.user_id = u.id 
                WHERE u.nama LIKE :cari";
        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        return $this->db->resultSet();
    }

    public function cariNilai_kelas()
    {
        $cari = $_POST['cari'];
        $tanggal = $_POST['tanggal'];

        $query = "SELECT n.* ,u.nama, b.kelas
                FROM nilais n
                JOIN biodata_siswas b ON n.biodata_siswa_id = b.id 
                JOIN users u ON b.user_id = u.id 
                WHERE b.kelas LIKE :cari AND n.tanggal LIKE :tanggal";
        $this->db->query($query);
        $this->db->bind('cari', "%$cari%");
        $this->db->bind('tanggal', "%$tanggal%");
        return $this->db->resultSet();
    }

    public function cariTahun()
    {
        $tahun = $_POST['tahun'];
        $id = $_SESSION["id"];
        $query = "SELECT n.* ,u.nama, b.kelas
         FROM nilais n
         JOIN biodata_siswas b ON n.biodata_siswa_id = b.id 
         JOIN users u ON b.user_id = u.id 
         WHERE u.id= $id AND n.tanggal LIKE :tahun 
         ORDER BY n.tanggal DESC";
        $this->db->query($query);
        $this->db->bind('tahun', "%$tahun%");
        return $this->db->resultSet();
    }

    public function pdfSiswa($tahun)
    {
        $id = $_SESSION["id"];
        $query = "SELECT n.* ,u.nama, b.kelas
         FROM nilais n
         JOIN biodata_siswas b ON n.biodata_siswa_id = b.id 
         JOIN users u ON b.user_id = u.id 
         WHERE u.id= $id AND n.tanggal LIKE :tahun 
         ORDER BY n.tanggal DESC";
        $this->db->query($query);
        $this->db->bind('tahun', "%$tahun%");
        return $this->db->resultSet();
    }



    public function detail($id)
    {
        $query = "SELECT n.* ,u.nama,u.username,b.nik,b.tanggal_masuk, b.kelas
        FROM nilais n
        JOIN biodata_siswas b ON n.biodata_siswa_id = b.id 
        JOIN users u ON b.user_id = u.id 
        WHERE n.id = $id";
        $this->db->query($query);
        return $this->db->single();
    }

    public function getNilaisiswa()
    {
        $id = $_SESSION["id"];
        $query = "SELECT n.* ,u.nama, b.kelas
         FROM nilais n
         JOIN biodata_siswas b ON n.biodata_siswa_id = b.id 
         JOIN users u ON b.user_id = u.id 
         WHERE u.id= $id
         ORDER BY n.tanggal DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function update($data)
    {


        $query = "UPDATE nilais  
        SET
        bermain=:bermain,
        ikrar_bersama =:ikrar_bersama, 
        senam_irama =:senam_irama,
        bernyanyi =:bernyanyi, 
        berdoa = :berdoa, 
        pijakan_sebelum_bermain =:pijakan_sebelum_bermain,
        pijakan_setelah_bermain = :pijakan_setelah_bermain, 
        komentar = :komentar

        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('bermain', $data['bermain']);
        $this->db->bind('ikrar_bersama', $data['ikrar_bersama']);
        $this->db->bind('senam_irama', $data['senam_irama']);
        $this->db->bind('bernyanyi', $data['bernyanyi']);
        $this->db->bind('berdoa', $data['berdoa']);
        $this->db->bind('pijakan_sebelum_bermain', $data['pijakan_sebelum_bermain']);
        $this->db->bind('pijakan_setelah_bermain', $data['pijakan_setelah_bermain']);
        $this->db->bind('komentar', $data['komentar']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function insert($data)
    {
        $query = "INSERT INTO nilais (biodata_siswa_id,bermain,ikrar_bersama,senam_irama,bernyanyi,berdoa,pijakan_sebelum_bermain,pijakan_setelah_bermain,tanggal,komentar)
         VALUES(:biodata_siswa_id,:bermain,:ikrar_bersama,:senam_irama,:bernyanyi,:berdoa,:pijakan_sebelum_bermain,:pijakan_setelah_bermain,:tanggal,:komentar)";
        $this->db->query($query);
        $this->db->bind('biodata_siswa_id', $data['biodata_siswa_id']);
        $this->db->bind('bermain', $data['bermain']);
        $this->db->bind('ikrar_bersama', $data['ikrar_bersama']);
        $this->db->bind('senam_irama', $data['senam_irama']);
        $this->db->bind('bernyanyi', $data['bernyanyi']);
        $this->db->bind('berdoa', $data['berdoa']);
        $this->db->bind('pijakan_sebelum_bermain', $data['pijakan_sebelum_bermain']);
        $this->db->bind('pijakan_setelah_bermain', $data['pijakan_setelah_bermain']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('komentar', $data['komentar']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function delete($data)
    {
        $query = " DELETE FROM nilais WHERE id = $data";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
