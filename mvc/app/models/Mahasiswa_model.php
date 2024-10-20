<?php

class Mahasiswa_model
{
    /*
    private $mhs = [
        [
            "nama" => "Dimas H",
            "nrp" => "223040020",
            "email" => "dimas@mail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Ahmad",
            "nrp" => "223040021",
            "email" => "ahmad@mail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Asep",
            "nrp" => "223040022",
            "email" => "asep@mail.com",
            "jurusan" => "Teknik Informatika"
        ]
    ];
    */

    private $dbh, $stmt;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
