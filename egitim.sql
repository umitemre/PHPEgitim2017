-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 19 Mar 2017, 14:11:15
-- Sunucu sürümü: 5.7.17-0ubuntu0.16.04.1
-- PHP Sürümü: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `egitim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(128) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `ad_soyad`, `eposta`, `mesaj`) VALUES
(1, 'Emre Aydin', 'emreaydin149@gmail.com', 'Selam!'),
(2, 'Aziz Talha Durgun', 'aziz@azizim.com', 'Aziz ben selam! :D'),
(3, 'Emre Aydin', 'emreaydin149@gmail.com', 'Selam!'),
(4, 'Aziz Talha Durgun', 'aziz@azizim.com', 'Aziz ben selam! :D'),
(5, 'Emre Aydin', 'emreaydin149@gmail.com', 'Selam!'),
(6, 'Aziz Talha Durgun', 'aziz@azizim.com', 'Aziz ben selam! :D'),
(7, 'Emre Aydin', 'emreaydin149@gmail.com', 'Selam!'),
(8, 'Aziz Talha Durgun', 'aziz@azizim.com', 'Aziz ben selam! :D');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `username` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `username`, `password`, `email`) VALUES
(1, 'umitemre', '12345678', 'emreaydin149@gmail.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
