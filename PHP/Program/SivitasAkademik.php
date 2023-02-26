<?php

include_once 'Human.php';

class SivitasAkademik extends Human
{
    private $asal_universitas;
    private $email_edu;

    public function __construct($nik = "", $nama = "", $gender = "", $asal_universitas = "", $email_edu = "")
    {
        parent::__construct($nik, $nama, $gender);
        $this->asal_universitas = $asal_universitas;
        $this->email_edu = $email_edu;
    }

    public function setAsalUniversitas($asal_universitas)
    {
        $this->asal_universitas = $asal_universitas;
    }

    public function getAsalUniversitas()
    {
        return $this->asal_universitas;
    }

    public function setEmailEdu($email_edu)
    {
        $this->email_edu = $email_edu;
    }

    public function getEmailEdu()
    {
        return $this->email_edu;
    }

    public function displayData()
    {
        parent::displayData();
        echo "<tr><td>Asal Universitas : " . $this->getAsalUniversitas() . "</td></tr>";
        echo "<tr><td>Email Edu : " . $this->getEmailEdu() . "</td></tr>";
    }
}
