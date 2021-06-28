
-- --------------------------------------------------------

--
-- Table structure for table `direction`
--
-- Creation: Jun 21, 2021 at 03:40 PM
-- Last update: Jun 28, 2021 at 03:08 AM
--

DROP TABLE IF EXISTS `direction`;
CREATE TABLE IF NOT EXISTS `direction` (
  `ID_direction` char(10) NOT NULL,
  `right_direction` char(50) NOT NULL,
  `left_direction` char(50) NOT NULL,
  `forward` char(50) NOT NULL,
  `backward` char(50) NOT NULL,
  `stop` char(50) NOT NULL,
  PRIMARY KEY (`ID_direction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `direction`
--

INSERT INTO `direction` (`ID_direction`, `right_direction`, `left_direction`, `forward`, `backward`, `stop`) VALUES
('', '', '', 'f', '', '');
