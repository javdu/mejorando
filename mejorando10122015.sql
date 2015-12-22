-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2015 a las 19:42:00
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mejorando`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factor`
--

CREATE TABLE IF NOT EXISTS `factor` (
  `fac_id` int(10) NOT NULL AUTO_INCREMENT,
  `fac_nombre` varchar(60) NOT NULL,
  `fac_descrip` varchar(255) NOT NULL,
  `fac_estado` set('H','DH') NOT NULL DEFAULT 'H',
  PRIMARY KEY (`fac_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `factor`
--

INSERT INTO `factor` (`fac_id`, `fac_nombre`, `fac_descrip`, `fac_estado`) VALUES
(1, 'DESARROLLO PSICOMOTOR Y AUTONOMIA', '', 'H'),
(2, 'DESARROLLO COGNITIVO', '', 'H'),
(3, 'DESARROLLO SOCIO-EMOCIONAL', '', 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_det`
--

CREATE TABLE IF NOT EXISTS `historial_det` (
  `hd_id` int(10) NOT NULL AUTO_INCREMENT,
  `hr_id` int(10) NOT NULL,
  `pre_id` int(10) NOT NULL,
  `op_id` int(10) NOT NULL,
  PRIMARY KEY (`hd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=593 ;

--
-- Volcado de datos para la tabla `historial_det`
--

INSERT INTO `historial_det` (`hd_id`, `hr_id`, `pre_id`, `op_id`) VALUES
(46, 47, 3, 1),
(45, 47, 46, 1),
(44, 47, 49, 2),
(43, 47, 5, 1),
(42, 47, 45, 3),
(41, 47, 36, 1),
(47, 47, 25, 2),
(48, 47, 33, 1),
(49, 47, 8, 2),
(50, 47, 9, 2),
(51, 47, 23, 1),
(52, 47, 22, 1),
(40, 47, 12, 1),
(39, 47, 37, 2),
(38, 47, 41, 1),
(53, 47, 40, 1),
(54, 47, 48, 2),
(55, 47, 11, 1),
(56, 47, 27, 2),
(57, 47, 43, 1),
(58, 47, 30, 1),
(59, 47, 26, 2),
(60, 47, 44, 1),
(61, 47, 29, 3),
(62, 47, 19, 3),
(63, 47, 47, 1),
(64, 47, 15, 2),
(65, 47, 31, 1),
(66, 47, 39, 1),
(67, 47, 18, 2),
(68, 47, 24, 2),
(69, 47, 10, 1),
(70, 47, 14, 1),
(71, 47, 2, 1),
(72, 47, 28, 2),
(73, 47, 7, 3),
(74, 47, 35, 1),
(75, 47, 1, 1),
(76, 47, 21, 2),
(77, 47, 6, 1),
(78, 47, 32, 3),
(79, 47, 42, 1),
(80, 47, 17, 1),
(81, 47, 20, 1),
(82, 47, 34, 1),
(83, 47, 16, 1),
(84, 47, 38, 1),
(85, 47, 4, 2),
(86, 48, 7, 2),
(87, 48, 11, 2),
(88, 48, 43, 3),
(89, 48, 12, 1),
(90, 75, 10, 1),
(91, 75, 17, 2),
(92, 75, 13, 3),
(93, 75, 16, 1),
(94, 75, 46, 2),
(95, 75, 15, 1),
(96, 75, 30, 1),
(97, 75, 25, 2),
(98, 75, 33, 1),
(99, 75, 37, 1),
(100, 75, 32, 2),
(101, 75, 47, 2),
(102, 75, 27, 2),
(103, 75, 4, 2),
(104, 75, 35, 1),
(105, 75, 40, 1),
(106, 75, 29, 1),
(107, 75, 44, 1),
(108, 75, 34, 1),
(109, 75, 7, 2),
(110, 75, 38, 2),
(111, 75, 45, 2),
(112, 75, 43, 1),
(113, 75, 6, 3),
(114, 75, 2, 1),
(115, 75, 20, 1),
(116, 75, 23, 2),
(117, 75, 39, 2),
(118, 75, 11, 1),
(119, 75, 9, 2),
(120, 75, 3, 2),
(121, 75, 12, 2),
(122, 75, 8, 2),
(123, 75, 42, 2),
(124, 75, 5, 3),
(125, 75, 49, 2),
(126, 75, 21, 1),
(127, 75, 24, 2),
(128, 75, 26, 1),
(129, 75, 28, 2),
(130, 75, 48, 2),
(131, 75, 14, 3),
(132, 75, 22, 2),
(133, 75, 41, 1),
(134, 75, 19, 2),
(135, 75, 1, 2),
(136, 76, 32, 2),
(137, 76, 12, 1),
(138, 76, 8, 2),
(139, 76, 10, 3),
(140, 76, 36, 1),
(141, 76, 33, 1),
(142, 76, 38, 1),
(143, 76, 39, 2),
(144, 76, 5, 1),
(145, 76, 22, 1),
(146, 76, 47, 2),
(147, 76, 40, 1),
(148, 76, 7, 1),
(149, 76, 29, 1),
(150, 76, 25, 2),
(151, 76, 2, 1),
(152, 76, 48, 2),
(153, 76, 20, 3),
(154, 76, 4, 2),
(155, 76, 35, 1),
(156, 76, 19, 1),
(157, 76, 27, 1),
(158, 76, 42, 2),
(159, 76, 26, 1),
(160, 76, 11, 1),
(161, 76, 28, 1),
(162, 76, 37, 2),
(163, 76, 34, 2),
(164, 76, 17, 1),
(165, 76, 1, 1),
(166, 76, 43, 1),
(167, 76, 14, 2),
(168, 76, 21, 1),
(169, 76, 16, 2),
(170, 76, 9, 1),
(171, 76, 44, 2),
(172, 76, 13, 2),
(173, 76, 6, 1),
(174, 76, 18, 2),
(175, 76, 45, 1),
(176, 76, 41, 2),
(177, 76, 3, 1),
(178, 76, 23, 1),
(179, 76, 15, 1),
(180, 76, 46, 1),
(181, 76, 49, 1),
(182, 76, 30, 2),
(183, 76, 31, 1),
(184, 77, 47, 1),
(185, 77, 30, 1),
(186, 77, 22, 1),
(187, 77, 49, 1),
(188, 77, 27, 2),
(189, 77, 18, 1),
(190, 77, 23, 2),
(191, 77, 41, 1),
(192, 77, 44, 1),
(193, 77, 31, 1),
(194, 77, 19, 1),
(195, 77, 10, 2),
(196, 77, 11, 2),
(197, 77, 29, 1),
(198, 77, 15, 1),
(199, 77, 46, 2),
(200, 77, 33, 1),
(201, 77, 24, 1),
(202, 77, 1, 2),
(203, 77, 13, 1),
(204, 77, 4, 2),
(205, 77, 28, 1),
(206, 77, 14, 1),
(207, 77, 3, 1),
(208, 77, 34, 1),
(209, 77, 40, 1),
(210, 77, 7, 1),
(211, 77, 39, 1),
(212, 77, 12, 1),
(213, 77, 9, 2),
(214, 77, 26, 1),
(215, 77, 8, 2),
(216, 77, 21, 1),
(217, 77, 32, 1),
(218, 77, 17, 2),
(219, 77, 25, 2),
(220, 77, 2, 1),
(221, 77, 48, 1),
(222, 77, 6, 1),
(223, 77, 42, 1),
(224, 77, 5, 2),
(225, 77, 20, 1),
(226, 77, 38, 2),
(227, 77, 16, 1),
(228, 77, 43, 1),
(229, 77, 37, 3),
(230, 77, 35, 2),
(231, 77, 36, 2),
(232, 78, 4, 1),
(233, 78, 8, 2),
(234, 78, 44, 1),
(235, 78, 29, 2),
(236, 78, 39, 1),
(237, 78, 47, 2),
(238, 78, 13, 2),
(239, 78, 40, 1),
(240, 78, 48, 3),
(241, 78, 42, 2),
(242, 78, 10, 3),
(243, 78, 45, 1),
(244, 78, 37, 2),
(245, 78, 31, 2),
(246, 78, 21, 2),
(247, 78, 20, 1),
(248, 78, 17, 2),
(249, 78, 28, 3),
(250, 78, 12, 3),
(251, 78, 33, 1),
(252, 78, 22, 3),
(253, 78, 49, 2),
(254, 78, 27, 2),
(255, 78, 15, 2),
(256, 78, 30, 1),
(257, 78, 24, 1),
(258, 78, 16, 2),
(259, 78, 14, 1),
(260, 78, 5, 2),
(261, 78, 43, 2),
(262, 78, 19, 2),
(263, 78, 9, 3),
(264, 78, 1, 2),
(265, 78, 32, 2),
(266, 78, 26, 1),
(267, 78, 18, 2),
(268, 78, 6, 1),
(269, 78, 36, 2),
(270, 78, 46, 3),
(271, 78, 38, 1),
(272, 78, 2, 2),
(273, 78, 11, 2),
(274, 78, 34, 1),
(275, 78, 35, 2),
(276, 78, 25, 1),
(277, 78, 7, 3),
(278, 78, 3, 1),
(279, 83, 48, 3),
(280, 83, 45, 2),
(281, 83, 10, 1),
(282, 83, 41, 2),
(283, 83, 47, 3),
(284, 83, 42, 2),
(285, 83, 16, 2),
(286, 83, 2, 1),
(287, 83, 23, 1),
(288, 83, 34, 1),
(289, 83, 6, 1),
(290, 83, 32, 1),
(291, 83, 24, 1),
(292, 83, 5, 1),
(293, 83, 7, 2),
(294, 83, 43, 2),
(295, 83, 27, 1),
(296, 83, 26, 1),
(297, 83, 39, 2),
(298, 83, 30, 1),
(299, 83, 44, 1),
(300, 83, 3, 1),
(301, 83, 40, 2),
(302, 83, 1, 2),
(303, 83, 14, 1),
(304, 83, 13, 1),
(305, 83, 31, 2),
(306, 83, 18, 1),
(307, 83, 29, 1),
(308, 83, 20, 2),
(309, 83, 11, 2),
(310, 83, 9, 3),
(311, 83, 36, 3),
(312, 83, 19, 2),
(313, 83, 12, 3),
(314, 83, 35, 2),
(315, 83, 4, 3),
(316, 83, 28, 2),
(317, 83, 49, 3),
(318, 83, 33, 2),
(319, 83, 38, 3),
(320, 83, 21, 2),
(321, 83, 46, 3),
(322, 83, 25, 2),
(323, 83, 37, 3),
(324, 83, 8, 2),
(325, 83, 15, 3),
(326, 87, 20, 1),
(327, 87, 30, 2),
(328, 87, 14, 1),
(329, 87, 43, 3),
(330, 87, 29, 1),
(331, 87, 28, 2),
(332, 87, 25, 2),
(333, 87, 8, 1),
(334, 87, 13, 1),
(335, 87, 10, 1),
(336, 87, 27, 1),
(337, 87, 47, 2),
(338, 87, 45, 1),
(339, 87, 6, 1),
(340, 87, 41, 1),
(341, 87, 39, 2),
(342, 87, 9, 1),
(343, 87, 4, 2),
(344, 87, 33, 2),
(345, 87, 24, 1),
(346, 87, 2, 1),
(347, 87, 21, 2),
(348, 87, 48, 3),
(349, 87, 3, 3),
(350, 87, 26, 2),
(351, 87, 16, 1),
(352, 87, 35, 1),
(353, 87, 42, 1),
(354, 87, 18, 2),
(355, 87, 7, 2),
(356, 87, 1, 2),
(357, 87, 11, 1),
(358, 87, 46, 1),
(359, 87, 44, 2),
(360, 87, 49, 1),
(361, 87, 40, 1),
(362, 87, 38, 3),
(363, 87, 12, 3),
(364, 87, 23, 1),
(365, 87, 32, 2),
(366, 87, 34, 1),
(367, 87, 36, 1),
(368, 87, 37, 2),
(369, 87, 15, 1),
(370, 87, 19, 1),
(371, 87, 5, 1),
(372, 88, 8, 1),
(373, 88, 12, 1),
(374, 88, 36, 1),
(375, 88, 3, 1),
(376, 91, 8, 1),
(377, 91, 6, 2),
(378, 91, 35, 3),
(379, 91, 30, 3),
(380, 91, 22, 2),
(381, 91, 31, 3),
(382, 91, 17, 3),
(383, 91, 11, 2),
(384, 91, 42, 3),
(385, 91, 33, 1),
(386, 91, 47, 2),
(387, 91, 34, 2),
(388, 91, 13, 2),
(389, 92, 10, 1),
(390, 92, 48, 2),
(391, 92, 9, 1),
(392, 92, 16, 2),
(393, 92, 41, 3),
(394, 92, 29, 1),
(395, 92, 24, 1),
(396, 92, 4, 2),
(397, 92, 46, 1),
(398, 92, 1, 1),
(399, 92, 42, 1),
(400, 92, 26, 2),
(401, 93, 38, 3),
(402, 93, 22, 2),
(403, 93, 42, 3),
(404, 93, 16, 2),
(405, 93, 31, 3),
(406, 93, 37, 2),
(407, 93, 1, 3),
(408, 93, 36, 3),
(409, 93, 28, 1),
(410, 93, 49, 2),
(411, 93, 25, 1),
(412, 93, 30, 1),
(413, 93, 44, 2),
(414, 93, 34, 1),
(415, 93, 26, 2),
(416, 93, 2, 2),
(417, 93, 18, 1),
(418, 93, 8, 2),
(419, 93, 27, 1),
(420, 93, 24, 1),
(421, 93, 32, 3),
(422, 93, 11, 1),
(423, 93, 10, 1),
(424, 93, 5, 2),
(425, 93, 6, 3),
(426, 93, 48, 1),
(427, 93, 15, 2),
(428, 93, 19, 1),
(429, 93, 40, 1),
(430, 93, 35, 1),
(431, 93, 17, 2),
(432, 93, 46, 1),
(433, 93, 47, 3),
(434, 93, 39, 1),
(435, 93, 21, 1),
(436, 93, 41, 1),
(437, 93, 20, 1),
(438, 93, 45, 1),
(439, 93, 4, 3),
(440, 93, 3, 2),
(441, 93, 29, 1),
(442, 93, 14, 1),
(443, 93, 12, 2),
(444, 93, 13, 1),
(445, 93, 43, 1),
(446, 93, 9, 3),
(447, 93, 23, 2),
(448, 93, 33, 2),
(449, 94, 37, 3),
(450, 94, 30, 3),
(451, 94, 43, 3),
(452, 94, 45, 3),
(453, 94, 42, 3),
(454, 94, 1, 1),
(455, 94, 48, 1),
(456, 94, 29, 1),
(457, 94, 32, 1),
(458, 94, 33, 1),
(459, 94, 13, 1),
(460, 94, 31, 1),
(461, 94, 44, 1),
(462, 94, 17, 1),
(463, 94, 3, 1),
(464, 94, 34, 1),
(465, 94, 36, 1),
(466, 94, 11, 1),
(467, 94, 26, 1),
(468, 94, 19, 1),
(469, 94, 47, 1),
(470, 94, 39, 1),
(471, 94, 27, 1),
(472, 94, 24, 1),
(473, 94, 38, 1),
(474, 94, 12, 1),
(475, 94, 21, 1),
(476, 94, 16, 1),
(477, 94, 49, 1),
(478, 94, 8, 1),
(479, 94, 41, 1),
(480, 94, 14, 1),
(481, 94, 2, 3),
(482, 94, 40, 1),
(483, 94, 18, 1),
(484, 94, 7, 1),
(485, 94, 9, 1),
(486, 94, 10, 1),
(487, 94, 20, 1),
(488, 94, 23, 1),
(489, 94, 25, 1),
(490, 94, 4, 1),
(491, 94, 46, 1),
(492, 94, 5, 1),
(493, 94, 6, 1),
(494, 94, 35, 1),
(495, 94, 28, 1),
(496, 94, 22, 3),
(497, 95, 33, 2),
(498, 95, 18, 2),
(499, 95, 25, 2),
(500, 95, 43, 2),
(501, 95, 49, 2),
(502, 95, 15, 2),
(503, 95, 22, 2),
(504, 95, 21, 2),
(505, 95, 42, 2),
(506, 95, 23, 2),
(507, 95, 20, 2),
(508, 95, 19, 2),
(509, 95, 29, 2),
(510, 95, 28, 2),
(511, 95, 17, 2),
(512, 95, 46, 2),
(513, 95, 35, 2),
(514, 95, 12, 2),
(515, 95, 47, 2),
(516, 95, 3, 2),
(517, 95, 11, 2),
(518, 95, 37, 2),
(519, 95, 45, 2),
(520, 95, 8, 2),
(521, 95, 7, 2),
(522, 95, 32, 2),
(523, 95, 24, 2),
(524, 95, 16, 2),
(525, 95, 40, 2),
(526, 95, 30, 2),
(527, 95, 10, 2),
(528, 95, 41, 2),
(529, 95, 1, 2),
(530, 95, 13, 2),
(531, 95, 2, 2),
(532, 95, 36, 2),
(533, 95, 39, 2),
(534, 95, 27, 2),
(535, 95, 9, 2),
(536, 95, 34, 2),
(537, 95, 5, 2),
(538, 95, 26, 2),
(539, 95, 31, 2),
(540, 95, 48, 2),
(541, 95, 44, 2),
(542, 95, 6, 2),
(543, 95, 4, 2),
(544, 95, 14, 2),
(545, 96, 8, 2),
(546, 96, 4, 1),
(547, 96, 40, 3),
(548, 96, 46, 3),
(549, 96, 9, 2),
(550, 96, 19, 1),
(551, 96, 15, 2),
(552, 96, 18, 3),
(553, 96, 20, 3),
(554, 96, 43, 3),
(555, 96, 6, 3),
(556, 96, 12, 3),
(557, 96, 34, 2),
(558, 96, 33, 1),
(559, 96, 29, 2),
(560, 96, 23, 3),
(561, 96, 1, 2),
(562, 96, 27, 3),
(563, 96, 38, 2),
(564, 96, 5, 3),
(565, 96, 39, 2),
(566, 96, 31, 3),
(567, 96, 16, 2),
(568, 96, 21, 3),
(569, 96, 3, 2),
(570, 96, 35, 3),
(571, 96, 2, 2),
(572, 96, 37, 3),
(573, 96, 47, 2),
(574, 96, 10, 3),
(575, 96, 42, 2),
(576, 96, 26, 3),
(577, 96, 25, 2),
(578, 96, 48, 3),
(579, 96, 32, 2),
(580, 96, 41, 3),
(581, 96, 14, 2),
(582, 96, 49, 3),
(583, 96, 11, 2),
(584, 96, 36, 3),
(585, 96, 30, 2),
(586, 96, 28, 3),
(587, 96, 44, 2),
(588, 96, 17, 3),
(589, 96, 13, 1),
(590, 96, 7, 3),
(591, 96, 45, 2),
(592, 96, 24, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_resp`
--

CREATE TABLE IF NOT EXISTS `historial_resp` (
  `hr_id` int(10) NOT NULL AUTO_INCREMENT,
  `hr_fecha` datetime NOT NULL,
  `pb_dni` int(10) NOT NULL,
  PRIMARY KEY (`hr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Volcado de datos para la tabla `historial_resp`
--

INSERT INTO `historial_resp` (`hr_id`, `hr_fecha`, `pb_dni`) VALUES
(60, '2015-08-28 15:04:18', 3123),
(59, '2015-08-28 15:03:15', 2147483647),
(58, '2015-08-28 15:02:25', 2147483647),
(57, '2015-08-28 14:56:22', 1111111111),
(56, '2015-08-28 14:54:46', 7777),
(55, '2015-08-28 14:50:17', 75765),
(54, '2015-08-28 14:44:23', 123),
(53, '2015-08-28 14:41:40', 123),
(52, '2015-08-28 14:35:47', 456),
(51, '2015-08-28 14:34:33', 12),
(50, '2015-08-28 14:33:02', 12),
(49, '2015-08-28 14:31:33', 30),
(48, '2015-08-28 14:01:36', 0),
(47, '2015-08-28 06:31:26', 48919678),
(61, '2015-08-28 15:07:16', 123),
(62, '2015-08-28 15:41:34', 2147483647),
(63, '2015-08-28 15:42:52', 2147483647),
(64, '2015-08-28 15:43:57', 666),
(65, '2015-08-28 15:54:17', 2147483647),
(66, '2015-08-28 16:00:47', 0),
(67, '2015-08-28 16:03:12', 48),
(68, '2015-08-28 16:11:39', 111111),
(69, '2015-08-28 16:23:47', 44444),
(70, '2015-08-28 16:36:02', 30190535),
(71, '2015-08-28 17:00:42', 30190535),
(72, '2015-08-28 17:01:29', 30190535),
(73, '2015-08-28 18:00:33', 30190535),
(74, '2015-08-28 18:35:37', 30190535),
(75, '2015-08-28 18:49:12', 55789654),
(76, '2015-08-28 19:10:51', 2147483647),
(77, '2015-08-28 19:39:18', 1111111111),
(78, '2015-08-28 20:28:17', 368796543),
(79, '2015-08-28 21:22:53', 0),
(80, '2015-08-28 21:23:41', 33333333),
(81, '2015-08-28 21:25:39', 344444444),
(82, '2015-08-28 23:16:32', 0),
(83, '2015-08-28 23:41:49', 25063953),
(84, '2015-09-01 02:21:07', 30190535),
(85, '2015-09-01 02:22:54', 30190535),
(86, '2015-09-01 02:39:11', 43),
(87, '2015-09-01 11:54:49', 0),
(88, '2015-09-01 12:03:08', 4636),
(89, '2015-09-01 15:55:46', 0),
(90, '2015-09-01 19:51:39', 22333),
(91, '2015-09-02 23:51:57', 0),
(92, '2015-09-02 23:58:32', 30),
(93, '2015-09-02 23:59:35', 22222),
(94, '2015-09-03 02:59:33', 0),
(95, '2015-09-03 03:03:46', 25),
(96, '2015-09-03 03:09:58', 25),
(97, '2015-09-08 02:28:19', 0),
(98, '2015-09-17 18:10:07', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE IF NOT EXISTS `opciones` (
  `op_id` int(10) NOT NULL AUTO_INCREMENT,
  `op_nombre` varchar(255) NOT NULL,
  `op_estado` set('H','DH') NOT NULL DEFAULT 'H',
  PRIMARY KEY (`op_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`op_id`, `op_nombre`, `op_estado`) VALUES
(1, 'siempre', 'H'),
(2, 'algunas veces', 'H'),
(3, 'nunca', 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacion`
--

CREATE TABLE IF NOT EXISTS `poblacion` (
  `pb_dni` int(15) unsigned NOT NULL,
  `pb_nomb` varchar(255) NOT NULL,
  `pb_apell` varchar(255) NOT NULL,
  `pb_fechNac` date NOT NULL,
  `pb_fech` datetime NOT NULL,
  `pb_parentes` varchar(255) NOT NULL,
  `pb_escuela` varchar(255) NOT NULL,
  `pb_grado` varchar(255) NOT NULL,
  `pb_edad` int(2) NOT NULL,
  PRIMARY KEY (`pb_dni`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `poblacion`
--

INSERT INTO `poblacion` (`pb_dni`, `pb_nomb`, `pb_apell`, `pb_fechNac`, `pb_fech`, `pb_parentes`, `pb_escuela`, `pb_grado`, `pb_edad`) VALUES
(48919678, 'Lucas', 'Juarez', '0000-00-00', '2015-08-28 06:31:26', '2', 'Manuel Rosas', '1', 7),
(30, '', '', '1970-01-01', '2015-09-02 23:58:31', 'madre', '', '', 0),
(12, 'sff', 'asdasd', '0000-00-00', '2015-08-28 14:34:33', 'madre', 'asfsdfsda 3423', '5', 2),
(456, 'gdfgsdg', 'sdfsfasf', '0000-00-00', '2015-08-28 14:35:47', 'madre', 'fsdfasfasdf', '1', 25),
(123, 'asdsa', 'qwewqe', '0000-00-00', '2015-08-28 15:07:16', 'madre', 'asdasd', '2', 2),
(666, 'dsdsd', 'asdasd', '0000-00-00', '2015-08-28 15:43:57', 'madre', 'dasdasd', '3', 3),
(75765, 'sadasd', 'asdasd', '0000-00-00', '2015-08-28 14:50:17', 'madre', 'dasdadasd', '2', 3),
(7777, 'dadsad', 'asdasd', '0000-00-00', '2015-08-28 14:54:46', 'madre', 'asdasdsad', '3', 3),
(1111111111, 'Luis', 'Rodriguez', '2015-10-08', '2015-08-28 19:39:18', 'madre', 'Rosas', '1', 2),
(4294967295, 'asdasd', 'asdasd', '0000-00-00', '2015-08-28 15:02:25', 'madre', 'dasdasd', '2', 33),
(3123, 'asdsad', 'asdasd', '0000-00-00', '2015-08-28 15:04:17', 'madre', 'asdasd', '3', 3),
(85, 'Luis', '', '0000-00-00', '2015-08-28 16:02:55', 'madre', '', '', 0),
(48, 'Luis', '', '0000-00-00', '2015-08-28 16:04:05', 'docente', '', '', 0),
(111111, 'Luis Alberto', 'Rodriguez', '2015-08-19', '2015-08-28 16:11:39', 'madre', 'Roberto Terrones Riera', '3', 2),
(44444, 'Luis ', 'Fernandez', '0000-00-00', '2015-08-28 16:34:33', 'madre', 'Roberto Riera', '1', 2),
(30190535, '', '', '1970-01-01', '2015-09-01 02:22:53', 'madre', '', '', 0),
(55789654, 'Wifi oliver', 'Rodriguez', '1970-01-01', '2015-08-28 18:49:11', 'madre', 'Armada nacional', '1', 34),
(368796543, 'Yuii', 'Uioojhh', '1970-01-01', '2015-08-28 20:28:16', 'madre', 'Ghjgfgj', '4', 56),
(33333333, 'asdasd', 'asdasd', '2015-09-08', '2015-08-28 21:23:41', 'madre', 'dasdasd', '3', 3),
(344444444, '', '', '1970-01-01', '2015-08-28 21:25:39', 'madre', '', '', 0),
(301568, '', '', '1970-01-01', '2015-08-28 23:18:15', 'madre', '', '', 0),
(25063953, '', '', '1970-01-01', '2015-08-28 23:41:49', 'madre', '', '', 0),
(43, '', '', '1970-01-01', '2015-09-01 02:39:11', 'madre', '', '', 0),
(4636, '', '', '1970-01-01', '2015-09-01 12:03:07', 'madre', '', '', 0),
(22333, '', '', '1970-01-01', '2015-09-01 19:51:38', 'madre', '', '', 0),
(22222, 'pepito', 'pirulo', '2011-11-05', '2015-09-02 23:59:35', 'padre', 'kankun', 'jardin', 4),
(47501482, 'camila', 'Cuellar Royer', '1970-01-01', '2015-09-03 02:57:27', 'madre', 'Alberdi', '3', 9),
(25, 'Faruk', '', '1970-01-01', '2015-09-03 03:09:57', 'madre', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `pre_id` int(10) NOT NULL AUTO_INCREMENT,
  `preg_descrip` varchar(255) NOT NULL,
  `preg_estado` set('H','DH') NOT NULL DEFAULT 'H',
  `subFac_id` int(10) NOT NULL,
  `fac_id` int(10) NOT NULL,
  PRIMARY KEY (`pre_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`pre_id`, `preg_descrip`, `preg_estado`, `subFac_id`, `fac_id`) VALUES
(1, 'puede caminar sobre una línea recta', 'H', 1, 1),
(2, 'puede lanzar una pelota hacia arriba y agarrarla nuevamente', 'H', 1, 1),
(3, 'puede ponerse la campera o delantal sin ayuda', 'H', 1, 1),
(4, 'puede recortar figuras con tijera para niños', 'H', 2, 1),
(5, 'puede abrochar un botón', 'H', 2, 1),
(6, 'puede atarse los cordones', 'H', 2, 1),
(7, 'puede lavarse las manos sin ayuda', 'H', 3, 1),
(8, 'puede guardar solo sus cosas en su mochila', 'H', 3, 1),
(9, 'puede preparar solo sus elementos de trabajo o merienda', 'H', 3, 1),
(10, 'puede recordar mejor cuando ve laminas, dibujos o videos', 'H', 4, 2),
(11, 'puede concentrase más cuando mira imágenes o películas', 'H', 4, 2),
(12, 'puede recordar lo que le dicen', 'H', 5, 2),
(13, 'puede recordar y cantar  canciones', 'H', 5, 2),
(14, 'puede recordar esquemas de gimnasia o coreografías de baile', 'H', 6, 2),
(15, 'puede recordar más lo que hace que lo que escucha', 'H', 6, 2),
(16, 'termina las cosas que empieza en un corto tiempo', 'H', 7, 2),
(17, 'puede pronunciar claramente todas las letras', 'H', 8, 2),
(18, 'puede decir su nombre y apellido correctamente', 'H', 8, 2),
(19, 'puede decir claramente lo que piensa y se entiende lo que dice', 'H', 8, 2),
(20, 'puede expresarse en tiempo presente y pasado. Ej.: “hoy comí banana", "ayer jugue con mamá"', 'H', 9, 2),
(21, 'puede utiliza correctamente las palabras, como "antes" y después", "ayer", "hoy" y "mañana"', 'H', 9, 2),
(22, 'puede diferenciar "arriba" de "abajo"', 'H', 10, 2),
(23, 'puede diferenciar "adentro" de "afuera"', 'H', 10, 2),
(24, 'puede diferenciar "adelante" de "atrás"', 'H', 10, 2),
(25, 'puede comprender lo que significa "mucho", "poco", o "más o menos"', 'H', 11, 2),
(26, 'puede comprende lo que es  "agregar" y "quitar"', 'H', 11, 2),
(27, 'puede distinguir si un objeto es igual o diferente a otro, por su forma, tamaño o color', 'H', 12, 2),
(28, 'dibuja círculos, figuras humanas y animales', 'H', 13, 2),
(29, 'puede dibujar un hombre con tres partes', 'H', 13, 2),
(30, 'puede trazar una línea horizontal', 'H', 13, 2),
(31, 'puede escribir algunas palabras simples', 'H', 14, 2),
(32, 'puede escribir su nombre', 'H', 14, 2),
(33, 'puede reconocer las vocales', 'H', 14, 2),
(34, 'puede reconocer y escribir los números del 1 al 10', 'H', 15, 2),
(35, 'puede  contar hasta 20 objetos o más', 'H', 16, 2),
(36, 'puede ver y copiar todo lo escrito en el pizarrón', 'H', 17, 2),
(37, 'puede reconocer y expresar sanamente emociones como: alegría, miedo, enojo, desagrado y tristeza', 'H', 18, 3),
(38, 'puede controlar sus impulsos y expresar sentimientos sin dañar a otras personas', 'H', 18, 3),
(39, 'puede reconocer los sentimientos de los demás y realizar acciones para ponerlos contentos', 'H', 18, 3),
(40, 'puede demostrar cariño a las personas a través de gestos o palabras', 'H', 19, 3),
(41, 'puede compartir cosas, juguetes o comida con otros niños o niñas', 'H', 19, 3),
(42, 'puede establecer vinculos de amistad con otros niños o niñas y comparte momentos de juego', 'H', 19, 3),
(43, 'puede reconocer sus características físicas, sus habilidades y sus preferencias', 'H', 20, 3),
(44, 'puede confiar en sus capacidades y se alegra por sus logros', 'H', 20, 3),
(45, 'puede opinar y puede elegir qué quiere hacer o jugar cuando le preguntan', 'H', 20, 3),
(46, 'puede preguntar lo que le interesa saber', 'H', 21, 3),
(47, 'puede respetar y obedecer las reglas de convivencia en la escuela', 'H', 22, 3),
(48, 'puede saludar, se despide y usa el "por favor" y "gracias"', 'H', 22, 3),
(49, 'puede obedecer órdenes simples. Ejemplo: “saquen el cuaderno”', 'H', 22, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_informe`
--

CREATE TABLE IF NOT EXISTS `resp_informe` (
  `resp_id` int(10) NOT NULL AUTO_INCREMENT,
  `resp_valor` varchar(255) NOT NULL,
  `resp_informe` varchar(512) NOT NULL,
  `resp_estado` set('H','DH') NOT NULL DEFAULT 'H',
  `fac_id` int(10) NOT NULL,
  `subFac_id` int(10) NOT NULL,
  PRIMARY KEY (`resp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `resp_informe`
--

INSERT INTO `resp_informe` (`resp_id`, `resp_valor`, `resp_informe`, `resp_estado`, `fac_id`, `subFac_id`) VALUES
(1, '3', 'Su motricidad gruesa es muy buena.', 'H', 1, 1),
(2, '2', 'Su motricidad gruesa es buena, con estimulación mejoraría notablemente.', 'H', 1, 1),
(3, '10', 'Su motricidad gruesa necesita más estimulación para prevenir dificultades.', 'H', 1, 1),
(4, '3', 'Y la motricidad fina esta desarrollandose satifactoriamente para su edad.', 'H', 1, 2),
(5, '2', 'Y la motricidad fina esta desarrollandose poco a poco.', 'H', 1, 2),
(6, '10', 'Y la motricidad fina necesita  desarrollarse aún más.', 'H', 1, 2),
(7, '3', 'Realiza de manera independiente algunas consignas, tales como: sacar o guardar elementos e higienizar sus manos.', 'H', 1, 3),
(8, '21', 'Realiza de manera independiente algunas consignas, tales como: manipular sus elementos de trabajo.', 'H', 1, 3),
(9, '2', 'Su capacidad para recordar información a través de estímulos visuales, es muy buena. Para motivar aún más sus ganas de aprender es conveniente utilizar frases de aliento y felicitaciones escritas en sus tareas.', 'H', 2, 4),
(10, '10', 'Su capacidad para recordar información a través de estímulos visuales tiene que ejercitarse.', 'H', 2, 4),
(11, '2', 'Si los estímulos son de carácter auditivo, logra recuperar y memorizar información. Para potenciar más su avance sería interesante aplaudir sus logros o que reciba felicitaciones por su desempeño, en voz alta.', 'H', 2, 5),
(12, '10', 'Para que pueda recordar más lo que escucha sería interesante entrenar su memoria auditiva.', 'H', 2, 5),
(13, '2', 'Tiene facilidad para recordar lo que vivencia. Rendirá mucho más si las felicitaciones por su trabajo se le brindan a través de gestos cariñosos, como abrazos, palmadas, mimos.', 'H', 2, 6),
(14, '1', 'Lográ respetar consignas en un tiempo propuesto, pudiendo sostener su capacidad de concentración.', 'H', 2, 7),
(15, '0', 'Logrará respetar mejor las consignas en el tiempo propuesto, si desarrolla mayor capacidad de concentración.', 'H', 2, 7),
(16, '3', 'Su nivel de lenguaje oral es muy bueno, le permite comunicarse con los demás de manera clara.', 'H', 2, 8),
(17, '2', 'Su nivel de lenguaje oral es bueno y le permite comunicarse.', 'H', 2, 8),
(18, '10', 'Su lenguaje oral aún es muy acotado.', 'H', 2, 8),
(19, '3', 'Respecto a la noción de tiempo, puede utilizar palabras para indicar los diferentes momentos del día, tales como: como: antes,después, ayer, hoy y mañana.', 'H', 2, 9),
(20, '21', 'Respecto a la noción de tiempo, puede utilizar algunas palabras para mencionar acciones presentes y pasadas.', 'H', 2, 9),
(21, '0', 'Respecto a la noción de tiempo, aún se evidencian dudas al mencionar acciones presentes, pasadas y futuras.', 'H', 2, 9),
(22, '3', 'La noción espacial es muy buena, conoce conceptos como: arriba, abajo, adentro, afuera, adelante y atras.  ', 'H', 2, 10),
(23, '21', 'La noción espacial se manifiesta en algunos conceptos que indican el lugar que ocupan las cosas en el espacio. ', 'H', 2, 10),
(24, '0', 'En cuanto a la noción espacial, aún no diferenciar conceptos como: arriba, abajo, adentro, afuera, adelante y atras.  ', 'H', 2, 10),
(25, '2', 'Puede comprender conceptos que aluden a la cantidad y tiene las nociones básicas para aprender a sumar y restar sin dificultad.', 'H', 2, 11),
(26, '1', 'Aún no internalizo todos los conceptos que expresan cantidad. Sería muy positivo que los trabaje para que pueda aprender a sumar y restar sin dificultad.', 'H', 2, 11),
(27, '0', 'Aún no internalizo los conceptos que expresan cantidad. Sería muy positivo que los trabaje para que pueda aprender a sumar y restar sin dificultad.', 'H', 2, 11),
(28, '1', 'Reconoce objetos iguales y diferentes.', 'H', 2, 12),
(29, '0', 'Al momento de reconocer si un objeto es igual o diferente a otro manifiesta dudas .', 'H', 2, 12),
(30, '3', 'Su expresión gráfica es muy buena.', 'H', 2, 13),
(31, '21', 'Su expresión gráfica esta desarrollándose.', 'H', 2, 13),
(32, '0', 'Su expresión gráfica aún no está muy desarrollada.', 'H', 2, 13),
(33, '3', 'Puede escribir su nombre, palabras simples y reconoce las vocales.', 'H', 2, 14),
(34, '21', 'Puede escribir su nombre, palabras simples y reconoce las vocales.', 'H', 2, 14),
(35, '0', 'Necesita ayuda para poder escribir su nombre y empezar a reconocer las letras.', 'H', 2, 14),
(36, '1', 'Reconoce y escribe los números del 1 al 10.', 'H', 2, 15),
(37, '1', 'Y cuenta hasta el 20.', 'H', 2, 16),
(38, '1', 'Puede realizar copias de alguna producción escrita, por ejemplo lo escrito en el pizarrón.', 'H', 2, 17),
(39, '3', 'Puede controlar sus impulsos. Reconoce y expresa sus emociones sanamente y tiene en cuenta los sentimientos de las demás personas.', 'H', 3, 18),
(40, '2', 'Puede reconocer los sentimientos y expresar lo que siente.', 'H', 3, 18),
(41, '10', ' Se observa que necesita desarrollar aún más su  inteligencia emocional.', 'H', 3, 18),
(42, '3', 'Es capaz de demostrar cariño a las personas a través de gestos o palabras. Comparte momentos de juego y diferentes elementos tales como: juguetes, comida o cosas sin dificultad.', 'H', 3, 19),
(43, '21', 'Ha empezado a desarrollar la capacidad de compartir. ', 'H', 3, 19),
(44, '0', 'No suele compartir cosas o momentos de juego con otros niños o niñas.', 'H', 3, 19),
(45, '3', 'Manifiesta una gran dosis de confianza en su persona. Esto es visible cuando elige, toma decisiones y festeja lo que le sale bien.', 'H', 3, 20),
(46, '2', 'Tiene capacidad para reconocer lo que le gusta.', 'H', 3, 20),
(47, '1', 'Cuando tiene deseos de saber algo que le interesa, pregunta al respecto.', 'H', 3, 21),
(48, '0', 'Sus deseos de saber aún no se manifiestan de manera oral.', 'H', 3, 21),
(49, '2', 'Su conducta es buena, respeta las normas de convivencia y comprende y obedece consignas.', 'H', 3, 22),
(50, '1', 'Aún necesita ayuda para procesar consignas y obedecer ordenes. Con ayuda podrá mejorar su conducta.', 'H', 3, 22),
(51, '0', 'Aún necesita ayuda para procesar consignas y obedecer ordenes. Con ayuda podrá mejorar su conducta.', 'H', 3, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_sugerencia`
--

CREATE TABLE IF NOT EXISTS `resp_sugerencia` (
  `resp_id` int(10) NOT NULL AUTO_INCREMENT,
  `resp_valor` varchar(255) NOT NULL,
  `resp_informe` longtext NOT NULL,
  `resp_estado` set('H','DH') NOT NULL DEFAULT 'H',
  `fac_id` int(10) NOT NULL,
  `subFac_id` int(10) NOT NULL,
  PRIMARY KEY (`resp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `resp_sugerencia`
--

INSERT INTO `resp_sugerencia` (`resp_id`, `resp_valor`, `resp_informe`, `resp_estado`, `fac_id`, `subFac_id`) VALUES
(1, '3', 'Sugerencias para estimular aún más las habilidades psicomotrices y la autonomía:\r\n• Cada vez que pueda tomé dos objetos uno en la mano derecha y otro en la izquierda y realice preguntas, por ejemplo ¿cuál de estas dos cosas te gusta más? ¿De qué color es la que tengo en mi mano derecha? ¿Cómo se llama la cosa que tengo en mi mano izquierda? felicite los aciertos y los errores con una sonrisa, por ejemplo diga sonriendo “muy bien…pero no, tenés otra oportunidad”. \r\n• Juegue con las nociones espaciales por ejemplo diga: ahora somos altos (levante sus brazos y camine de puntas de pie) bajo (agáchese y camine) grande (infle sus mejillas y abra los brazos). Puede inventar otras opciones con conceptos como: chico, largo- corto, ancho-estrecho.\r\n• Cuando caminan por la vereda, proponga caminar con pasos largos y cortos. Saltar una baldosa. Caminar lento y rápido. Caminar alejados el uno del otro y después cerca, o adelante o atrás.\r\n• Recorten figuras de diarios o revistas. Muéstrele como utilizar tijeras.\r\n• Saquen y pongan nuevamente los cordones de las zapatillas.\r\n• Jueguen a ver quién se abrocha más rápido los botones de una camisa.\r\n\r\nEjercicios recomendados:  \r\n\r\n\r\nCHISPA-CHISPITA Y CHISPA-CHISPON\r\nParticipantes: dos o más personas (números pares) \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: preferiblemente, exterior.\r\nMateriales: ninguno\r\nConsigna: constituir dos equipos, que se colocan en fila espalda contra espalda (del equipo contrario), un equipo se llama CHISPA-CHISPITA y el otro CHISPA-CHISPON. Quien dirige el juego grita ¡CHIPA-CHISPITA! Y ese equipo tiene que girar y correr rápidamente para atrapar al equipo contrario; si grita ¡CHISPA-CHISPON!, estos se giran y persiguen al otro equipo.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa\r\n- Desarrollo cognitivo: capacidad de atención y concentración.\r\n- Desarrollo socio – emocional: trabajo en equipo, velocidad de reacción bajo presión\r\n\r\nZIG - ZAG\r\nParticipantes: dos o más personas (número par). \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: preferiblemente, exterior.\r\nMateriales: dos pelotas de goma espuma de distinto color, para simbolizar los equipos.\r\nConsigna: formando dos filas enfrentadas y con dos pelotas (una de cada color), se comienzan a pasar al compañero que está enfrente del que está al lado tuyo, formando así una cadena en zig ? zag. Hay que lograr que la pelota no caiga al suelo, si cae se vuelve a empezar desde el principio. La pelota que llegue antes al extremo de la fila es la pelota del grupo ganador.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa, reflejos y coordinación óculo?manual.\r\n- Desarrollo cognitivo: capacidad de atención y observación.\r\n- Desarrollo socio – emocional: velocidad de reacción bajo presión y/o excitación.', 'H', 1, 1),
(2, '2', 'Sugerencias para estimular aún más las habilidades psicomotrices y la autonomía:\r\n• Cada vez que pueda tomé dos objetos uno en la mano derecha y otro en la izquierda y realice preguntas, por ejemplo ¿cuál de estas dos cosas te gusta más? ¿De qué color es la que tengo en mi mano derecha? ¿Cómo se llama la cosa que tengo en mi mano izquierda? felicite los aciertos y los errores con una sonrisa, por ejemplo diga sonriendo “muy bien…pero no, tenés otra oportunidad”. \r\n• Juegue con las nociones espaciales por ejemplo diga: ahora somos altos (levante sus brazos y camine de puntas de pie) bajo (agáchese y camine) grande (infle sus mejillas y abra los brazos). Puede inventar otras opciones con conceptos como: chico, largo- corto, ancho-estrecho.\r\n• Cuando caminan por la vereda, proponga caminar con pasos largos y cortos. Saltar una baldosa. Caminar lento y rápido. Caminar alejados el uno del otro y después cerca, o adelante o atrás.\r\n• Recorten figuras de diarios o revistas. Muéstrele como utilizar tijeras.\r\n• Saquen y pongan nuevamente los cordones de las zapatillas.\r\n• Jueguen a ver quién se abrocha más rápido los botones de una camisa.\r\n\r\nEjercicios recomendados:  \r\n\r\nCARRERA SALTA - SALTARINA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: preferiblemente, exterior.\r\nMateriales: se crea una pista de carrera, marcando en el piso la línea de salida y a dos metros de distancia, la línea de llegada.\r\nConsigna: a la cuenta de tres los participantes recorren la pista saltando en un solo pie, hasta la línea de llegada\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa y equilibrio\r\n- Desarrollo cognitivo: capacidad de concentración\r\n- Desarrollo socio – emocional: velocidad de reacción bajo presión y/o excitación.\r\n\r\nZIG - ZAG\r\nParticipantes: dos o más personas (número par). \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: preferiblemente, exterior.\r\nMateriales: dos pelotas de goma espuma de distinto color, para simbolizar los equipos.\r\nConsigna: formando dos filas enfrentadas y con dos pelotas (una de cada color), se comienzan a pasar al compañero que está enfrente del que está al lado tuyo, formando así una cadena en zig ? zag. Hay que lograr que la pelota no caiga al suelo, si cae se vuelve a empezar desde el principio. La pelota que llegue antes al extremo de la fila es la pelota del grupo ganador.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa, reflejos y coordinación óculo?manual.\r\n- Desarrollo cognitivo: capacidad de atención y observación.\r\n- Desarrollo socio – emocional: velocidad de reacción bajo presión y/o excitación.', 'H', 1, 1),
(3, '10', 'Sugerencias para estimular aún más las habilidades psicomotrices y la autonomía:\r\n• Cada vez que pueda tomé dos objetos uno en la mano derecha y otro en la izquierda y realice preguntas, por ejemplo ¿cuál de estas dos cosas te gusta más? ¿De qué color es la que tengo en mi mano derecha? ¿Cómo se llama la cosa que tengo en mi mano izquierda? felicite los aciertos y los errores con una sonrisa, por ejemplo diga sonriendo “muy bien…pero no, tenés otra oportunidad”. \r\n• Juegue con las nociones espaciales por ejemplo diga: ahora somos altos (levante sus brazos y camine de puntas de pie) bajo (agáchese y camine) grande (infle sus mejillas y abra los brazos). Puede inventar otras opciones con conceptos como: chico, largo- corto, ancho-estrecho.\r\n• Cuando caminan por la vereda, proponga caminar con pasos largos y cortos. Saltar una baldosa. Caminar lento y rápido. Caminar alejados el uno del otro y después cerca, o adelante o atrás.\r\n• Recorten figuras de diarios o revistas. Muéstrele como utilizar tijeras.\r\n• Saquen y pongan nuevamente los cordones de las zapatillas.\r\n• Jueguen a ver quién se abrocha más rápido los botones de una camisa.\r\n\r\nEjercicios recomendados:  \r\n\r\nCARRERA SALTA - SALTARINA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: preferiblemente, exterior.\r\nMateriales: se crea una pista de carrera, marcando en el piso la línea de salida y a dos metros de distancia, la línea de llegada.\r\nConsigna: a la cuenta de tres los participantes recorren la pista saltando en un solo pie, hasta la línea de llegada\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa y equilibrio\r\n- Desarrollo cognitivo: capacidad de concentración\r\n- Desarrollo socio – emocional: velocidad de reacción bajo presión y/o excitación.\r\n\r\nCHISPA-CHISPITA Y CHISPA-CHISPON\r\nParticipantes: dos o más personas (números pares) \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: preferiblemente, exterior.\r\nMateriales: ninguno\r\nConsigna: constituir dos equipos, que se colocan en fila espalda contra espalda (del equipo contrario), un equipo se llama CHISPA-CHISPITA y el otro CHISPA-CHISPON. Quien dirige el juego grita ¡CHIPA-CHISPITA! Y ese equipo tiene que girar y correr rápidamente para atrapar al equipo contrario; si grita ¡CHISPA-CHISPON!, estos se giran y persiguen al otro equipo.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa\r\n- Desarrollo cognitivo: capacidad de atención y concentración.\r\n- Desarrollo socio – emocional: trabajo en equipo, velocidad de reacción bajo presión\r\n\r\nZIG - ZAG\r\nParticipantes: dos o más personas (número par). \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: preferiblemente, exterior.\r\nMateriales: dos pelotas de goma espuma de distinto color, para simbolizar los equipos.\r\nConsigna: formando dos filas enfrentadas y con dos pelotas (una de cada color), se comienzan a pasar al compañero que está enfrente del que está al lado tuyo, formando así una cadena en zig ? zag. Hay que lograr que la pelota no caiga al suelo, si cae se vuelve a empezar desde el principio. La pelota que llegue antes al extremo de la fila es la pelota del grupo ganador.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa, reflejos y coordinación óculo?manual.\r\n- Desarrollo cognitivo: capacidad de atención y observación.\r\n- Desarrollo socio – emocional: velocidad de reacción bajo presión y/o excitación.', 'H', 1, 1),
(4, '2', 'Sugerencias para estimular aún más las habilidades cognitivas:\r\n• Pídale que cuente que hizo durante el día, para ayudar en el orden cronológico, se pueden tomar de referencia las cuatro comidas, por ejemplo: ¿Qué hiciste después de desayunar? ¿después de almorzar? ¿después de merendar? ¿después de cenar?\r\n• Felicite su buena memoria cada vez que menciona algo que paso en días anteriores.\r\n• Solicite que ayude en la organización de su propia ropa, contando cuantas prendas tiene de cada una y de que color. \r\n• Utilice frases y preguntas chistosas y/o ridículas, mientras hacen tareas en el hogar. Por ejemplo: ¿qué me pongo primero las medias o los zapatos?, “quién se pone los zapatos se gana un garabato”.\r\n• Proponga pequeñas carreras dentro de la casa, y sugiera una actividad cotidiana como premio, por ejemplo: “quién llega primero al baño: se lava los dientes”.\r\n\r\nEjercicios recomendados:  \r\n\r\nCOMANDO ESCUCHA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior.\r\nMateriales: lápiz y papel para cada participante\r\nConsigna: el participante comando canta: “hay que escuchar para ganar…hay que escuchar para ganar” señalando con una mano su propia oreja. Y da una instrucción a otro participante, por ejemplo: “sentarse”. Si la cumple, todos los participantes aplauden. Se vuelve a cantar y se da 2 consignas por ejemplo: agarra el lápiz y escribí algo en la hoja. Y nuevamente se canta, se agregando más cantidad de instrucciones.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa, motricidad fina.\r\n- Desarrollo cognitivo: la capacidad de atención, concentración, memoria, lenguaje.\r\n- Desarrollo socio – emocional: recuperación de información de manera rápida y bajo presión.', 'H', 2, 4),
(5, '10', 'Sugerencias para estimular aún más las habilidades cognitivas:\r\n• Pídale que cuente que hizo durante el día, para ayudar en el orden cronológico, se pueden tomar de referencia las cuatro comidas, por ejemplo: ¿Qué hiciste después de desayunar? ¿después de almorzar? ¿después de merendar? ¿después de cenar?\r\n• Felicite su buena memoria cada vez que menciona algo que paso en días anteriores.\r\n• Solicite que ayude en la organización de su propia ropa, contando cuantas prendas tiene de cada una y de que color. \r\n• Utilice frases y preguntas chistosas y/o ridículas, mientras hacen tareas en el hogar. Por ejemplo: ¿qué me pongo primero las medias o los zapatos?, “quién se pone los zapatos se gana un garabato”.\r\n• Inventen cada día una pequeña canción relacionada con lo que están haciendo y canten juntos, por ejemplo: “comemos mandarina en nuestra cocina… comemos mandarina en nuestra cocina, la, la, ra, la, la, ra…”\r\n• Proponga pequeñas carreras dentro de la casa, y sugiera una actividad cotidiana como premio, por ejemplo: “quién llega primero al baño: se lava los dientes”.\r\n• Para estimular su memoria sería muy bueno, mostrarle gráficos o imágenes a colores en sus clases o tareas y preguntarle que recuerda.\r\n• Juegue a diferenciar ruidos, palabras, sílabas.\r\n• Bríndele material didáctico que puedan manipular.\r\n• Podrá sostener mejor su atención y terminar sus tareas más rápido, si se divide las tareas en sub-tareas.\r\n\r\nEjercicios recomendados:  \r\n\r\nCOMANDO ESCUCHA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior.\r\nMateriales: lápiz y papel para cada participante\r\nConsigna: el participante comando canta: “hay que escuchar para ganar…hay que escuchar para ganar” señalando con una mano su propia oreja. Y da una instrucción a otro participante, por ejemplo: “sentarse”. Si la cumple, todos los participantes aplauden. Se vuelve a cantar y se da 2 consignas por ejemplo: agarra el lápiz y escribí algo en la hoja. Y nuevamente se canta, se agregando más cantidad de instrucciones.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa, motricidad fina.\r\n- Desarrollo cognitivo: la capacidad de atención, concentración, memoria, lenguaje.\r\n- Desarrollo socio – emocional: recuperación de información de manera rápida y bajo presión.', 'H', 2, 4),
(6, '3', 'Sugerencias para estimular aún más las habilidades socio-emocionales:\r\n• Piense en tres características positivas de su personalidad y dígaselas. \r\n• Felicite su accionar, cuando haga algo bueno esta semana.\r\n• En el momento de hacer tareas, aliente el progreso con frases positivas, tales como: vos podés - dale que lo lográs - sigamos practicando que ganamos -  cada vez lo haces mejor.\r\n\r\nEjercicios recomendados:  \r\n\r\nEMOCIONES A LA CARTA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: papel o cartulina\r\nConsigna: el adulto supervisa al niño/a mientras recorta 4 tarjetas de papel. Se dibuja una carita en cada tarjeta con diferentes expresiones: feliz, enojada, triste, triste con lágrimas.\r\nSe colocan las tarjetas en la mesa con los dibujos hacia abajo, se mezclan y cada participante en su turno elige una, tiene que decir cómo está la carita e inventar un motivo por ejemplo: “esta carita está enojada porque no quiere dormir”, “esta carita está triste porque se golpeó la mano”, etc. Se requiere atención porque no se pueden repetir las historias, si se repite alguna se vuelve a empezar. El adulto puede guiar a los niños cuando notan confusión en las emociones.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', 'H', 3, 18),
(7, '2', 'Sugerencias para estimular aún más las habilidades socio-emocionales:\r\n• Piense en tres características positivas de su personalidad y dígaselas. \r\n• Felicite su accionar, cuando haga algo bueno esta semana.\r\n• En el momento de hacer tareas, aliente el progreso con frases positivas, tales como: vos podés - dale que lo lográs - sigamos practicando que ganamos -  cada vez lo haces mejor.\r\n\r\nEjercicios recomendados:  \r\n\r\nEMOCIONES A LA CARTA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: papel o cartulina\r\nConsigna: el adulto supervisa al niño/a mientras recorta 4 tarjetas de papel. Se dibuja una carita en cada tarjeta con diferentes expresiones: feliz, enojada, triste, triste con lágrimas.\r\nSe colocan las tarjetas en la mesa con los dibujos hacia abajo, se mezclan y cada participante en su turno elige una, tiene que decir cómo está la carita e inventar un motivo por ejemplo: “esta carita está enojada porque no quiere dormir”, “esta carita está triste porque se golpeó la mano”, etc. Se requiere atención porque no se pueden repetir las historias, si se repite alguna se vuelve a empezar. El adulto puede guiar a los niños cuando notan confusión en las emociones.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', 'H', 3, 18),
(8, '10', 'Sugerencias para estimular aún más las habilidades socio-emocionales:\r\n• Piense en tres características positivas de su personalidad y dígaselas. \r\n• Felicite su accionar, cuando haga algo bueno esta semana.\r\n• En el momento de hacer tareas, aliente el progreso con frases positivas, tales como: vos podés - dale que lo lográs - sigamos practicando que ganamos -  cada vez lo haces mejor.\r\n\r\nEjercicios recomendados:  \r\n\r\nEMOCIONES A LA CARTA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: papel o cartulina\r\nConsigna: el adulto supervisa al niño/a mientras recorta 4 tarjetas de papel. Se dibuja una carita en cada tarjeta con diferentes expresiones: feliz, enojada, triste, triste con lágrimas.\r\nSe colocan las tarjetas en la mesa con los dibujos hacia abajo, se mezclan y cada participante en su turno elige una, tiene que decir cómo está la carita e inventar un motivo por ejemplo: “esta carita está enojada porque no quiere dormir”, “esta carita está triste porque se golpeó la mano”, etc. Se requiere atención porque no se pueden repetir las historias, si se repite alguna se vuelve a empezar. El adulto puede guiar a los niños cuando notan confusión en las emociones.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', 'H', 3, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subfactor`
--

CREATE TABLE IF NOT EXISTS `subfactor` (
  `subFac_id` int(10) NOT NULL AUTO_INCREMENT,
  `fac_id` int(10) NOT NULL,
  `subFac_nombre` varchar(60) NOT NULL,
  `subFac_descrip` varchar(255) NOT NULL,
  `subFac_estado` set('H','DH') NOT NULL DEFAULT 'H',
  PRIMARY KEY (`subFac_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `subfactor`
--

INSERT INTO `subfactor` (`subFac_id`, `fac_id`, `subFac_nombre`, `subFac_descrip`, `subFac_estado`) VALUES
(1, 1, 'motricidad gruesa', '', 'H'),
(2, 1, 'motricidad fina', '', 'H'),
(3, 1, 'autonomía', '', 'H'),
(4, 2, 'memoria visual', '', 'H'),
(5, 2, 'memoria auditiva', '', 'H'),
(6, 2, 'memoria kinestesica', '', 'H'),
(7, 2, 'atención', '', 'H'),
(8, 2, 'lenguaje', '', 'H'),
(9, 2, 'nocion de tiempo', '', 'H'),
(10, 2, 'nocion de espacio', '', 'H'),
(11, 2, 'noción de cantidad', '', 'H'),
(12, 2, 'noción de igual o diferente', '', 'H'),
(13, 2, 'dibujo', '', 'H'),
(14, 2, 'escritura', '', 'H'),
(15, 2, 'matemáticas 10', '', 'H'),
(16, 2, 'matemáticas 20', '', 'H'),
(17, 2, 'vista', '', 'H'),
(18, 3, 'inteligencia emocional', '', 'H'),
(19, 3, 'socialización', '', 'H'),
(20, 3, 'autoestima', '', 'H'),
(21, 3, 'curiosidad', '', 'H'),
(22, 3, 'conducta', '', 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talumno`
--

CREATE TABLE IF NOT EXISTS `talumno` (
  `idalumno` int(11) NOT NULL AUTO_INCREMENT,
  `idpersona` int(11) NOT NULL,
  `idescuela` int(11) NOT NULL,
  `idescuelagrado` int(11) NOT NULL,
  `boalumestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idalumno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `talumno`
--

INSERT INTO `talumno` (`idalumno`, `idpersona`, `idescuela`, `idescuelagrado`, `boalumestado`) VALUES
(1, 2, 1, 2, 1),
(2, 3, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talumparent`
--

CREATE TABLE IF NOT EXISTS `talumparent` (
  `idalumparent` int(11) NOT NULL AUTO_INCREMENT,
  `idpersona1` int(11) NOT NULL,
  `idpersona2` int(11) NOT NULL,
  `idparentesco` int(11) NOT NULL,
  PRIMARY KEY (`idalumparent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdocente`
--

CREATE TABLE IF NOT EXISTS `tdocente` (
  `iddocente` int(11) NOT NULL AUTO_INCREMENT,
  `idpersona` int(11) NOT NULL,
  `bodocestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`iddocente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tdocente`
--

INSERT INTO `tdocente` (`iddocente`, `idpersona`, `bodocestado`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdocesc`
--

CREATE TABLE IF NOT EXISTS `tdocesc` (
  `iddocesc` int(11) NOT NULL AUTO_INCREMENT,
  `iddocente` int(11) NOT NULL,
  `idescuela` int(11) NOT NULL,
  PRIMARY KEY (`iddocesc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `tdocesc`
--

INSERT INTO `tdocesc` (`iddocesc`, `iddocente`, `idescuela`) VALUES
(29, 1, 2),
(34, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tencuesta`
--

CREATE TABLE IF NOT EXISTS `tencuesta` (
  `idencuesta` int(11) NOT NULL AUTO_INCREMENT,
  `vcencnombre` varchar(250) NOT NULL,
  `vcencdescrip` varchar(500) DEFAULT NULL,
  `dtencfecha` date DEFAULT NULL,
  `vcencestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idencuesta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tencuesta`
--

INSERT INTO `tencuesta` (`idencuesta`, `vcencnombre`, `vcencdescrip`, `dtencfecha`, `vcencestado`) VALUES
(1, 'PRIMERA ENCUESTA', 'Esta es la primera encuesta, parte de una prueba piloto.-', '2015-10-20', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tescenc`
--

CREATE TABLE IF NOT EXISTS `tescenc` (
  `idescenc` int(11) NOT NULL AUTO_INCREMENT,
  `inescenccupototal` int(11) DEFAULT NULL,
  `inescenccupousando` int(11) DEFAULT NULL,
  `inescenccupousado` int(11) DEFAULT NULL,
  `idencuesta` int(11) NOT NULL,
  `idescuela` int(11) NOT NULL,
  PRIMARY KEY (`idescenc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tescenc`
--

INSERT INTO `tescenc` (`idescenc`, `inescenccupototal`, `inescenccupousando`, `inescenccupousado`, `idencuesta`, `idescuela`) VALUES
(1, 1000, 0, 0, 1, 1),
(2, 1000, 0, 0, 1, 2),
(3, 1000, 0, 0, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tescuela`
--

CREATE TABLE IF NOT EXISTS `tescuela` (
  `idescuela` int(11) NOT NULL AUTO_INCREMENT,
  `vcescnombre` varchar(150) NOT NULL,
  `vcescnro` varchar(100) NOT NULL,
  `vcescdirec` varchar(150) DEFAULT NULL,
  `vcesctel` varchar(150) DEFAULT NULL,
  `vcesccel` varchar(100) DEFAULT NULL,
  `vcescemail` varchar(100) DEFAULT NULL,
  `boescestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idescuela`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tescuela`
--

INSERT INTO `tescuela` (`idescuela`, `vcescnombre`, `vcescnro`, `vcescdirec`, `vcesctel`, `vcesccel`, `vcescemail`, `boescestado`) VALUES
(1, 'Mariquita Sanchez de Thopsom', '5500', NULL, NULL, NULL, NULL, 1),
(2, 'Escuela de Comercio', '5024', NULL, NULL, NULL, NULL, 1),
(3, 'Sargento Cabral', '5024', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tescuelagrado`
--

CREATE TABLE IF NOT EXISTS `tescuelagrado` (
  `idescuelagrado` int(11) NOT NULL AUTO_INCREMENT,
  `vcescgradnombre` varchar(150) NOT NULL,
  `boescgradestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idescuelagrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tescuelagrado`
--

INSERT INTO `tescuelagrado` (`idescuelagrado`, `vcescgradnombre`, `boescgradestado`) VALUES
(1, 'Jardin', 1),
(2, 'Primero', 1),
(3, 'Segundo', 1),
(4, 'Tercero', 1),
(5, 'Cuarto', 1),
(6, 'Quinto', 1),
(7, 'Sexto', 1),
(8, 'Salita de 4', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tfactor`
--

CREATE TABLE IF NOT EXISTS `tfactor` (
  `idfactor` int(11) NOT NULL AUTO_INCREMENT,
  `vcfactnombre` varchar(200) NOT NULL,
  `vcfactdescrip` varchar(500) DEFAULT NULL,
  `vcfactestado` tinyint(1) NOT NULL,
  `idencuesta` int(11) NOT NULL,
  PRIMARY KEY (`idfactor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tfactor`
--

INSERT INTO `tfactor` (`idfactor`, `vcfactnombre`, `vcfactdescrip`, `vcfactestado`, `idencuesta`) VALUES
(1, 'DESARROLLO PSICOMOTOR Y AUTONOMIA', NULL, 1, 1),
(2, 'DESARROLLO COGNITIVO', NULL, 1, 1),
(3, 'DESARROLLO SOCIO-EMOCIONAL', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tinfest`
--

CREATE TABLE IF NOT EXISTS `tinfest` (
  `idinfest` int(11) NOT NULL AUTO_INCREMENT,
  `vcinfestnombre` varchar(150) NOT NULL,
  `boinfestestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idinfest`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tinfest`
--

INSERT INTO `tinfest` (`idinfest`, `vcinfestnombre`, `boinfestestado`) VALUES
(1, 'incompleto', 1),
(2, 'completo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tinffacindice`
--

CREATE TABLE IF NOT EXISTS `tinffacindice` (
  `idinffacindice` int(11) NOT NULL AUTO_INCREMENT,
  `idinforme` int(11) NOT NULL,
  `idfactor` int(11) NOT NULL,
  `ininffacvalor` decimal(10,0) NOT NULL,
  `dtinffacindicefecha` date NOT NULL,
  PRIMARY KEY (`idinffacindice`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `tinffacindice`
--

INSERT INTO `tinffacindice` (`idinffacindice`, `idinforme`, `idfactor`, `ininffacvalor`, `dtinffacindicefecha`) VALUES
(1, 119, 1, '30', '2015-06-01'),
(2, 119, 2, '45', '2015-06-01'),
(3, 119, 3, '55', '2015-06-01'),
(4, 120, 1, '10', '2015-07-01'),
(5, 120, 2, '20', '2015-07-01'),
(6, 120, 3, '30', '2015-07-01'),
(7, 121, 1, '67', '2015-08-01'),
(8, 121, 2, '77', '2015-08-01'),
(9, 121, 3, '87', '2015-08-01'),
(10, 122, 1, '33', '2015-09-01'),
(11, 122, 2, '43', '2015-09-01'),
(12, 122, 3, '53', '2015-09-01'),
(16, 123, 1, '17', '2015-10-01'),
(17, 123, 2, '0', '2015-10-01'),
(18, 123, 3, '0', '2015-10-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tinforme`
--

CREATE TABLE IF NOT EXISTS `tinforme` (
  `idinforme` int(11) NOT NULL AUTO_INCREMENT,
  `dtinffecha` date NOT NULL,
  `boinfestado` tinyint(1) NOT NULL,
  `idinfest` int(11) DEFAULT NULL,
  `idencuesta` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  PRIMARY KEY (`idinforme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=124 ;

--
-- Volcado de datos para la tabla `tinforme`
--

INSERT INTO `tinforme` (`idinforme`, `dtinffecha`, `boinfestado`, `idinfest`, `idencuesta`, `idalumno`, `idpersona`) VALUES
(119, '2015-12-09', 2, 1, 1, 1, 2),
(120, '2015-12-09', 2, 1, 1, 1, 2),
(121, '2015-12-09', 2, 1, 1, 1, 2),
(122, '2015-12-09', 2, 1, 1, 1, 2),
(123, '2015-12-09', 2, 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tinfresp`
--

CREATE TABLE IF NOT EXISTS `tinfresp` (
  `idinfresp` int(11) NOT NULL AUTO_INCREMENT,
  `idinforme` int(11) NOT NULL,
  `idpregunta` int(11) NOT NULL,
  `idrespuesta` int(11) NOT NULL,
  PRIMARY KEY (`idinfresp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=817 ;

--
-- Volcado de datos para la tabla `tinfresp`
--

INSERT INTO `tinfresp` (`idinfresp`, `idinforme`, `idpregunta`, `idrespuesta`) VALUES
(789, 119, 5, 3),
(790, 119, 6, 3),
(794, 119, 2, 2),
(795, 119, 3, 2),
(796, 119, 4, 2),
(797, 120, 2, 1),
(798, 120, 3, 1),
(799, 120, 4, 1),
(800, 121, 2, 2),
(801, 121, 3, 2),
(802, 121, 4, 2),
(803, 121, 5, 2),
(807, 122, 5, 1),
(811, 122, 2, 2),
(812, 122, 3, 2),
(813, 122, 4, 2),
(814, 123, 2, 2),
(815, 123, 3, 2),
(816, 123, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tparentesco`
--

CREATE TABLE IF NOT EXISTS `tparentesco` (
  `idparentesco` int(11) NOT NULL AUTO_INCREMENT,
  `vcparentnombre` varchar(100) NOT NULL,
  `vcparentnombrever` varchar(150) NOT NULL,
  `boparenestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idparentesco`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tparentesco`
--

INSERT INTO `tparentesco` (`idparentesco`, `vcparentnombre`, `vcparentnombrever`, `boparenestado`) VALUES
(1, 'Padre', 'Hijo/a', 1),
(2, 'Madre', 'Hijo/a', 1),
(3, 'Docente', 'Alumno/a', 1),
(4, 'Tutor', 'Dependiente', 1),
(5, 'Otro', 'Otro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpersona`
--

CREATE TABLE IF NOT EXISTS `tpersona` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `vcpernombre` varchar(150) NOT NULL,
  `inperdni` int(11) NOT NULL,
  `dtperfechnac` date NOT NULL,
  `vcperdom` varchar(200) DEFAULT NULL,
  `vcpertelcodarea` varchar(50) DEFAULT NULL,
  `vcpertel` varchar(100) DEFAULT NULL,
  `vcpercelcodarea` varchar(50) DEFAULT NULL,
  `vcpercel` varchar(100) DEFAULT NULL,
  `idrol` int(11) NOT NULL,
  `boperestado` int(11) NOT NULL,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tpersona`
--

INSERT INTO `tpersona` (`idpersona`, `vcpernombre`, `inperdni`, `dtperfechnac`, `vcperdom`, `vcpertelcodarea`, `vcpertel`, `vcpercelcodarea`, `vcpercel`, `idrol`, `boperestado`) VALUES
(2, 'Duran Francisco Javier', 31436649, '1985-01-13', 'Diario de San Luis 2582', '387', '4242637', '387', '4025279', 4, 1),
(4, 'Duran Lorena', 31436647, '0000-00-00', 'domicilio', '387', '4242637', '387', '4025279', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpregresp`
--

CREATE TABLE IF NOT EXISTS `tpregresp` (
  `idpregresp` int(11) NOT NULL AUTO_INCREMENT,
  `idpregunta` int(11) NOT NULL,
  `idrespuesta` int(11) NOT NULL,
  PRIMARY KEY (`idpregresp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=151 ;

--
-- Volcado de datos para la tabla `tpregresp`
--

INSERT INTO `tpregresp` (`idpregresp`, `idpregunta`, `idrespuesta`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3),
(10, 4, 1),
(11, 4, 2),
(12, 4, 3),
(13, 5, 1),
(14, 5, 2),
(15, 5, 3),
(16, 6, 1),
(17, 6, 2),
(18, 6, 3),
(19, 7, 1),
(20, 7, 2),
(21, 7, 3),
(22, 8, 1),
(23, 8, 2),
(24, 8, 3),
(25, 9, 1),
(26, 9, 2),
(27, 9, 3),
(28, 10, 1),
(29, 10, 2),
(30, 10, 3),
(31, 11, 1),
(32, 11, 2),
(33, 11, 3),
(34, 12, 1),
(35, 12, 2),
(36, 12, 3),
(37, 13, 1),
(38, 13, 2),
(39, 13, 3),
(40, 14, 1),
(41, 14, 2),
(42, 14, 3),
(43, 15, 1),
(44, 15, 2),
(45, 15, 3),
(46, 16, 1),
(47, 16, 2),
(48, 16, 3),
(49, 17, 1),
(50, 17, 2),
(51, 17, 3),
(52, 18, 1),
(53, 18, 2),
(54, 18, 3),
(55, 19, 1),
(56, 19, 2),
(57, 19, 3),
(58, 20, 1),
(59, 20, 2),
(60, 20, 3),
(61, 21, 1),
(62, 21, 2),
(63, 21, 3),
(64, 22, 1),
(65, 22, 2),
(66, 22, 3),
(67, 23, 1),
(68, 23, 2),
(69, 23, 3),
(70, 24, 1),
(71, 24, 2),
(72, 24, 3),
(73, 25, 1),
(74, 25, 2),
(75, 25, 3),
(76, 26, 1),
(77, 26, 2),
(78, 26, 3),
(79, 27, 1),
(80, 27, 2),
(81, 27, 3),
(82, 28, 1),
(83, 28, 2),
(84, 28, 3),
(85, 29, 1),
(86, 29, 2),
(87, 29, 3),
(88, 30, 1),
(89, 30, 2),
(90, 30, 3),
(91, 31, 1),
(92, 31, 2),
(93, 31, 3),
(94, 32, 1),
(95, 32, 2),
(96, 32, 3),
(97, 33, 1),
(98, 33, 2),
(99, 33, 3),
(100, 34, 1),
(101, 34, 2),
(102, 34, 3),
(103, 35, 1),
(104, 35, 2),
(105, 35, 3),
(106, 36, 1),
(107, 36, 2),
(108, 36, 3),
(109, 37, 1),
(110, 37, 2),
(111, 37, 3),
(112, 38, 1),
(113, 38, 2),
(114, 38, 3),
(115, 39, 1),
(116, 39, 2),
(117, 39, 3),
(118, 40, 1),
(119, 40, 2),
(120, 40, 3),
(121, 41, 1),
(122, 41, 2),
(123, 41, 3),
(124, 42, 1),
(125, 42, 2),
(126, 42, 3),
(127, 43, 1),
(128, 43, 2),
(129, 43, 3),
(130, 44, 1),
(131, 44, 2),
(132, 44, 3),
(133, 45, 1),
(134, 45, 2),
(135, 45, 3),
(136, 46, 1),
(137, 46, 2),
(138, 46, 3),
(139, 47, 1),
(140, 47, 2),
(141, 47, 3),
(142, 48, 1),
(143, 48, 2),
(144, 48, 3),
(145, 49, 1),
(146, 49, 2),
(147, 49, 3),
(148, 50, 1),
(149, 50, 2),
(150, 50, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpregunta`
--

CREATE TABLE IF NOT EXISTS `tpregunta` (
  `idpregunta` int(11) NOT NULL AUTO_INCREMENT,
  `vcpregnombre` varchar(250) NOT NULL,
  `bopregestado` tinyint(1) NOT NULL,
  `idsubfactor` int(11) NOT NULL,
  PRIMARY KEY (`idpregunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `tpregunta`
--

INSERT INTO `tpregunta` (`idpregunta`, `vcpregnombre`, `bopregestado`, `idsubfactor`) VALUES
(1, 'puede caminar sobre una línea recta', 1, 1),
(2, 'puede lanzar una pelota hacia arriba y agarrarla nuevamente', 1, 1),
(3, 'puede ponerse la campera o delantal sin ayuda', 1, 1),
(4, 'puede recortar figuras con tijera para niños', 1, 2),
(5, 'puede abrochar un botón', 1, 2),
(6, 'puede dibujar letras o números', 1, 2),
(7, 'puede lavarse las manos sin ayuda', 1, 3),
(8, 'puede guardar solo sus cosas en su mochila', 1, 3),
(9, 'puede preparar solo sus elementos de trabajo o merienda', 1, 3),
(10, 'puede recordar mejor cuando ve láminas, dibujos o videos', 1, 8),
(11, 'puede concentrarse más cuando mira imágenes o películas', 1, 8),
(12, 'puede recordar lo que le dicen', 1, 5),
(13, 'puede recordar y cantar  canciones', 1, 5),
(14, 'puede recordar esquemas de gimnasia o coreografías de baile', 1, 6),
(15, 'puede recordar más lo que hace que lo que escucha', 1, 6),
(16, 'termina las cosas que empieza en el tiempo propuesto', 1, 7),
(17, 'puede pronunciar claramente todas las letras', 1, 4),
(18, 'puede decir su nombre y apellido correctamente', 1, 4),
(19, 'puede decir claramente lo que piensa y se entiende lo que dice', 1, 4),
(20, 'puede expresarse en tiempo presente y pasado. Ej.: “hoy comí banana", "ayer jugué con mamá"', 1, 9),
(21, 'puede utilizar correctamente las palabras, como "antes”, después", "ayer", "hoy" y "mañana"', 1, 9),
(22, 'puede diferenciar "arriba" de "abajo"', 1, 10),
(23, 'puede diferenciar "adentro" de "afuera"', 1, 10),
(24, 'puede diferenciar "adelante" de "atrás"', 1, 10),
(25, 'puede comprender lo que significa "mucho", "poco", o "más o menos"', 1, 11),
(26, 'puede comprender lo que es  "agregar" y "quitar"', 1, 11),
(27, 'puede distinguir si un objeto es igual o diferente a otro, por su forma, tamaño o color', 1, 12),
(28, 'dibuja círculos, figuras humanas y animales', 1, 13),
(29, 'puede dibujar un hombre con tres partes', 1, 13),
(30, 'puede trazar una línea horizontal', 1, 13),
(31, 'puede escribir algunas palabras simples', 1, 14),
(32, 'puede escribir su nombre', 1, 14),
(33, 'puede reconocer todas las vocales', 1, 15),
(34, 'puede reconocer y escribir los números del  1 al 10', 1, 16),
(35, 'puede  contar hasta 20 objetos o más', 1, 17),
(36, 'puede ver y copiar todo lo escrito en el pizarrón', 1, 18),
(37, 'puede imitar trazos  en una hoja', 1, 18),
(38, 'puede reconocer y expresar sanamente emociones como: alegría, miedo, enojo, desagrado y tristeza', 1, 21),
(39, 'puede controlar sus impulsos y expresar sentimientos sin dañar a otras personas', 1, 21),
(40, 'puede reconocer los sentimientos de los demás y realizar acciones para ponerlos contentos', 1, 21),
(41, 'puede demostrar cariño a las personas a través de gestos o palabras', 1, 22),
(42, 'puede compartir cosas, juguetes o comida con otros niños o niñas', 1, 22),
(43, 'puede establecer vínculos de amistad con otros niños o niñas y comparte momentos de juego', 1, 22),
(44, 'puede reconocer sus preferencias', 1, 23),
(45, 'puede confiar en sus capacidades y se alegra por sus logros', 1, 23),
(46, 'puede opinar y puede elegir qué quiere hacer cuando le preguntan', 1, 23),
(47, 'puede preguntar lo que le interesa saber', 1, 24),
(48, 'puede respetar y obedecer las reglas de convivencia en la escuela', 1, 25),
(49, 'puede saludar, se despide y usa el "por favor" y "gracias"', 1, 25),
(50, 'puede obedecer órdenes simples. Ejemplo: “saquen el cuaderno”', 1, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trespuesta`
--

CREATE TABLE IF NOT EXISTS `trespuesta` (
  `idrespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `vcrespnombre` varchar(250) NOT NULL,
  `borespestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idrespuesta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `trespuesta`
--

INSERT INTO `trespuesta` (`idrespuesta`, `vcrespnombre`, `borespestado`) VALUES
(1, 'NUNCA', 1),
(2, 'A VECES', 1),
(3, 'SIEMPRE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tresultado`
--

CREATE TABLE IF NOT EXISTS `tresultado` (
  `idresultado` int(11) NOT NULL AUTO_INCREMENT,
  `vcresultestninio` varchar(1000) DEFAULT NULL,
  `vcresultinfobt` varchar(1000) DEFAULT NULL,
  `vcresultsugprof` varchar(2000) DEFAULT NULL,
  `vcresultejepot` varchar(5000) DEFAULT NULL,
  `vcresultorientadult` varchar(1000) DEFAULT NULL,
  `boresultestado` tinyint(1) NOT NULL,
  `idsubfactor` int(11) NOT NULL,
  PRIMARY KEY (`idresultado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=147 ;

--
-- Volcado de datos para la tabla `tresultado`
--

INSERT INTO `tresultado` (`idresultado`, `vcresultestninio`, `vcresultinfobt`, `vcresultsugprof`, `vcresultejepot`, `vcresultorientadult`, `boresultestado`, `idsubfactor`) VALUES
(1, 'MUY MAL', 'Su motricidad gruesa necesita mucha estimulación para prevenir dificultades.', '•Pedirle que señale, nombre y localice partes del cuerpo, en un dibujo, en un compañero y en sí mismo frente a un espejo.\n•Reproducir sonidos de animales en diferentes tonos de voz (bajos y altos) e imitar sus diferentes movimientos.\n•Caminar sobre las puntas de los pies en línea recta. \n•Caminar sobre los talones de los pies en línea recta.\n•Saltar con los dos pies, cayendo en el mismo lugar. \n• Lanzar una pelota hacia arriba y agarrarla nuevamente.    \n•Sacarse y ponerse el delantal, de manera lenta y tranquila, sin ayuda y sin apuro.    ', 'CARGA UNA COSITA, LA HORMIGUITA  TITA\nParticipantes: dos o más personas. \nAdministración: 10 minutos (aproximadamente) por día durante un mes.\nEspacio: exterior o interior.\nMateriales: 10 objetos medianos. Una línea marcada con tiza en el piso o con un palo sobre la tierra.\nConsigna: indicar en la línea de juego, cuál extremo es la SALIDA y cual la LLEGADA. Cada participante tiene que caminar sobre la línea de juego, manteniendo el equilibrio y llevando un objeto en la palma de la mano, sin que se caiga y cantando “carga una cosita, la hormiguita tita”\nCada vez que logra llevar el objeto desde el punto de partida hasta el punto de llegada: gana y se aplaude el logro\nEstimula: \n- Desarrollo psicomotor: motricidad gruesa. - Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, memoria auditiva.\n- Desarrollo socio – emocional: autoestima.\n\nANDO - ANDO - IMAGINANDO\nParticipantes: dos o más personas. \nAdministración: 10 minutos (aproximadamente) por día durante un mes.\nEspacio: exterior o interior.\nMateriales: calzado cómodo (o descalzos).\nConsigna: el adulto dirige el juego cantando en voz alta: Ando - Ando - Imaginando que somos…\nLos participantes preguntan:- ¿Qué somos cómo?\n- Muy altos (al mismo tiempo levanta sus brazos y camina en puntas de pie, demostrando lo que hay que hacer).\nTodos los participantes lo imitan, hasta que vuelve a cantar otra consigna: \nAndo - Ando - Imaginando que somos…\nLos participantes preguntan:- ¿Qué somos cómo?\n-Muy bajos (al mismo tiempo camina en cuclillas y/o agachado). \nY así sucesivamente.\n- Ando - Ando - Imaginando que somos… muy grandes (al mismo tiempo infla sus mejillas, abre los brazos y camina con las piernas abiertas).\n- Ando - Ando - Imaginando que somos… muy  angostos (al mismo tiempo camina con los brazos pegados al cuerpo y los pies muy juntos con pasos muy cortos).\nEstimula: \n- Desarrollo psicomotor: motricidad gruesa. - Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, memoria auditiva, memoria visual y memoria kinestésica.\n- Desarrollo socio – emocional: autoestima y socialización.', '\nPor lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PEDIATRIA – PSICOMOTRICIDAD', 1, 1),
(2, 'MAL', 'Su motricidad gruesa necesita más estimulación para prevenir dificultades.', '•Pedirle que señale, nombre y localice partes del cuerpo, en un dibujo, en un compañero y en sí mismo frente a un espejo.\r\n•Guiarlo para que nombre cada parte del cuerpo y diga su funcionalidad o utilidad.\r\n•Bailar en diferentes ritmos.\r\n• Lanzar una pelota hacia arriba y agarrarla nuevamente.    \r\n•Sacarse y ponerse el delantal, sin ayuda.\r\n•Sostenerse parado sobre el pie derecho manteniendo el equilibrio, mientras se cuenta hasta 10. Después sobre el izquierdo.', 'EMBOCA EMBOCA QUE LA SUERTE ES LOCA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: pelota (comprada o hecha en casa con papel o trapo) balde o cacerola o caja. \r\nConsigna: el adulto muestra como tirar la pelota para embocarla en el recipiente elegido (balde, cacerola o caja).\r\nCada participante en su turno, debe decir en voz alta: “emboca, emboca, que la suerte es loca” y lanzar una pelota con la mano derecha y con la izquierda, intentando embocarla en el balde, cacerola o caja.\r\nFelicite los aciertos y aliente a intentarlo otra vez, si no logra embocar la pelota, en los primeros intentos.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa. - Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.\r\n\r\n\r\nCARGA UNA COSITA, LA HORMIGUITA  TITA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: 10 objetos medianos. Una línea marcada con tiza en el piso o con un palo sobre la tierra.\r\nConsigna: indicar en la línea de juego, cuál extremo es la SALIDA y cual la LLEGADA. Cada participante tiene que caminar sobre la línea de juego, manteniendo el equilibrio y llevando un objeto en la palma de la mano, sin que se caiga y cantando “carga una cosita, la hormiguita tita”\r\n. Cada vez que logra llevar el objeto desde el punto de partida hasta el punto de llegada: gana y se aplaude el logro\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa. - Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 1),
(3, 'MASO', 'Su motricidad gruesa es buena, con estimulación mejoraría notablemente.', '•Guiarlo para que nombre cada parte del cuerpo y diga su funcionalidad o utilidad.\n•Pedir que frote una mano sobre su  pupitre o la mesa, y con la otra realice golpes suaves coordinados en la misma superficie.\n•Subir y/o bajar escaleras: primero agarrándose de la baranda y luego sin agarrarse. \n•Sacarse y ponerse el delantal, sin ayuda.\n•Supervisado por un adulto, caminar sobre un cordón de vereda, colocando un pie delante del otro en cada paso.\n•Saltar a la soga.', 'CAMINITO - CAMINATA ¿DONDE ESTARA MI CORBATA?\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: calzado cómodo (o descalzos).\r\nConsigna: el adulto dirige el juego cantando en voz alta: caminito – caminata ¿dónde estará mi corbata?\r\nLos participantes responden: -Lejos muy lejos…\r\nY todos comienzan a caminar alejados uno del otro.\r\nEl adulto canta varias consignas:\r\n- Caminito – caminata ¿dónde estará mi corbata? - Cerca muy cerca…\r\nY todos comienzan a caminar cerca uno del otro.  \r\n-Caminito – caminata ¿dónde estará mi corbata? -Adelante muy adelante…\r\nY todos comienzan a caminar adelante de otro participante.\r\n-Caminito – caminata ¿dónde estará mi corbata? -Atrás muy atrás…\r\nY todos comienzan a caminar atrás de otro participante.\r\n-Caminito – caminata ¿dónde estará mi corbata? -Abajo muy abajo…\r\nY todos comienzan a caminar en cuclillas.\r\n-Caminito – caminata ¿dónde estará mi corbata? -Arriba muy arriba…\r\nY todos comienzan a caminar en punta de los pies.\r\n\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa. - Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, memoria auditiva, memoria kinestésica.\r\n- Desarrollo socio – emocional: autoestima y socialización.', NULL, 1, 1),
(4, 'MASO', 'Su motricidad gruesa es buena.', '•Pedir que frote una mano sobre su  pupitre o la mesa, y con la otra realice golpes suaves coordinados en la misma superficie.\r\n•Subir y/o bajar escaleras: primero agarrándose de la baranda y luego sin agarrarse. \r\n•Sacarse y ponerse el delantal, sin ayuda.\r\n•Caminar marcha atrás manteniendo el equilibrio.\r\n•Supervisado por un adulto, caminar sobre un cordón de vereda, colocando un pie delante del otro en cada paso.\r\n•Saltar a la soga.', 'DERECHA VOS, DERECHA YO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: pelota de trapo \r\nConsigna: Lanzar la pelota a otro participante, primero con las dos manos y luego con una mano (derecha e izquierda).\r\nRecibir la pelota, con las dos manos y luego con una mano (derecha e izquierda).\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa. - Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.\r\n\r\nIZQUIERDA VOS, IZQUIERDA YO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: pelota de trapo \r\nConsigna: Lanzar la pelota a otro participante, primero con las dos manos y luego con una mano izquierda.\r\nRecibir la pelota, con las dos manos y luego con una mano izquierda.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa. - Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 1),
(5, 'BIEN', 'Su motricidad gruesa es muy buena.', '•Pedir que frote una mano sobre su  pupitre o la mesa, y con la otra realice golpes suaves coordinados en la misma superficie.\r\n•Subir y/o bajar escaleras: primero agarrándose de la baranda y luego sin agarrarse. \r\n•Sacarse y ponerse el delantal, sin ayuda.\r\n•Caminar marcha atrás manteniendo el equilibrio.\r\n•Supervisado por un adulto, caminar sobre un cordón de vereda, colocando un pie delante del otro en cada paso.\r\n•Saltar a la soga.', 'DERECHA VOS, DERECHA YO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: pelota de trapo \r\nConsigna: Lanzar la pelota a otro participante, primero con las dos manos y luego con una mano (derecha e izquierda).\r\nRecibir la pelota, con las dos manos y luego con una mano (derecha e izquierda).\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa. - Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.\r\n\r\nIZQUIERDA VOS, IZQUIERDA YO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: pelota de trapo \r\nConsigna: Lanzar la pelota a otro participante, primero con las dos manos y luego con una mano izquierda.\r\nRecibir la pelota, con las dos manos y luego con una mano izquierda.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa. - Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 1),
(6, 'MUY MAL', '\r\nY la motricidad fina necesita  desarrollarse mucho más.\r\n', '•Realizar trazos con los dedos o con un palo, sobre la tierra, arena o el agua.\r\n•Jugar con masa o plastilina, armando pelotas, víboras, etc.\r\n•Armar filas de piedritas pequeñas, hojas o palitos cortados en pedazos chicos.\r\n•Trozar papel con los dedos. \r\n•Pasar las hojas de un libro, una por una.\r\n•Cantar y acompañar la canción realizando gestos con las manos.\r\n•Girar las manos, primero con los puños cerrados, después con los dedos extendidos.\r\n•Abrir una mano mientras se cierra la otra, primero despacio, luego más rápido.\r\n•Seguir un objeto o una luz con la mirada sin mover la cabeza, realizando distintas trayectorias (arriba-abajo, izquierda-derecha, diagonal, curvas).\r\n', 'ARMA, ARMA QUE SE DESARMA\r\nParticipantes: dos o más personas. \r\nAdministración: 30 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: tijera con puntas redondeadas,  recorte de revista con la imagen de una persona (una persona por cada participante). \r\nConsigna: ayudar recortar la figura en 2 partes grandes. Y decirle “arma, arma que se desarma” para que una las 2 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 2 partes por la mitad para que queden 4 partes medianas. Y decirle “arma, arma que se desarma” para que una las 4 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 4 partes por la mitad para que queden 8 partes pequeñas. Y decirle “arma, arma que se desarma” para que una las 8 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y aplaudir.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nCuando lo logra: felicitar y aplaudir.\r\n\r\n\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina y coordinación óculo-manual.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva y memoria visual.\r\n- Desarrollo socio – emocional: autoestima y tolerancia  a la frustración.\r\n\r\nROSCA, ROSCA DESENROSCA 1,2,3\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior\r\nMateriales: 5 botellas plásticas de bebidas de diferentes marcas y con tapas a rosca, una pista circular.\r\nConsigna: armar 2 equipos. Dibujar con tiza (con un palo si hay tierra) en el suelo un círculo grande. Colocar las botellas con las tapas intercambiadas, distribuidas dentro del círculo. Al participante que le toque jugar, se lo hará girar tapándole los ojos con las manos, para marearlo un poco, mientras el resto de los participantes cantan “rosca, rosca desenrosca a la una, a las dos y a las tres”.\r\nSe le destapan los ojos y el participante tiene que desenroscar  las tapas y enroscar cada tapa en las botellas que le corresponde. Gana el que enrosco correctamente más tapas y se aplaude a todos por intentarlo.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina, coordinación óculo-manual, equilibrio.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.\r\n\r\nLOS VEINTIDOS FIDEOS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: hilo, fideos que se puedan enhebrar, tijera de puntas redondeadas.\r\nConsigna: cada participante recibirá un trozo de hilo. Se colocan los fideos en el centro de la mesa o en el centro de la ronda (si se trabaja en el suelo) \r\nEl adulto y los participantes contarán cantando desde el número 1 hasta el 22. Y mientras se cuenta, trataran de enhebrar la mayor cantidad de fideos posibles en su hilo. Al llegar al número 22, termina la ronda y se cuenta cuantos pudo enhebrar cada uno. Gana el que enhebró más y se aplaude a todos por intentarlo.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PEDIATRIA – PSICOMOTRICIDAD', 1, 2),
(7, 'MAL', 'Y la motricidad fina necesita  desarrollarse aún más.', '•Aplaudir.\r\n•Abrochar y desabrochar botones.\r\n•Doblar papel y trozar por el doblez.\r\n•Recortar figuras sencillas, con tijeras de puntas redondeadas.\r\n•Mover las dos manos juntas en varias direcciones: hacia arriba, hacia abajo, derecha, izquierda.\r\n•Copiar dibujos sencillos intentando ser fiel al modelo.\r\n•Seguir un objeto o una luz con la mirada sin mover la cabeza, realizando distintas trayectorias (arriba-abajo, izquierda-derecha, diagonal, curvas).\r\n•Colorear dibujos respetando los límites.\r\n\r\n\r\n•Doblar papel y trozar por el doblez.\r\n•Realizar trazos con los dedos o con un palo, sobre la tierra, arena o el agua.\r\n•Jugar con masa o plastilina, armando pelotas, víboras, etc.\r\n•Trozar papel con los dedos.\r\n•Cantar y acompañar la canción realizando gestos con las manos.\r\n•Girar las manos, primero con los puños cerrados, después con los dedos extendidos.\r\n•Abrir una mano mientras se cierra la otra, primero despacio, luego más rápido.\r\n•Seguir un objeto o una luz con la mirada sin mover ', 'ARMA, ARMA QUE SE DESARMA\r\nParticipantes: dos o más personas. \r\nAdministración: 30 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: tijera con puntas redondeadas,  recorte de revista con la imagen de una persona (una persona por cada participante). \r\nConsigna: ayudar recortar la figura en 2 partes grandes. Y decirle “arma, arma que se desarma” para que una las 2 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 2 partes por la mitad para que queden 4 partes medianas. Y decirle “arma, arma que se desarma” para que una las 4 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 4 partes por la mitad para que queden 8 partes pequeñas. Y decirle “arma, arma que se desarma” para que una las 8 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y aplaudir.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nCuando lo logra: felicitar y aplaudir.\r\n\r\n\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina y coordinación óculo-manual.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva y memoria visual.\r\n- Desarrollo socio – emocional: autoestima y tolerancia  a la frustración.\r\n\r\n\r\n\r\nROSCA, ROSCA DESENROSCA 1,2,3\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior\r\nMateriales: 5 botellas plásticas de bebidas de diferentes marcas y con tapas a rosca, una pista circular.\r\nConsigna: armar 2 equipos. Dibujar con tiza (con un palo si hay tierra) en el suelo un círculo grande. Colocar las botellas con las tapas intercambiadas, distribuidas dentro del círculo. Al participante que le toque jugar, se lo hará girar tapándole los ojos con las manos, para marearlo un poco, mientras el resto de los participantes cantan “rosca, rosca desenrosca a la una, a las dos y a las tres”.\r\nSe le destapan los ojos y el participante tiene que desenroscar  las tapas y enroscar cada tapa en las botellas que le corresponde. Gana el que enrosco correctamente más tapas y se aplaude a todos por intentarlo.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina, coordinación óculo-manual, equilibrio.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 2),
(8, 'MAL', 'Y la motricidad fina necesita  desarrollarse aún más.', '•Doblar papel y trozar por el doblez.\n•Realizar trazos con los dedos o con un palo, sobre la tierra, arena o el agua.\n•Jugar con masa o plastilina, armando pelotas, víboras, etc.\n•Trozar papel con los dedos.\n•Cantar y acompañar la canción realizando gestos con las manos.\n•Girar las manos, primero con los puños cerrados, después con los dedos extendidos.\n•Abrir una mano mientras se cierra la otra, primero despacio, luego más rápido.\n•Seguir un objeto o una luz con la mirada sin mover la cabeza, realizando distintas trayectorias (arriba-abajo, izquierda-derecha, diagonal, curvas).', 'ARMA, ARMA QUE SE DESARMA\r\nParticipantes: dos o más personas. \r\nAdministración: 30 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: tijera con puntas redondeadas,  recorte de revista con la imagen de una persona (una persona por cada participante). \r\nConsigna: ayudar recortar la figura en 2 partes grandes. Y decirle “arma, arma que se desarma” para que una las 2 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 2 partes por la mitad para que queden 4 partes medianas. Y decirle “arma, arma que se desarma” para que una las 4 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 4 partes por la mitad para que queden 8 partes pequeñas. Y decirle “arma, arma que se desarma” para que una las 8 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y aplaudir.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nCuando lo logra: felicitar y aplaudir.\r\n\r\n\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina y coordinación óculo-manual.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva y memoria visual.\r\n- Desarrollo socio – emocional: autoestima y tolerancia  a la frustración.\r\n\r\n\r\n\r\nROSCA, ROSCA DESENROSCA 1,2,3\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior\r\nMateriales: 5 botellas plásticas de bebidas de diferentes marcas y con tapas a rosca, una pista circular.\r\nConsigna: armar 2 equipos. Dibujar con tiza (con un palo si hay tierra) en el suelo un círculo grande. Colocar las botellas con las tapas intercambiadas, distribuidas dentro del círculo. Al participante que le toque jugar, se lo hará girar tapándole los ojos con las manos, para marearlo un poco, mientras el resto de los participantes cantan “rosca, rosca desenrosca a la una, a las dos y a las tres”.\r\nSe le destapan los ojos y el participante tiene que desenroscar  las tapas y enroscar cada tapa en las botellas que le corresponde. Gana el que enrosco correctamente más tapas y se aplaude a todos por intentarlo.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina, coordinación óculo-manual, equilibrio.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 2),
(9, 'MASO', 'Y la motricidad fina está medianamente desarrollada.', '•Atar y desatar cordones.\n•Barajar, repartir cartas.\n•Doblar papel y trozar por el doblez.\n•Mover las dos manos juntas en varias direcciones: hacia arriba, hacia abajo, derecha, izquierda.\n•Realización de laberintos de poca dificultad. \n•Recortar figuras geométricas simples: cuadrado, círculo, rectángulo.\n •Copiar dibujos sencillos intentando ser fiel al modelo y colorearlos respetando los límites.\n•Realización de rompecabezas sencillos.', 'ARMA, ARMA QUE SE DESARMA\r\nParticipantes: dos o más personas. \r\nAdministración: 30 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: tijera con puntas redondeadas,  recorte de revista con la imagen de una persona (una persona por cada participante). \r\nConsigna: ayudar recortar la figura en 2 partes grandes. Y decirle “arma, arma que se desarma” para que una las 2 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 2 partes por la mitad para que queden 4 partes medianas. Y decirle “arma, arma que se desarma” para que una las 4 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 4 partes por la mitad para que queden 8 partes pequeñas. Y decirle “arma, arma que se desarma” para que una las 8 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y aplaudir.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nCuando lo logra: felicitar y aplaudir.\r\n\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina y coordinación óculo-manual.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva y memoria visual.\r\n- Desarrollo socio – emocional: autoestima y tolerancia  a la frustración.\r\n\r\nSORTEO DE MOVIMIENTOS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: pañuelo o tela, tijera de puntas redondeadas, papel, lápiz y una bolsita.\r\nConsigna: anotar las siguientes palabras; batidora, hélice, pájaro, remolino, molino (pueden agregarse más palabras). \r\nRecortar las  palabras. Doblarlas de manera que no se lean. Colocar las palabras en la bolsita y mezclar. En su turno, se vendará con el pañuelo a cada participante para que parado, saque una palabra e  imite con sus manos los movimientos de las diferentes cosas (batidora, hélices de helicóptero, alas de pájaros, etc.) Se aplaude a todos por cada imitación.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina, equilibrio.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 2),
(10, 'MASO', 'Y la motricidad fina está medianamente desarrollada.', '•Barajar, repartir cartas.\r\n•Realización de laberintos de dificultad progresiva, insistiendo específicamente en que no se debe salir en ningún momento del recorrido.\r\n•Recortar figuras geométricas (cada vez más con mayor dificultad).\r\n•Copiar dibujos sencillos intentando ser fiel al modelo.\r\n•Realización de rompecabezas de piezas pequeñas.\r\n•Realizar el símbolo del infinito, muchas veces en papel o en el pizarrón (similar a un número 8 acostado).\r\n•Colorear dibujos.', 'DIBUJO AEREO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: lápiz y papel.\r\nConsigna: el adulto guiara el juego. Dibujará en el papel una cosa y luego dibujará lo mismo en el aire con un dedo.\r\nCada participante tiene que observar y recordar las diferentes figuras. En su turno tiene que reproducir, dibujando en el aire con un dedo, alguna de las figuras que vio.\r\nSe aplaude a todos por cada dibujo.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina, motricidad gruesa y coordinación óculo-manual.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual.\r\n- Desarrollo socio – emocional: autoestima.\r\n\r\n\r\n\r\nARMA, ARMA QUE SE DESARMA\r\nParticipantes: dos o más personas. \r\nAdministración: 15 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: tijera con puntas redondeadas,  recorte de revista con la imagen de una persona (una persona por cada participante). \r\nConsigna: ayudar recortar la figura en 2 partes grandes. Y decirle “arma, arma que se desarma” para que una las 2 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 2 partes por la mitad para que queden 4 partes medianas. Y decirle “arma, arma que se desarma” para que una las 4 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 4 partes por la mitad para que queden 8 partes pequeñas. Y decirle “arma, arma que se desarma” para que una las 8 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y aplaudir.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nCuando lo logra: felicitar y aplaudir.\r\n\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina y coordinación óculo-manual.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva y memoria visual.\r\n- Desarrollo socio – emocional: autoestima y tolerancia  a la frustración.', NULL, 1, 2),
(11, 'BIEN', 'Y la motricidad fina está desarrollándose satisfactoriamente.', '•Barajar, repartir cartas.\r\n•Realización de laberintos de dificultad progresiva, insistiendo específicamente en que no se debe salir en ningún momento del recorrido.\r\n•Recortar figuras geométricas (cada vez más con mayor dificultad).\r\n•Copiar dibujos sencillos intentando ser fiel al modelo.\r\n•Realización de rompecabezas de piezas pequeñas.\r\n•Realizar el símbolo del infinito, muchas veces en papel o en el pizarrón (similar a un número 8 acostado).', 'ARMA, ARMA QUE SE DESARMA\r\nParticipantes: dos o más personas. \r\nAdministración: 15 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior.\r\nMateriales: tijera con puntas redondeadas,  recorte de revista con la imagen de una persona (una persona por cada participante). \r\nConsigna: ayudar recortar la figura en 2 partes grandes. Y decirle “arma, arma que se desarma” para que una las 2 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 2 partes por la mitad para que queden 4 partes medianas. Y decirle “arma, arma que se desarma” para que una las 4 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y avanzar con la siguiente consigna\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nRecortar cada una de las 4 partes por la mitad para que queden 8 partes pequeñas. Y decirle “arma, arma que se desarma” para que una las 8 partes formando la figura nuevamente. \r\nSi lo logra: felicitar y aplaudir.\r\nSi no lo logra: brindarle otra oportunidad con una sonrisa, diciéndole “inténtalo otra vez, que practicando vas a poder” (ayudar hasta que lo logre).\r\nCuando lo logra: felicitar y aplaudir.\r\n\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina y coordinación óculo-manual.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva y memoria visual.\r\n- Desarrollo socio – emocional: autoestima y tolerancia  a la frustración.', NULL, 1, 2),
(12, 'MUY MAL', 'Aún no logra manejarse con autonomía en consignas cotidianas como  sacar o guardar sus elementos trabajo, preparar su mochila y para higienizar sus manos.', '•Practicar abrochar los botones de alguna de sus  ropas, sin tenerla puesta. \r\n•Poner la ropa del derecho y doblar algunas prendas simples. \r\n•Subir y bajar cierres.\r\n•Ponerse la mochila sin ayuda.\r\n•Limpiarse la nariz con ayuda verbal.\r\n•Guardar los juguetes u objetos que utiliza en la escuela y en la casa.\r\n•Limpiarse la boca con la servilleta mientras está comiendo', 'EL  1,2,3 PARA GUARDAR LOS ÚTILES EN LA MOCHILA\r\nParticipantes: dos o más personas. \r\nAdministración: 5 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: mochila y útiles escolares\r\nConsigna: el adulto dice: atención vamos a jugar a que nos vamos de viaje.\r\n1: ABRO la mochila.\r\n2: AGARRO el cuaderno y lo PONGO ADENTRO (y/  todo lo que tenga que guardar).\r\n3: CIERRO la mochila.\r\nDiga: ¡Excelente! (si faltan cosas por guardar, realice el 1,2,3 nuevamente)\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa y fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.\r\n\r\n\r\nEL  1,2,3 PARA PREPARAR LOS MATERIALES DE TRABAJO\r\nParticipantes: dos o más personas. \r\nAdministración: 5 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: mochila y útiles escolares\r\nConsigna: el adulto dice: atención vamos a prepararnos para algo muy, pero muy importante (sonría)\r\n1: Todos los que tengan “boca” ganan diez puntos, si la mantienen cerrada y  ponen en la mesa (nombre el  objeto que corresponda. Por ejemplo: el lápiz) \r\n2: ¡Ahora 100 puntos! Todos los que tengan “dos ojos” ganan cien puntos, si los mantienen abiertos y ponen en la mesa (el objeto que corresponda)\r\n3: Diga ¡Excelente! (si faltan cosas por sacar, realice el 1,2,3 nuevamente)\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa y fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PEDIATRIA – PSICOMOTRICIDAD', 1, 3),
(13, 'MAL', 'Aún no logra manejarse de manera independiente respecto a consignas cotidianas y necesita ayuda del adulto en muchas ocasiones para sacar o guardar sus elementos de trabajo.', '•Vestirse sin ayuda en las prendas fáciles y con ayuda verbal en las prendas más complicadas.\r\n•Practicar abrochar los botones de alguna de sus  ropas, sin tenerla puesta. \r\n•Ponerse la mochila sin ayuda.\r\n•Limpiarse la nariz con ayuda verbal.\r\n•Guardar los juguetes u objetos que utiliza en la escuela y en la casa.\r\n•Ayudar en alguna tarea sencilla del hogar, como por ejemplo regar las plantas o enrollar las medias.', 'EL  1,2,3 PARA GUARDAR LOS ÚTILES EN LA MOCHILA\r\nParticipantes: dos o más personas. \r\nAdministración: 5 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: mochila y útiles escolares\r\nConsigna: el adulto dice: atención vamos a jugar a que nos vamos de viaje.\r\n1: ABRO la mochila.\r\n2: AGARRO el cuaderno y lo PONGO ADENTRO (y/  todo lo que tenga que guardar).\r\n3: CIERRO la mochila.\r\nDiga: ¡Excelente! (si faltan cosas por guardar, realice el 1,2,3 nuevamente)\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa y fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.\r\n\r\nEL  1,2,3 PARA PREPARAR LOS MATERIALES DE TRABAJO\r\nParticipantes: dos o más personas. \r\nAdministración: 5 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: mochila y útiles escolares\r\nConsigna: el adulto dice: atención vamos a prepararnos para algo muy, pero muy importante (sonría)\r\n1: Todos los que tengan “boca” ganan diez puntos, si la mantienen cerrada y  ponen en la mesa (nombre el  objeto que corresponda. Por ejemplo: el lápiz) \r\n2: ¡Ahora 100 puntos! Todos los que tengan “dos ojos” ganan cien puntos, si los mantienen abiertos y ponen en la mesa (el objeto que corresponda)\r\n3: Diga ¡Excelente! (si faltan cosas por sacar, realice el 1,2,3 nuevamente)\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa y fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 3),
(14, 'MASOMENOS', '\r\nAún no logra manejarse de manera independiente, en ocasiones necesita un poco de ayuda para cumplir consignas cotidianas.', '\r\n•Vestirse sin ayuda.\r\n•Lavarse la cara, las manos y los dientes.\r\n•Limpiarse la nariz con ayuda verbal.\r\n•Guardar los juguetes u objetos que utiliza en la escuela y en la casa.\r\n•Ayudar en alguna tarea sencilla del hogar, como por ejemplo regar las plantas o enrollar las medias.\r\n•Ir al baño sin compañía, y solicitar ayuda solo en situaciones difíciles.\r\n\r\n\r\n', 'EL  1,2,3 PARA GUARDAR LOS ÚTILES EN LA MOCHILA\r\nParticipantes: dos o más personas. \r\nAdministración: 5 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: mochila y útiles escolares\r\nConsigna: el adulto dice: atención vamos a jugar a que nos vamos de viaje.\r\n1: ABRO la mochila.\r\n2: AGARRO el cuaderno y lo PONGO ADENTRO (y/  todo lo que tenga que guardar).\r\n3: CIERRO la mochila.\r\nDiga: ¡Excelente! (si faltan cosas por guardar, realice el 1,2,3 nuevamente)\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa y fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.\r\n\r\nEL  1,2,3 PARA PREPARAR LOS MATERIALES DE TRABAJO\r\nParticipantes: dos o más personas. \r\nAdministración: 5 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: mochila y útiles escolares\r\nConsigna: el adulto dice: atención vamos a prepararnos para algo muy, pero muy importante (sonría)\r\n1: Todos los que tengan “boca” ganan diez puntos, si la mantienen cerrada y  ponen en la mesa (nombre el  objeto que corresponda. Por ejemplo: el lápiz) \r\n2: ¡Ahora 100 puntos! Todos los que tengan “dos ojos” ganan cien puntos, si los mantienen abiertos y ponen en la mesa (el objeto que corresponda)\r\n3: Diga ¡Excelente! (si faltan cosas por sacar, realice el 1,2,3 nuevamente)\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa y fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 3),
(15, 'MASOMENOS', '\r\nEn algunas ocasiones, logra manejarse de manera independiente al realizar consignas, tales como: sacar o guardar elementos de trabajo e higienizar sus manos.\r\n', '•Peinarse.\r\n•Lavarse la cara, las manos y los dientes.\r\n•Vestirse sin ayuda.\r\n•Poner la ropa del derecho y doblar las prendas que utilizó.\r\n•Usar la cuchara y el tenedor correctamente para comer.\r\n•Ir al baño sin compañía, y solicitar ayuda solo en situaciones difíciles.', 'CUENTO 10 PARA GUARDAR Y/O SACAR\r\nParticipantes: dos o más personas. \r\nAdministración: 3 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: mochila y útiles escolares\r\nConsigna: el adulto dice: -Qué te parece si inventamos un juego, a ver quién gana. Dale que yo contaba y vos guardabas. Yo cerraba los ojos y contaba rápido hasta 10 para ganarte y como vos eras súper veloz guardabas (o sacabas) tus cosas, más rápido que yo y me ganabas ¿dale?\r\nEl adulto cuenta hasta diez y abre los ojos y con expresión de sorpresa dice ¡Excelente! Si guardo todas las cosas (si faltan cosas por guardar y/o sacar, realice el juego nuevamente)\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa y fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 3),
(16, 'BIEN', 'Logra manejarse de manera independiente en algunas consignas, tales como: sacar o guardar elementos de trabajo e higienizar sus manos.', '•Peinarse.\r\n•Lavarse la cara, las manos y los dientes.\r\n•Vestirse sin ayuda.\r\n•Poner la ropa del derecho y doblar las prendas que utilizó.\r\n•Usar la cuchara y el tenedor correctamente para comer.\r\n•Ir al baño sin compañía, y solicitar ayuda solo en situaciones difíciles.', 'CUENTO 10 PARA GUARDAR Y/O SACAR\r\nParticipantes: dos o más personas. \r\nAdministración: 3 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: mochila y útiles escolares\r\nConsigna: el adulto dice: -Qué te parece si inventamos un juego, a ver quién gana. Dale que yo contaba y vos guardabas. Yo cerraba los ojos y contaba rápido hasta 10 para ganarte y como vos eras súper veloz guardabas (o sacabas) tus cosas, más rápido que yo y me ganabas ¿dale?\r\nEl adulto cuenta hasta diez y abre los ojos y con expresión de sorpresa dice ¡Excelente! Si guardo todas las cosas (si faltan cosas por guardar y/o sacar, realice el juego nuevamente)\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa y fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 3),
(17, 'MUY MAL', 'Su lenguaje oral aún es muy acotado.', '•Bríndele a diario afecto, serenidad y estimulación nombrando las cosas y las actividades que realizan conjuntamente, por ejemplo: “tomamos la hoja”, “miramos el pizarrón”, “nos ponemos las mochilas”.\r\n•Es conveniente hablar más pausadamente de lo habitual y pronunciar claramente las palabras.\r\n•Use frases sencillas adaptadas a su edad y nivel escolar (ni muy infantilizado, ni muy adulto) \r\n•Recuerde llamar a las cosas por su nombre.\r\n•Para que sienta motivación por expresarse mejor verbalmente, estimule sin exigencias ni presiones. \r\n•Es beneficioso recalcar las palabras o tipos de frases que necesita decir mejor, repitiéndoselas.\r\n•Háblele siempre, pero sobre todo en  las situaciones en las que muestra más interés. \r\n•Utilice auto-instrucciones en voz alta, es decir, relate lo que está haciendo en voz alta, por ejemplo: “voy a repartir las hojas, mesa por mesa”, “aquí están los dibujos que hicieron la semana pasada”.\r\n•Siempre que pueda ejercite el habla paralela, hable describiendo sus interacciones, por ejemplo si está pintando con color azul, diga: “que bien estás pintando de azul”.', 'IMAGINA IMAGINADOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: frutas y/o golosinas diferentes. Por ejemplo una manzana, un caramelo, etc.\r\nConsigna: el adulto invita a los participantes a utilizar la imaginación realizando preguntas chistosas, del tipo ¿Qué pasaría si….? \r\nPor ejemplo:\r\n¿Qué pasaría si… las manzanas hablaran?\r\n¿Qué pasaría si… los caramelos volaran?\r\nCada participante contará su idea (todas serán validadas por el adulto, excepto aquella que contenga una carga negativa que atente contra la moral y las buenas costumbres) y todos aplaudirán la propuesta creativa.\r\nEstimula: \r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO COGNITIVO, sugerimos realizar una consulta en: FONOAUDIOLOGIA.', 1, 4),
(18, 'MAL', 'Su lenguaje oral necesita estimulación, aún es muy acotado.', '•Bríndele a diario afecto, serenidad y estimulación nombrando las cosas y las actividades que realizan conjuntamente, por ejemplo: “tomamos la hoja”, “miramos el pizarrón”, “nos ponemos las mochilas”.\r\n•Es conveniente hablar más pausadamente de lo habitual y pronunciar claramente las palabras.\r\n•Use frases sencillas adaptadas a su edad y nivel escolar (ni muy infantilizado, ni muy adulto) \r\n•Recuerde llamar a las cosas por su nombre.\r\n•Para que sienta motivación por expresarse mejor verbalmente, estimule sin exigencias ni presiones. \r\n•Es beneficioso recalcar las palabras o tipos de frases que necesita decir mejor, repitiéndoselas.\r\n•Háblele siempre, pero sobre todo en  las situaciones en las que muestra más interés. \r\n•Utilice auto-instrucciones en voz alta, es decir, relate lo que está haciendo en voz alta, por ejemplo: “voy a repartir las hojas, mesa por mesa”, “aquí están los dibujos que hicieron la semana pasada”.\r\n•Siempre que pueda ejercite el habla paralela, hable describiendo sus interacciones, por ejemplo si está pintando con color azul, diga: “que bien estás pintando de azul”.', 'IMAGINA IMAGINADOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: frutas y/o golosinas diferentes. Por ejemplo una manzana, un caramelo, etc.\r\nConsigna: el adulto invita a los participantes a utilizar la imaginación realizando preguntas chistosas, del tipo ¿Qué pasaría si….? \r\nPor ejemplo:\r\n¿Qué pasaría si… las manzanas hablaran?\r\n¿Qué pasaría si… los caramelos volaran?\r\nCada participante contará su idea (todas serán validadas por el adulto, excepto aquella que contenga una carga negativa que atente contra la moral y las buenas costumbres) y todos aplaudirán la propuesta creativa.\r\nEstimula: \r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 4),
(19, 'MAL', 'Su lenguaje oral necesita estimulación, aún es muy acotado.', '•Bríndele a diario afecto, serenidad y estimulación nombrando las cosas y las actividades que realizan conjuntamente, por ejemplo: “tomamos la hoja”, “miramos el pizarrón”, “nos ponemos las mochilas”.\r\n•Es conveniente hablar más pausadamente de lo habitual y pronunciar claramente las palabras.\r\n•Use frases sencillas adaptadas a su edad y nivel escolar (ni muy infantilizado, ni muy adulto) \r\n•Recuerde llamar a las cosas por su nombre.\r\n•Para que sienta motivación por expresarse mejor verbalmente, estimule sin exigencias ni presiones. \r\n•Es beneficioso recalcar las palabras o tipos de frases que necesita decir mejor, repitiéndoselas.\r\n•Háblele siempre, pero sobre todo en  las situaciones en las que muestra más interés. \r\n•Utilice auto-instrucciones en voz alta, es decir, relate lo que está haciendo en voz alta, por ejemplo: “voy a repartir las hojas, mesa por mesa”, “aquí están los dibujos que hicieron la semana pasada”.\r\n•Siempre que pueda ejercite el habla paralela, hable describiendo sus interacciones, por ejemplo si está pintando con color azul, diga: “que bien estás pintando de azul”.', 'IMAGINA IMAGINADOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: frutas y/o golosinas diferentes. Por ejemplo una manzana, un caramelo, etc.\r\nConsigna: el adulto invita a los participantes a utilizar la imaginación realizando preguntas chistosas, del tipo ¿Qué pasaría si….? \r\nPor ejemplo:\r\n¿Qué pasaría si… las manzanas hablaran?\r\n¿Qué pasaría si… los caramelos volaran?\r\nCada participante contará su idea (todas serán validadas por el adulto, excepto aquella que contenga una carga negativa que atente contra la moral y las buenas costumbres) y todos aplaudirán la propuesta creativa.\r\nEstimula: \r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 4);
INSERT INTO `tresultado` (`idresultado`, `vcresultestninio`, `vcresultinfobt`, `vcresultsugprof`, `vcresultejepot`, `vcresultorientadult`, `boresultestado`, `idsubfactor`) VALUES
(20, 'MAL', 'Su lenguaje oral necesita estimulación, aún es muy acotado.', '•Bríndele a diario afecto, serenidad y estimulación nombrando las cosas y las actividades que realizan conjuntamente, por ejemplo: “tomamos la hoja”, “miramos el pizarrón”, “nos ponemos las mochilas”.\n•Es conveniente hablar más pausadamente de lo habitual y pronunciar claramente las palabras.\n•Use frases sencillas adaptadas a su edad y nivel escolar (ni muy infantilizado, ni muy adulto) \n•Recuerde llamar a las cosas por su nombre.\n•Para que sienta motivación por expresarse mejor verbalmente, estimule sin exigencias ni presiones. \n•Es beneficioso recalcar las palabras o tipos de frases que necesita decir mejor, repitiéndoselas.\n•Háblele siempre, pero sobre todo en  las situaciones en las que muestra más interés. \n•Utilice auto-instrucciones en voz alta, es decir, relate lo que está haciendo en voz alta, por ejemplo: “voy a repartir las hojas, mesa por mesa”, “aquí están los dibujos que hicieron la semana pasada”.\n•Siempre que pueda ejercite el habla paralela, hable describiendo sus interacciones, por ejemplo si está pintando con color azul, diga: “que bien estás pintando de azul”.', NULL, NULL, 1, 4),
(21, 'MAL', 'Su lenguaje oral necesita estimulación, aún es muy acotado.', '•Bríndele a diario afecto, serenidad y estimulación nombrando las cosas y las actividades que realizan conjuntamente, por ejemplo: “tomamos la hoja”, “miramos el pizarrón”, “nos ponemos las mochilas”.\r\n•Es conveniente hablar más pausadamente de lo habitual y pronunciar claramente las palabras.\r\n•Use frases sencillas adaptadas a su edad y nivel escolar (ni muy infantilizado, ni muy adulto) \r\n•Recuerde llamar a las cosas por su nombre.\r\n•Para que sienta motivación por expresarse mejor verbalmente, estimule sin exigencias ni presiones. \r\n•Es beneficioso recalcar las palabras o tipos de frases que necesita decir mejor, repitiéndoselas.\r\n•Háblele siempre, pero sobre todo en  las situaciones en las que muestra más interés. \r\n•Utilice auto-instrucciones en voz alta, es decir, relate lo que está haciendo en voz alta, por ejemplo: “voy a repartir las hojas, mesa por mesa”, “aquí están los dibujos que hicieron la semana pasada”.\r\n•Siempre que pueda ejercite el habla paralela, hable describiendo sus interacciones, por ejemplo si está pintando con color azul, diga: “que bien estás pintando de azul”.', 'IMAGINA IMAGINADOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: frutas y/o golosinas diferentes. Por ejemplo una manzana, un caramelo, etc.\r\nConsigna: el adulto invita a los participantes a utilizar la imaginación realizando preguntas chistosas, del tipo ¿Qué pasaría si….? \r\nPor ejemplo:\r\n¿Qué pasaría si… las manzanas hablaran?\r\n¿Qué pasaría si… los caramelos volaran?\r\nCada participante contará su idea (todas serán validadas por el adulto, excepto aquella que contenga una carga negativa que atente contra la moral y las buenas costumbres) y todos aplaudirán la propuesta creativa.\r\nEstimula: \r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 4),
(22, 'MAL', 'Su lenguaje oral necesita estimulación, aún es muy acotado.', '•Bríndele a diario afecto, serenidad y estimulación nombrando las cosas y las actividades que realizan conjuntamente, por ejemplo: “tomamos la hoja”, “miramos el pizarrón”, “nos ponemos las mochilas”.\r\n•Es conveniente hablar más pausadamente de lo habitual y pronunciar claramente las palabras.\r\n•Use frases sencillas adaptadas a su edad y nivel escolar (ni muy infantilizado, ni muy adulto) \r\n•Recuerde llamar a las cosas por su nombre.\r\n•Para que sienta motivación por expresarse mejor verbalmente, estimule sin exigencias ni presiones. \r\n•Es beneficioso recalcar las palabras o tipos de frases que necesita decir mejor, repitiéndoselas.\r\n•Háblele siempre, pero sobre todo en  las situaciones en las que muestra más interés. \r\n•Utilice auto-instrucciones en voz alta, es decir, relate lo que está haciendo en voz alta, por ejemplo: “voy a repartir las hojas, mesa por mesa”, “aquí están los dibujos que hicieron la semana pasada”.\r\n•Siempre que pueda ejercite el habla paralela, hable describiendo sus interacciones, por ejemplo si está pintando con color azul, diga: “que bien estás pintando de azul”.', 'IMAGINA IMAGINADOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: frutas y/o golosinas diferentes. Por ejemplo una manzana, un caramelo, etc.\r\nConsigna: el adulto invita a los participantes a utilizar la imaginación realizando preguntas chistosas, del tipo ¿Qué pasaría si….? \r\nPor ejemplo:\r\n¿Qué pasaría si… las manzanas hablaran?\r\n¿Qué pasaría si… los caramelos volaran?\r\nCada participante contará su idea (todas serán validadas por el adulto, excepto aquella que contenga una carga negativa que atente contra la moral y las buenas costumbres) y todos aplaudirán la propuesta creativa.\r\nEstimula: \r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 4),
(23, 'MASOMENOS', 'Su nivel de lenguaje oral es bueno y le permite comunicarse.', '•Bríndele a diario afecto, serenidad y estimulación nombrando las cosas y las actividades que realizan conjuntamente, por ejemplo: “tomamos la hoja”, “miramos el pizarrón”, “nos ponemos las mochilas”.\r\n•Es conveniente hablar más pausadamente de lo habitual y pronunciar claramente las palabras.\r\n•Use frases sencillas adaptadas a su edad y nivel escolar (ni muy infantilizado, ni muy adulto) \r\n•Recuerde llamar a las cosas por su nombre.\r\n•Para que sienta motivación por expresarse mejor verbalmente, estimule sin exigencias ni presiones. \r\n•Es beneficioso recalcar las palabras o tipos de frases que necesita decir mejor, repitiéndoselas.\r\n•Háblele siempre, pero sobre todo en  las situaciones en las que muestra más interés. \r\n•Utilice auto-instrucciones en voz alta, es decir, relate lo que está haciendo en voz alta, por ejemplo: “voy a repartir las hojas, mesa por mesa”, “aquí están los dibujos que hicieron la semana pasada”.\r\n•Siempre que pueda ejercite el habla paralela, hable describiendo sus interacciones, por ejemplo si está pintando con color azul, diga: “que bien estás pintando de azul”.', 'IMAGINA IMAGINADOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: frutas y/o golosinas diferentes. Por ejemplo una manzana, un caramelo, etc.\r\nConsigna: el adulto invita a los participantes a utilizar la imaginación realizando preguntas chistosas, del tipo ¿Qué pasaría si….? \r\nPor ejemplo:\r\n¿Qué pasaría si… las manzanas hablaran?\r\n¿Qué pasaría si… los caramelos volaran?\r\nCada participante contará su idea (todas serán validadas por el adulto, excepto aquella que contenga una carga negativa que atente contra la moral y las buenas costumbres) y todos aplaudirán la propuesta creativa.\r\nEstimula: \r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 4),
(24, 'MASOMENOS', 'Su nivel de lenguaje oral es bueno y le permite comunicarse.', '•Bríndele a diario afecto, serenidad y estimulación nombrando las cosas y las actividades que realizan conjuntamente, por ejemplo: “tomamos la hoja”, “miramos el pizarrón”, “nos ponemos las mochilas”.\r\n•Es conveniente hablar más pausadamente de lo habitual y pronunciar claramente las palabras.\r\n•Use frases sencillas adaptadas a su edad y nivel escolar (ni muy infantilizado, ni muy adulto) \r\n•Recuerde llamar a las cosas por su nombre.\r\n•Para que sienta motivación por expresarse mejor verbalmente, estimule sin exigencias ni presiones. \r\n•Es beneficioso recalcar las palabras o tipos de frases que necesita decir mejor, repitiéndoselas.\r\n•Háblele siempre, pero sobre todo en  las situaciones en las que muestra más interés. \r\n•Utilice auto-instrucciones en voz alta, es decir, relate lo que está haciendo en voz alta, por ejemplo: “voy a repartir las hojas, mesa por mesa”, “aquí están los dibujos que hicieron la semana pasada”.\r\n•Siempre que pueda ejercite el habla paralela, hable describiendo sus interacciones, por ejemplo si está pintando con color azul, diga: “que bien estás pintando de azul”.', 'IMAGINA IMAGINADOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: frutas y/o golosinas diferentes. Por ejemplo una manzana, un caramelo, etc.\r\nConsigna: el adulto invita a los participantes a utilizar la imaginación realizando preguntas chistosas, del tipo ¿Qué pasaría si….? \r\nPor ejemplo:\r\n¿Qué pasaría si… las manzanas hablaran?\r\n¿Qué pasaría si… los caramelos volaran?\r\nCada participante contará su idea (todas serán validadas por el adulto, excepto aquella que contenga una carga negativa que atente contra la moral y las buenas costumbres) y todos aplaudirán la propuesta creativa.\r\nEstimula: \r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 4),
(25, 'MASOMENOS', 'Su nivel de lenguaje oral es bueno y le permite comunicarse.', '•Use frases sencillas adaptadas a su edad y nivel escolar (ni muy infantilizado, ni muy adulto) \n•Recuerde llamar a las cosas por su nombre.\n•Siempre que pueda ejercite el habla paralela, hable describiendo sus interacciones, por ejemplo si está pintando con color azul, diga: “que bien estás pintando de azul”.', 'IMAGINA IMAGINADOR\nParticipantes: dos o más personas. \nAdministración: 10 minutos \nEspacio: interior o exterior.\nMateriales: frutas y/o golosinas diferentes. Por ejemplo una manzana, un caramelo, etc.\nConsigna: el adulto invita a los participantes a utilizar la imaginación realizando preguntas chistosas, del tipo ¿Qué pasaría si….? \nPor ejemplo:\n¿Qué pasaría si… las manzanas hablaran?\n¿Qué pasaría si… los caramelos volaran?\nCada participante contará su idea (todas serán validadas por el adulto, excepto aquella que contenga una carga negativa que atente contra la moral y las buenas costumbres) y todos aplaudirán la propuesta creativa.\nEstimula: \n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 4),
(26, 'BIEN', 'Su nivel de lenguaje oral es muy bueno, le permite comunicarse con los demás de manera clara.', '•Llame a las cosas por su nombre para enriquecer cada vez más, su vocabulario.\r\n•Proponga aprender una palabra nueva por día, utilizando cosas del ambiente que comparten.', NULL, NULL, 1, 4),
(27, 'MUY MAL', 'Para que pueda recordar más lo que escucha es conveniente ejercitar su memoria auditiva', '• Juegue a diferenciar ruidos, palabras, sílabas.\r\n•Es importante aplaudir sus logros o que reciba felicitaciones por su desempeño, en voz alta.', 'COMANDO ESCUCHA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: lápiz y papel para cada participante\r\nConsigna: el participante comando canta: “hay que escuchar para ganar…hay que escuchar para ganar” señalando con una mano su propia oreja. Y da una instrucción a otro participante, por ejemplo: “sentarse”. Si la cumple, todos los participantes aplauden. Se vuelve a cantar y se da 2 consignas por ejemplo: agarra el lápiz y escribí algo en la hoja. Y nuevamente se canta, se agregando más cantidad de instrucciones.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa, motricidad fina.\r\n- Desarrollo cognitivo: la capacidad de atención, concentración, memoria, lenguaje.\r\n- Desarrollo socio – emocional: recuperación de información de manera rápida y bajo presión de un límite de tiempo.', NULL, 1, 5),
(28, 'MAL', 'Para que pueda recordar más lo que escucha es conveniente ejercitar su memoria auditiva. ', '• Juegue a diferenciar ruidos, palabras, sílabas.\r\n•Es importante aplaudir sus logros o que reciba felicitaciones por su desempeño, en voz alta.\r\n', 'COMANDO ESCUCHA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: lápiz y papel para cada participante\r\nConsigna: el participante comando canta: “hay que escuchar para ganar…hay que escuchar para ganar” señalando con una mano su propia oreja. Y da una instrucción a otro participante, por ejemplo: “sentarse”. Si la cumple, todos los participantes aplauden. Se vuelve a cantar y se da 2 consignas por ejemplo: agarra el lápiz y escribí algo en la hoja. Y nuevamente se canta, se agregando más cantidad de instrucciones.\r\nEstimula: \r\n- Desarrollo psicomotriz: motricidad gruesa, motricidad fina.\r\n- Desarrollo cognitivo: la capacidad de atención, concentración, memoria, lenguaje.\r\n- Desarrollo socio – emocional: recuperación de información de manera rápida y bajo presión de un límite de tiempo.', NULL, 1, 5),
(29, 'MAL', 'Para que pueda recordar más lo que escucha es conveniente ejercitar su memoria auditiva.', '• Juegue a diferenciar ruidos, palabras, sílabas.\r\n•Es importante aplaudir sus logros o que reciba felicitaciones por su desempeño, en voz alta.', 'RIMA QUE RIMA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: tijera con puntas redondeadas,  revistas o diarios para recortar palabras, una bolsa o caja para colocarlas.\r\nConsigna: los participantes recortan palabras, las colocan en la caja o bolsa y las mezclan bien. El adulto sacará una palabra y la leerá en voz alta, los participantes pensarán y dirán una palabra diferente que rime. \r\nEstimula:\r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: memoria auditiva, atención, concentración, lenguaje.\r\n- Desarrollo socio – emocional: recuperación de información de manera rápida y bajo presión de un límite de tiempo.', NULL, 1, 5),
(30, 'MASOMENOS', 'Para que pueda recordar más lo que escucha es conveniente ejercitar su memoria auditiva. ', '• Juegue a diferenciar ruidos, palabras, sílabas.\r\n•Es importante aplaudir sus logros o que reciba felicitaciones por su desempeño, en voz alta.', 'RIMA QUE RIMA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: tijera con puntas redondeadas,  revistas o diarios para recortar palabras, una bolsa o caja para colocarlas.\r\nConsigna: los participantes recortan palabras, las colocan en la caja o bolsa y las mezclan bien. El adulto sacará una palabra y la leerá en voz alta, los participantes pensarán y dirán una palabra diferente que rime. \r\nEstimula:\r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: memoria auditiva, atención, concentración, lenguaje.\r\n- Desarrollo socio – emocional: recuperación de información de manera rápida y bajo presión de un límite de tiempo.', NULL, 1, 5),
(31, 'MASOMENOS', 'Para que pueda recordar más lo que escucha es conveniente ejercitar su memoria auditiva. ', '•Es importante aplaudir sus logros o que reciba felicitaciones por su desempeño, en voz alta.\r\n• Juegue a diferenciar ruidos, palabras, sílabas.', 'RIMA QUE RIMA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: tijera con puntas redondeadas,  revistas o diarios para recortar palabras, una bolsa o caja para colocarlas.\r\nConsigna: los participantes recortan palabras, las colocan en la caja o bolsa y las mezclan bien. El adulto sacará una palabra y la leerá en voz alta, los participantes pensarán y dirán una palabra diferente que rime. \r\nEstimula:\r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: memoria auditiva, atención, concentración, lenguaje.\r\n- Desarrollo socio – emocional: recuperación de información de manera rápida y bajo presión de un límite de tiempo.', NULL, 1, 5),
(32, 'BIEN', 'Si los estímulos son de carácter auditivo, logra recuperar y memorizar información.', NULL, NULL, NULL, 1, 5),
(33, 'MUY MAL', 'Con ejercitación podrá mejorar su memoria kinestésica y recordar más detalles de lo que experimenta. ', '•Rendirá mucho más si las felicitaciones por su trabajo se le brindan a través de gestos cariñosos, como abrazos, palmadas, mimos.\r\n•Es primordial explicarle con oraciones cortas y claras, que se espera de su comportamiento,  en cada jornada escolar. Mencionarle “solo” la acción que se espera que haga. Por ejemplo si quiere que preste atención, en vez de decir “no hables”, diga “escuchá”; si quiere que juegue con tranquilidad en el recreo, en vez de decir “no corra”, diga “caminá”. Cada vez que lo logre, aplaudir conjuntamente el avance.', 'GENIO - GENIO TE CUENTO MI SUEÑO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: una cuchara, un vaso y un plato\r\nConsigna: el adulto entregará al participante que represente al primero, y le pedirá que haga realidad sus sueños, utilizando los 3 objetos, entonces dirá por ejemplo:\r\nGenio-genio te cuento mi sueño: que la cuchara viva dentro del vaso.\r\nGenio-genio te cuento mi sueño: que el vaso levante al plato. \r\nGenio-genio te cuento mi sueño: que el plato atrape a la cuchara.\r\nCada vez que el genio cumple el sueño se aplaude diciendo: si, si, si. (Se puede inventar más combinaciones)\r\nEstimula: \r\n- desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: lenguaje, atención, concentración, memoria auditiva, memoria kinestésica, razonamiento.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 6),
(34, 'MAL', 'Con ejercitación podrá mejorar su memoria kinestésica y recordar más detalles de lo que experimenta.', '•Rendirá mucho más si las felicitaciones por su trabajo se le brindan a través de gestos cariñosos, como abrazos, palmadas, mimos.', 'GENIO - GENIO TE CUENTO MI SUEÑO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: una cuchara, un vaso y un plato\r\nConsigna: el adulto entregará al participante que represente al primero, y le pedirá que haga realidad sus sueños, utilizando los 3 objetos, entonces dirá por ejemplo:\r\nGenio-genio te cuento mi sueño: que la cuchara viva dentro del vaso.\r\nGenio-genio te cuento mi sueño: que el vaso levante al plato. \r\nGenio-genio te cuento mi sueño: que el plato atrape a la cuchara.\r\nCada vez que el genio cumple el sueño se aplaude diciendo: si, si, si. (Se puede inventar más combinaciones)\r\nEstimula: \r\n- desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: lenguaje, atención, concentración, memoria auditiva, memoria kinestésica, razonamiento.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 6),
(35, 'MAL', 'Con ejercitación podrá mejorar su memoria kinestésica y recordar más detalles de lo que experimenta.', '•Rendirá mucho más si las felicitaciones por su trabajo se le brindan a través de gestos cariñosos, como abrazos, palmadas, mimos.', 'GENIO - GENIO TE CUENTO MI SUEÑO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: una cuchara, un vaso y un plato\r\nConsigna: el adulto entregará al participante que represente al primero, y le pedirá que haga realidad sus sueños, utilizando los 3 objetos, entonces dirá por ejemplo:\r\nGenio-genio te cuento mi sueño: que la cuchara viva dentro del vaso.\r\nGenio-genio te cuento mi sueño: que el vaso levante al plato. \r\nGenio-genio te cuento mi sueño: que el plato atrape a la cuchara.\r\nCada vez que el genio cumple el sueño se aplaude diciendo: si, si, si. (Se puede inventar más combinaciones)\r\nEstimula: \r\n- desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: lenguaje, atención, concentración, memoria auditiva, memoria kinestésica, razonamiento.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 6),
(36, 'MASOMENOS', 'Con ejercitación podrá mejorar su memoria kinestésica y recordar más detalles de lo que experimenta. ', '•Rendirá mucho más si las felicitaciones por su trabajo se le brindan a través de gestos cariñosos, como abrazos, palmadas, mimos.', 'GENIO - GENIO TE CUENTO MI SUEÑO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: una cuchara, un vaso y un plato\r\nConsigna: el adulto entregará al participante que represente al primero, y le pedirá que haga realidad sus sueños, utilizando los 3 objetos, entonces dirá por ejemplo:\r\nGenio-genio te cuento mi sueño: que la cuchara viva dentro del vaso.\r\nGenio-genio te cuento mi sueño: que el vaso levante al plato. \r\nGenio-genio te cuento mi sueño: que el plato atrape a la cuchara.\r\nCada vez que el genio cumple el sueño se aplaude diciendo: si, si, si. (Se puede inventar más combinaciones)\r\nEstimula: \r\n- desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: lenguaje, atención, concentración, memoria auditiva, memoria kinestésica, razonamiento.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 6),
(37, 'MASOMENOS', 'Su memoria kinestésica  le permite recordar algunos detalles sobre lo que experimenta, con estimulación mejorará notablemente.', '•Rendirá mucho más si las felicitaciones por su trabajo se le brindan a través de gestos cariñosos, como abrazos, palmadas, mimos.', 'GENIO - GENIO TE CUENTO MI SUEÑO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: una cuchara, un vaso y un plato\r\nConsigna: el adulto entregará al participante que represente al primero, y le pedirá que haga realidad sus sueños, utilizando los 3 objetos, entonces dirá por ejemplo:\r\nGenio-genio te cuento mi sueño: que la cuchara viva dentro del vaso.\r\nGenio-genio te cuento mi sueño: que el vaso levante al plato. \r\nGenio-genio te cuento mi sueño: que el plato atrape a la cuchara.\r\nCada vez que el genio cumple el sueño se aplaude diciendo: si, si, si. (Se puede inventar más combinaciones)\r\nEstimula: \r\n- desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: lenguaje, atención, concentración, memoria auditiva, memoria kinestésica, razonamiento.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 6),
(38, 'BIEN', 'Su memoria kinestésica  le permite recordar lo que experimenta. ', NULL, 'GENIO - GENIO TE CUENTO MI SUEÑO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un \r\nEspacio: interior o exterior.\r\nMateriales: una cuchara, un vaso y un plato\r\nConsigna: el adulto entregará al participante que represente al primero, y le pedirá que haga realidad sus sueños, utilizando los 3 objetos, entonces dirá por ejemplo:\r\nGenio-genio te cuento mi sueño: que la cuchara viva dentro del vaso.\r\nGenio-genio te cuento mi sueño: que el vaso levante al plato. \r\nGenio-genio te cuento mi sueño: que el plato atrape a la cuchara.\r\nCada vez que el genio cumple el sueño se aplaude diciendo: si, si, si. (Se puede inventar más combinaciones)\r\nEstimula: \r\n- desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: lenguaje, atención, concentración, memoria auditiva, memoria kinestésica, razonamiento.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 6),
(39, 'MAL', 'Aún no logra respetar los tiempos de trabajo propuestos, es importante que ejercitesu atención y concentración.', '• Genere ambientes adecuados para la concentración y la observación, tenga en cuenta la iluminación, la ventilación y la contaminación sonora.\r\n• Podrá sostener mejor su atención y terminar sus tareas más rápido, si se divide las tareas en sub-tareas.\r\n•Ofrézcale  tareas adecuadas para su capacidad: que presenten un desafío para que no se aburra y que sea alcanzable para que sienta motivación por resolverla  (objetivos concretos, que consideramos que el alumno puede lograr).\r\n•Para mejorar su tiempo de concentración, bríndele  tareas  que pueda resolver en pocos minutos. Si lo hace aplaudan conjuntamente el avance. Luego podrá  recibir una tarea que requiera más tiempo de resolución  y se continuará trabajando así, hasta que pueda sostener el mismo tiempo de atención y concentración que el resto de sus compañeros.', NULL, 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA', 1, 7),
(40, 'MASOMENOS', 'Algunas veces, logra respetar los tiempos de trabajo propuestos, para lograrlo, es importante que ejerciteaún más su atención y concentración.', '•Genere ambientes adecuados para la concentración y la observación, tenga en cuenta la iluminación, la ventilación y la contaminación sonora.\r\n• Podrá sostener mejor su atención y terminar sus tareas más rápido, si se divide las tareas en sub-tareas.\r\n•Ofrézcale  tareas adecuadas para su capacidad: que presenten un desafío para que no se aburra y que sea alcanzable para que sienta motivación por resolverla  (objetivos concretos, que consideramos que el alumno puede lograr).\r\n•Para mejorar su tiempo de concentración, bríndele  tareas  que pueda resolver en pocos minutos. Si lo hace aplaudan conjuntamente el avance. Luego podrá  recibir una tarea que requiera más tiempo de resolución  y se continuará trabajando así, hasta que pueda sostener el mismo tiempo de atención y concentración que el resto de sus compañeros.', NULL, NULL, 1, 7),
(41, 'BIEN', 'Logra respetar los tiempos de trabajo propuestos, pudiendo sostener su atención y concentración.', NULL, NULL, NULL, 1, 7),
(42, 'MUY MAL', 'Su capacidad para recordar información a través de estímulos visuales tiene que ejercitarse aún más.', '• Felicite su buena memoria cada vez que menciona algo que paso en días anteriores.\r\n• Sería muy bueno, mostrarle gráficos o imágenes a colores en sus clases o tareas y preguntarle que recuerda.', 'PINTANDO SONIDOS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: música, papel, lápiz negro y lápices de colores o crayones.\r\nConsigna: el adulto propone escuchar música con los ojos cerrados por unos minutos, luego baja el volumen y solicita a los participantes que dibujen o pinten lo que imaginaron o pensaron mientras escuchaban música. Todos los participantes, serán felicitados.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: memoria auditiva, memoria visual, atención, concentración, creatividad, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA', 1, 8),
(43, 'MAL', 'Su capacidad para recordar información a través de estímulos visuales tiene que ejercitarse aún más.', '• Felicite su buena memoria cada vez que menciona algo que paso en días anteriores.\r\n• Sería muy bueno, mostrarle gráficos o imágenes a colores en sus clases o tareas y preguntarle que recuerda.', 'PINTANDO SONIDOS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: música, papel, lápiz negro y lápices de colores o crayones.\r\nConsigna: el adulto propone escuchar música con los ojos cerrados por unos minutos, luego baja el volumen y solicita a los participantes que dibujen o pinten lo que imaginaron o pensaron mientras escuchaban música. Todos los participantes, serán felicitados.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: memoria auditiva, memoria visual, atención, concentración, creatividad, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 8),
(44, 'MAL', 'Su capacidad para recordar información a través de estímulos visuales tiene que ejercitarse aún más.', '• Felicite su buena memoria cada vez que menciona algo que paso en días anteriores.\r\n• Sería muy bueno, mostrarle gráficos o imágenes a colores en sus clases o tareas y preguntarle que recuerda.', 'PINTANDO SONIDOS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: música, papel, lápiz negro y lápices de colores o crayones.\r\nConsigna: el adulto propone escuchar música con los ojos cerrados por unos minutos, luego baja el volumen y solicita a los participantes que dibujen o pinten lo que imaginaron o pensaron mientras escuchaban música. Todos los participantes, serán felicitados.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: memoria auditiva, memoria visual, atención, concentración, creatividad, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 8),
(45, 'MASOMENOS', 'Su capacidad para recordar información a través de estímulos visuales tiene que ejercitarse aún más.', '• Felicite su buena memoria cada vez que menciona algo que paso en días anteriores.\r\n• Sería muy bueno, mostrarle gráficos o imágenes a colores en sus clases o tareas y preguntarle que recuerda.', 'PINTANDO SONIDOS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: música, papel, lápiz negro y lápices de colores o crayones.\r\nConsigna: el adulto propone escuchar música con los ojos cerrados por unos minutos, luego baja el volumen y solicita a los participantes que dibujen o pinten lo que imaginaron o pensaron mientras escuchaban música. Todos los participantes, serán felicitados.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: memoria auditiva, memoria visual, atención, concentración, creatividad, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 8),
(46, 'MASOMENOS', 'Su capacidad para recordar información a través de estímulos visuales, es buena.', '• Felicite su buena memoria cada vez que menciona algo que paso en días anteriores.\r\n• Sería muy bueno, mostrarle gráficos o imágenes a colores en sus clases o tareas y preguntarle que recuerda.', 'PINTANDO SONIDOS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior.\r\nMateriales: música, papel, lápiz negro y lápices de colores o crayones.\r\nConsigna: el adulto propone escuchar música con los ojos cerrados por unos minutos, luego baja el volumen y solicita a los participantes que dibujen o pinten lo que imaginaron o pensaron mientras escuchaban música. Todos los participantes, serán felicitados.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: memoria auditiva, memoria visual, atención, concentración, creatividad, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 8),
(47, 'BIEN', 'Su capacidad para recordar información a través de estímulos visuales, es muy buena.', '• Felicite su buena memoria cada vez que menciona algo que paso en días anteriores.', NULL, NULL, 1, 8),
(48, 'MUY MAL', 'Respecto a la noción de tiempo, aún se evidencian dudas al mencionar acciones presentes, pasadas y futuras.', '•Para afianzar la noción temporal, hable sobre situaciones cotidianas, por ejemplo sobre la diferencia entre el día y la noche. Pregunte que hace en esos momentos, que está haciendo hoy, que hizo ayer, que le gustaría hacer mañana.', 'ANTES Y DESPUES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: lápiz, papel \r\nConsigna: el adulto mostrará con una hoja como doblarla por la mitad (apaisada o vertical) para que cada participante doble su hoja y dibuje en una de las partes, que hace antes de ir a la escuela y en la otra parte, que es lo que hace después de ir a la escuela. \r\nAl finalizar podrán compartir su secuencia de antes y después.\r\n Estimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA', 1, 9),
(49, 'MAL', 'Respecto a la noción de tiempo, puede utilizar algunas palabras, para mencionar acciones presentes y pasadas.', '•Para afianzar la noción temporal, hable sobre situaciones cotidianas, por ejemplo sobre la diferencia entre el día y la noche. Pregunte que hace en esos momentos, que está haciendo hoy, que hizo ayer, que le gustaría hacer mañana.', 'ANTES Y DESPUES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: lápiz, papel \r\nConsigna: el adulto mostrará con una hoja como doblarla por la mitad (apaisada o vertical) para que cada participante doble su hoja y dibuje en una de las partes, que hace antes de ir a la escuela y en la otra parte, que es lo que hace después de ir a la escuela. \r\nAl finalizar podrán compartir su secuencia de antes y después.\r\n Estimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 9),
(50, 'MAL', 'Respecto a la noción de tiempo, puede utilizar algunas palabras, para mencionar acciones presentes y pasadas.', '•Para afianzar la noción temporal, hable sobre situaciones cotidianas, por ejemplo sobre la diferencia entre el día y la noche. Pregunte que hace en esos momentos, que está haciendo hoy, que hizo ayer, que le gustaría hacer mañana.', 'ANTES Y DESPUES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: lápiz, papel \r\nConsigna: el adulto mostrará con una hoja como doblarla por la mitad (apaisada o vertical) para que cada participante doble su hoja y dibuje en una de las partes, que hace antes de ir a la escuela y en la otra parte, que es lo que hace después de ir a la escuela. \r\nAl finalizar podrán compartir su secuencia de antes y después.\r\n Estimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 9),
(51, 'MASOMENOS', 'Respecto a la noción de tiempo, puede utilizar palabras, para mencionar acciones presentes y pasadas.', '•Para afianzar la noción temporal, hable sobre situaciones cotidianas, por ejemplo sobre la diferencia entre el día y la noche. Pregunte que hace en esos momentos, que está haciendo hoy, que hizo ayer, que le gustaría hacer mañana.', 'ANTES Y DESPUES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: lápiz, papel \r\nConsigna: el adulto mostrará con una hoja como doblarla por la mitad (apaisada o vertical) para que cada participante doble su hoja y dibuje en una de las partes, que hace antes de ir a la escuela y en la otra parte, que es lo que hace después de ir a la escuela. \r\nAl finalizar podrán compartir su secuencia de antes y después.\r\n Estimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 9),
(52, 'MASOMENOS', 'Respecto a la noción de tiempo, puede utilizar palabras, para mencionar acciones presentes y pasadas.', '•Para afianzar la noción temporal, hable sobre situaciones cotidianas, por ejemplo sobre la diferencia entre el día y la noche. Pregunte que hace en esos momentos, que está haciendo hoy, que hizo ayer, que le gustaría hacer mañana.', 'ANTES Y DESPUES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: lápiz, papel \r\nConsigna: el adulto mostrará con una hoja como doblarla por la mitad (apaisada o vertical) para que cada participante doble su hoja y dibuje en una de las partes, que hace antes de ir a la escuela y en la otra parte, que es lo que hace después de ir a la escuela. \r\nAl finalizar podrán compartir su secuencia de antes y después.\r\n Estimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: creatividad, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 9),
(53, 'BIEN', 'Respecto a la noción de tiempo, puede utilizar palabras, para indicar los diferentes momentos del día, tales como: como: antes,después, ayer, hoy y mañana.', NULL, NULL, NULL, 1, 9),
(54, 'MUY MAL', 'Su conocimiento de las nociones espaciales, es escaso, aún no interiorizo conceptos como: arriba, abajo, adentro, afuera, adelante y atrás.  ', '•Para favorecer la noción espacial, pregunté en voz alta, sobre situaciones cotidianas, por ejemplo: ¿El cuaderno va adentro o afuera de la mochila? o \r\n•Realice ejercicios con el cuerpo, por ejemplo, colóquese a delante o atrás y pregunté: ¿Yo estoy adelante o atrás tuyo?', 'ARRIBA Y ABAJO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales:una hoja y un lápiz por participante.\r\nConsigna: el adulto mostrará con una hoja como doblarla en 4 partes (apaisada o vertical a modo de abanico) para que cada participante doble su hoja. Una vez marcadas las partes la abrirá y dibujará en la parte de arriba su cabeza y en la parte de abajo sus pies. \r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: creatividad, atención, memoria auditiva, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA', 1, 10),
(55, 'MAL', 'Su conocimiento de las nociones espaciales, es muy lábil, aún no interiorizo conceptos como: arriba, abajo, adentro, afuera, adelante y atrás. ', '•Para favorecer la noción espacial, pregunté en voz alta, sobre situaciones cotidianas, por ejemplo: ¿El cuaderno va adentro o afuera de la mochila? o \r\n•Realice ejercicios con el cuerpo, por ejemplo, colóquese a delante o atrás y pregunté: ¿Yo estoy adelante o atrás tuyo?', NULL, NULL, 1, 10),
(56, 'MAL', 'Su conocimiento de las nociones espaciales, es muy lábil, aún no interiorizo conceptos como: arriba, abajo, adentro, afuera, adelante y atrás.  ', '•Para favorecer la noción espacial, pregunté en voz alta, sobre situaciones cotidianas, por ejemplo: ¿El cuaderno va adentro o afuera de la mochila? o \r\n•Realice ejercicios con el cuerpo, por ejemplo, colóquese a delante o atrás y pregunté: ¿Yo estoy adelante o atrás tuyo?', NULL, NULL, 1, 10),
(57, 'MAL', 'Su conocimiento de las nociones espaciales, es muy lábil, aún no interiorizo conceptos como: arriba, abajo, adentro, afuera, adelante y atrás. ', '•Para favorecer la noción espacial, pregunté en voz alta, sobre situaciones cotidianas, por ejemplo: ¿El cuaderno va adentro o afuera de la mochila? o \r\n•Realice ejercicios con el cuerpo, por ejemplo, colóquese a delante o atrás y pregunté: ¿Yo estoy adelante o atrás tuyo?', NULL, NULL, 1, 10),
(58, 'MAL', 'Su conocimiento de las nociones espaciales, es muy lábil, aún no interiorizo conceptos como: arriba, abajo, adentro, afuera, adelante y atrás. ', '•Para favorecer la noción espacial, pregunté en voz alta, sobre situaciones cotidianas, por ejemplo: ¿El cuaderno va adentro o afuera de la mochila? o \r\n•Realice ejercicios con el cuerpo, por ejemplo, colóquese a delante o atrás y pregunté: ¿Yo estoy adelante o atrás tuyo?', NULL, NULL, 1, 10),
(59, 'MAL', 'Su conocimiento de las nociones espaciales, es muy lábil, aún no interiorizo conceptos como: arriba, abajo, adentro, afuera, adelante y atrás.  ', '•Para favorecer la noción espacial, pregunté en voz alta, sobre situaciones cotidianas, por ejemplo: ¿El cuaderno va adentro o afuera de la mochila? o \r\n•Realice ejercicios con el cuerpo, por ejemplo, colóquese a delante o atrás y pregunté: ¿Yo estoy adelante o atrás tuyo?', NULL, NULL, 1, 10),
(60, 'MASOMENOS', 'Su conocimiento de las nociones espaciales, es lábil, aún no interiorizo conceptos como: arriba, abajo, adentro, afuera, adelante y atrás.  ', '•Para favorecer la noción espacial, pregunté en voz alta, sobre situaciones cotidianas, por ejemplo: ¿El cuaderno va adentro o afuera de la mochila? o \r\n•Realice ejercicios con el cuerpo, por ejemplo, colóquese a delante o atrás y pregunté: ¿Yo estoy adelante o atrás tuyo?', 'MOVIDITO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: un objeto por participante\r\nConsigna: el adulto guiará el juego designando un objeto para cada participante. Indicando a los participantes, que levanten o bajen el objeto que le fue asignado. Con diferentes palabras por ejemplo arriba, abajo; suban, caigan; elevo, bajo; asciendo, desciendo. Estimula: \r\n- desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, razonamiento.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 10),
(61, 'MASOMENOS', 'Su conocimiento de las nociones espaciales, es lábil, con ayuda podrá interiorizar conceptos como: arriba, abajo, adentro, afuera, adelante y atrás.  ', '•Para favorecer la noción espacial, pregunté en voz alta, sobre situaciones cotidianas, por ejemplo: ¿El cuaderno va adentro o afuera de la mochila? o \r\n•Realice ejercicios con el cuerpo, por ejemplo, colóquese a delante o atrás y pregunté: ¿Yo estoy adelante o atrás tuyo?', 'MOVIDITO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: un objeto por participante\r\nConsigna: el adulto guiará el juego designando un objeto para cada participante. Indicando a los participantes, que levanten o bajen el objeto que le fue asignado. Con diferentes palabras por ejemplo arriba, abajo; suban, caigan; elevo, bajo; asciendo, desciendo. Estimula: \r\n- desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, razonamiento.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 10),
(62, 'MASOMENOS', 'Su conocimiento de las  nociones  espaciales es muy bueno, tiene interiorizados conceptos como: arriba, abajo, adentro, afuera, adelante y atrás.  ', '•Para favorecer la noción espacial, pregunté en voz alta, sobre situaciones cotidianas, por ejemplo: ¿El cuaderno va adentro o afuera de la mochila? o \r\n•Realice ejercicios con el cuerpo, por ejemplo, colóquese a delante o atrás y pregunté: ¿Yo estoy adelante o atrás tuyo?', 'MOVIDITO\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: un objeto por participante\r\nConsigna: el adulto guiará el juego designando un objeto para cada participante. Indicando a los participantes, que levanten o bajen el objeto que le fue asignado. Con diferentes palabras por ejemplo arriba, abajo; suban, caigan; elevo, bajo; asciendo, desciendo. Estimula: \r\n- desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, razonamiento.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 10),
(63, 'BIEN', 'Su conocimiento de las  nociones  espaciales es muy bueno, tiene interiorizados conceptos como: arriba, abajo, adentro, afuera, adelante y atrás.', NULL, NULL, NULL, 1, 10),
(64, 'MUY MAL', 'Aún no afianzó los conceptos que expresan cantidad. Sería muy positivo que los trabaje para que pueda aprender a sumar y restar sin dificultad.', '•Realice ejercicios matemáticos con alimentos,  por ejemplo, si como esta galletita ¿me quedan más o menos galletitas?  Si tomo mucha agua de este vaso ¿me queda mucha o poca agua?', '¿COMO COME?\r\nParticipantes: dos o más personas. \r\nAdministración: 20 minutos \r\nEspacio: interior o exterior.\r\nMateriales: cartulina, lápiz y tijera de puntas redondeadas, mesa o lugar de apoyo.\r\nConsigna: el adulto dibujar varios huesos y dos perros en la cartulina y los participantes lo recortarán.\r\nSe ubicarán los perros uno al lado del otro y se colocará 1 hueso al lado de un perro y todos los huesos restantes, al lado del otro, preguntando a los participantes ¿Este perro come mucho o come poco? \r\nEl adulto puede proponer diferentes alternativas, siempre realizando una pregunta que invite a razonar.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual, razonamiento lógico matemático.\r\n- Desarrollo socio – emocional: autoestima.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA', 1, 11),
(65, 'MAL', 'Aún no afianzó todos los conceptos que expresan cantidad. Sería muy positivo que los trabaje para que pueda aprender a sumar y restar sin dificultad. ', '•Realice ejercicios matemáticos con alimentos,  por ejemplo, si como esta galletita ¿me quedan más o menos galletitas?  Si tomo mucha agua de este vaso ¿me queda mucha o poca agua?', '¿COMO COME?\r\nParticipantes: dos o más personas. \r\nAdministración: 20 minutos \r\nEspacio: interior o exterior.\r\nMateriales: cartulina, lápiz y tijera de puntas redondeadas, mesa o lugar de apoyo.\r\nConsigna: el adulto dibujar varios huesos y dos perros en la cartulina y los participantes lo recortarán.\r\nSe ubicarán los perros uno al lado del otro y se colocará 1 hueso al lado de un perro y todos los huesos restantes, al lado del otro, preguntando a los participantes ¿Este perro come mucho o come poco? \r\nEl adulto puede proponer diferentes alternativas, siempre realizando una pregunta que invite a razonar.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual, razonamiento lógico matemático.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 11),
(66, 'MAL', 'Aún no afianzó todos los conceptos que expresan cantidad. Sería muy positivo que los trabaje para que pueda aprender a sumar y restar sin dificultad.', '•Realice ejercicios matemáticos con alimentos,  por ejemplo, si como esta galletita ¿me quedan más o menos galletitas?  Si tomo mucha agua de este vaso ¿me queda mucha o poca agua?', '¿COMO COME?\r\nParticipantes: dos o más personas. \r\nAdministración: 20 minutos \r\nEspacio: interior o exterior.\r\nMateriales: cartulina, lápiz y tijera de puntas redondeadas, mesa o lugar de apoyo.\r\nConsigna: el adulto dibujar varios huesos y dos perros en la cartulina y los participantes lo recortarán.\r\nSe ubicarán los perros uno al lado del otro y se colocará 1 hueso al lado de un perro y todos los huesos restantes, al lado del otro, preguntando a los participantes ¿Este perro come mucho o come poco? \r\nEl adulto puede proponer diferentes alternativas, siempre realizando una pregunta que invite a razonar.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual, razonamiento lógico matemático.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 11);
INSERT INTO `tresultado` (`idresultado`, `vcresultestninio`, `vcresultinfobt`, `vcresultsugprof`, `vcresultejepot`, `vcresultorientadult`, `boresultestado`, `idsubfactor`) VALUES
(67, 'MASOMENOS', 'Aún no afianzó todos los conceptos que expresan cantidad. Sería muy positivo que los trabaje para que pueda aprender a sumar y restar sin dificultad.', '•Realice ejercicios matemáticos con alimentos,  por ejemplo, si como esta galletita ¿me quedan más o menos galletitas?  Si tomo mucha agua de este vaso ¿me queda mucha o poca agua?', '¿COMO COME?\r\nParticipantes: dos o más personas. \r\nAdministración: 20 minutos \r\nEspacio: interior o exterior.\r\nMateriales: cartulina, lápiz y tijera de puntas redondeadas, mesa o lugar de apoyo.\r\nConsigna: el adulto dibujar varios huesos y dos perros en la cartulina y los participantes lo recortarán.\r\nSe ubicarán los perros uno al lado del otro y se colocará 1 hueso al lado de un perro y todos los huesos restantes, al lado del otro, preguntando a los participantes ¿Este perro come mucho o come poco? \r\nEl adulto puede proponer diferentes alternativas, siempre realizando una pregunta que invite a razonar.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual, razonamiento lógico matemático.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 11),
(68, 'MASOMENOS', 'Aún no afianzó todos los conceptos que expresan cantidad. Sería muy positivo que los trabaje para que pueda aprender a sumar y restar sin dificultad.', '•Realice ejercicios matemáticos con alimentos,  por ejemplo, si como esta galletita ¿me quedan más o menos galletitas?  Si tomo mucha agua de este vaso ¿me queda mucha o poca agua?', '¿COMO COME?\r\nParticipantes: dos o más personas. \r\nAdministración: 20 minutos \r\nEspacio: interior o exterior.\r\nMateriales: cartulina, lápiz y tijera de puntas redondeadas, mesa o lugar de apoyo.\r\nConsigna: el adulto dibujar varios huesos y dos perros en la cartulina y los participantes lo recortarán.\r\nSe ubicarán los perros uno al lado del otro y se colocará 1 hueso al lado de un perro y todos los huesos restantes, al lado del otro, preguntando a los participantes ¿Este perro come mucho o come poco? \r\nEl adulto puede proponer diferentes alternativas, siempre realizando una pregunta que invite a razonar.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual, razonamiento lógico matemático.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 11),
(69, 'BIEN', 'Puede comprender conceptos que expresan cantidad y cuenta con nociones básicas para aprender a sumar y restar sin dificultad.', NULL, NULL, NULL, 1, 11),
(70, 'MAL', 'Al momento de reconocer si un objeto es igual o diferente a otro, manifiesta duda.', '•Cada vez que pueda, permítele elegir entre dos opciones diferentes.', 'RELACIONANDO OBJETOS \r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: varios objetos diferentes y parecidos entre sí.\r\nConsigna: entregue dos objetos diferentes y permita que los manipule y experimente con ellos, durante algunos minutos. Luego pregunte sobre:\r\nSus cualidades: ¿como son?\r\nSus semejanzas: ¿en que se parecen?\r\nSus diferencias: ¿en qué son distintos?\r\nFelicite cada razonamiento, si nota un error diga: “lo que decís, es una manera de verlo, me gustaría que pensemos otra más ¿dale?”\r\nEstimula: \r\n- Desarrollo cognitivo: memoria auditiva, memoria visual, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima, conducta y vínculos.\r\n\r\nPREFERENCIAS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales:2 objetos \r\nConsigna: tomé los dos objetos uno en la mano derecha y otro en la izquierda y realice las siguientes preguntas:\r\n¿Cuál de estas dos cosas te gusta más? ¿Por qué?\r\n¿De qué color es la que tengo en mi mano derecha?\r\n¿Cómo se llama la cosa que tengo en mi mano izquierda? \r\nSonría de manera amigable mientras espera o escucha las respuestas. Felicite los aciertos. Y corrija con calma los errores y hablando en plural, por ejemplo diga sonriendo “vamos a tener que seguir intentando, dale proba otra vez, tenés otra oportunidad”.\r\nEstimula: \r\n- Desarrollo cognitivo: memoria auditiva, memoria visual, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima, conducta y vínculos.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA', 1, 12),
(71, 'MASOMENOS', 'Al momento de reconocer si un objeto es igual o diferente a otro, manifiesta duda.', '•Cada vez que pueda, permítele elegir entre dos opciones diferentes.', 'PREFERENCIAS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior.\r\nMateriales: 2 objetos \r\nConsigna: tomé los dos objetos uno en la mano derecha y otro en la izquierda y realice las siguientes preguntas:\r\n¿Cuál de estas dos cosas te gusta más? ¿Por qué?\r\n¿De qué color es la que tengo en mi mano derecha?\r\n¿Cómo se llama la cosa que tengo en mi mano izquierda? \r\nSonría de manera amigable mientras espera o escucha las respuestas. Felicite los aciertos. Y corrija con calma los errores y hablando en plural, por ejemplo diga sonriendo “vamos a tener que seguir intentando, dale proba otra vez, tenés otra oportunidad”.\r\nEstimula: \r\n- Desarrollo cognitivo: memoria auditiva, memoria visual, atención, concentración, razonamiento, lenguaje.\r\n- Desarrollo socio – emocional: autoestima, conducta y vínculos.', NULL, 1, 12),
(72, 'BIEN', 'Reconoce objetos iguales y diferentes.', NULL, NULL, NULL, 1, 12),
(73, 'MUY MAL', 'Su expresión gráfica está poco desarrollada. Sus trazos  aún no tienen formas reconocibles.', '•Trabajar con pintura: con los dedos, con pincel. \r\n•Permitirle pintar o dibujar de pie. Que realice dibujos libres (aunque sean garabatos) dos o tres oportunidades diarias. \r\n•Dibujar con los dedos en el aire, dirigiendo los trazos con palabras: arriba – abajo;  izquierda – derecha; diagonal; zig-zag ; semi círculos\r\ncírculo y semicírculos (con forma de C); líneas; rayas.\r\n•Realizar un dibujo y pedirle que nos ayude y lo pinte, felicitar lo que sea capaz de hacer.', NULL, 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA', 1, 13),
(74, 'MAL', 'Su expresión gráfica aún no está muy desarrollada.', '•Trabajar con pintura: con los dedos, con pincel. \r\n•Permitirle pintar o dibujar de pie. Que realice dibujos libres (aunque sean garabatos) dos o tres oportunidades diarias. \r\n•Dibujar con los dedos en el aire, dirigiendo los trazos con palabras: arriba – abajo;  izquierda – derecha; diagonal; zig-zag ; semi círculos\r\ncírculo y semicírculos (con forma de C); líneas; rayas.\r\n•Realizar un dibujo y pedirle que nos ayude y lo pinte, felicitar lo que sea capaz de hacer.', NULL, NULL, 1, 13),
(75, 'MAL', 'Su expresión gráfica aún no está muy desarrollada.', '•Trabajar con pintura: con los dedos, con pincel. \r\n•Permitirle pintar o dibujar de pie. Que realice dibujos libres (aunque sean garabatos) dos o tres oportunidades diarias. \r\n•Dibujar con los dedos en el aire, dirigiendo los trazos con palabras: arriba – abajo;  izquierda – derecha; diagonal; zig-zag ; semi círculos\r\ncírculo y semicírculos (con forma de C); líneas; rayas.\r\n•Realizar un dibujo y pedirle que nos ayude y lo pinte, felicitar lo que sea capaz de hacer.', NULL, NULL, 1, 13),
(76, 'MAL', 'Su expresión gráfica aún no está muy desarrollada.', '•Trabajar con pintura: con los dedos, con pincel. \r\n•Permitirle pintar o dibujar de pie. Que realice dibujos libres (aunque sean garabatos) dos o tres oportunidades diarias. \r\n•Dibujar con los dedos en el aire, dirigiendo los trazos con palabras: arriba – abajo;  izquierda – derecha; diagonal; zig-zag ; semicírculos\r\ncírculo y semicírculos (con forma de C); líneas; rayas.\r\n•Realizar un dibujo y pedirle que nos ayude y lo pinte, felicitar lo que sea capaz de hacer.', NULL, NULL, 1, 13),
(77, 'MAL', 'Su expresión gráfica aún no está muy desarrollada.', '•Trabajar con pintura: con los dedos, con pincel. \r\n•Permitirle pintar o dibujar de pie. Que realice dibujos libres (aunque sean garabatos) dos o tres oportunidades diarias. \r\n•Dibujar con los dedos en el aire, dirigiendo los trazos con palabras: arriba – abajo;  izquierda – derecha; diagonal; zig-zag ; semicírculos\r\ncírculo y semicírculos (con forma de C); líneas; rayas.\r\n•Realizar un dibujo y pedirle que nos ayude y lo pinte, felicitar lo que sea capaz de hacer.\r\n•Trabajar con pintura: con los dedos, con pincel. \r\n•Permitirle pintar o dibujar de pie. Que realice dibujos libres (aunque sean garabatos) dos o tres oportunidades diarias. \r\n•Dibujar con los dedos en el aire, dirigiendo los trazos con palabras: arriba – abajo;  izquierda – derecha; diagonal; zig-zag ; semicírculos\r\ncírculo y semicírculos (con forma de C); líneas; rayas.\r\n•Realizar un dibujo y pedirle que nos ayude y lo pinte, felicitar lo que sea capaz de hacer.', NULL, NULL, 1, 13),
(78, 'MAL', 'Su expresión gráfica aún está desarrollándose.', '•Trabajar con pintura: con los dedos, con pincel. \r\n•Permitirle pintar o dibujar de pie. Que realice dibujos libres (aunque sean garabatos) dos o tres oportunidades diarias. \r\n•Dibujar con los dedos en el aire, dirigiendo los trazos con palabras: arriba – abajo;  izquierda – derecha; diagonal; zig-zag ; semi círculos\r\ncírculo y semicírculos (con forma de C); líneas; rayas.\r\n•Realizar un dibujo y pedirle que nos ayude y lo pinte, felicitar lo que sea capaz de hacer.', NULL, NULL, 1, 13),
(79, 'MASOMENOS', 'Su expresión gráfica aún está desarrollándose.', '•Trabajar con pintura: con los dedos, con pincel. \r\n•Permitirle pintar o dibujar de pie. Que realice dibujos libres (aunque sean garabatos) dos o tres oportunidades diarias. \r\n•Dibujar con los dedos en el aire, dirigiendo los trazos con palabras: arriba – abajo;  izquierda – derecha; diagonal; zig-zag ; semi círculos\r\ncírculo y semicírculos (con forma de C); líneas; rayas.\r\n•Realizar un dibujo y pedirle que nos ayude y lo pinte, felicitar lo que sea capaz de hacer.', NULL, NULL, 1, 13),
(80, 'MASOMENOS', 'Su expresión gráfica aún está desarrollándose.', '•Trabajar con pintura: con los dedos, con pincel. \r\n•Permitirle pintar o dibujar de pie. Que realice dibujos libres (aunque sean garabatos) dos o tres oportunidades diarias. \r\n•Dibujar con los dedos en el aire, dirigiendo los trazos con palabras: arriba – abajo;  izquierda – derecha; diagonal; zig-zag ; semi círculos\r\ncírculo y semicírculos (con forma de C); líneas; rayas.\r\n•Realizar un dibujo y pedirle que nos ayude y lo pinte, felicitar lo que sea capaz de hacer.', NULL, NULL, 1, 13),
(81, 'MASOMENOS', 'Su expresión gráfica es muy buena. Sus trazos  tienen formas reconocibles incluyendo la figura humana.', '•Trabajar con pintura: con los dedos, con pincel. \r\n•Permitirle pintar o dibujar de pie. Que realice dibujos libres (aunque sean garabatos) dos o tres oportunidades diarias. \r\n•Dibujar con los dedos en el aire, dirigiendo los trazos con palabras: arriba – abajo;  izquierda – derecha; diagonal; zig-zag ; semi círculos\r\ncírculo y semicírculos (con forma de C); líneas; rayas.\r\n•Realizar un dibujo y pedirle que nos ayude y lo pinte, felicitar lo que sea capaz de hacer.', NULL, NULL, 1, 13),
(82, 'BIEN', NULL, NULL, NULL, NULL, 1, 13),
(83, 'MUY MAL', 'Necesita ayuda para poder escribir su nombre y/o palabras básicas.', '• Busquen y recorten de diarios o revistas las letras de su nombre, para que las conozca. Pueden pegarlas en una hoja y colgarla en la pared.', 'LA - RA- LA- RA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: elementos que se utilizan en tareas que necesitan ser mejoradas\r\nConsigna: El adulto seleccionará los elementos que participan en la tarea que necesita ser mejorada.  Y dará un tiempo limitado para que cada participante invente una canción muy corta, relacionada con lo que están haciendo por ejemplo: “comemos mandarina en nuestra cocina… comemos mandarina en nuestra cocina, la, ra,  la, ra…”; “pinto un dibujito con mi lapicito la, ra, la, ra…”; “hago un dibujito con mi manito la, ra, la,  ra…” y la cantarán y bailaran juntos. Próximamente podrán cantarla en voz baja mientras ejecutan la acción descripta en la canción inventada.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: la capacidad de atención, concentración, creatividad, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA', 1, 14),
(84, 'MAL', 'Aún necesita ayuda para poder escribir su nombre y palabras básicas.', '• Busquen y recorten de diarios o revistas las letras de su nombre, para que las conozca. Pueden pegarlas en una hoja y colgarla en la pared.', 'LA - RA- LA- RA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: elementos que se utilizan en tareas que necesitan ser mejoradas\r\nConsigna: El adulto seleccionará los elementos que participan en la tarea que necesita ser mejorada.  Y dará un tiempo limitado para que cada participante invente una canción muy corta, relacionada con lo que están haciendo por ejemplo: “comemos mandarina en nuestra cocina… comemos mandarina en nuestra cocina, la, ra,  la, ra…”; “pinto un dibujito con mi lapicito la, ra, la, ra…”; “hago un dibujito con mi manito la, ra, la,  ra…” y la cantarán y bailarán juntos. Próximamente podrán cantarla en voz baja mientras ejecutan la acción descrita en la canción inventada.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: la capacidad de atención, concentración, creatividad, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 14),
(85, 'MAL', 'Aún necesita ayuda para poder escribir su nombre y palabras básicas.', '• Busquen y recorten de diarios o revistas las letras de su nombre, para que las conozca. Pueden pegarlas en una hoja y colgarla en la pared.', 'LA - RA- LA- RA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: elementos que se utilizan en tareas que necesitan ser mejoradas\r\nConsigna: El adulto seleccionará los elementos que participan en la tarea que necesita ser mejorada.  Y dará un tiempo limitado para que cada participante invente una canción muy corta, relacionada con lo que están haciendo por ejemplo: “comemos mandarina en nuestra cocina… comemos mandarina en nuestra cocina, la, ra,  la, ra…”; “pinto un dibujito con mi lapicito la, ra, la, ra…”; “hago un dibujito con mi manito la, ra, la,  ra…” y la cantarán y bailarán juntos. Próximamente podrán cantarla en voz baja mientras ejecutan la acción descrita en la canción inventada.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: la capacidad de atención, concentración, creatividad, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 14),
(86, 'MASOMENOS', 'En ocasiones necesita ayuda para poder escribir su nombre y palabras básicas.', '• Busquen y recorten de diarios o revistas las letras de su nombre, para que las conozca. Pueden pegarlas en una hoja y colgarla en la pared.', 'LA - RA- LA- RA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: elementos que se utilizan en tareas que necesitan ser mejoradas\r\nConsigna: El adulto seleccionará los elementos que participan en la tarea que necesita ser mejorada.  Y dará un tiempo limitado para que cada participante invente una canción muy corta, relacionada con lo que están haciendo por ejemplo: “comemos mandarina en nuestra cocina… comemos mandarina en nuestra cocina, la, ra,  la, ra…”; “pinto un dibujito con mi lapicito la, ra, la, ra…”; “hago un dibujito con mi manito la, ra, la,  ra…” y la cantarán y bailaran juntos. Próximamente podrán cantarla en voz baja mientras ejecutan la acción descripta en la canción inventada.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: la capacidad de atención, concentración, creatividad, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 14),
(87, 'MASOMENOS', 'En ocasiones puede escribir su nombre y algunas palabras básicas.', '• Busquen y recorten de diarios o revistas las letras de su nombre, para que las conozca. Pueden pegarlas en una hoja y colgarla en la pared.', '', NULL, 1, 14),
(88, 'BIEN', 'Puede escribir su nombre y algunas palabras básicas.', NULL, NULL, NULL, 1, 14),
(89, 'MAL', 'Aún no reconoce las vocales.    ', NULL, 'CLAVELES Y ROSALES  A, E, I, O, U SON LAS VOCALES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: los dedos de una mano\r\nConsigna: el adulto contará una historia. Los participantes escucharán con atención y mostraran el dedo que corresponda a cada personaje.\r\n“Había una vez un país llamado “Mano”, en el que vivían un grupo de hormigas que se llevaban muy bien y se divertían mucho trabajando juntas, se llamaban así:\r\nLa más gordita (mostrar el dedo pulgar) era muy Alegre y se llamaba A.\r\nLa que tenía una hermana melliza (mostrar el dedo índice) era muy Elegante y se llamaba E.\r\nLa más grande (mostrar el dedo mayor) era muy Inteligente y se llamaba I.\r\nLa otra hermana melliza (mostrar el dedo anular) era muy Obediente y se llamaba O.\r\nY la que falta era la Unica chiquita (mostrar el dedo meñique) se llamaba U.\r\nY claveles y rosales A, E, I, O, U son las vocales.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual.\r\n- Desarrollo socio – emocional: autoestima.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA', 1, 15),
(90, 'MASOMENOS', 'Aún no afianzó el reconocimiento de las vocales, a veces lo hace bien y otras veces no.', NULL, 'CLAVELES Y ROSALES  A, E, I, O, U SON LAS VOCALES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: los dedos de una mano\r\nConsigna: el adulto contará una historia. Los participantes escucharán con atención y mostraran el dedo que corresponda a cada personaje.\r\n“Había una vez un país llamado “Mano”, en el que vivían un grupo de hormigas que se llevaban muy bien y se divertían mucho trabajando juntas, se llamaban así:\r\nLa más gordita (mostrar el dedo pulgar) era muy Alegre y se llamaba A.\r\nLa que tenía una hermana melliza (mostrar el dedo índice) era muy Elegante y se llamaba E.\r\nLa más grande (mostrar el dedo mayor) era muy Inteligente y se llamaba I.\r\nLa otra hermana melliza (mostrar el dedo anular) era muy Obediente y se llamaba O.\r\nY la que falta era la Unica chiquita (mostrar el dedo meñique) se llamaba U.\r\nY claveles y rosales A, E, I, O, U son las vocales.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 15),
(91, 'BIEN', 'Reconoce todas las vocales.    ', NULL, 'CLAVELES Y ROSALES  A, E, I, O, U SON LAS VOCALES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: los dedos de una mano\r\nConsigna: el adulto contará una historia. Los participantes escucharán con atención y mostraran el dedo que corresponda a cada personaje.\r\n“Había una vez un país llamado “Mano”, en el que vivían un grupo de hormigas que se llevaban muy bien y se divertían mucho trabajando juntas, se llamaban así:\r\nLa más gordita (mostrar el dedo pulgar) era muy Alegre y se llamaba A.\r\nLa que tenía una hermana melliza (mostrar el dedo índice) era muy Elegante y se llamaba E.\r\nLa más grande (mostrar el dedo mayor) era muy Inteligente y se llamaba I.\r\nLa otra hermana melliza (mostrar el dedo anular) era muy Obediente y se llamaba O.\r\nY la que falta era la Unica chiquita (mostrar el dedo meñique) se llamaba U.\r\nY claveles y rosales A, E, I, O, U son las vocales.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 15),
(92, 'MAL', 'Aún no reconoce y ni escribe los números del 1 al 10.', '• Solicite que ayude en la organización de su propia ropa, contando cuantas prendas tiene de cada una y de qué color.', 'ADIVI-MATICA \r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: cartucheras, mochilas u objetos que puedan contener a otros dentro, hoja o pizarrón para anotar\r\nConsigna: el adulto toma uno de los objetos y propone adivinar cuántos objetos hay a dentro del mismo. Por ejemplo si toma un cartuchera puede preguntar ¿quién adivina cuántos lápices habrá en adentro? Y anota las respuestas de los participantes. Luego le pedirá a un participante que abra la cartuchera y cuente los lápices que hay adentro. Si se encuentran otros elementos como goma de borrar, se razona conjuntamente preguntando a todos los participantes ¿esta goma de borrar se cuenta o no?; ¿qué decía la consigna?\r\nEstimula: \r\n- Desarrollo cognitivo: atención, concentración, razonamiento lógico- matemático, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 16),
(93, '\r\nMAL\r\nMASOMENOS\r\n', 'Su conocimiento de los números del 1 al 10, aún no es estable,  por ejemplo en ocasiones los reconoce y a veces no.', '• Solicite que ayude en la organización de su propia ropa, contando cuantas prendas tiene de cada una y de qué color.', 'ADIVI-MATICA \r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: cartucheras, mochilas u objetos que puedan contener a otros dentro, hoja o pizarrón para anotar\r\nConsigna: el adulto toma uno de los objetos y propone adivinar cuantos objetos hay adentro del mismo. Por ejemplo si toma un cartuchera puede preguntar ¿quién adivina cuantos lápices habrá en adentro? Y anota las respuestas de los participantes. Luego le pedirá a un participante que abra la cartuchera y cuente los lápices que hay adentro. Si se encuentran otros elementos como goma de borrar, se razona conjuntamente preguntando a todos los participantes ¿esta goma de borrar se cuenta o no?; ¿qué decía la consigna?\r\nEstimula: \r\n- Desarrollo cognitivo: atención, concentración, razonamiento lógico- matemático, lenguaje.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 16),
(94, 'BIEN', 'Reconoce y escribe los números del 1 al 10.', NULL, NULL, NULL, 1, 16),
(95, 'MAL', 'Su conteo es aún muy acotado. Si se le propone contar hasta 20 necesita mucha ayuda para lograrlo.', '• Recurra a actividades en las que tenga que identificar, comparar, clasificar, seriar diferentes objetos, de acuerdo con sus características.\r\n• Aproveche situaciones cotidianas para que manipule y emplee cantidades, por ejemplo, puede solicitar que con ayuda, averigüe el precio de dos producto en el quiosco (si el contexto es adecuado, sus golosinas favorita) y luego realice preguntas comparativas sobre los precios.', '1, 2 Y 3: UNA MONEDA A LA VEZ\r\nParticipantes: dos o más personas. \r\nAdministración: 20 minutos \r\nEspacio: interior o exterior.\r\nMateriales: una moneda, hojas blancas, un crayón y una tijera de puntas redondeadas, por cada participante. Y 15 objetos 5 y bolsas plásticas\r\nConsigna: el adulto dará las siguientes consignas a los participantes, aclarando que intenten realizarlas y si necesitan ayuda pueden pedirla:\r\n 1: Colocá la moneda debajo de la cartulina.\r\n2: Tocá la moneda con tus dedos y agarrala.\r\n3: Con el crayón pintá la moneda sobre la hoja.\r\n4: Recortá la moneda de cartulina.\r\nIMPORTANTE: si no logra cumplir alguna consigna, la realizará con ayuda del adulto, esta ayuda primeramente será verbal y si es necesario física.\r\nRepetir el procedimiento hasta fabricar 15 monedas para jugar.\r\nLos participantes colocaran en una bolsa 1 objeto, en otra bolsa 2 objetos, en otra 3, en otra 4 y en la última bolsa 5 objetos, contando en voz alta mientras los colocan.\r\nTodos jugaran a vender y comprar, el valor de cada bolsa es igual a la cantidad de objetos que contiene, por ejemplo: la bolsa con 1 objeto, vale 1 moneda, la bolsa con de 2 objetos vale 2 monedas y así sucesivamente.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina y gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual, razonamiento lógico matemático.\r\n- Desarrollo socio – emocional: autoestima, tolerancia a la frustración.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA', 1, 17),
(96, 'MASOMENOS', 'Su conteo es aún acotado. Si se le propone contar hasta 20 necesita ayuda para lograrlo.', '• Recurra a actividades en las que tenga que identificar, comparar, clasificar, seriar diferentes objetos, de acuerdo con sus características.\r\n• Aproveche situaciones cotidianas para que manipule y emplee cantidades, por ejemplo, puede solicitar que con ayuda, averigüe el precio de dos producto en el quiosco (si el contexto es adecuado, sus golosinas favorita) y luego realice preguntas comparativas sobre los precios.', '1, 2 Y 3: UNA MONEDA A LA VEZ\r\nParticipantes: dos o más personas. \r\nAdministración: 20 minutos \r\nEspacio: interior o exterior.\r\nMateriales: una moneda, hojas blancas, un crayón y una tijera de puntas redondeadas, por cada participante. Y 15 objetos 5 y bolsas plásticas\r\nConsigna: el adulto dará las siguientes consignas a los participantes, aclarando que intenten realizarlas y si necesitan ayuda pueden pedirla:\r\n 1: Colocá la moneda debajo de la cartulina.\r\n2: Tocá la moneda con tus dedos y agarrala.\r\n3: Con el crayón pintá la moneda sobre la hoja.\r\n4: Recortá la moneda de cartulina.\r\nIMPORTANTE: si no logra cumplir alguna consigna, la realizará con ayuda del adulto, esta ayuda primeramente será verbal y si es necesario física.\r\nRepetir el procedimiento hasta fabricar 15 monedas para jugar.\r\nLos participantes colocaran en una bolsa 1 objeto, en otra bolsa 2 objetos, en otra 3, en otra 4 y en la última bolsa 5 objetos, contando en voz alta mientras los colocan.\r\nTodos jugaran a vender y comprar, el valor de cada bolsa es igual a la cantidad de objetos que contiene, por ejemplo: la bolsa con 1 objeto, vale 1 moneda, la bolsa con de 2 objetos vale 2 monedas y así sucesivamente.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina y gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual, razonamiento lógico matemático.\r\n- Desarrollo socio – emocional: autoestima, tolerancia a la frustración.', NULL, 1, 17),
(97, 'BIEN', 'Su conteo está dentro de lo esperable.Si se le propone contar hasta 20, puede hacerlo sin ayuda.', '', '1, 2 Y 3: UNA MONEDA A LA VEZ\r\nParticipantes: dos o más personas. \r\nAdministración: 20 minutos \r\nEspacio: interior o exterior.\r\nMateriales: una moneda, hojas blancas, un crayón y una tijera de puntas redondeadas, por cada participante. Y 15 objetos 5 y bolsas plásticas\r\nConsigna: el adulto dará las siguientes consignas a los participantes, aclarando que intenten realizarlas y si necesitan ayuda pueden pedirla:\r\n 1: Colocá la moneda debajo de la cartulina.\r\n2: Tocá la moneda con tus dedos y agarrala.\r\n3: Con el crayón pintá la moneda sobre la hoja.\r\n4: Recortá la moneda de cartulina.\r\nIMPORTANTE: si no logra cumplir alguna consigna, la realizará con ayuda del adulto, esta ayuda primeramente será verbal y si es necesario física.\r\nRepetir el procedimiento hasta fabricar 15 monedas para jugar.\r\nLos participantes colocaran en una bolsa 1 objeto, en otra bolsa 2 objetos, en otra 3, en otra 4 y en la última bolsa 5 objetos, contando en voz alta mientras los colocan.\r\nTodos jugaran a vender y comprar, el valor de cada bolsa es igual a la cantidad de objetos que contiene, por ejemplo: la bolsa con 1 objeto, vale 1 moneda, la bolsa con de 2 objetos vale 2 monedas y así sucesivamente.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina y gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual, razonamiento lógico matemático.\r\n- Desarrollo socio – emocional: autoestima, tolerancia a la frustración.', NULL, 1, 17),
(98, 'MUY MAL', 'Requiere ayuda, de manera recurrente para  realizar copias de producciones escritas.', '•Es primordial explicarle con oraciones cortas y claras, que se espera de su comportamiento, en cada jornada escolar. Mencionando solo la acción que se espera que haga. Por ejemplo si quiere que preste atención, en vez de decir “no hables”, diga “escuchá”; si quiere que copie una tarea, en vez de decir “no te distraigas”, diga “concentrate”. Cada vez que lo logre, aplaudir conjuntamente el avance.', 'MEMOTEST CORPORAL\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: ninguno\r\nConsigna: el adulto solicita a los participantes que presten atención y realiza una secuencia simple de dos acciones (que los participantes puedan realizar por sí mismos). Por ejemplo: aplaudir y sentarse en el piso.\r\nDespués de la demostración de la secuencia, la realizarán los participantes. Si sólo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente.\r\nEl adulto dirá “otra oportunidad” y volverá a realizar la secuencia, solicitando nuevamente a los participantes que presten atención. Si solo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente y se cambia de secuencia.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual.\r\n- Desarrollo socio – emocional: autoestima.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO PSICOMOTOR, sugerimos realizar una consulta en: PSICOPEDAGOGIA\r\n', 1, 18),
(99, 'MAL', 'Requiere ayuda para  realizar copias de producciones escritas.', '•Es primordial explicarle con oraciones cortas y claras, que se espera de su comportamiento, en cada jornada escolar. Mencionando solo la acción que se espera que haga. Por ejemplo si quiere que preste atención, en vez de decir “no hables”, diga “escuchá”; si quiere que copie una tarea, en vez de decir “no te distraigas”, diga “concentrate”. Cada vez que lo logre, aplaudir conjuntamente el avance.', 'MEMOTEST CORPORAL\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: ninguno\r\nConsigna: el adulto solicita a los participantes que presten atención y realiza una secuencia simple de dos acciones (que los participantes puedan realizar por sí mismos). Por ejemplo: aplaudir y sentarse en el piso.\r\nDespués de la demostración de la secuencia, la realizarán los participantes. Si sólo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente.\r\nEl adulto dirá “otra oportunidad” y volverá a realizar la secuencia, solicitando nuevamente a los participantes que presten atención. Si solo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente y se cambia de secuencia.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 18),
(100, 'MAL', 'Requiere ayuda para  realizar copias de producciones escritas.', '•Es primordial explicarle con oraciones cortas y claras, que se espera de su comportamiento, en cada jornada escolar. Mencionando solo la acción que se espera que haga. Por ejemplo si quiere que preste atención, en vez de decir “no hables”, diga “escuchá”; si quiere que copie una tarea, en vez de decir “no te distraigas”, diga “concentrate”. Cada vez que lo logre, aplaudir conjuntamente el avance.', 'MEMOTEST CORPORAL\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: ninguno\r\nConsigna: el adulto solicita a los participantes que presten atención y realiza una secuencia simple de dos acciones (que los participantes puedan realizar por sí mismos). Por ejemplo: aplaudir y sentarse en el piso.\r\nDespués de la demostración de la secuencia, la realizarán los participantes. Si sólo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente.\r\nEl adulto dirá “otra oportunidad” y volverá a realizar la secuencia, solicitando nuevamente a los participantes que presten atención. Si solo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente y se cambia de secuencia.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 18),
(101, 'MASOMENOS', 'Requiere ayuda para  realizar copias de producciones escritas.', '•Es primordial explicarle con oraciones cortas y claras, que se espera de su comportamiento, en cada jornada escolar. Mencionando solo la acción que se espera que haga. Por ejemplo si quiere que preste atención, en vez de decir “no hables”, diga “escuchá”; si quiere que copie una tarea, en vez de decir “no te distraigas”, diga “concentrate”. Cada vez que lo logre, aplaudir conjuntamente el avance.', 'MEMOTEST CORPORAL\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: ninguno\r\nConsigna: el adulto solicita a los participantes que presten atención y realiza una secuencia simple de dos acciones (que los participantes puedan realizar por sí mismos). Por ejemplo: aplaudir y sentarse en el piso.\r\nDespués de la demostración de la secuencia, la realizarán los participantes. Si sólo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente.\r\nEl adulto dirá “otra oportunidad” y volverá a realizar la secuencia, solicitando nuevamente a los participantes que presten atención. Si solo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente y se cambia de secuencia.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 18),
(102, 'MASOMENOS', 'Algunas veces puede realizar  sin dificultad copias de producciones escritas.', '•Es primordial explicarle con oraciones cortas y claras, que se espera de su comportamiento, en cada jornada escolar. Mencionando solo la acción que se espera que haga. Por ejemplo si quiere que preste atención, en vez de decir “no hables”, diga “escuchá”; si quiere que copie una tarea, en vez de decir “no te distraigas”, diga “concentrate”. Cada vez que lo logre, aplaudir conjuntamente el avance.', 'MEMOTEST CORPORAL\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: ninguno\r\nConsigna: el adulto solicita a los participantes que presten atención y realiza una secuencia simple de dos acciones (que los participantes puedan realizar por sí mismos). Por ejemplo: aplaudir y sentarse en el piso.\r\nDespués de la demostración de la secuencia, la realizarán los participantes. Si sólo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente.\r\nEl adulto dirá “otra oportunidad” y volverá a realizar la secuencia, solicitando nuevamente a los participantes que presten atención. Si solo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente y se cambia de secuencia.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 18),
(103, 'BIEN', 'Puede realizar  sin dificultad copias de producciones escritas.', NULL, 'MEMOTEST CORPORAL\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos \r\nEspacio: interior o exterior.\r\nMateriales: ninguno\r\nConsigna: el adulto solicita a los participantes que presten atención y realiza una secuencia simple de dos acciones (que los participantes puedan realizar por sí mismos). Por ejemplo: aplaudir y sentarse en el piso.\r\nDespués de la demostración de la secuencia, la realizarán los participantes. Si sólo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente.\r\nEl adulto dirá “otra oportunidad” y volverá a realizar la secuencia, solicitando nuevamente a los participantes que presten atención. Si solo realizan una parte de la secuencia, o si la realizan en un orden incorrecto, se aplaude el intento conjuntamente y se cambia de secuencia.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad gruesa.\r\n- Desarrollo cognitivo: atención, concentración, memoria auditiva, memoria kinestésica, memoria visual.\r\n- Desarrollo socio – emocional: autoestima.', NULL, 1, 18),
(104, 'MUY MAL', 'Aún no puede controlar sus impulsos, ni reconocer  y expresar sanamente sus emociones. Necesita ayuda para tomar conciencia de los sentimientos de las demás personas.', '•Entregarle la hoja (o el material que corresponda) en primer lugar (antes que a sus compañeros) pedirle que se concentre en la tarea, que haga lo mejor que pueda y avisarle que cuando termine de repartir las hojas o materiales, al resto de los alumnos, estaré disponible para ayudarlo si surgió alguna duda. \r\n\r\n•Diariamente y durante un mes: explicarle con oraciones cortas y claras, que se espera de él, en cada jornada escolar. Hablar “solo” de la acción que se espera que haga. Por ejemplo si quiero que preste atención, en vez de decirle que “no se meta debajo de la mesa”, le digo que por favor “si sienta en su silla” será felicitado. Si lo hace aplaudir conjuntamente el avance. \r\n\r\n\r\n•Bríndele ayuda para que nombre sus emociones en sus diálogos cotidianos, por ejemplo: “siento enojo porque no me llevaste al parque”, “siento alegría porque mañana nos vamos de paseo”, “siento miedo de que apagues la luz porque nadie se queda conmigo.”\r\n• Todos los días durante una semana: piense en tres características positivas de su personalidad y dígaselas. \r\n• Aliente el progreso con frases positivas, en el momento de hacer tareas, tales como: vos podés - dale que lo lográs - sigamos practicando que ganamos -  cada vez lo haces mejor.\r\n', 'EMOCIONES BASICAS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: recortar, con tijeras de puntas redondeadas,  imágenes de rostros o dibujos de caras con diferentes emociones: alegría, tristeza, miedo, rabia, etc.\r\nConsigna: Ayudarlo a reconocer emociones básicas: alegría, tristeza, miedo y rabia en fotografías o dibujos y realizando preguntas al respecto, por ejemplo: "¿Qué le pasa a esta persona?", "¿Está triste?", "¿Por qué pensás vos que está triste?"\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.\r\n\r\nEMOCIONES A LA CARTA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: papel o cartulina\r\nConsigna: recortar (con tijera de puntas redondeadas) 4 tarjetas de papel. Se dibuja una carita en cada tarjeta con diferentes emociones: alegría, enojo, tristeza, miedo, etc.\r\nSe colocan las tarjetas en la mesa con los dibujos hacia abajo, se mezclan y cada participante en su turno elige una, tiene que decir cómo está la carita e inventar un motivo por ejemplo: “esta carita está enojada porque no quiere dormir”, “esta carita está triste porque se golpeó la mano”, etc. Se requiere atención porque no se pueden repetir las historias, si se repite alguna se vuelve a empezar. El adulto puede guiar cuando nota confusión en las emociones.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO COGNITIVO, sugerimos realizar una consulta en: PSICOLOGIA - PSICOPEDAGOGIA', 1, 21),
(105, 'MAL', 'Aún tiene algunas dificultades para controlar sus impulsos. Es necesario ayudarlo para que pueda reconocer  y expresar sanamente sus emociones y para que logre tomar conciencia de los sentimientos de las demás personas.', '\r\n•Entregarle la hoja (o el material que corresponda) en primer lugar (antes que a sus compañeros) pedirle que se concentre en la tarea, que haga lo mejor que pueda y avisarle que cuando termine de repartir las hojas o materiales, al resto de los alumnos, estaré disponible para ayudarlo si surgió alguna duda. \r\n\r\n•Diariamente y durante un mes: explicarle con oraciones cortas y claras, que se espera de él, en cada jornada escolar. Hablar “solo” de la acción que se espera que haga. Por ejemplo si quiero que preste atención, en vez de decirle que “no se meta debajo de la mesa”, le digo que por favor “si sienta en su silla” será felicitado. Si lo hace aplaudir conjuntamente el avance. \r\n\r\n\r\n•Bríndele ayuda para que nombre sus emociones en sus diálogos cotidianos, por ejemplo: “siento enojo porque no me llevaste al parque”, “siento alegría porque mañana nos vamos de paseo”, “siento miedo de que apagues la luz porque nadie se queda conmigo.”\r\n• Todos los días durante una semana: piense en tres características positivas de su personalidad y dígaselas. \r\n• Aliente el progreso con frases positivas, en el momento de hacer tareas, tales como: vos podés - dale que lo lográs - sigamos practicando que ganamos -  cada vez lo haces mejor.\r\n\r\n\r\n•Brindele ayuda para que nombre sus emociones en sus diálogos cotidianos, por ejemplo: “siento enojo porque no me llevaste al parque”, “siento alegría porque mañana nos vamos de paseo”, “siento miedo de que apagues la luz porque nadie se queda conmigo.”\r\n• Todos los días durante una semana: piense en tres características positivas de su personalidad y dígaselas.', 'EMOCIONES BASICAS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: recortar, con tijeras de puntas redondeadas,  imágenes de rostros o dibujos de caras con diferentes emociones: alegría, tristeza, miedo, rabia, etc.\r\nConsigna: Ayudarlo a reconocer emociones básicas: alegría, tristeza, miedo y rabia en fotografías o dibujos y realizando preguntas al respecto, por ejemplo: "¿Qué le pasa a esta persona?", "¿Está triste?", "¿Por qué pensás vos que está triste?"\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 21),
(106, 'MAL', '•Bríndele ayuda para que nombre sus emociones en sus diálogos cotidianos, por ejemplo: “siento enojo porque no me llevaste al parque”, “siento alegría porque mañana nos vamos de paseo”, “siento miedo de que apagues la luz porque nadie se queda conmigo.”\r\n• Todos los días durante una semana: piense en tres características positivas de su personalidad y dígaselas. ', 'EMOCIONES BÁSICAS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: recortar, con tijeras de puntas redondeadas,  imágenes de rostros o dibujos de caras con diferentes emociones: alegría, tristeza, miedo, rabia, etc.\r\nConsigna: Ayudarlo a reconocer emociones básicas: alegría, tristeza, miedo y rabia en fotografías o dibujos y realizando preguntas al respecto, por ejemplo: "¿Qué le pasa a esta persona?", "¿Está triste?", "¿Por qué pensás vos que está triste?"\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, NULL, 1, 21),
(107, 'MAL', 'Aún tiene algunas dificultades para controlar sus impulsos. Es necesario ayudarlo para que pueda reconocer  y expresar sanamente sus emociones y para que logre tomar conciencia de los sentimientos de las demás personas.', '•Bríndele ayuda para que nombre sus emociones en sus diálogos cotidianos, por ejemplo: “siento enojo porque no me llevaste al parque”, “siento alegría porque mañana nos vamos de paseo”, “siento miedo de que apagues la luz porque nadie se queda conmigo.”\r\n• Todos los días durante una semana: piense en tres características positivas de su personalidad y dígaselas. ', 'EMOCIONES BASICAS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: recortar, con tijeras de puntas redondeadas,  imágenes de rostros o dibujos de caras con diferentes emociones: alegría, tristeza, miedo, rabia, etc.\r\nConsigna: Ayudarlo a reconocer emociones básicas: alegría, tristeza, miedo y rabia en fotografías o dibujos y realizando preguntas al respecto, por ejemplo: "¿Qué le pasa a esta persona?", "¿Está triste?", "¿Por qué pensás vos que está triste?"\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 21);
INSERT INTO `tresultado` (`idresultado`, `vcresultestninio`, `vcresultinfobt`, `vcresultsugprof`, `vcresultejepot`, `vcresultorientadult`, `boresultestado`, `idsubfactor`) VALUES
(108, 'MAL', 'Aún tiene algunas dificultades para controlar sus impulsos. Es necesario ayudarlo para que pueda reconocer  y expresar sanamente sus emociones y para que logre tomar conciencia de los sentimientos de las demás personas.', '•Bríndele ayuda para que nombre sus emociones en sus diálogos cotidianos, por ejemplo: “siento enojo porque no me llevaste al parque”, “siento alegría porque mañana nos vamos de paseo”, “siento miedo de que apagues la luz porque nadie se queda conmigo.”\r\n• Todos los días durante una semana: piense en tres características positivas de su personalidad y dígaselas. ', 'EMOCIONES BÁSICAS\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: recortar, con tijeras de puntas redondeadas,  imágenes de rostros o dibujos de caras con diferentes emociones: alegría, tristeza, miedo, rabia, etc.\r\nConsigna: Ayudarlo a reconocer emociones básicas: alegría, tristeza, miedo y rabia en fotografías o dibujos y realizando preguntas al respecto, por ejemplo: "¿Qué le pasa a esta persona?", "¿Está triste?", "¿Por qué pensás vos que está triste?"\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 21),
(109, 'MAL', 'En algunas ocasiones puede expresar sanamente sus emociones y tener en cuenta los sentimientos de las demás personas.', '•Nombre las emociones en sus diálogos cotidianos, por ejemplo: “siento enojo cuando  te hablo y no me escuchas”, “siento alegría porque te pedí que te quedes conmigo y me hiciste caso”, “siento miedo de que cruces la calle sin darme la mano, porque algunos autos no respetan los semáforos.”\r\n•Todos los días durante una semana: felicite su accionar, cuando haga algo bueno.', 'EMOCIONES A LA CARTA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: papel o cartulina\r\nConsigna: recortar (con tijera de puntas redondeadas) 4 tarjetas de papel. Se dibuja una carita en cada tarjeta con diferentes emociones: alegría, enojo, tristeza, miedo, etc.\r\nSe colocan las tarjetas en la mesa con los dibujos hacia abajo, se mezclan y cada participante en su turno elige una, tiene que decir cómo está la carita e inventar un motivo por ejemplo: “esta carita está enojada porque no quiere dormir”, “esta carita está triste porque se golpeó la mano”, etc. Se requiere atención porque no se pueden repetir las historias, si se repite alguna se vuelve a empezar. El adulto puede guiar cuando nota confusión en las emociones.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 21),
(110, 'MASOMENOS', 'En muchas ocasiones puede expresar sanamente sus emociones y tener en cuenta los sentimientos de las demás personas.', '•Nombre las emociones en sus diálogos cotidianos, por ejemplo: “siento enojo cuando  te hablo y no me escuchas”, “siento alegría porque te pedí que te quedes conmigo y me hiciste caso”, “siento miedo de que cruces la calle sin darme la mano, porque algunos autos no respetan los semáforos.”\r\n•Todos los días durante una semana: felicite su accionar, cuando haga algo bueno.', 'EMOCIONES A LA CARTA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: papel o cartulina\r\nConsigna: recortar (con tijera de puntas redondeadas) 4 tarjetas de papel. Se dibuja una carita en cada tarjeta con diferentes emociones: alegría, enojo, tristeza, miedo, etc.\r\nSe colocan las tarjetas en la mesa con los dibujos hacia abajo, se mezclan y cada participante en su turno elige una, tiene que decir cómo está la carita e inventar un motivo por ejemplo: “esta carita está enojada porque no quiere dormir”, “esta carita está triste porque se golpeó la mano”, etc. Se requiere atención porque no se pueden repetir las historias, si se repite alguna se vuelve a empezar. El adulto puede guiar cuando nota confusión en las emociones.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 21),
(111, 'MASOMENOS', 'Generalmente puede controlar sus impulsos. Reconocer y expresar sus emociones sanamente y tener en cuenta los sentimientos de las demás personas.', '•Nombre las emociones en sus diálogos cotidianos, por ejemplo: “siento enojo cuando  te hablo y no me escuchas”, “siento alegría porque te pedí que te quedes conmigo y me hiciste caso”, “siento miedo de que cruces la calle sin darme la mano, porque algunos autos no respetan los semáforos.”\r\n•Todos los días durante una semana: felicite su accionar, cuando haga algo bueno.', 'EMOCIONES A LA CARTA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: papel o cartulina\r\nConsigna: recortar (con tijera de puntas redondeadas) 4 tarjetas de papel. Se dibuja una carita en cada tarjeta con diferentes emociones: alegría, enojo, tristeza, miedo, etc.\r\nSe colocan las tarjetas en la mesa con los dibujos hacia abajo, se mezclan y cada participante en su turno elige una, tiene que decir cómo está la carita e inventar un motivo por ejemplo: “esta carita está enojada porque no quiere dormir”, “esta carita está triste porque se golpeó la mano”, etc. Se requiere atención porque no se pueden repetir las historias, si se repite alguna se vuelve a empezar. El adulto puede guiar cuando nota confusión en las emociones.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 21),
(112, '\r\nMASOMENOS\r\n', 'Generalmente puede controlar sus impulsos. Reconocer y expresar sus emociones sanamente y tener en cuenta los sentimientos de las demás personas.', '•Nombre las emociones en sus diálogos cotidianos, por ejemplo: “siento enojo cuando  te hablo y no me escuchas”; “siento alegría porque te pedí que te quedes conmigo y me hiciste caso”; “siento miedo de que cruces la calle sin darme la mano, porque algunos autos no respetan los semáforos.”\r\n•Todos los días durante una semana: felicite su accionar, cuando haga algo bueno.', 'EMOCIONES A LA CARTA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: papel o cartulina\r\nConsigna: recortar (con tijera de puntas redondeadas) 4 tarjetas de papel. Se dibuja una carita en cada tarjeta con diferentes emociones: alegría, enojo, tristeza, miedo, etc.\r\nSe colocan las tarjetas en la mesa con los dibujos hacia abajo, se mezclan y cada participante en su turno elige una, tiene que decir cómo está la carita e inventar un motivo por ejemplo: “esta carita está enojada porque no quiere dormir”, “esta carita está triste porque se golpeó la mano”, etc. Se requiere atención porque no se pueden repetir las historias, si se repite alguna se vuelve a empezar. El adulto puede guiar cuando nota confusión en las emociones.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 21),
(113, 'BIEN', 'Puede controlar sus impulsos. Reconoce y expresa sus emociones sanamente y tiene en cuenta los sentimientos de las demás personas.', '•Nombre las emociones en sus diálogos cotidianos, por ejemplo: “siento enojo cuando  te hablo y no me escuchas”; “siento alegría porque te pedí que te quedes conmigo y me hiciste caso”; “siento miedo de que cruces la calle sin darme la mano, porque algunos autos no respetan los semáforos.”\r\n•Todos los días durante una semana: felicite su accionar, cuando haga algo bueno.', 'MOCIONES A LA CARTA\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: exterior o interior con una mesa o lugar de apoyo.\r\nMateriales: papel o cartulina\r\nConsigna: recortar (con tijera de puntas redondeadas) 4 tarjetas de papel. Se dibuja una carita en cada tarjeta con diferentes emociones: alegría, enojo, tristeza, miedo, etc.\r\nSe colocan las tarjetas en la mesa con los dibujos hacia abajo, se mezclan y cada participante en su turno elige una, tiene que decir cómo está la carita e inventar un motivo por ejemplo: “esta carita está enojada porque no quiere dormir”, “esta carita está triste porque se golpeó la mano”, etc. Se requiere atención porque no se pueden repetir las historias, si se repite alguna se vuelve a empezar. El adulto puede guiar cuando nota confusión en las emociones.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 21),
(114, 'MUY MAL', 'Aún no logra demostrar cariño a las personas, establecer vínculos de amistad y manifestar su afecto a través de gestos o palabras. Necesita mucha ayuda para lograr compartir momentos de juego y diferentes elementos tales como: juguetes, comida o cosas.', '•Premiarlo con aplausos, o demostraciones de afecto (no darle nada material) cada vez que comparta algún juguete o algo que le guste, para que su mente, asocie un comportamiento bueno con consecuencias agradables. Cuando sea capaz de compartir de manera natural, se dejará, progresivamente, de brindar este refuerzo social.\r\n•Proponerle tiempo de juego en la escuela y/o en la casa, para que experimente, explore, descubra su entorno, aprenda, adquiera nociones de espacio y tiempo, desarrolle su cuerpo y libere tensiones  vinculares.\r\n\r\n•Felicitarlo con oraciones cortas y claras, por sus logros, en cada jornada escolar. Hablar “solo” de la acción realizo bien. Por ejemplo si su comportamiento fue bueno, en vez de decirle que estuvo muy bien que “no pelee”, le digo que estuvo muy bien que “juegue con alegría con sus compañeros”; si escucho con atención la clase, en vez de decirle muy bien que “no interrumpiste”, le digo muy bien por “respetarme mientras hablo”. Si lo hace aplaudir conjuntamente el avance.\r\n\r\n•Solicitar colaboración a las personas con las que convive: padre, madre, abuelos, hermanos, etc. para que actúen como modelos a seguir, compartiendo delante de ellos, con el objetivo de ser imitados. \r\n•Proponerle deportes colectivos (en vez de juegos individuales) donde los jugadores se necesiten mutuamente, o cualquier otra actividad que le permita socializar y compartir.', 'EL SEMAFORO DE LA AMISTAD\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: tarjetas una verdes, amarillas y rojas.\r\nConsigna: recortar (con tijera de puntas redondeadas) tarjetas de cartulina, un kit de 3 por cada alumno. \r\nSe colocan las tarjetas en la mesa el adulto verde-amarillo-rojo de semáforo. Y se comunica que todos los alumnos que tienen gestos de amistad con sus compañeros recibirán una tarjeta verde. Los que tienen que mejorar un poco sus gestos con los demás recibirán una amarilla y los que tienen que mejorar muchísimo sus actitudes con sus pares una tarjeta roja. \r\nEs importante darles a todos los niños una nueva oportunidad de obtener un nivel verde al comienzo de cada día escolar.\r\n\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO COGNITIVO, sugerimos realizar una consulta en: PSICOLOGIA - PSICOPEDAGOGIA', 1, 22),
(115, 'MAL', 'Aún no logra sostener en el tiempo su capacidad para demostrar afecto a los demás y establecer vínculos de amistad. Con  ayuda podrá lograr compartir momentos de juego y diferentes elementos tales como: juguetes, comida o cosas.', '•Premiarlo con aplausos, o demostraciones de afecto (no darle nada material) cada vez que comparta algún juguete o algo que le guste, para que su mente, asocie un comportamiento bueno con consecuencias agradables. Cuando sea capaz de compartir de manera natural, se dejará, progresivamente, de brindar este refuerzo social.\r\n•Proponerle tiempo de juego en la escuela y/o en la casa, para que experimente, explore, descubra su entorno, aprenda, adquiera nociones de espacio y tiempo, desarrolle su cuerpo y libere tensiones  vinculares.\r\n•Proponerle juegos cooperativos, como: rompecabezas, donde todos trabajen para encontrar las piezas y el éxito sea común.\r\n•Proponerle deportes colectivos (en vez de juegos individuales) donde los jugadores se necesiten mutuamente, o cualquier otra actividad que le permita socializar y compartir.', 'EL SEMAFORO DE LA AMISTAD\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: tarjetas una verdes, amarillas y rojas.\r\nConsigna: recortar (con tijera de puntas redondeadas) tarjetas de cartulina, un kit de 3 por cada alumno. \r\nSe colocan las tarjetas en la mesa el adulto verde-amarillo-rojo de semáforo. Y se comunica que todos los alumnos que tienen gestos de amistad con sus compañeros recibirán una tarjeta verde. Los que tienen que mejorar un poco sus gestos con los demás recibirán una amarilla y los que tienen que mejorar muchísimo sus actitudes con sus pares una tarjeta roja. \r\nEs importante darles a todos los niños una nueva oportunidad de obtener un nivel verde al comienzo de cada día escolar.\r\n\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 22),
(116, 'MAL', 'Su capacidad de compartir y establecer vínculos afectuosos con los demás, aún no es estable (a veces puede y a veces no).', '•Premiarlo con aplausos, o demostraciones de afecto (no darle nada material) cada vez que comparta algún juguete o algo que le guste, para que su mente, asocie un comportamiento bueno con consecuencias agradables. Cuando sea capaz de compartir de manera natural, se dejará, progresivamente, de brindar este refuerzo social.\r\n•Proponerle tiempo de juego en la escuela y/o en la casa, para que experimente, explore, descubra su entorno, aprenda, adquiera nociones de espacio y tiempo, desarrolle su cuerpo y libere tensiones  vinculares.\r\n•Solicitar colaboración a las personas con las que convive: padre, madre, abuelos, hermanos, etc. para que actúen como modelos a seguir, compartiendo delante de ellos, con el objetivo de ser imitados. \r\n•Proponerle actividades solidarias o cualquier otra actividad que le permita dar algo a personas o animales (Por ejemplo, dar de comer migas de pan a las palomas, gallinas, etc.) para que vivencie la generosidad como algo positivo.', 'EL SEMAFORO DE LA AMISTAD\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: tarjetas una verdes, amarillas y rojas.\r\nConsigna: recortar (con tijera de puntas redondeadas) tarjetas de cartulina, un kit de 3 por cada alumno. \r\nSe colocan las tarjetas en la mesa el adulto verde-amarillo-rojo de semáforo. Y se comunica que todos los alumnos que tienen gestos de amistad con sus compañeros recibirán una tarjeta verde. Los que tienen que mejorar un poco sus gestos con los demás recibirán una amarilla y los que tienen que mejorar muchísimo sus actitudes con sus pares una tarjeta roja. \r\nEs importante darles a todos los niños una nueva oportunidad de obtener un nivel verde al comienzo de cada día escolar.\r\n\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 22),
(117, 'MAL', 'Aún no logra sostener en el tiempo su capacidad para demostrar afecto a los demás y establecer vínculos de amistad. Con  ayuda podrá lograr compartir momentos de juego y diferentes elementos tales como: juguetes, comida o cosas.', '•Premiarlo con aplausos, o demostraciones de afecto (no darle nada material) cada vez que comparta algún juguete o algo que le guste, para que su mente, asocie un comportamiento bueno con consecuencias agradables. Cuando sea capaz de compartir de manera natural, se dejará, progresivamente, de brindar este refuerzo social.\r\n•Proponerle tiempo de juego en la escuela y/o en la casa, para que experimente, explore, descubra su entorno, aprenda, adquiera nociones de espacio y tiempo, desarrolle su cuerpo y libere tensiones  vinculares.\r\n•Solicitar colaboración a las personas con las que convive: padre, madre, abuelos, hermanos, etc. para que actúen como modelos a seguir, compartiendo delante de ellos, con el objetivo de ser imitados. \r\n•Proponerle deportes colectivos (en vez de juegos individuales) donde los jugadores se necesiten mutuamente, o cualquier otra actividad que le permita socializar y compartir.', 'EL SEMAFORO DE LA AMISTAD\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: tarjetas una verdes, amarillas y rojas.\r\nConsigna: recortar (con tijera de puntas redondeadas) tarjetas de cartulina, un kit de 3 por cada alumno. \r\nSe colocan las tarjetas en la mesa el adulto verde-amarillo-rojo de semáforo. Y se comunica que todos los alumnos que tienen gestos de amistad con sus compañeros recibirán una tarjeta verde. Los que tienen que mejorar un poco sus gestos con los demás recibirán una amarilla y los que tienen que mejorar muchísimo sus actitudes con sus pares una tarjeta roja. \r\nEs importante darles a todos los niños una nueva oportunidad de obtener un nivel verde al comienzo de cada día escolar.\r\n\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.\r\n', NULL, 1, 22),
(118, 'MAL', '\r\nSu capacidad de compartir y establecer vínculos afectuosos con los demás, aún no es estable (a veces puede y a veces no).', '•Premiarlo con aplausos, o demostraciones de afecto (no darle nada material) cada vez que comparta algún juguete o algo que le guste, para que su mente, asocie un comportamiento bueno con consecuencias agradables. Cuando sea capaz de compartir de manera natural, se dejará, progresivamente, de brindar este refuerzo social.\r\n•Proponerle tiempo de juego en la escuela y/o en la casa, para que experimente, explore, descubra su entorno, aprenda, adquiera nociones de espacio y tiempo, desarrolle su cuerpo y libere tensiones  vinculares.\r\n•Proponerle juegos cooperativos, como: rompecabezas, donde todos trabajen para encontrar las piezas y el éxito sea común.\r\n•Proponerle deportes colectivos (en vez de juegos individuales) donde los jugadores se necesiten mutuamente, o cualquier otra actividad que le permita socializar y compartir.', 'EL SEMAFORO DE LA AMISTAD\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: tarjetas una verdes, amarillas y rojas.\r\nConsigna: recortar (con tijera de puntas redondeadas) tarjetas de cartulina, un kit de 3 por cada alumno. \r\nSe colocan las tarjetas en la mesa el adulto verde-amarillo-rojo de semáforo. Y se comunica que todos los alumnos que tienen gestos de amistad con sus compañeros recibirán una tarjeta verde. Los que tienen que mejorar un poco sus gestos con los demás recibirán una amarilla y los que tienen que mejorar muchísimo sus actitudes con sus pares una tarjeta roja. \r\nEs importante darles a todos los niños una nueva oportunidad de obtener un nivel verde al comienzo de cada día escolar.\r\n\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 22),
(119, 'MAL', 'Ha empezado a desarrollar la capacidad de compartir y establecer vínculos afectuosos con los demás, pero aún no es estable (a veces puede y a veces no).', '•Premiarlo con aplausos, o demostraciones de afecto (no darle nada material) cada vez que comparta algún juguete o algo que le guste, para que su mente, asocie aún más el buen comportamiento  con consecuencias agradables. \r\n•Proponerle tiempo de juego en la escuela y/o en la casa, para que experimente, explore, descubra su entorno, aprenda, adquiera nociones de espacio y tiempo, desarrolle su cuerpo y libere tensiones  vinculares.\r\n•Proponerle actividades solidarias o cualquier otra actividad que le permita dar algo a personas o animales (Por ejemplo, dar de comer migas de pan a las palomas, gallinas, etc.) para que vivencie la generosidad como algo positivo.', 'EL SEMAFORO DE LA AMISTAD\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: tarjetas una verdes, amarillas y rojas.\r\nConsigna: recortar (con tijera de puntas redondeadas) tarjetas de cartulina, un kit de 3 por cada alumno. \r\nSe colocan las tarjetas en la mesa el adulto verde-amarillo-rojo de semáforo. Y se comunica que todos los alumnos que tienen gestos de amistad con sus compañeros recibirán una tarjeta verde. Los que tienen que mejorar un poco sus gestos con los demás recibirán una amarilla y los que tienen que mejorar muchísimo sus actitudes con sus pares una tarjeta roja. \r\nEs importante darles a todos los niños una nueva oportunidad de obtener un nivel verde al comienzo de cada día escolar.\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 22),
(120, 'MASOMENOS', 'Ha empezado a desarrollar la capacidad de compartir y establecer vínculos afectuosos con los demás, pero aún no es estable (a veces puede y a veces no).', '•Premiarlo con aplausos, o demostraciones de afecto (no darle nada material) cada vez que comparta algún juguete o algo que le guste, para que su mente, asocie un comportamiento bueno con consecuencias agradables. Cuando sea capaz de compartir de manera natural, se dejará, progresivamente, de brindar este refuerzo social.\r\n•Proponerle tiempo de juego en la escuela y/o en la casa, para que experimente, explore, descubra su entorno, aprenda, adquiera nociones de espacio y tiempo, desarrolle su cuerpo y libere tensiones  vinculares.\r\n•Proponerle actividades solidarias o cualquier otra actividad que le permita dar algo a personas o animales (Por ejemplo, dar de comer migas de pan a las palomas, gallinas, etc.) para que vivencie la generosidad como algo positivo.', 'EL SEMAFORO DE LA AMISTAD\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: tarjetas una verdes, amarillas y rojas.\r\nConsigna: recortar (con tijera de puntas redondeadas) tarjetas de cartulina, un kit de 3 por cada alumno. \r\nSe colocan las tarjetas en la mesa el adulto verde-amarillo-rojo de semáforo. Y se comunica que todos los alumnos que tienen gestos de amistad con sus compañeros recibirán una tarjeta verde. Los que tienen que mejorar un poco sus gestos con los demás recibirán una amarilla y los que tienen que mejorar muchísimo sus actitudes con sus pares una tarjeta roja. \r\nEs importante darles a todos los niños una nueva oportunidad de obtener un nivel verde al comienzo de cada día escolar.\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.\r\n', NULL, 1, 22),
(121, 'MASOMENOS', 'Es capaz compartir y establecer vínculos afectuosos con los demás.', '•Premiarlo con aplausos, o demostraciones de afecto (no darle nada material) cada vez que comparta algún juguete o algo que le guste, para que su mente, asocie aún más el buen comportamiento  con consecuencias agradables. \r\n•Proponerle tiempo de juego en la escuela y/o en la casa, para que experimente, explore, descubra su entorno, aprenda, adquiera nociones de espacio y tiempo, desarrolle su cuerpo y libere tensiones  vinculares.\r\n•Proponerle actividades solidarias o cualquier otra actividad que le permita dar algo a personas o animales (Por ejemplo, dar de comer migas de pan a las palomas, gallinas, etc.) para que vivencie la generosidad como algo positivo.', 'EL SEMAFORO DE LA AMISTAD\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: tarjetas una verdes, amarillas y rojas.\r\nConsigna: recortar (con tijera de puntas redondeadas) tarjetas de cartulina, un kit de 3 por cada alumno. \r\nSe colocan las tarjetas en la mesa el adulto verde-amarillo-rojo de semáforo. Y se comunica que todos los alumnos que tienen gestos de amistad con sus compañeros recibirán una tarjeta verde. Los que tienen que mejorar un poco sus gestos con los demás recibirán una amarilla y los que tienen que mejorar muchísimo sus actitudes con sus pares una tarjeta roja. \r\nEs importante darles a todos los niños una nueva oportunidad de obtener un nivel verde al comienzo de cada día escolar.\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.\r\n', NULL, 1, 22),
(122, 'MASOMENOS', 'Es capaz compartir y establecer vínculos afectuosos con los demás.', '•Premiarlo con aplausos, o demostraciones de afecto (no darle nada material) cada vez que comparta algún juguete o algo que le guste, para que su mente, asocie aún más el buen comportamiento  con consecuencias agradables. \r\n•Proponerle tiempo de juego en la escuela y/o en la casa, para que experimente, explore, descubra su entorno, aprenda, adquiera nociones de espacio y tiempo, desarrolle su cuerpo y libere tensiones  vinculares.\r\n•Proponerle deportes colectivos (en vez de juegos individuales) donde los jugadores se necesiten mutuamente, o cualquier otra actividad que le permita socializar y compartir.', 'EL SEMAFORO DE LA AMISTAD\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: tarjetas una verdes, amarillas y rojas.\r\nConsigna: recortar (con tijera de puntas redondeadas) tarjetas de cartulina, un kit de 3 por cada alumno. \r\nSe colocan las tarjetas en la mesa el adulto verde-amarillo-rojo de semáforo. Y se comunica que todos los alumnos que tienen gestos de amistad con sus compañeros recibirán una tarjeta verde. Los que tienen que mejorar un poco sus gestos con los demás recibirán una amarilla y los que tienen que mejorar muchísimo sus actitudes con sus pares una tarjeta roja. \r\nEs importante darles a todos los niños una nueva oportunidad de obtener un nivel verde al comienzo de cada día escolar.\r\n\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 22),
(123, 'BIEN', 'Es capaz de demostrar cariño a las personas, establecer vínculos de amistad y manifestar su afecto a través de gestos o palabras. Puede compartir momentos de juego y diferentes elementos tales como: juguetes, comida o cosas sin dificultad.    ', '•Premiarlo con aplausos, o demostraciones de afecto (no darle nada material) cada vez que comparta algún juguete o algo que le guste, para que su mente, asocie aún más el buen comportamiento  con consecuencias agradables. \r\n•Proponerle tiempo de juego en la escuela y/o en la casa, para que experimente, explore, descubra su entorno, aprenda, adquiera nociones de espacio y tiempo, desarrolle su cuerpo y libere tensiones  vinculares.\r\n•Proponerle deportes colectivos (en vez de juegos individuales) donde los jugadores se necesiten mutuamente, o cualquier otra actividad que le permita socializar y compartir.', 'EL SEMAFORO DE LA AMISTAD\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: tarjetas una verdes, amarillas y rojas.\r\nConsigna: recortar (con tijera de puntas redondeadas) tarjetas de cartulina, un kit de 3 por cada alumno. \r\nSe colocan las tarjetas en la mesa el adulto verde-amarillo-rojo de semáforo. Y se comunica que todos los alumnos que tienen gestos de amistad con sus compañeros recibirán una tarjeta verde. Los que tienen que mejorar un poco sus gestos con los demás recibirán una amarilla y los que tienen que mejorar muchísimo sus actitudes con sus pares una tarjeta roja. \r\nEs importante darles a todos los niños una nueva oportunidad de obtener un nivel verde al comienzo de cada día escolar.\r\n\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 22),
(124, 'MUY MAL', 'Necesita desarrollar mayor confianza en su persona. De esa manera podrá: mejorar la  toma de decisiones, discriminar con claridad lo que hace bien de lo que no y  comunicar con mayor firmeza sus preferencias.', '•Realizar acciones que lo ayuden a sentirse más aceptado. Por ejemplo, transmitirle que es importante que sienta orgullo y respeto por sí mismo y por sus raíces culturales. \r\n•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, si se equivocó en la comprensión de la tarea, mirar su hoja y decir: “estuvo muy bien que lo intentes, ahora quiero que escuches cual es la idea: (repetir la consigna correcta)”. \r\n•Realizar acciones que lo ayuden a sentirse más amado. Por ejemplo, hacer un esfuerzo por reconocer, todos los días, las cosas buenas que hace y decirlo en voz alta. Esto ayudará a mejorar su desempeño y la de todo el grupo clase, porque será un incentivo de superación para sus compañeros y una medida preventiva contra los etiquetamientos negativos entre pares. ', 'LISTA DE VIRTUDES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: lápiz y papel.\r\nConsigna: se asigna una hoja del cuaderno para confeccionar la lista de virtudes. Al iniciar cada jornada el adulto solicita que cada participante piense 3 virtudes de sí mismos. Y las escriba (con o sin ayuda) en la hoja. Al finalizar la actividad se aplaude conjuntamente la participación de todos. Esas virtudes se compartirán en la escuela y con la familia, diariamente durante el mes.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje escrito, razonamiento.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO COGNITIVO, sugerimos realizar una consulta en: PSICOLOGIA - PSICOPEDAGOGIA', 1, 23),
(125, 'MAL', 'Necesita desarrollar mayor confianza en su persona. De esa manera podrá: mejorar la  toma de decisiones, discriminar con claridad lo que hace bien de lo que no y  comunicar con mayor firmeza sus preferencias.', '•Realizar acciones que lo ayuden a sentirse  más aceptado. Por ejemplo, sonreír y mirarlo a los ojos para aumentar la confianza que tiene en sí mismo.\r\n•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, ayudarlo con estímulos verbales a enfrentar retos difíciles para su edad (esto puede ser copiar correctamente las letras del pizarrón).\r\n•Realizar acciones que lo ayuden a sentirse más amado. Por ejemplo, establecer límites  a través de reglas claras, razonables y justas. Por ejemplo, si no se le permite pararse y ambular por el aula, todos sus compañeros recibirán la misma consigna, ese día y los días en que se requiera tal comportamiento.', 'LISTA DE VIRTUDES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: lápiz y papel.\r\nConsigna: se asigna una hoja del cuaderno para confeccionar la lista de virtudes. Al iniciar cada jornada el adulto solicita que cada participante piense 3 virtudes de sí mismos. Y las escriba (con o sin ayuda) en la hoja. Al finalizar la actividad se aplaude conjuntamente la participación de todos. Esas virtudes se compartirán en la escuela y con la familia, diariamente durante el mes.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje escrito, razonamiento.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 23),
(126, 'MAL', 'Necesita desarrollar mayor confianza en su persona. De esa manera podrá: mejorar la  toma de decisiones, discriminar con claridad lo que hace bien de lo que no y  comunicar con mayor firmeza sus preferencias.', '•Realizar acciones que lo ayuden a sentirse más aceptado. Por ejemplo, recordarle que el amor de las personas permanece intacto en el corazón aunque a veces se comporte mal. Pero que la alegría crece cuando se porta bien. Por eso comportarse bien es “mucho mejor”.\r\n•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, si se equivocó en la comprensión de la tarea, mirar su hoja y decir: “estuvo muy bien que lo intentes, ahora quiero que escuches cual es la idea: (repetir la consigna correcta)”. \r\n•Realizar acciones que lo ayuden a sentirse más amado. Por ejemplo, establecer límites  a través de reglas claras, razonables y justas. Por ejemplo, si no se le permite pararse y ambular por el aula, todos sus compañeros recibirán la misma consigna, ese día y los días en que se requiera tal comportamiento.', 'LISTA DE VIRTUDES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: lápiz y papel.\r\nConsigna: se asigna una hoja del cuaderno para confeccionar la lista de virtudes. Al iniciar cada jornada el adulto solicita que cada participante piense 3 virtudes de sí mismos. Y las escriba (con o sin ayuda) en la hoja. Al finalizar la actividad se aplaude conjuntamente la participación de todos. Esas virtudes se compartirán en la escuela y con la familia, diariamente durante el mes.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje escrito, razonamiento.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.\r\n', NULL, 1, 23),
(127, 'MAL', 'Necesita desarrollar mayor confianza en su persona. De esa manera podrá: mejorar la  toma de decisiones, discriminar con claridad lo que hace bien de lo que no y  comunicar con mayor firmeza sus preferencias.', '•Realizar acciones que lo ayuden a sentirse más aceptado. Por ejemplo, contándole que los adultos también cometemos errores y que es sano admitirlos y proponerse intentar mejorar la próxima vez.\r\n•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, si se equivocó en la comprensión de la tarea, mirar su hoja y decir: “estuvo muy bien que lo intentes, ahora quiero que escuches cual es la idea: (repetir la consigna correcta)”. \r\n•Realizar acciones que lo ayuden a sentirse más amado. Por ejemplo, hacer un esfuerzo por reconocer, todos los días, las cosas buenas que hace y decirlo en voz alta. Esto ayudará a mejorar su desempeño y la de todo el grupo clase, porque será un incentivo de superación para sus compañeros y una medida preventiva contra los etiquetamientos negativos entre pares. ', 'LISTA DE VIRTUDES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: lápiz y papel.\r\nConsigna: se asigna una hoja del cuaderno para confeccionar la lista de virtudes. Al iniciar cada jornada el adulto solicita que cada participante piense 3 virtudes de sí mismos. Y las escriba (con o sin ayuda) en la hoja. Al finalizar la actividad se aplaude conjuntamente la participación de todos. Esas virtudes se compartirán en la escuela y con la familia, diariamente durante el mes.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje escrito, razonamiento.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 23),
(128, 'MAL', 'Necesita desarrollar mayor confianza en su persona. De esa manera podrá: mejorar la  toma de decisiones, discriminar con claridad lo que hace bien de lo que no y  comunicar con mayor firmeza sus preferencias.', '•Realizar acciones que lo ayuden a sentirse más aceptado. Por ejemplo, recordarle que el amor de las personas permanece intacto en el corazón aunque a veces se comporte mal. Pero que la alegría crece cuando se porta bien. Por eso comportarse bien es “mucho mejor”.\r\n•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, enseñándole a celebrar lo positivo de su desempeño en cada jornada. \r\n•Realizar acciones que lo ayuden a sentirse más amado. Por ejemplo, si quiere contar algo, mirarlo a los ojos para conversar con él o para explicarle que ese no es el momento de hablar sobre ese tema.', 'LISTA DE VIRTUDES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: lápiz y papel.\r\nConsigna: se asigna una hoja del cuaderno para confeccionar la lista de virtudes. Al iniciar cada jornada el adulto solicita que cada participante piense 3 virtudes de sí mismos. Y las escriba (con o sin ayuda) en la hoja. Al finalizar la actividad se aplaude conjuntamente la participación de todos. Esas virtudes se compartirán en la escuela y con la familia, diariamente durante el mes.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje escrito, razonamiento.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 23),
(129, 'MAL', 'Necesita desarrollar aún más la confianza en su persona. De esa manera podrá: mejorar la  toma de decisiones, discriminar y  comunicar con mayor claridad sus preferencias.', '•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, contarle que a veces nos sentimos bien con nosotros mismos y a veces no. Que a veces las cosas nos salen como esperamos y otras veces nos toca seguir intentando hasta que nos salga.\r\n•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, contarle que nadie hace todo bien y que todos los seres humanos, tenemos que trabajar, para mejorar cada día un poquito más.\r\n•Realizar acciones que lo ayuden a sentirse más amado. Por ejemplo, si quiere contar algo, mirarlo a los ojos para conversar con él o para explicarle que ese no es el momento de hablar sobre ese tema.\r\n', 'LISTA DE VIRTUDES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: lápiz y papel.\r\nConsigna: se asigna una hoja del cuaderno para confeccionar la lista de virtudes. Al iniciar cada jornada el adulto solicita que cada participante piense 3 virtudes de sí mismos. Y las escriba (con o sin ayuda) en la hoja. Al finalizar la actividad se aplaude conjuntamente la participación de todos. Esas virtudes se compartirán en la escuela y con la familia, diariamente durante el mes.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje escrito, razonamiento.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 23),
(130, 'MASOMENOS', 'Necesita desarrollar aún más la confianza en su persona. De esa manera podrá: mejorar la  toma de decisiones, discriminar y  comunicar con mayor claridad sus preferencias.', '•Realizar acciones que lo ayuden a sentirse más aceptado. Por ejemplo, hacerle saber que no necesita ser perfecto, para que sus  contribuciones sean valiosas y valgan la pena.\r\n•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, ayudarlo con estímulos verbales a enfrentar retos difíciles para su edad (esto puede ser copiar correctamente las letras del pizarrón).\r\n•Realizar acciones que lo ayuden a sentirse más amado. Por ejemplo, si quiere contar algo, mirarlo a los ojos para conversar con él o para explicarle que ese no es el momento de hablar sobre ese tema.', NULL, NULL, 1, 23),
(131, 'MASOMENOS', 'Necesita desarrollar aún más la confianza en su persona. De esa manera podrá: mejorar la  toma de decisiones, discriminar y  comunicar con mayor claridad sus preferencias.', '•Realizar acciones que lo ayuden a sentirse más aceptado. Por ejemplo, recordarle que el amor de las personas permanece intacto en el corazón aunque a veces se comporte mal. Pero que la alegría crece cuando se porta bien. Por eso comportarse bien es “mucho mejor”.\r\n•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, ayudarlo con estímulos verbales a enfrentar retos difíciles para su edad (esto puede ser copiar correctamente las letras del pizarrón).\r\n•Realizar acciones que lo ayuden a sentirse más amado. Por ejemplo, si quiere contar algo, mirarlo a los ojos para conversar con él o para explicarle que ese no es el momento de hablar sobre ese tema.', NULL, NULL, 1, 23),
(132, 'MASOMENOS', 'Necesita desarrollar aún más la confianza en su persona. De esa manera podrá: mejorar la  toma de decisiones, discriminar y  comunicar con mayor claridad sus preferencias.', '•Realizar acciones que lo ayuden a sentirse más aceptado. Por ejemplo, recordarle que el amor de las personas permanece intacto en el corazón aunque a veces se comporte mal. Pero que la alegría crece cuando se porta bien. Por eso comportarse bien es “mucho mejor”.\r\n•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, ayudarlo con estímulos verbales a enfrentar retos difíciles para su edad (esto puede ser copiar correctamente las letras del pizarrón).\r\n•Realizar acciones que lo ayuden a sentirse más amado. Por ejemplo, si quiere contar algo, mirarlo a los ojos para conversar con él o para explicarle que ese no es el momento de hablar sobre ese tema.', 'LISTA DE VIRTUDES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: lápiz y papel.\r\nConsigna: se asigna una hoja del cuaderno para confeccionar la lista de virtudes. Al iniciar cada jornada el adulto solicita que cada participante piense 3 virtudes de sí mismos. Y las escriba (con o sin ayuda) en la hoja. Al finalizar la actividad se aplaude conjuntamente la participación de todos. Esas virtudes se compartirán en la escuela y con la familia, diariamente durante el mes.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje escrito, razonamiento.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 23),
(133, 'BIEN', 'Manifiesta una gran dosis de confianza en su persona. Puede tomar decisiones, discriminar y  comunicar con claridad sus preferencias.', '•Realizar acciones que lo ayuden a sentirse más capaz. Por ejemplo, contarle que a veces nos sentimos bien con nosotros mismos y a veces no. Que a veces las cosas nos salen como esperamos y otras veces nos toca seguir intentando hasta que nos salga.\r\n•Realizar acciones que lo ayuden a sentirse más amado. Por ejemplo, si quiere contar algo, mirarlo a los ojos para conversar con él o para explicarle que ese no es el momento de hablar sobre ese tema.', 'LISTA DE VIRTUDES\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: interior o exterior\r\nMateriales: lápiz y papel.\r\nConsigna: se asigna una hoja del cuaderno para confeccionar la lista de virtudes. Al iniciar cada jornada el adulto solicita que cada participante piense 3 virtudes de sí mismos. Y las escriba (con o sin ayuda) en la hoja. Al finalizar la actividad se aplaude conjuntamente la participación de todos. Esas virtudes se compartirán en la escuela y con la familia, diariamente durante el mes.\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje escrito, razonamiento.\r\n- Desarrollo socio – emocional: autoestima, capacidad de autocontrol - inteligencia emocional.', NULL, 1, 23),
(134, 'MUY MAL', 'Su interés por aprender aún no se exterioriza de manera oral.', '• Ayudar a definir objetivos cotidianos, por ejemplo dedicar un minuto de tiempo, antes del recreo para preguntarle ¿con cuál de tus compañeros te gustaría jugar hoy? \r\n\r\n• Responder todas sus preguntas con un tono de voz tranquilo (si es posible con una sonrisa). Si el momento no es el adecuado para  hablar del tema, explicárselo breve y claramente, por ejemplo: -“me alegra mucho que preguntes, hablaremos cuando terminemos con esta tarea”. ', NULL, 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO COGNITIVO, sugerimos realizar una consulta en: PSICOLOGIA - PSICOPEDAGOGIA', 1, 24),
(135, 'MASOMENOS', 'Su interés por aprender aún no se exterioriza de manera oral.', '• Responder sus preguntas con un tono de voz tranquilo (si es posible con una sonrisa). Si el momento no es el adecuado para  hablar del tema, explicárselo breve y claramente, por ejemplo: -“me alegra mucho que preguntes, hablaremos cuando terminemos con esta tarea”.', NULL, NULL, 1, 24),
(136, 'BIEN', 'Su interés por aprender se exterioriza de manera oral, preguntando sobre temas que le interesan.', '• Responder sus preguntas con un tono de voz tranquilo (si es posible con una sonrisa). Si el momento no es el adecuado para  hablar del tema, explicárselo breve y claramente, por ejemplo: -“buena pregunta, la respondemos cuando terminemos con esta tarea”.', NULL, NULL, 1, 24);
INSERT INTO `tresultado` (`idresultado`, `vcresultestninio`, `vcresultinfobt`, `vcresultsugprof`, `vcresultejepot`, `vcresultorientadult`, `boresultestado`, `idsubfactor`) VALUES
(137, 'MUY MAL', 'Aún necesita ayuda para procesar consignas y acatar órdenes. ', '• Tener en cuenta que tiene un problema de comportamiento, no que es un ser humano problemático.\r\n• Fomentar el buen comportamiento, por ejemplo, cuando haya que establecer límites de disciplina, aclararle con un tono de voz calmo, que es su comportamiento lo que se corrige. Por ejemplo en vez de decirle “¡Siempre lo mismo!” o “¿Vos no sabés portarte bien?” decirle: “No estuvo nada bien que empujaras en la fila. Sé que vos podés caminar con cuidado”, inténtalo otra vez.\r\n• Tener en cuenta que hay aspectos de su conducta que por algún motivo, aún no domina, y no que  tiene intención de comportarse inadecuadamente.\r\n•Cuando cometa un error, aproveche la ocasión  para darle valiosas lecciones de razonamiento y fortalecer su autoestima. Por ejemplo, si tira una silla por correr en el aula, pregúntele con tranquilidad, qué puede hacer de manera diferente la próxima vez para que no suceda lo mismo. De esa manera su autoestima no sufrirá y comprenderá que es normal cometer errores de vez en cuando.\r\n•Cuando cometa un error, aproveche la ocasión  para darle valiosas lecciones de razonamiento y fortalecer su autoestima. Por ejemplo, si limpia sus manos en su ropa y se ensucia, pregúntele con tranquilidad, qué puede hacer de manera diferente la próxima vez, para que no suceda lo mismo. De esa manera su autoestima no sufrirá y comprenderá que es normal cometer errores de vez en cuando.', 'ALIMENTAR EL BUEN HUMOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: en la casa, mientras se preparan para ir a la escuela o para hacer la tarea. \r\nMateriales: pensar frases con rimas chistosas relacionadas con las tareas de la vida cotidiana.\r\nConsigna: Sonreír hace que todo parezca más fácil y ayuda a relajar la mente para aprender mejor. Para pasar un buen día el adulto sonríe y ayuda a sonreír, por ejemplo utilizando frases con rimas chistosas y palabras nuevas para estimular su vocabulario, mientras lo alienta a hacer sus tareas o vestirse solo, por ejemplo: “quién se pone los zapatos se gana un garabato”, “quién se pone el delantal comerá en un dedal”\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.\r\n\r\nCUIDAR LA SONRISA \r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: aula con graves problemas de conducta\r\nMateriales: los 3 Pactos\r\nConsigna: El adulto al iniciar la jornada, anuncia que será un día para aprender con alegría y para lograrlo juntos, hay que cumplir 3 pactos para cuidar las sonrisas de todos (incluido el docente). \r\nPida a todo el grupo clase, que levanten la mano  quienes quieren:\r\nEstar alegres.\r\nSe van a portar bien.\r\nVan a cuidar las sonrisas de todos. \r\nSe aplaude la buena actitud en cada una de las 3 consignas anteriores (si alguien no participa, sonría y continúe sin decir nada al respecto) \r\nPida con una sonrisa, que escuchen con atención:\r\nPacto N°1 Hoy: quién interrumpe las sonrisas una vez (hace algo indebido) se quedará parado al lado de la silla.\r\nPacto N°2 Hoy: quién interrumpe las sonrisas dos veces (hace algo indebido dos veces) se quedará de pie al final del aula.\r\nPacto N°3 Hoy: quién interrumpe las sonrisas tres veces (hace algo indebido tres veces) abandonará  el aula.\r\n\r\nEstimula: \r\n- Desarrollo cognitivo: capacidad de atención, concentración, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: capacidad de autocontrol - inteligencia emocional.', 'Por lo detectado en la INFORMACIÓN OBTENIDA SOBRE EL DESARROLLO COGNITIVO, sugerimos realizar una consulta en: PSICOLOGIA - PSICOPEDAGOGIA', 1, 25),
(138, 'MAL', 'Aún necesita ayuda para procesar consignas y acatar algunas órdenes.', '•Fomentar el buen comportamiento, por ejemplo, regalarle un aplauso por decir la verdad, cuando confiese alguna acción incorrecta, aclarando que no estuvo bien la acción, pero que le regalaran un aplauso (hacerlo inmediatamente) por ser valiente y decir la verdad.\r\n•Cuando felicite una buena jornada escolar, aproveche la ocasión  para mejorar el conocimiento mutuo y fortalecer su autoestima, mencionando claramente la acción: “me gustó mucho que escucharas la clase de hoy”. De esa manera sabrá exactamente qué fue lo que hizo bien. \r\n•Cuando cometa un error, aproveche la ocasión  para darle valiosas lecciones de razonamiento y fortalecer su autoestima. Por ejemplo, si pone su plato demasiado cerca del borde de la mesa y se cae, pregúntele con tranquilidad,  qué puede hacer de manera diferente la próxima vez, para que no suceda lo mismo. De esa manera su autoestima no sufrirá y comprenderá que es normal cometer errores de vez en cuando.', 'ALIMENTAR EL BUEN HUMOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: en la casa, mientras se preparan para ir a la escuela o para hacer la tarea. \r\nMateriales: pensar frases con rimas chistosas relacionadas con las tareas de la vida cotidiana.\r\nConsigna: Sonreír hace que todo parezca más fácil y ayuda a relajar la mente para aprender mejor. Para pasar un buen día el adulto sonríe y ayuda a sonreír, por ejemplo utilizando frases con rimas chistosas y palabras nuevas para estimular su vocabulario, mientras lo alienta a hacer sus tareas o vestirse solo, por ejemplo: “quién se pone los zapatos se gana un garabato”, “quién se pone el delantal comerá en un dedal”\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 25),
(139, 'MAL', 'Aún necesita ayuda para procesar consignas y acatar algunas órdenes.', '•Fomentar el buen comportamiento, por ejemplo, regalarle un aplauso por decir la verdad, cuando confiese alguna acción incorrecta, aclarando que no estuvo bien la acción, pero que le regalaran un aplauso (hacerlo inmediatamente) por ser valiente y decir la verdad.\r\n•Cuando felicite una buena jornada escolar, aproveche la ocasión  para mejorar el conocimiento mutuo y fortalecer su autoestima, mencionando claramente la acción: “me gustó mucho que juegues tranquilo en el patio”. De esa manera sabrá exactamente qué fue lo que hizo bien. \r\n•Cuando cometa un error, aproveche la ocasión  para darle valiosas lecciones de razonamiento y fortalecer su autoestima. Por ejemplo, si llora porque rompió un juguete, pregúntele con tranquilidad, qué puede hacer de manera diferente la próxima vez, para que no suceda lo mismo. De esa manera su autoestima no sufrirá y comprenderá que es normal cometer errores de vez en cuando.', 'ALIMENTAR EL BUEN HUMOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: en la casa, mientras se preparan para ir a la escuela o para hacer la tarea. \r\nMateriales: pensar frases con rimas chistosas relacionadas con las tareas de la vida cotidiana.\r\nConsigna: Sonreír hace que todo parezca más fácil y ayuda a relajar la mente para aprender mejor. Para pasar un buen día el adulto sonríe y ayuda a sonreír, por ejemplo utilizando frases con rimas chistosas y palabras nuevas para estimular su vocabulario, mientras lo alienta a hacer sus tareas o vestirse solo, por ejemplo: “quién se pone los zapatos se gana un garabato”, “quién se pone el delantal comerá en un dedal”\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 25),
(140, 'MAL', 'Aún necesita ayuda para procesar consignas y acatar algunas órdenes.', '•Fomentar el buen comportamiento, por ejemplo, regalarle un aplauso por decir la verdad, cuando confiese alguna acción incorrecta, aclarando que no estuvo bien la acción, pero que le regalaran un aplauso (hacerlo inmediatamente) por ser valiente y decir la verdad.\r\n•Cuando felicite una buena jornada escolar, aproveche la ocasión  para mejorar el conocimiento mutuo y fortalecer su autoestima, mencionando claramente la acción: “me gustó mucho que guardes solo tus útiles en la mochila”. De esa manera sabrá exactamente qué fue lo que hizo bien. \r\n', 'ALIMENTAR EL BUEN HUMOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: en la casa, mientras se preparan para ir a la escuela o para hacer la tarea. \r\nMateriales: pensar frases con rimas chistosas relacionadas con las tareas de la vida cotidiana.\r\nConsigna: Sonreír hace que todo parezca más fácil y ayuda a relajar la mente para aprender mejor. Para pasar un buen día el adulto sonríe y ayuda a sonreír, por ejemplo utilizando frases con rimas chistosas y palabras nuevas para estimular su vocabulario, mientras lo alienta a hacer sus tareas o vestirse solo, por ejemplo: “quién se pone los zapatos se gana un garabato”, “quién se pone el delantal comerá en un dedal”\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 25),
(141, 'MAL', 'Aún necesita ayuda para procesar consignas y acatar algunas órdenes.', '•Fomentar el buen comportamiento, por ejemplo, regalarle un aplauso por decir la verdad, cuando confiese alguna acción incorrecta, aclarando que no estuvo bien la acción, pero que le regalaran un aplauso (hacerlo inmediatamente) por ser valiente y decir la verdad.\r\n•Cuando felicite una buena jornada escolar, aproveche la ocasión  para mejorar el conocimiento mutuo y fortalecer su autoestima, mencionando claramente la acción: “me gustó mucho que hayas pintado tu dibujo”. De esa manera sabrá exactamente qué fue lo que hizo bien. ', 'ALIMENTAR EL BUEN HUMOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: en la casa, mientras se preparan para ir a la escuela o para hacer la tarea. \r\nMateriales: pensar frases con rimas chistosas relacionadas con las tareas de la vida cotidiana.\r\nConsigna: Sonreír hace que todo parezca más fácil y ayuda a relajar la mente para aprender mejor. Para pasar un buen día el adulto sonríe y ayuda a sonreír, por ejemplo utilizando frases con rimas chistosas y palabras nuevas para estimular su vocabulario, mientras lo alienta a hacer sus tareas o vestirse solo, por ejemplo: “quién se pone los zapatos se gana un garabato”, “quién se pone el delantal comerá en un dedal”\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 25),
(142, 'MAL', 'Generalmente puede procesar consignas y acatar órdenes.', '•Fomentar el buen comportamiento, por ejemplo, regalarle un aplauso por decir la verdad, cuando confiese alguna acción incorrecta, aclarando que no estuvo bien la acción, pero que le regalaran un aplauso (hacerlo inmediatamente) por ser valiente y decir la verdad.\r\n•Cuando felicite una buena jornada escolar, aproveche la ocasión  para mejorar el conocimiento mutuo y fortalecer su autoestima, mencionando claramente la acción: “me gustó mucho que participes en clases”. De esa manera sabrá exactamente qué fue lo que hizo bien. ', 'ALIMENTAR EL BUEN HUMOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: en la casa, mientras se preparan para ir a la escuela o para hacer la tarea. \r\nMateriales: pensar frases con rimas chistosas relacionadas con las tareas de la vida cotidiana.\r\nConsigna: Sonreír hace que todo parezca más fácil y ayuda a relajar la mente para aprender mejor. Para pasar un buen día el adulto sonríe y ayuda a sonreír, por ejemplo utilizando frases con rimas chistosas y palabras nuevas para estimular su vocabulario, mientras lo alienta a hacer sus tareas o vestirse solo, por ejemplo: “quién se pone los zapatos se gana un garabato”, “quién se pone el delantal comerá en un dedal”\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 25),
(143, 'MASOMENOS', 'En ocasiones puede procesar consignas y acatar órdenes.', '•Fomentar el buen comportamiento, por ejemplo, regalarle un aplauso por decir la verdad, cuando confiese alguna acción incorrecta, aclarando que no estuvo bien la acción, pero que le regalaran un aplauso (hacerlo inmediatamente) por ser valiente y decir la verdad.\r\n•Cuando felicite una buena jornada escolar, aproveche la ocasión  para mejorar el conocimiento mutuo y fortalecer su autoestima, mencionando claramente la acción: “me gustó mucho que me saludes al llegar”. De esa manera sabrá exactamente qué fue lo que hizo bien. ', 'ALIMENTAR EL BUEN HUMOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: en la casa, mientras se preparan para ir a la escuela o para hacer la tarea. \r\nMateriales: pensar frases con rimas chistosas relacionadas con las tareas de la vida cotidiana.\r\nConsigna: Sonreír hace que todo parezca más fácil y ayuda a relajar la mente para aprender mejor. Para pasar un buen día el adulto sonríe y ayuda a sonreír, por ejemplo utilizando frases con rimas chistosas y palabras nuevas para estimular su vocabulario, mientras lo alienta a hacer sus tareas o vestirse solo, por ejemplo: “quién se pone los zapatos se gana un garabato”, “quién se pone el delantal comerá en un dedal”\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 25),
(144, 'MASOMENOS', 'Generalmente  puede procesar consignas y acatar órdenes.', '•Fomentar el buen comportamiento, por ejemplo, regalarle un aplauso por decir la verdad, cuando confiese alguna acción incorrecta, aclarando que no estuvo bien la acción, pero que le regalaran un aplauso (hacerlo inmediatamente) por ser valiente y decir la verdad.\r\n•Cuando felicite una buena jornada escolar, aproveche la ocasión  para mejorar el conocimiento mutuo y fortalecer su autoestima, mencionando claramente la acción: “me gustó mucho que cantes a la bandera”. De esa manera sabrá exactamente qué fue lo que hizo bien. ', 'ALIMENTAR EL BUEN HUMOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: en la casa, mientras se preparan para ir a la escuela o para hacer la tarea. \r\nMateriales: pensar frases con rimas chistosas relacionadas con las tareas de la vida cotidiana.\r\nConsigna: Sonreír hace que todo parezca más fácil y ayuda a relajar la mente para aprender mejor. Para pasar un buen día el adulto sonríe y ayuda a sonreír, por ejemplo utilizando frases con rimas chistosas y palabras nuevas para estimular su vocabulario, mientras lo alienta a hacer sus tareas o vestirse solo, por ejemplo: “quién se pone los zapatos se gana un garabato”, “quién se pone el delantal comerá en un dedal”\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 25),
(145, 'MASOMENOS', 'Generalmente  puede procesar consignas y acatar órdenes.', '•Fomentar el buen comportamiento, por ejemplo, regalarle un aplauso por decir la verdad, cuando confiese alguna acción incorrecta, aclarando que no estuvo bien la acción, pero que le regalaran un aplauso (hacerlo inmediatamente) por ser valiente y decir la verdad.\r\n•Cuando felicite una buena jornada escolar, aproveche la ocasión  para mejorar el conocimiento mutuo y fortalecer su autoestima, mencionando claramente la acción: “me gustó mucho que cantes a la bandera”. De esa manera sabrá exactamente qué fue lo que hizo bien. ', 'ALIMENTAR EL BUEN HUMOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: en la casa, mientras se preparan para ir a la escuela o para hacer la tarea. \r\nMateriales: pensar frases con rimas chistosas relacionadas con las tareas de la vida cotidiana.\r\nConsigna: Sonreír hace que todo parezca más fácil y ayuda a relajar la mente para aprender mejor. Para pasar un buen día el adulto sonríe y ayuda a sonreír, por ejemplo utilizando frases con rimas chistosas y palabras nuevas para estimular su vocabulario, mientras lo alienta a hacer sus tareas o vestirse solo, por ejemplo: “quién se pone los zapatos se gana un garabato”, “quién se pone el delantal comerá en un dedal”\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 25),
(146, 'BIEN', 'Puede procesar consignas y obedecer órdenes.', '•Fomentar aún más su buen comportamiento, por ejemplo, regalarle un aplauso por decir la verdad, cuando confiese alguna acción incorrecta, aclarando que no estuvo bien la acción, pero que le regalaran un aplauso (hacerlo inmediatamente) por ser valiente y decir la verdad.\r\n•Cuando cometa un error, aproveche la ocasión  para darle valiosas lecciones de razonamiento y fortalecer su autoestima. Por ejemplo, si se moja por mover el vaso mientras le servían líquido, pregúntele con tranquilidad, qué puede hacer de manera diferente la próxima vez, para que no suceda lo mismo. De esa manera su autoestima no sufrirá y comprenderá que es normal cometer errores de vez en cuando.\r\n•Cuando felicite una buena jornada escolar, aproveche la ocasión  para mejorar el conocimiento mutuo y fortalecer su autoestima, mencionando claramente la acción: “me gustó mucho que compartas los juguetes con tus compañeros”. De esa manera sabrá exactamente qué fue lo que hizo bien. \r\n', 'ALIMENTAR EL BUEN HUMOR\r\nParticipantes: dos o más personas. \r\nAdministración: 10 minutos (aproximadamente) por día durante un mes.\r\nEspacio: en la casa, mientras se preparan para ir a la escuela o para hacer la tarea. \r\nMateriales: pensar frases con rimas chistosas relacionadas con las tareas de la vida cotidiana.\r\nConsigna: Sonreír hace que todo parezca más fácil y ayuda a relajar la mente para aprender mejor. Para pasar un buen día el adulto sonríe y ayuda a sonreír, por ejemplo utilizando frases con rimas chistosas y palabras nuevas para estimular su vocabulario, mientras lo alienta a hacer sus tareas o vestirse solo, por ejemplo: “quién se pone los zapatos se gana un garabato”, “quién se pone el delantal comerá en un dedal”\r\nEstimula: \r\n- Desarrollo psicomotor: motricidad fina.\r\n- Desarrollo cognitivo: capacidad de atención, concentración, lenguaje, creatividad, memoria visual, memoria auditiva.\r\n- Desarrollo socio – emocional: inteligencia emocional.', NULL, 1, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tresultresp`
--

CREATE TABLE IF NOT EXISTS `tresultresp` (
  `idresultresp` int(11) NOT NULL AUTO_INCREMENT,
  `idresultrespcontador` int(11) NOT NULL,
  `idsubfactor` int(11) NOT NULL,
  `boresultrespestado` tinyint(1) NOT NULL,
  `idresultado` int(11) NOT NULL,
  `idrespuesta` int(11) NOT NULL,
  `idcombinacion` int(11) NOT NULL,
  PRIMARY KEY (`idresultresp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=341 ;

--
-- Volcado de datos para la tabla `tresultresp`
--

INSERT INTO `tresultresp` (`idresultresp`, `idresultrespcontador`, `idsubfactor`, `boresultrespestado`, `idresultado`, `idrespuesta`, `idcombinacion`) VALUES
(19, 3, 1, 1, 1, 1, 1),
(20, 0, 1, 1, 1, 3, 1),
(21, 2, 1, 1, 2, 1, 2),
(22, 0, 1, 1, 2, 3, 2),
(23, 2, 1, 1, 2, 1, 3),
(24, 1, 1, 1, 2, 3, 3),
(25, 1, 1, 1, 2, 1, 4),
(26, 0, 1, 1, 2, 3, 4),
(27, 1, 1, 1, 2, 1, 5),
(28, 1, 1, 1, 2, 3, 5),
(29, 1, 1, 1, 3, 1, 6),
(30, 2, 1, 1, 3, 3, 6),
(31, 0, 1, 1, 3, 1, 7),
(32, 0, 1, 1, 3, 3, 7),
(33, 0, 1, 1, 3, 1, 8),
(34, 1, 1, 1, 3, 3, 8),
(35, 0, 1, 1, 4, 1, 9),
(36, 2, 1, 1, 4, 3, 9),
(37, 0, 1, 1, 5, 1, 10),
(38, 3, 1, 1, 5, 3, 10),
(39, 3, 2, 1, 6, 1, 11),
(40, 0, 2, 1, 6, 3, 11),
(41, 2, 2, 1, 7, 1, 12),
(42, 0, 2, 1, 7, 3, 12),
(43, 2, 2, 1, 8, 1, 13),
(44, 1, 2, 1, 8, 3, 13),
(45, 1, 2, 1, 8, 1, 14),
(46, 0, 2, 1, 8, 3, 14),
(47, 1, 2, 1, 8, 1, 15),
(48, 1, 2, 1, 8, 3, 15),
(49, 1, 2, 1, 9, 1, 16),
(50, 2, 2, 1, 9, 3, 16),
(51, 0, 2, 1, 9, 1, 17),
(52, 0, 2, 1, 9, 3, 17),
(53, 0, 2, 1, 9, 1, 18),
(54, 1, 2, 1, 9, 3, 18),
(55, 0, 2, 1, 10, 1, 19),
(56, 2, 2, 1, 10, 3, 19),
(57, 0, 2, 1, 11, 1, 20),
(58, 3, 2, 1, 11, 3, 20),
(59, 3, 3, 1, 12, 1, 21),
(60, 0, 3, 1, 12, 3, 21),
(61, 2, 3, 1, 13, 1, 22),
(62, 0, 3, 1, 13, 3, 22),
(63, 2, 3, 1, 13, 1, 23),
(64, 1, 3, 1, 13, 3, 23),
(65, 1, 3, 1, 13, 1, 24),
(66, 0, 3, 1, 13, 3, 24),
(67, 1, 3, 1, 13, 1, 25),
(68, 1, 3, 1, 13, 3, 25),
(69, 1, 3, 1, 14, 1, 26),
(70, 2, 3, 1, 14, 3, 26),
(71, 0, 3, 1, 14, 1, 27),
(72, 0, 3, 1, 14, 3, 27),
(73, 0, 3, 1, 14, 1, 28),
(74, 1, 3, 1, 14, 3, 28),
(75, 0, 3, 1, 15, 1, 29),
(76, 2, 3, 1, 15, 3, 29),
(77, 0, 3, 1, 16, 1, 30),
(78, 3, 3, 1, 16, 3, 30),
(79, 3, 4, 1, 17, 1, 31),
(80, 0, 4, 1, 17, 3, 31),
(81, 2, 4, 1, 18, 1, 32),
(82, 0, 4, 1, 18, 3, 32),
(83, 2, 4, 1, 19, 1, 33),
(84, 1, 4, 1, 19, 3, 33),
(85, 1, 4, 1, 20, 1, 34),
(86, 0, 4, 1, 20, 3, 34),
(87, 1, 4, 1, 21, 1, 35),
(88, 1, 4, 1, 21, 3, 35),
(89, 1, 4, 1, 22, 1, 36),
(90, 2, 4, 1, 22, 3, 36),
(91, 0, 4, 1, 23, 1, 37),
(92, 0, 4, 1, 23, 3, 37),
(93, 0, 4, 1, 24, 1, 38),
(94, 1, 4, 1, 24, 3, 38),
(95, 0, 4, 1, 25, 1, 39),
(96, 2, 4, 1, 25, 3, 39),
(97, 0, 4, 1, 26, 1, 40),
(98, 3, 4, 1, 26, 3, 40),
(99, 2, 5, 1, 27, 1, 41),
(100, 0, 5, 1, 27, 3, 41),
(101, 1, 5, 1, 28, 1, 42),
(102, 0, 5, 1, 28, 3, 42),
(103, 1, 5, 1, 29, 1, 43),
(104, 1, 5, 1, 29, 3, 43),
(105, 0, 5, 1, 30, 1, 44),
(106, 0, 5, 1, 30, 3, 44),
(107, 0, 5, 1, 31, 1, 45),
(108, 1, 5, 1, 31, 3, 45),
(109, 0, 5, 1, 32, 1, 46),
(110, 2, 5, 1, 32, 3, 46),
(111, 2, 6, 1, 33, 1, 47),
(112, 0, 6, 1, 33, 3, 47),
(113, 1, 6, 1, 34, 1, 48),
(114, 0, 6, 1, 34, 3, 48),
(115, 1, 6, 1, 35, 1, 49),
(116, 1, 6, 1, 35, 3, 49),
(117, 0, 6, 1, 36, 1, 50),
(118, 0, 6, 1, 36, 3, 50),
(119, 0, 6, 1, 37, 1, 51),
(120, 1, 6, 1, 37, 3, 51),
(121, 0, 6, 1, 38, 1, 52),
(122, 2, 6, 1, 38, 3, 52),
(123, 1, 7, 1, 39, 1, 53),
(124, 0, 7, 1, 39, 3, 53),
(125, 0, 7, 1, 40, 1, 54),
(126, 0, 7, 1, 40, 3, 54),
(127, 0, 7, 1, 41, 1, 55),
(128, 1, 7, 1, 41, 3, 55),
(129, 2, 8, 1, 42, 1, 56),
(130, 0, 8, 1, 42, 3, 56),
(131, 1, 8, 1, 43, 1, 57),
(132, 0, 8, 1, 43, 3, 57),
(133, 1, 8, 1, 44, 1, 58),
(134, 1, 8, 1, 44, 3, 58),
(135, 0, 8, 1, 45, 1, 59),
(136, 0, 8, 1, 45, 3, 59),
(137, 0, 8, 1, 46, 1, 60),
(138, 1, 8, 1, 46, 3, 60),
(139, 0, 8, 1, 47, 1, 61),
(140, 2, 8, 1, 47, 3, 61),
(141, 2, 9, 1, 48, 1, 62),
(142, 0, 9, 1, 48, 3, 62),
(143, 1, 9, 1, 49, 1, 63),
(144, 0, 9, 1, 49, 3, 63),
(145, 1, 9, 1, 50, 1, 64),
(146, 1, 9, 1, 50, 3, 64),
(147, 0, 9, 1, 51, 1, 65),
(148, 0, 9, 1, 51, 3, 65),
(149, 0, 9, 1, 52, 1, 66),
(150, 1, 9, 1, 52, 3, 66),
(151, 0, 9, 1, 53, 1, 67),
(152, 2, 9, 1, 53, 3, 67),
(153, 3, 10, 1, 54, 1, 68),
(154, 0, 10, 1, 54, 3, 68),
(155, 2, 10, 1, 55, 1, 69),
(156, 0, 10, 1, 55, 3, 69),
(157, 2, 10, 1, 56, 1, 70),
(158, 1, 10, 1, 56, 3, 70),
(159, 1, 10, 1, 57, 1, 71),
(160, 0, 10, 1, 57, 3, 71),
(161, 1, 10, 1, 58, 1, 72),
(162, 1, 10, 1, 58, 3, 72),
(163, 1, 10, 1, 59, 1, 73),
(164, 2, 10, 1, 59, 3, 73),
(165, 0, 10, 1, 60, 1, 74),
(166, 0, 10, 1, 60, 3, 74),
(169, 0, 10, 1, 61, 1, 76),
(170, 1, 10, 1, 61, 3, 76),
(171, 0, 10, 1, 62, 1, 77),
(172, 2, 10, 1, 62, 3, 77),
(173, 0, 10, 1, 63, 1, 78),
(174, 3, 10, 1, 63, 3, 78),
(175, 2, 11, 1, 64, 1, 79),
(176, 0, 11, 1, 64, 3, 79),
(177, 1, 11, 1, 65, 1, 80),
(178, 0, 11, 1, 65, 3, 80),
(179, 1, 11, 1, 66, 1, 81),
(180, 1, 11, 1, 66, 3, 81),
(181, 0, 11, 1, 67, 1, 82),
(182, 0, 11, 1, 67, 3, 82),
(183, 0, 11, 1, 68, 1, 83),
(184, 1, 11, 1, 68, 3, 83),
(185, 0, 11, 1, 69, 1, 84),
(186, 2, 11, 1, 69, 3, 84),
(187, 1, 12, 1, 70, 1, 85),
(188, 0, 12, 1, 70, 3, 85),
(189, 0, 12, 1, 71, 1, 86),
(190, 0, 12, 1, 71, 3, 86),
(191, 0, 12, 1, 72, 1, 87),
(192, 1, 12, 1, 72, 3, 87),
(193, 3, 13, 1, 73, 1, 88),
(194, 0, 13, 1, 73, 3, 88),
(195, 2, 13, 1, 74, 1, 89),
(196, 0, 13, 1, 74, 3, 89),
(197, 2, 13, 1, 75, 1, 90),
(198, 1, 13, 1, 75, 3, 90),
(199, 1, 13, 1, 76, 1, 91),
(200, 0, 13, 1, 76, 3, 91),
(201, 1, 13, 1, 77, 1, 92),
(202, 1, 13, 1, 77, 3, 92),
(203, 1, 13, 1, 78, 1, 93),
(204, 2, 13, 1, 78, 3, 93),
(205, 0, 13, 1, 79, 1, 94),
(206, 0, 13, 1, 79, 3, 94),
(207, 0, 13, 1, 80, 1, 95),
(208, 1, 13, 1, 80, 3, 95),
(209, 0, 13, 1, 81, 1, 96),
(210, 2, 13, 1, 81, 3, 96),
(211, 0, 13, 1, 82, 1, 97),
(212, 3, 13, 1, 82, 3, 97),
(213, 2, 14, 1, 83, 1, 98),
(214, 0, 14, 1, 83, 3, 98),
(215, 1, 14, 1, 84, 1, 99),
(216, 0, 14, 1, 84, 3, 99),
(217, 1, 14, 1, 85, 1, 100),
(218, 1, 14, 1, 85, 3, 100),
(219, 0, 14, 1, 86, 1, 101),
(220, 0, 14, 1, 86, 3, 101),
(221, 0, 14, 1, 87, 1, 102),
(222, 1, 14, 1, 87, 3, 102),
(223, 0, 14, 1, 88, 1, 103),
(224, 2, 14, 1, 88, 3, 103),
(225, 1, 15, 1, 89, 1, 104),
(226, 0, 15, 1, 89, 3, 104),
(227, 0, 15, 1, 90, 1, 105),
(228, 0, 15, 1, 90, 3, 105),
(229, 0, 15, 1, 91, 1, 106),
(230, 1, 15, 1, 91, 3, 106),
(231, 1, 16, 1, 92, 1, 107),
(232, 0, 16, 1, 92, 3, 107),
(233, 0, 16, 1, 93, 1, 108),
(234, 0, 16, 1, 93, 3, 108),
(235, 0, 16, 1, 94, 1, 109),
(236, 1, 16, 1, 94, 3, 109),
(237, 1, 17, 1, 95, 1, 110),
(238, 0, 17, 1, 95, 3, 110),
(239, 0, 17, 1, 96, 1, 111),
(240, 0, 17, 1, 96, 3, 111),
(241, 0, 17, 1, 97, 1, 112),
(242, 1, 17, 1, 97, 3, 112),
(243, 2, 18, 1, 98, 1, 113),
(244, 0, 18, 1, 98, 3, 113),
(245, 1, 18, 1, 99, 1, 114),
(246, 0, 18, 1, 99, 3, 114),
(247, 1, 18, 1, 100, 1, 115),
(248, 1, 18, 1, 100, 3, 115),
(249, 0, 18, 1, 101, 1, 116),
(250, 0, 18, 1, 101, 3, 116),
(251, 0, 18, 1, 102, 1, 117),
(252, 1, 18, 1, 102, 3, 117),
(253, 0, 18, 1, 103, 1, 118),
(254, 2, 18, 1, 103, 3, 118),
(255, 3, 21, 1, 104, 1, 119),
(256, 0, 21, 1, 104, 3, 119),
(257, 2, 21, 1, 105, 1, 120),
(258, 0, 21, 1, 105, 3, 120),
(259, 2, 21, 1, 106, 1, 121),
(260, 1, 21, 1, 106, 3, 121),
(261, 1, 21, 1, 107, 1, 122),
(262, 0, 21, 1, 107, 3, 122),
(263, 1, 21, 1, 108, 1, 123),
(264, 1, 21, 1, 108, 3, 123),
(265, 1, 21, 1, 109, 1, 124),
(266, 2, 21, 1, 109, 3, 124),
(267, 0, 21, 1, 110, 1, 125),
(268, 0, 21, 1, 110, 3, 125),
(269, 0, 21, 1, 111, 1, 126),
(270, 1, 21, 1, 111, 3, 126),
(271, 0, 21, 1, 112, 1, 127),
(272, 2, 21, 1, 112, 3, 127),
(273, 0, 21, 1, 113, 1, 128),
(274, 3, 21, 1, 113, 3, 128),
(275, 3, 22, 1, 114, 1, 129),
(276, 0, 22, 1, 114, 3, 129),
(277, 2, 22, 1, 115, 1, 130),
(278, 0, 22, 1, 115, 3, 130),
(279, 2, 22, 1, 116, 1, 131),
(280, 1, 22, 1, 116, 3, 131),
(281, 1, 22, 1, 117, 1, 132),
(282, 0, 22, 1, 117, 3, 132),
(283, 1, 22, 1, 118, 1, 133),
(284, 1, 22, 1, 118, 3, 133),
(285, 1, 22, 1, 119, 1, 134),
(286, 2, 22, 1, 119, 3, 134),
(287, 0, 22, 1, 120, 1, 135),
(288, 0, 22, 1, 120, 3, 135),
(289, 0, 22, 1, 121, 1, 136),
(290, 1, 22, 1, 121, 3, 136),
(291, 0, 22, 1, 122, 1, 137),
(292, 2, 22, 1, 122, 3, 137),
(293, 0, 22, 1, 123, 1, 138),
(294, 3, 22, 1, 123, 3, 138),
(295, 3, 23, 1, 124, 1, 139),
(296, 0, 23, 1, 124, 3, 139),
(297, 2, 23, 1, 125, 1, 140),
(298, 0, 23, 1, 125, 3, 140),
(299, 2, 23, 1, 126, 1, 141),
(300, 1, 23, 1, 126, 3, 141),
(301, 1, 23, 1, 127, 1, 142),
(302, 0, 23, 1, 127, 3, 142),
(303, 1, 23, 1, 128, 1, 143),
(304, 1, 23, 1, 128, 3, 143),
(305, 1, 23, 1, 129, 1, 144),
(306, 2, 23, 1, 129, 3, 144),
(307, 0, 23, 1, 130, 1, 145),
(308, 0, 23, 1, 130, 3, 145),
(309, 0, 23, 1, 131, 1, 146),
(310, 1, 23, 1, 131, 3, 146),
(311, 0, 23, 1, 132, 1, 147),
(312, 2, 23, 1, 132, 3, 147),
(313, 0, 23, 1, 133, 1, 148),
(314, 3, 23, 1, 133, 3, 148),
(315, 1, 24, 1, 134, 1, 149),
(316, 0, 24, 1, 134, 3, 149),
(317, 0, 24, 1, 135, 1, 150),
(318, 0, 24, 1, 135, 3, 150),
(319, 0, 24, 1, 136, 1, 151),
(320, 1, 24, 1, 136, 3, 151),
(321, 3, 25, 1, 137, 1, 152),
(322, 0, 25, 1, 137, 3, 152),
(323, 2, 25, 1, 138, 1, 153),
(324, 0, 25, 1, 138, 3, 153),
(325, 2, 25, 1, 139, 1, 154),
(326, 1, 25, 1, 139, 3, 154),
(327, 1, 25, 1, 140, 1, 155),
(328, 0, 25, 1, 140, 3, 155),
(329, 1, 25, 1, 141, 1, 156),
(330, 1, 25, 1, 141, 3, 156),
(331, 1, 25, 1, 142, 1, 157),
(332, 2, 25, 1, 142, 3, 157),
(333, 0, 25, 1, 143, 1, 158),
(334, 0, 25, 1, 143, 3, 158),
(335, 0, 25, 1, 144, 1, 159),
(336, 1, 25, 1, 144, 3, 159),
(337, 0, 25, 1, 145, 1, 160),
(338, 2, 25, 1, 145, 3, 160),
(339, 0, 25, 1, 146, 1, 161),
(340, 3, 25, 1, 146, 3, 161);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trol`
--

CREATE TABLE IF NOT EXISTS `trol` (
  `idrol` int(11) NOT NULL AUTO_INCREMENT,
  `vcrolnombre` varchar(200) NOT NULL,
  `borolestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `trol`
--

INSERT INTO `trol` (`idrol`, `vcrolnombre`, `borolestado`) VALUES
(1, 'Alumno', 1),
(2, 'Docente', 1),
(3, 'Madre', 1),
(4, 'Padre', 1),
(5, 'Tutor', 1),
(6, 'Otro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tsubfactor`
--

CREATE TABLE IF NOT EXISTS `tsubfactor` (
  `idsubfactor` int(11) NOT NULL AUTO_INCREMENT,
  `vcsubfactnombre` varchar(200) NOT NULL,
  `vcsubfactdescrip` varchar(250) DEFAULT NULL,
  `vcsubfactestado` tinyint(1) NOT NULL,
  `idfactor` int(11) NOT NULL,
  PRIMARY KEY (`idsubfactor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `tsubfactor`
--

INSERT INTO `tsubfactor` (`idsubfactor`, `vcsubfactnombre`, `vcsubfactdescrip`, `vcsubfactestado`, `idfactor`) VALUES
(1, 'MOTRICIDAD GRUESA', NULL, 1, 1),
(2, 'MOTRICIDAD FINA', NULL, 1, 1),
(3, 'AUTONOMÍA', NULL, 1, 1),
(4, 'LENGUAJE', NULL, 1, 2),
(5, 'MEMORIA AUDITIVA', NULL, 1, 2),
(6, 'MEMORIA KINESTESICA', NULL, 1, 2),
(7, 'ATENCION', NULL, 1, 2),
(8, 'MEMORIA VISUAL', NULL, 1, 2),
(9, 'NOCION DEL TIEMPO', NULL, 1, 2),
(10, 'NOCION DE ESPACIO', NULL, 1, 2),
(11, 'NOCION DE CANTIDAD', NULL, 1, 2),
(12, 'NOCION DE IGUAL O DIFERENTE', NULL, 1, 2),
(13, 'DIBUJO', NULL, 1, 2),
(14, 'LENGUA ESCRITURA', NULL, 1, 2),
(15, 'LENGUA RECONOCIMIENTO DE LETRAS', NULL, 1, 2),
(16, 'MATEMATICA 1 A 10', NULL, 1, 2),
(17, 'MATEMATICA 1 AL 20', NULL, 1, 2),
(18, 'COPIA', NULL, 1, 2),
(21, 'INTELIGENCIA EMOCIONAL', NULL, 1, 3),
(22, 'SOCIALIZACION', NULL, 1, 3),
(23, 'AUTOESTIMA', NULL, 1, 3),
(24, 'CURIOSIDAD', NULL, 1, 3),
(25, 'CONDUCTA', NULL, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttutalum`
--

CREATE TABLE IF NOT EXISTS `ttutalum` (
  `idtutalum` int(11) NOT NULL AUTO_INCREMENT,
  `botutalumestado` tinyint(1) NOT NULL,
  `idtutor` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `idparentesco` int(11) NOT NULL,
  PRIMARY KEY (`idtutalum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `ttutalum`
--

INSERT INTO `ttutalum` (`idtutalum`, `botutalumestado`, `idtutor`, `idalumno`, `idparentesco`) VALUES
(5, 1, 0, 1, 1),
(6, 1, 0, 1, 1),
(7, 1, 0, 1, 1),
(8, 1, 0, 1, 1),
(9, 1, 0, 1, 1),
(10, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttutor`
--

CREATE TABLE IF NOT EXISTS `ttutor` (
  `idtutor` int(11) NOT NULL AUTO_INCREMENT,
  `dttutfecha` date NOT NULL,
  `botutestado` tinyint(1) NOT NULL,
  `idpersona` int(11) NOT NULL,
  PRIMARY KEY (`idtutor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `ttutor`
--

INSERT INTO `ttutor` (`idtutor`, `dttutfecha`, `botutestado`, `idpersona`) VALUES
(1, '2015-11-01', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttutrol`
--

CREATE TABLE IF NOT EXISTS `ttutrol` (
  `idtutorrol` int(11) NOT NULL AUTO_INCREMENT,
  `vctutrolnombre` varchar(200) NOT NULL,
  `botutrolestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idtutorrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE IF NOT EXISTS `tusuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `vcusunombre` varchar(200) NOT NULL,
  `vcusuclave` varchar(50) NOT NULL,
  `vcusuemail` varchar(250) DEFAULT NULL,
  `bousuestado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`idusuario`, `vcusunombre`, `vcusuclave`, `vcusuemail`, `bousuestado`) VALUES
(10, '31436649', '81dc9bdb52d04dc20036dbd8313ed055', 'javdu0113@gmail.com', 1),
(12, '31436647', '81dc9bdb52d04dc20036dbd8313ed055', 'javdu0113@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_username` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
