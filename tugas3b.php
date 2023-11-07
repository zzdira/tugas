<?php

$variabel1 = "Hello";
$variabel2 = null;
$variabel3 = 0;
$variabel4 = "";
$variabel5 = false;
$variabel6 = array();

$jawabanIsset = "Isset adalah :<br><br>";
$jawabanIsset .= "Variabel 1: " . (isset($variabel1) ? "Ada nilai" : "Tidak ada nilai") . "<br>";
$jawabanIsset .= "Variabel 2: " . (isset($variabel2) ? "Ada nilai" : "Tidak ada nilai") . "<br>";

$jawabanEmpty = "Empty adalah :<br><br>";
$jawabanEmpty .= "Variabel 1: " . (empty($variabel1) ? "Kosong" : "Tidak kosong") . "<br>";
$jawabanEmpty .= "Variabel 3: " . (empty($variabel3) ? "Kosong" : "Tidak kosong") . "<br>";

function soal($style) {
    global $jawabanIsset, $jawabanEmpty;
    echo "<div style='$style'>$jawabanIsset </div>";
    echo "<div style='$style'>$jawabanEmpty </div>";
}

$style = "font-size: 16px; font-family: Arial;";
soal($style);

?>