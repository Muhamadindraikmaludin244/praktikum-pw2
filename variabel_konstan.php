<?php
define ( constant_name:'PHI',value: 3.14);
const DBNAME = 'inventori';
const DBSERVER = 'localhost';

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo "luas lingkungan dengan jari $jari : $luas";
echo "</br>kelilingnya : $kll";

echo '</br>nama databasenya : ' . DBNAME;
echo '</br>lokasi databasenya ada di : ' . DBSERVER;