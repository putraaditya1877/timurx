<?php  
ob_start();
//error_reporting(0);

//cek apakah ada session id jka tidak ada jalankan session start

if (!session_id()) {

    session_start();

}

require_once './app/init.php';



$app = new App();