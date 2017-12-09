<?php
// Persiapan mau ML nya
define('ML_BARENG','/'); // baseurl
define('ML_DB_HOST','localhost'); // server mysql
define('ML_DB_USER','my.user.db'); // user mysql
define('ML_DB_PASS','my.pass.db'); // password sql
define('ML_DB_NAME','my.name.db'); // nama sql nya
// pastikan kamu sudah restore file database.sql di database kamu
define('ML_KONDOM',selfHost()); // abaikan
define('ML_URL', ML_KONDOM.ML_BARENG); // biarkan
define('ML_CO','co_wo'); // table untuk url
define('ML_CE','ce_we'); // tabel untuk referal
define('ML_OT','ow_rang'); // tabel untuk dom yg di blokir
define('ML_TITLE','Ayyo.ML'); // judul url

define('ML_KAMERA',true); // statistik true=ya false=tidak
?>
