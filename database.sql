-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Inang: 10.123.0.209:3307
-- Waktu pembuatan: 07 Des 2017 pada 09.17
-- Versi Server: 5.7.15
-- Versi PHP: 5.4.45-0+deb7u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `ayyo.ml`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ow_rang`
--

CREATE TABLE IF NOT EXISTS `ow_rang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `ow_rang`
--

INSERT INTO `ow_rang` (`id`, `dom`) VALUES
(1, 'bit.ly'),
(2, 't.co'),
(3, 't.me'),
(4, 'fb.me'),
(5, 'goo.gl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ce_we`
--

CREATE TABLE IF NOT EXISTS `ce_we` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `urlid` int(12) NOT NULL,
  `ref` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `co_wo`
--

CREATE TABLE IF NOT EXISTS `co_wo` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `vi` int(8) NOT NULL DEFAULT '0',
  `pr` int(8) NOT NULL DEFAULT '0',
  `bl` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `co_wo`
--

INSERT INTO `co_wo` (`id`, `url`, `vi`, `pr`, `bl`) VALUES
(2, 'https://github.com/duniaweb/Ayyo.ml', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
