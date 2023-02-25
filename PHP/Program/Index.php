<?php

include_once 'Mahasiswa.php';

$m = new Mahasiswa("3273201234567890", "Muhammad Fahru Rozi", "Laki-laki", "UPI", "muhammadfahru@upi.edu", "2108927", "Ilmu Komputer", "FPMIPA");
echo "<h2>Data Mahasiswa 1</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0' width='40%'>";
$m->displayData();
echo "</table>";

$m->setNik("3273201234567893");
$m->setNama("Chelsea Islan");
$m->setGender("Perempuan");
$m->setAsalUniversitas("ITB");
$m->setEmailEdu("chelsea@itb.ac.id");
$m->setNim("2108929");
$m->setProdi("Matematika");
$m->setFakultas("FMIPA");
echo "<h2>Data Mahasiswa 2</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0' width='40%'>";
$m->displayData();
echo "</table>";
