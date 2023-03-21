<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="a.css">
    <title>Restoran Otomasyon</title>
</head>
<body>

<div class="adsoyad">
    <h4>Hoş Geldiniz Sayın <?php echo $kullanicicek['kullanici_adsoyad']; ?></h4>
</div>

<div class="orta_div" id="randevu_div">

<form action="islem.php" method="post">
    <input type="date" name="tarih">

    <select name="sehir" class="sehir">
        <option value="Şehir Seçin">Şehir Seçin</option>
        <option value="Adana">Adana</option>
        <option value="Adıyaman">Adıyaman</option>
        <option value="Afyonkarahisar">Afyonkarahisar</option>
        <option value="Ağrı">Ağrı</option>
        <option value="Amasya">Amasya</option>
        <option value="Ankara">Ankara</option>
        <option value="Antalya">Antalya</option>
        <option value="Artvin">Artvin</option>
        <option value="Aydın">Aydın</option>
        <option value="Balıkesir">Balıkesir</option>
        <option value="Bilecik">Bilecik</option>
        <option value="Bingöl">Bingöl</option>
        <option value="Bitlis">Bitlis</option>
        <option value="Bolu">Bolu</option>
        <option value="Burdur">Burdur</option>
        <option value="Bursa">Bursa</option>
        <option value="Çanakkale">Çanakkale</option>
        <option value="Çankırı">Çankırı</option>
        <option value="Çorum">Çorum</option>
        <option value="Denizli">Denizli</option>
        <option value="Diyarbakır">Diyarbakır</option>
        <option value="Edirne">Edirne</option>
        <option value="Elazığ">Elazığ</option>
        <option value="Erzincan">Erzincan</option>
        <option value="Erzurum">Erzurum</option>
        <option value="Eskişehir">Eskişehir</option>
        <option value="Gaziantep">Gaziantep</option>
        <option value="Giresun">Giresun</option>
        <option value="Gümüşhane">Gümüşhane</option>
        <option value="Hakkâri">Hakkâri</option>
        <option value="Hatay">Hatay</option>
        <option value="Isparta">Isparta</option>
        <option value="Mersin">Mersin</option>
        <option value="İstanbul">İstanbul</option>
        <option value="İzmir">İzmir</option>
        <option value="Kars">Kars</option>
        <option value="Kastamonu">Kastamonu</option>
        <option value="Kayseri">Kayseri</option>
        <option value="Kırklareli">Kırklareli</option>
        <option value="Kırşehir">Kırşehir</option>
        <option value="Kocaeli">Kocaeli</option>
        <option value="Konya">Konya</option>
        <option value="Kütahya">Kütahya</option>
        <option value="Malatya">Malatya</option>
        <option value="Manisa">Manisa</option>
        <option value="Kahramanmaraş">Kahramanmaraş</option>
        <option value="Mardin">Mardin</option>
        <option value="Muğla">Muğla</option>
        <option value="Muş">Muş</option>
        <option value="Nevşehir">Nevşehir</option>
        <option value="Niğde">Niğde</option>
        <option value="Ordu">Ordu</option>
        <option value="Rize">Rize</option>
        <option value="Sakarya">Sakarya</option>
        <option value="Samsun">Samsun</option>
        <option value="Siirt">Siirt</option>
        <option value="Sinop">Sinop</option>
        <option value="Sivas">Sivas</option>
        <option value="Tekirdağ">Tekirdağ</option>
        <option value="Tokat">Tokat</option>
        <option value="Trabzon">Trabzon</option>
        <option value="Tunceli">Tunceli</option>
        <option value="Şanlıurfa">Şanlıurfa</option>
        <option value="Uşak">Uşak</option>
        <option value="Van">Van</option>
        <option value="Yozgat">Yozgat</option>
        <option value="Zonguldak">Zonguldak</option>
        <option value="Aksaray">Aksaray</option>
        <option value="Bayburt">Bayburt</option>
        <option value="Karaman">Karaman</option>
        <option value="Kırıkkale">Kırıkkale</option>
        <option value="Batman">Batman</option>
        <option value="Şırnak">Şırnak</option>
        <option value="Bartın">Bartın</option>
        <option value="Ardahan">Ardahan</option>
        <option value="Iğdır">Iğdır</option>
        <option value="Yalova">Yalova</option>
        <option value="Karabük">Karabük</option>
        <option value="Kilis">Kilis</option>
        <option value="Osmaniye">Osmaniye</option>
        <option value="Düzce">Düzce</option>
    </select>

    <select name="kisi" class="kisi">
        <option value="Kişi Sayısı Seçin">Kişi Sayısı Seçin</option>
        <option value="1 Kişilik">1 Kişilik Masa</option>
        <option value="2 Kişilik">2 Kişilik Masa</option>
        <option value="3 Kişilik">3 Kişilik Masa</option>
        <option value="4 Kişilik">4 Kişilik Masa</option>
        <option value="5 Kişilik">5 Kişilik Masa</option>
        <option value="6 Kişilik">6 Kişilik Masa</option>
        <option value="7 Kişilik">7 Kişilik Masa</option>
        <option value="8 Kişilik">8 Kişilik Masa</option>
    </select>

    <select name="sef" class="sef">
        <option value="Şef Seçin">Şef Seçin</option>
        <option value="Gordon Ramsay">Gordon Ramsay</option>
        <option value="Thomas Keller">Thomas Keller</option>
        <option value="Marco Pierre White">Marco Pierre White</option>
        <option value="Elena Arzak">Elena Arzak</option>
        <option value=" Alain Ducasse"> Alain Ducasse</option>
        <option value="Jamie Oliver">Jamie Oliver</option>
        <option value="Wolfgang Puck">Wolfgang Puck</option>
        <option value="Julia Child">Julia Child</option>
    </select>


    <input type="time" name="saat">

    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">
    <button name="randevu_kaydet">Randevu Kaydet</button>

    </form>

</div>

<div class="resim"><img src="resim7.jpg" alt=""></div>
<div class="resimm"><img src="resim8.jpg" alt=""></div>


</body>
</html>