--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `excel`
--

CREATE TABLE IF NOT EXISTS `excel` (
  `excel_id` int(11) NOT NULL AUTO_INCREMENT,
  `excel_name` varchar(250) NOT NULL,
  `excel_email` varchar(250) NOT NULL,
  PRIMARY KEY (`excel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `excel`
--