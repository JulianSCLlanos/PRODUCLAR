﻿-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2019 a las 07:31:43
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_mundo`
--

CREATE TABLE `t_mundo` (
  `id` int(11) NOT NULL,
  `id_continente` int(11) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_mundo`
--

INSERT INTO `t_mundo` (`id`, `id_continente`, `pais`) VALUES
(1, 1, 'LETICIA'),
(2, 1, 'EL ENCANTO'),
(3, 1, 'LA CHORRERA'),
(4, 1, 'LA PEDRERA'),
(5, 1, 'LA VICTORIA'),
(6, 1, 'MIRITI-PARANA'),
(7, 1, 'PUERTO ALEGRIA'),
(8, 1, 'PUERTO ARICA'),
(9, 1, ' PUERTO NARIÑO'),
(10, 1, 'SANTANDER'),
(11, 1, 'TARAPACA'),
(12, 2, 'ABEJORRAL'),
(13, 2, 'ABRIAQUI'),
(14, 2, 'ALEJANDRIA'),
(15, 2, 'AMAGA'),
(16, 2, 'AMALFI'),
(17, 2, 'ANDES'),
(18, 2, 'ANGELOPOLIS'),
(19, 2, 'ANGOSTURA'),
(20, 2, 'ANORI'),
(21, 2, 'ANZA'),
(22, 2, 'APARTADO'),
(23, 2, 'ARBOLETES'),
(24, 2, 'ARGELIA'),
(25, 2, 'ARMENIA'),
(26, 2, 'BARBOSA'),
(27, 2, 'BELLO'),
(28, 2, 'BELMIRA'),
(29, 2, 'BETANIA'),
(30, 2, 'BETULIA'),
(31, 2, 'BRICENO'),
(32, 2, 'BURITICA'),
(33, 2, 'CACERES'),
(34, 2, 'CAICEDO'),
(35, 2, 'CALDAS'),
(36, 2, 'CAMPAMENTO'),
(37, 2, 'CANASGORDAS'),
(38, 2, 'CARACOLI'),
(39, 2, 'CARAMANTA'),
(40, 2, 'CAREPA'),
(41, 2, 'CARMEN DE VIBORAL'),
(42, 2, 'CAROLINA'),
(43, 2, 'CAUCASIA'),
(44, 2, 'CHIGORODO'),
(45, 2, 'CISNEROS'),
(46, 2, 'CIUDAD BOLIVAR'),
(47, 2, 'COCORNA'),
(48, 2, 'CONCEPCION'),
(49, 2, 'CONCORDIA'),
(50, 2, 'COPACABANA'),
(51, 2, 'DABEIBA'),
(52, 2, 'DON MATIAS'),
(53, 2, 'EBEJICO'),
(54, 2, 'EL BAGRE'),
(55, 2, 'ENTRERRIOS'),
(56, 2, 'ENVIGADO'),
(57, 2, 'FREDONIA'),
(58, 2, 'FRONTINO'),
(59, 2, 'GIRALDO'),
(60, 2, 'GIRARDOTA'),
(61, 2, 'GOMEZ PLATA'),
(62, 2, 'GRANADA'),
(63, 2, 'GUADALUPE'),
(64, 2, 'GUARNE'),
(65, 2, 'GUATAPE'),
(66, 2, 'HELICONIA'),
(67, 2, 'HISPANIA'),
(68, 2, 'ITAGUI'),
(69, 2, 'ITUANGO'),
(70, 2, 'JARDIN'),
(71, 2, 'JERICO'),
(72, 2, 'LA CEJA'),
(73, 2, 'LA ESTRELLA'),
(74, 2, 'LA PINTADA'),
(75, 2, 'LA UNION'),
(76, 2, 'LIBORINA'),
(77, 2, 'MACEO'),
(78, 2, 'MARINILLA'),
(79, 2, 'MEDELLIN'),
(80, 2, 'MONTEBELLO'),
(81, 2, 'MURINDO'),
(82, 2, 'MUTATA'),
(83, 2, 'NARINO'),
(84, 2, 'NECHI'),
(85, 2, 'NECOCLI'),
(86, 2, 'OLAYA'),
(87, 2, 'PENOL'),
(88, 2, 'PEQUE'),
(89, 2, 'PUEBLORRICO'),
(90, 2, 'PUERTO BERRIO'),
(91, 2, 'PUERTO NARE'),
(92, 2, 'PUERTO TRIUNFO'),
(93, 2, 'REMEDIOS'),
(94, 2, 'RETIRO'),
(95, 2, 'RIONEGRO'),
(96, 2, 'SABANALARGA'),
(97, 2, 'SABANETA'),
(98, 2, 'SALGAR'),
(99, 2, 'SAN ANDRES'),
(100, 2, 'SAN CARLOS'),
(101, 2, 'SAN FRANCISCO'),
(102, 2, 'SAN JERONIMO'),
(103, 2, 'SAN JOSE DE LA MONTAÑA'),
(104, 2, 'SAN JUAN DE URABA'),
(105, 2, 'SAN LUIS'),
(106, 2, 'SAN PEDRO'),
(107, 2, 'SAN PEDRO DE URABA'),
(108, 2, 'SAN RAFAEL'),
(109, 2, 'SAN ROQUE'),
(110, 2, 'SAN VICENTE'),
(111, 2, 'SANTA BARBARA'),
(112, 2, 'SANTA FE DE ANTIOQUIA'),
(113, 2, 'SANTA ROSA DE OSOS'),
(114, 2, 'SANTO DOMINGO'),
(115, 2, 'SANTUARIO'),
(116, 2, 'SEGOVIA'),
(117, 2, 'SONSON'),
(118, 2, 'SOPETRAN'),
(119, 2, 'TAMESIS'),
(120, 2, 'TARAZA'),
(121, 2, 'TARSO'),
(122, 2, 'TITIRIBI'),
(123, 2, 'TOLEDO'),
(124, 2, 'TURBO'),
(125, 2, 'URAMITA'),
(126, 2, 'URRAO'),
(127, 2, 'VALDIVIA'),
(128, 2, 'VALPARAISO'),
(129, 2, 'VEGACHI'),
(130, 2, 'VENECIA'),
(131, 2, 'VIGIA DEL FUERTE'),
(132, 2, 'YALI'),
(133, 2, 'YARUMAL'),
(134, 2, 'YOLOMBO'),
(135, 2, 'YONDO'),
(136, 2, 'ZARAGOZA'),
(137, 3, 'ARAUCA'),
(138, 3, 'ARAUQUITA'),
(139, 3, 'CRAVO NORTE'),
(140, 3, 'FORTUL'),
(141, 3, 'PUERTO RONDON'),
(142, 3, 'SARAVENA'),
(143, 3, 'TAME'),
(144, 4, 'BARANOA'),
(145, 4, 'BARRANQUILLA'),
(146, 4, 'CAMPO DE LA CRUZ'),
(147, 4, 'CANDELARIA'),
(148, 4, 'GALAPA'),
(149, 4, 'JUAN DE ACOSTA'),
(150, 4, 'LURUACO'),
(151, 4, 'MALAMBO'),
(152, 4, 'MANATI'),
(153, 4, 'PALMAR DE VARELA'),
(154, 4, 'PIOJO'),
(155, 4, 'POLONUEVO'),
(156, 4, 'PONEDERA'),
(157, 4, 'PUERTO COLOMBIA'),
(158, 4, 'REPELON'),
(159, 4, 'SABANAGRANDE'),
(160, 4, 'SABANALARGA'),
(161, 4, 'SANTA LUCIA'),
(162, 4, 'SANTO TOMAS'),
(163, 4, 'SOLEDAD'),
(164, 4, 'SUAN'),
(165, 4, 'TUBARA'),
(166, 4, 'USIACURI'),
(167, 5, 'ACHI'),
(168, 5, 'ALTOS DEL ROSARIO'),
(169, 5, 'ARENAL'),
(170, 5, 'ARJONA'),
(171, 5, 'ARROYOHONDO'),
(172, 5, 'BARRANCO DE LOBA'),
(173, 5, 'CALAMAR'),
(174, 5, 'CANTAGALLO'),
(175, 5, 'CARTAGENA DE INDIAS'),
(176, 5, 'CICUCO'),
(177, 5, 'CLEMENCIA'),
(178, 5, 'CORDOBA'),
(179, 5, 'EL CARMEN DE BOLIVAR'),
(180, 5, 'EL GUAMO'),
(181, 5, 'EL PENON'),
(182, 5, 'HATILLO DE LOBA'),
(183, 5, 'MAGANGUE'),
(184, 5, 'MAHATES'),
(185, 5, 'MARGARITA'),
(186, 5, 'MARIA LA BAJA'),
(187, 5, 'MOMPOS'),
(188, 5, 'MONTECRISTO'),
(189, 5, 'MORALES'),
(190, 5, 'PINILLOS'),
(191, 5, 'REGIDOR'),
(192, 5, 'RIOVIEJO'),
(193, 5, 'SAN CRISTOBAL'),
(194, 5, 'SAN ESTANISLAO'),
(195, 5, 'SAN FERNANDO'),
(196, 5, 'SAN JACINTO'),
(197, 5, 'SAN JACINTO DEL CAUCA'),
(198, 5, 'SAN JUAN NEPOMUCENO'),
(199, 5, 'SAN MARTIN DE LOBA'),
(200, 5, 'SAN PABLO'),
(201, 5, 'SANTA CATALINA'),
(202, 5, 'SANTA ROSA'),
(203, 5, 'SANTA ROSA DEL SUR'),
(204, 5, 'SIMITI'),
(205, 5, 'SOPLAVIENTO'),
(206, 5, 'TALAIGUA NUEVO'),
(207, 5, 'TIQUISIO'),
(208, 5, 'TURBACO'),
(209, 5, 'TURBANA'),
(210, 5, 'VILLANUEVA'),
(211, 5, 'ZAMBRANO'),
(212, 6, 'ALMEIDA'),
(213, 6, 'AQUITANIA'),
(214, 6, 'ARCABUCO'),
(215, 6, 'BELEN'),
(216, 6, 'BERBEO'),
(217, 6, 'BETEITIVA'),
(218, 6, 'BOAVITA'),
(219, 6, 'BOYACA'),
(220, 6, 'BRICENO'),
(221, 6, 'BUENAVISTA'),
(222, 6, 'BUSBANZA'),
(223, 6, 'CALDAS'),
(224, 6, 'CAMPOHERMOSO'),
(225, 6, 'CERINZA'),
(226, 6, 'CHINAVITA'),
(227, 6, 'CHIQUINQUIRA'),
(228, 6, 'CHIQUIZA'),
(229, 6, 'CHISCAS'),
(230, 6, 'CHITA'),
(231, 6, 'CHITARAQUE'),
(232, 6, 'CHIVATA'),
(233, 6, 'CHIVOR'),
(234, 6, 'CIENEGA'),
(235, 6, 'COMBITA'),
(236, 6, 'COPER'),
(237, 6, 'CORRALES'),
(238, 6, 'COVARACHIA'),
(239, 6, 'CUBARA'),
(240, 6, 'CUCAITA'),
(241, 6, 'CUITIVA'),
(242, 6, 'DUITAMA'),
(243, 6, 'EL COCUY'),
(244, 6, 'EL ESPINO'),
(245, 6, 'FIRAVITOBA'),
(246, 6, 'FLORESTA'),
(247, 6, 'GACHANTIVA'),
(248, 6, 'GAMEZA'),
(249, 6, 'GARAGOA'),
(250, 6, 'GUACAMAYAS'),
(251, 6, 'GUATEQUE'),
(252, 6, 'GUAYATA'),
(253, 6, 'GUICAN'),
(254, 6, 'IZA'),
(255, 6, 'JENESANO'),
(256, 6, 'JERICO'),
(257, 6, 'LA CAPILLA'),
(258, 6, 'LA UVITA'),
(259, 6, 'LA VICTORIA'),
(260, 6, 'LABRANZAGRANDE'),
(261, 6, 'MACANAL'),
(262, 6, 'MARIPI'),
(263, 6, 'MIRAFLORES'),
(264, 6, 'MONGUA'),
(265, 6, 'MONGUI'),
(266, 6, 'MONIQUIRA'),
(267, 6, 'MOTAVITA'),
(268, 6, 'MUZO'),
(269, 6, 'NOBSA'),
(270, 6, 'NUEVO COLON'),
(271, 6, 'OICATA'),
(272, 6, 'OTANCHE'),
(273, 6, 'PACHAVITA'),
(274, 6, 'PAEZ'),
(275, 6, 'PAIPA'),
(276, 6, 'PAJARITO'),
(277, 6, 'PANQUEBA'),
(278, 6, 'PAUNA'),
(279, 6, 'PAYA'),
(280, 6, 'PAZ DE RIO'),
(281, 6, 'PESCA'),
(282, 6, 'PISVA'),
(283, 6, 'PUERTO BOYACA'),
(284, 6, 'QUIPAMA'),
(285, 6, 'RAMIRIQUI'),
(286, 6, 'RAQUIRA'),
(287, 6, 'RONDON'),
(288, 6, 'SABOYA'),
(289, 6, 'SACHICA'),
(290, 6, 'SAMACA'),
(291, 6, 'SAN EDUARDO'),
(292, 6, 'SAN JOSEDE PARE'),
(293, 6, 'SAN LUIS DE GACENO'),
(294, 6, 'SAN MATEO'),
(295, 6, 'SAN MIGUEL DE SEMA'),
(296, 6, 'SAN PABLO DE BORBUR'),
(297, 6, 'SANTA MARIA'),
(298, 6, 'SANTA ROSA DE VITERBO'),
(299, 6, 'SANTA SOFIA'),
(300, 6, 'SANTANA'),
(301, 6, 'SATIVANORTE'),
(302, 6, 'SATIVASUR'),
(303, 6, 'SIACHOQUE'),
(304, 6, 'SOATA'),
(305, 6, 'SOCHA'),
(306, 6, 'SOCOTA'),
(307, 6, 'SOGAMOSO'),
(308, 6, 'SOMONDOCO'),
(309, 6, 'SORA'),
(310, 6, 'SORACA'),
(311, 6, 'SOTAQUIRA'),
(312, 6, 'SUSACON'),
(313, 6, 'SUTAMARCHAN'),
(314, 6, 'SUTATENZA'),
(315, 6, 'TASCO'),
(316, 6, 'TENZA'),
(317, 6, 'TIBANA'),
(318, 6, 'TIBASOSA'),
(319, 6, 'TINJACA'),
(320, 6, 'TIPACOQUE'),
(321, 6, 'TOCA'),
(322, 6, 'TOG&Uuml;I'),
(323, 6, 'TOPAGA'),
(324, 6, 'TOTA'),
(325, 6, 'TUNJA'),
(326, 6, 'TUNUNGUA'),
(327, 6, 'TURMEQUE'),
(328, 6, 'TUTA'),
(329, 6, 'TUTAZA'),
(330, 6, 'UMBITA'),
(331, 6, 'VENTAQUEMADA'),
(332, 6, 'VILLA DE LEIVA'),
(333, 6, 'VIRACACHA'),
(334, 6, 'ZETAQUIRA'),
(335, 7, 'AGUADAS'),
(336, 7, 'ANSERMA'),
(337, 7, 'ARANZAZU'),
(338, 7, 'BELALCAZAR'),
(339, 7, 'CHINCHINA'),
(340, 7, 'FILADELFIA'),
(341, 7, 'LA DORADA'),
(342, 7, 'LA MERCED'),
(343, 7, 'MANIZALES'),
(344, 7, 'MANZANARES'),
(345, 7, 'MARMATO'),
(346, 7, 'MARQUETALIA'),
(347, 7, 'MARULANDA'),
(348, 7, 'NEIRA'),
(349, 7, 'NORCASIA'),
(350, 7, 'PACORA'),
(351, 7, 'PALESTINA'),
(352, 7, 'PENSILVANIA'),
(353, 7, 'RIOSUCIO'),
(354, 7, 'RISARALDA'),
(355, 7, 'SALAMINA'),
(356, 7, 'SAMANA'),
(357, 7, 'SAN JOSE'),
(358, 7, 'SUPIA'),
(359, 7, 'VICTORIA'),
(360, 7, 'VILLAMARIA'),
(361, 7, 'VITERBO'),
(362, 8, 'ALBANIA'),
(363, 8, 'BELEN DE LOS ANDAQUIES'),
(364, 8, 'CARTAGENA DEL CHAIRA'),
(365, 8, 'CURILLO'),
(366, 8, 'EL DONCELLO'),
(367, 8, 'EL PAUJIL'),
(368, 8, 'FLORENCIA'),
(369, 8, 'MILAN'),
(370, 8, 'MONTANITA'),
(371, 8, 'MORELIA'),
(372, 8, 'PUERTO RICO'),
(373, 8, 'SAN JOSE DEL FRAGUA'),
(374, 8, 'SAN VICENTE DEL CAGUAN'),
(375, 8, 'SOLANO'),
(376, 8, 'SOLITA'),
(377, 8, 'VALPARAISO'),
(378, 9, 'AGUAZUL'),
(379, 9, 'CHAMEZA'),
(380, 9, 'HATO COROZAL'),
(381, 9, 'LA SALINA'),
(382, 9, 'MANI'),
(383, 9, 'MONTERREY'),
(384, 9, 'NUNCHIA'),
(385, 9, 'OROCUE'),
(386, 9, 'PAZ DE ARIPORO'),
(387, 9, 'PORE'),
(388, 9, 'RECETOR'),
(389, 9, 'SABANALARGA'),
(390, 9, 'SACAMA'),
(391, 9, 'SAN LUIS DE PALENQUE'),
(392, 9, 'TAMARA'),
(393, 9, 'TAURAMENA'),
(394, 9, 'TRINIDAD'),
(395, 9, 'VILLANUEVA'),
(396, 9, 'YOPAL');


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_mundo`
--
ALTER TABLE `t_mundo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_mundo`
--
ALTER TABLE `t_mundo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;