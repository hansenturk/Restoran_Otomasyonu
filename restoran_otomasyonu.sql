-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Ağu 2021, 21:57:15
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hastane_otomasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` enum('0','1','','') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_tc`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_durum`) VALUES
(8, '12345678911', '123456', 'hazar bilek', '0'),
(9, '1212', '1212', 'deneme', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE `randevular` (
  `randevu_id` int(11) NOT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hastane` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `klinik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `doktor` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_hasta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `randevular`
--

INSERT INTO `randevular` (`randevu_id`, `sehir`, `tarih`, `hastane`, `klinik`, `doktor`, `randevu_hasta_id`) VALUES
(2, 'Ağrı', '2021-07-08', 'Bölge Eğitim Ve Araştırma Hastanesi', 'Dahiliye', 'Bekir Efe', 4),
(3, 'Ağrı', '2021-08-29', 'Bölge Eğitim Ve Araştırma Hastanesi', 'Kulak Burun Boğaz', 'Ali Efe', 8),
(4, 'Afyonkarahisar', '2021-08-07', 'Bölge Eğitim Ve Araştırma Hastanesi', 'Göz Hastalıkları', 'Ali Efe', 8),
(5, 'Afyonkarahisar', '2021-08-24', 'Acıbadem Hastanesi', 'Dahiliye', 'Hazar Bilek', 9);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `randevular`
--
ALTER TABLE `randevular`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `randevular`
--
ALTER TABLE `randevular`
  MODIFY `randevu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
