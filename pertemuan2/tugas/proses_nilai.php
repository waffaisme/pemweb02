<?php

$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$status = ($uts + $uas + $tugas) / 3;

echo '<br>Nama : ' . $nama;
echo '<br>Mata Kuliah : ' . $matkul;
echo '<br>UTS : ' . $uts;
echo '<br>UAS : ' . $uas;
echo '<br>Tugas : ' . $tugas;
echo "<br>Rata-rata Nilai : " . round(($uts + $uas + $tugas) / 3);
echo("<br>");
if ($status>=85)
echo("Tingkat : <b>A</b>");
elseif ($status>=70)
echo("Tingkat : <b>B</b>");
elseif ($status>=56)
echo("Tingkat : <b>C</b>");
elseif ($status>=36)
echo("Tingkat : <b>D</b>");
elseif ($status>=0)
echo("Tingkat : <b>E</b>");
?>