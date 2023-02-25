<?php

include_once 'SivitasAkademik.php';

class Mahasiswa extends SivitasAkademik
{
    private $nim;
    private $prodi;
    private $fakultas;

    public function __construct($nik, $nama, $gender, $asal_universitas, $email_edu, $nim, $prodi, $fakultas)
    {
        parent::__construct($nik, $nama, $gender, $asal_universitas, $email_edu);
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->fakultas = $fakultas;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->prodi;
    }

    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function setFakultas($fakultas)
    {
        $this->fakultas = $fakultas;
    }

    public function getFakultas()
    {
        return $this->fakultas;
    }

    public function displayData()
    {
        parent::displayData();
        echo "<tr><td>NIM : " . $this->getNim() . "</td></tr>";
        echo "<tr><td>Program Studi : " . $this->getProdi() . "</td></tr>";
        echo "<tr><td>Fakultas : " . $this->getFakultas() . "</td></tr>";
    }
}
