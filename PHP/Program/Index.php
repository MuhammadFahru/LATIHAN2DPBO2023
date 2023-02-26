<?php

include_once 'Mahasiswa.php';

$mhs1 = new Mahasiswa("3273201234567890", "Muhammad Fahru Rozi", "Laki-laki", "UPI", "muhammadfahru@upi.edu", "2108927", "Ilmu Komputer", "FPMIPA");
echo "<h2>Data Mahasiswa 1</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0' width='40%'>";
$mhs1->displayData();
echo "</table>";

$mhs2 = new Mahasiswa();
$mhs2->setNik("3273201234567893");
$mhs2->setNama("Chelsea Islan");
$mhs2->setGender("Perempuan");
$mhs2->setAsalUniversitas("ITB");
$mhs2->setEmailEdu("chelsea@itb.ac.id");
$mhs2->setNim("2108929");
$mhs2->setProdi("Matematika");
$mhs2->setFakultas("FMIPA");
echo "<h2>Data Mahasiswa 2</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0' width='40%'>";
$mhs2->displayData();
echo "</table>";
