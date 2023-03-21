<?php 
ob_start();
session_start();
include 'baglan.php';




if(isset($_POST['kullanicikaydet'])) {
    $kullanici_club = isset($_POST['kullanici_club']) ? $_POST['kullanici_club'] : null;
    $kullanici_adsoyad = isset($_POST['kullanici_adsoyad']) ? $_POST['kullanici_adsoyad'] : null;
    $kullanici_password = isset($_POST['kullanici_password']) ? $_POST['kullanici_password'] : null;

    
    $sorgu = $db->prepare('INSERT INTO kullanici SET
        kullanici_club = ?,
        kullanici_adsoyad = ?,
        kullanici_password = ?');

        $ekle = $sorgu->execute([
            $kullanici_club, $kullanici_adsoyad, $kullanici_password
        ]);
        if($ekle) {
            header('location: index.php?durum=basarili');
        } else{
           $hata = $sorgu->errorInfo();
           echo 'mysql hatası' .$hata[2];
        }
}






if(isset($_POST['giris_yap'])) {
    $kullanici_club = $_POST['kullanici_club'];
    $kullanici_password = $_POST['kullanici_password'];

    $kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_club=:kullanici_club and 
    kullanici_password=:kullanici_password");
    $kullanicisor->execute([
        'kullanici_club' => $kullanici_club,
        'kullanici_password' => $kullanici_password
    ]);

    $say = $kullanicisor->rowCount();

    if ($say==1) {
        $_SESSION['userkullanici_club']=$kullanici_club;
        header('location: anasayfa.php?durum=girisbasarili');
        exit;
    } else{
        header('location: index.php?durum=basarisizgiriş');
        exit;
    }
}





if(isset($_POST['randevu_kaydet'])) {
    $sehir = isset($_POST['sehir']) ? $_POST['sehir'] : null;
    $kisi = isset($_POST['kisi']) ? $_POST['kisi'] : null;
    $saat = isset($_POST['saat']) ? $_POST['saat'] : null;
    $tarih = isset($_POST['tarih']) ? $_POST['tarih'] : null;
    $sef = isset($_POST['sef']) ? $_POST['sef'] : null;
    $uye_id = isset($_POST['kullanici_id']) ? $_POST['kullanici_id'] : null;

    $kaydet=$db->prepare("INSERT INTO randevular SET
        sehir = ?,
        kisi = ?,
        saat = ?,
        tarih = ?,
        sef = ?,
        randevu_uye_id = ?
    ");





    $insert=$kaydet->execute([
        $sehir, $kisi, $saat, $tarih, $sef, $uye_id
    ]);
    if($insert) {
        header("location:anasayfa.php?kayıt_basarili");
    } else{
        header("location:anasayfa.php?kayıt_basarisiz");
    }

}


?>