--
-- Database: `biodata`
--
 
CREATE TABLE IF NOT EXISTS `personal` (
`id_personal` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `address` text NOT NULL
) <span id="IL_AD11" class="IL_AD">ENGINE</span>=InnoDB AUTO_INCREMENT=9 DEFAULT <span id="IL_AD7" class="IL_AD">CHARSET</span>=latin1;
