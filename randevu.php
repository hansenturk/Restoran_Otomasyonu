<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Otomasyon</title>
</head>
<body>

<div class="rez">



<table table border="1" cellpadding="10">
    <tr>
        <th>Şehir</th>
        <th>Tarih</th>
        <th>Saat</th>
        <th>Kişi Sayısı</th>
        <th>Şef Seçimi</th>
    </tr>

    <?php 
    $randevu_sor = $db->prepare("SELECT * FROM randevular
    INNER JOIN kullanici ON randevular.randevu_uye_id = kullanici.kullanici_id WHERE kullanici_club=:kullanici_club");
    $randevu_sor->execute([
        'kullanici_club' => $_SESSION['userkullanici_club']
    ]);
    while ($randevu_cek = $randevu_sor->fetch(PDO::FETCH_ASSOC)) { ?>

    <tr>
        <td><?php echo $randevu_cek['sehir']; ?></td>
        <td><?php echo $randevu_cek['tarih']; ?></td>
        <td><?php echo $randevu_cek['saat']; ?></td>
        <td><?php echo $randevu_cek['kisi']; ?></td>
        <td><?php echo $randevu_cek['sef']; ?></td>
    </tr>
    <?php } ?>

    </table>

</div>

<div class="resimmm"><img src="resim4.jpg" alt=""></div>
    
</body>
</html>