
-- --------------------------------------------------------

--
-- Table structure for table `slider`
--
-- Creation: Jun 27, 2021 at 11:16 PM
-- Last update: Jun 28, 2021 at 03:13 AM
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `ID_motor` int(10) NOT NULL,
  `m1` int(50) NOT NULL,
  `m2` int(50) NOT NULL,
  `m3` int(50) NOT NULL,
  `m4` int(50) NOT NULL,
  `m5` int(50) NOT NULL,
  `m6` int(50) NOT NULL,
  `off_on` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_motor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`ID_motor`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `off_on`) VALUES
(0, 90, 90, 90, 90, 90, 90, 'on');
