<?php

class Human
{
    private $nik;
    private $nama;
    private $gender;

    public function __construct($nik = "", $nama = "", $gender = "")
    {
        $this->nik = $nik;
        $this->nama = $nama;
        $this->gender = $gender;
    }

    public function setNik($nik)
    {
        $this->nik = $nik;
    }

    public function getNik()
    {
        return $this->nik;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function displayData()
    {
        echo "<tr><td>NIK : " . $this->getNik() . "</td></tr>";
        echo "<tr><td>Nama : " . $this->getNama() . "</td></tr>";
        echo "<tr><td>Jenis Kelamin : " . $this->getGender() . "</td></tr>";
    }
}
