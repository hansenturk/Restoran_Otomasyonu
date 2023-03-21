<?php

ob_start();
session_start();
include 'baglan.php';

$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_club=:kullanici_club");
$kullanicisor->execute([
    'kullanici_club' => $_SESSION['userkullanici_club']
]);
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if ($say==0) {
    header("location:index.php?durum=izinsiz");
    exit;
}



?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="arka.css">
    <title>Restoran Otomasyon</title>
</head>
<body>

<div class="ust_bar">

    <a href="anasayfa.php"><h1>OSTERIA FRANCESCANA <hr /></h1></a>
    
    <div class="menu">
    
        <a href="hesap.php" id="bir"><h5>Üyelik Bilgileri</h5></a>
        <a href="randevu.php" id="iki"><h5>Rezarvasyon Bilgileri</h5></a>
    </div>
    
</div>

<a href="logout.php"><div class="cikis">
    Çıkış Yap
</div></a>
    
</body>
</html>