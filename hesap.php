<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Otomasyon</title>
</head>
<body>

    <div class="img"><img src="resim6.jpg" alt=""></div>

    <div class="hesabim_content">
        <div clas="label">
            <label>ADI SOYADI</label>
            <input type="text" placeholder="<?php echo $kullanicicek['kullanici_adsoyad']; ?>">
        </div> <br>
        <div clas="label">
            <label>Club No</label>
            <input type="text" placeholder="<?php echo $kullanicicek['kullanici_club']; ?>">
        </div> <br>
    </div>



</body>
</html>