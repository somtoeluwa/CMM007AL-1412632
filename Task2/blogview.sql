-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `blogview`;
CREATE TABLE `blogview` (
  `blogItemID` int(11) NOT NULL AUTO_INCREMENT,
  `entryTitle` varchar(100) DEFAULT NULL,
  `entrySummary` varchar(300) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `submitter` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`blogItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `blogview` (`blogItemID`, `entryTitle`, `entrySummary`, `category`, `submitter`) VALUES
(1,	'Today at work',	'Today I went to work and I did lots of very complicated coding things. I was very pleased that I managed to finish them all.',	'Work',	'Adam'),
(2,	'University Lecturer',	'This week in university I had an amazing lecture. I cant\'t remember the name of the lecturer but he was really good.',	'University',	'Brian'),
(3,	'Dad new television',	'Today Dad bought a new television. He likes to watch the F1 on it a lot.',	'Family',	'Charlie'),
(101,	'Assessment Test',	'I\'ll try using commas and other special charactes !&quot;£$%^&amp;*#/;',	'Work',	'Somto'),
(111,	'Assessment Test',	'I tried the characters and they were successful. I hope I do well',	'University',	'Somto');

-- 2016-05-04 11:24:09
