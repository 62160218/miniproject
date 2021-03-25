CREATE DATABASE my_note
use my_note
CREATE TABLE `mynote_data` (
  `number` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `note_header` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `note_detail` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
