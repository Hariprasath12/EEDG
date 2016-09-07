-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2015 at 05:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `eng`
--

CREATE TABLE IF NOT EXISTS `eng` (
  `sno` int(20) NOT NULL AUTO_INCREMENT,
  `weight` int(20) NOT NULL,
  `words` varchar(200) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `eng`
--

INSERT INTO `eng` (`sno`, `weight`, `words`) VALUES
(1, 1, 'Happy,sad,smiley,angery,depression,love'),
(2, 1, 'laptop,computer,internet,mobile,website,headset'),
(3, 1, 'water,air,land,soil,fire,tree'),
(4, 2, 'cotten,slik,book,pen,board,paper,exam,test'),
(5, 2, 'fan,light,sun,land,rain,water,soil,song'),
(6, 2, 'paper,pen,exam,test,table,pencile,bag,book'),
(7, 3, 'white,blue,yellow,green,black,pink,rose,brown'),
(8, 3, 'time,money,shop,bag,mall,building,school,supermarket'),
(9, 3, 'fog,tiger,cat,dog,pig,goat,lion,cow'),
(10, 4, 'pink,yellow,white,red,blue,green,brown,orange,grey,purple'),
(11, 4, 'phone,cell,pc,laptop,pendrive,headset,trimmer,bluetooth,chip,register'),
(12, 4, 'mouse,monitor,keyboard,ups,cpu,harddisk,ram,floopydisk,speker,mobile\r\n'),
(13, 5, 'rose,jasmine,lilly,tuple,sunflower,lotus,stream,root,soil,water,rain,light'),
(14, 5, 'apple,orange,pineapple,watermelon,pumkin,grapes,dragonfruit,fig,custedapple,muskmelon,gova,banana'),
(15, 5, 'box,square,rectangle,triangle,cube,hexagon,circle,cyclider,cone,oval,hemisphere');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `weight` varchar(30) NOT NULL,
  `src` varchar(50) NOT NULL,
  `words` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`no`, `weight`, `src`, `words`) VALUES
(1, '1', '1.jpg', 'red,mask,white'),
(2, '1', '3.jpg', 'women,window,sunlight'),
(3, '1', '12.jpg', 'vegetables,orange,red,green,apple,fruits'),
(4, '2', '13.jpg', 'computer,apple,iphone,mac,stevejobs,touch'),
(5, '3', '14.jpg', 'green,plant,flower,white,circle'),
(6, '3', '15.jpg', 'butterfly,flower,pink,red,yellow,black'),
(7, '4', '16.jpg', 'rose,flower,yellow,green,circle'),
(8, '4', '17.jpg', 'tiger,animal,green,yellow,orange,brown'),
(9, '5', '18.jpg', 'yellow,pink,red,light,green,circle'),
(10, '5', '19.jpg', 'street,red,house,mask,window');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `name`, `email`, `password`) VALUES
(2, 'hari', 'hariprasath.1295@gmail.com', '123'),
(3, 'hari', 'hari@gmail.com', '123'),
(4, 'Prakash', 'prakashnov7@gmail.com', '199419819000'),
(5, 'dinesh', 'dineshreddy0015@gmail.com', 'dinesh123'),
(6, 'idrees', 'idrees.shiek@gmail.com', '123455'),
(7, 'akhil', 'akhilreddymandadi@gmail.com', '9492187627'),
(8, 'hari', 'gh@gmail.com', '123'),
(10, 'akhil', 'akhilreddymandadi1@gmail.com', '9492187627'),
(11, 'hari', 'akhilreddymandadia1@gmail.com', '9492187627'),
(12, 'hari', 'fay@gmail.com', '123'),
(13, 'hari', 'gvlh@gmail.com', '123'),
(14, 'hari', 'vgvg@gmail.com', '87678'),
(15, 'hari', 'kgh@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE IF NOT EXISTS `sample` (
  `sno` int(30) NOT NULL AUTO_INCREMENT,
  `level` varchar(30) NOT NULL,
  `question` varchar(70) NOT NULL,
  `options` varchar(30) NOT NULL,
  `answer` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`sno`, `level`, `question`, `options`, `answer`) VALUES
(1, '1', '9*3?', '12,27,24,56', '27'),
(2, '1', '4*6?', '12,22,24,32', '24'),
(3, '1', '8/2?', '4,2,1,6', '4'),
(4, '1', '9-7?', '2,4,5,6', '2'),
(5, '1', '4*4?', '16,22,26,12', '16'),
(6, '1', '6+7?', '13,12,11,10', '13'),
(7, '1', '2*1?', '2,3,4,5', '2'),
(8, '1', '4+6', '10,14,13,12', '10'),
(9, '1', '6/2', '2,3,4,5', '3'),
(10, '1', '5*5', '12,2,34,25', '25'),
(11, '1', '4*8', '24,45,46,32', '32'),
(12, '1', '6*6', '36,42,34,42', '36'),
(13, '3', '34-22', '12,34,45,56', '12'),
(14, '3', '50/10', '5,3,4,2', '5'),
(15, '3', '42+23', '65,34,55,66', '65'),
(16, '3', '45-22', '23,4,5,67', '23'),
(17, '3', '44/11', '5,4,6,7', '4'),
(18, '3', '49-32', '17,12,14,15', '17'),
(19, '3', '45+22', '57,67,78,91', '67'),
(20, '3', '647-37', '30,34,56,10', '10'),
(21, '3', '50+23', '73,65,66,32', '73'),
(22, '3', '32-30', '6,2,5,7', '2'),
(23, '3', '50+32', '55,66,34,82', '82'),
(24, '3', '34+21', '55,6,7,66', '55'),
(25, '5', '100/50', '2,3,4,5', '2'),
(26, '5', '77-44', '33,34,35,36', '33'),
(27, '5', '44+70', '104,114,124,134', '114'),
(28, '5', '100-72', '28,3,4,5', '28'),
(29, '5', '19+32', '55,52,51,53', '51'),
(30, '5', '77/7', '11,4,5,6', '11'),
(31, '5', '56-45', '12,11,10,14', '11'),
(32, '5', '77-55', '22,29,22,32', '22'),
(33, '5', '96-36', '56,60,54,32', '60'),
(34, '5', '64/16', '5,4,6,7', '4'),
(35, '5', '44/22', '2,3,4,5', '2'),
(36, '5', '78-77', '2,1,3,4', '1'),
(37, '7', '125+200', '325,456,344,255', '325'),
(38, '7', '200/100', '3,4,2,1', '2'),
(39, '7', '189-177', '12,11,22,42', '12'),
(40, '7', '140-80', '61,41,60,70', '60'),
(41, '7', '167-145', '22,12,31,11', '12'),
(42, '7', '200/100', '6,5,2,4', '2'),
(43, '7', '56+100', '156,162155,134', '156'),
(44, '7', '120/30', '4,3,5,2', '4'),
(45, '7', '160-132', '11,22,28,18', '28'),
(46, '7', '166-156', '10,20,30,5', '10'),
(47, '7', '132/11', '13,11,12,14', '12'),
(48, '7', '198/11', '17,18,19,28 ', '18'),
(49, '9', '5!', '130,140,120,150', '120'),
(50, '9', '7!', '5040,5400,5140,5240', '5040'),
(51, '9', '2!*3!', '14,22,12,32', '12'),
(52, '9', '4!*2!', '58,48,38,68', '48'),
(53, '9', 'avg of 22,56,78,12', '32,66,42,58', '42'),
(54, '9', 'avg of 10,12,24,26', '28,18,34,17', '18'),
(55, '9', 'avg 10,20,30,10,10', '14,24,34,16', '16'),
(56, '9', 'avg of 12,14,10', '12,14,16,11', '12'),
(57, '9', 'lcm of 10 and 12', '30,60,50,40', '60'),
(58, '9', 'lcm of 16 and 24', '38,48,58,98', '48'),
(59, '9', 'lcm of 44 and 56', '614,616,513,514', '616'),
(60, '9', 'lcm of 50 and 30', '120,140,150,160', '150'),
(61, '6', 'collection of writing', 'corpus,cornus,crap,scarb', 'corpus'),
(62, '6', 'following as a consequences', 'accompanying,aqau,acrobati,acc', 'accompanying'),
(63, '6', 'roll around', 'wallow,robin,narrow,waste', 'wallow'),
(64, '6', 'the act of keeping', 'retarted,,rapist,retention,scr', 'retention'),
(65, '6', 'being active', 'dead,fresh,stable,happy', 'fresh'),
(66, '6', 'a personal or social seperatio', 'drift,rift,space,polite', 'rift'),
(67, '6', 'a body of people associated', 'corpus,corps,carryout,carried', 'corps'),
(68, '6', 'forward of consideration', 'void,acceptance,analysis,lower', 'acceptance'),
(69, '8', 'ram______ the food', 'like,likes,hat,nate', 'likes'),
(70, '8', 'sudeep _____ horrible', 'smell,smells,make,makes', 'smells'),
(71, '8', 'the_____ is 8:30pm', 'time,times,date,dates', 'time'),
(72, '8', 'the car is red in_____', 'colour,color,lot,lots', 'colour'),
(73, '8', 'how _____ are you', 'old,age,olds,ages', 'old'),
(74, '8', 'the ___ act is ___', 'fast,fasts,speed,speeds', 'fast, speed'),
(75, '8', 'the____ is oval in_____', 'sun,son,shape,shapes', 'sun,shape'),
(76, '8', 'the _____ is too ____  to solv', 'matter,matters,hard,hards', 'matter,hard'),
(77, '10', 'defines an object :  _ a _', 'rat,bat,cat,eat', 'bat'),
(78, '10', 'defines an place:  _ _ _y', 'rody,lady,koty,ooty', 'ooty'),
(79, '10', 'vegetable  : _ a r r _ _', 'rabbit,onion,carrot,parrot', 'carrot'),
(80, '10', 'cold x', 'lot,not,hot,wat', 'hot'),
(81, '10', 'good x', 'bad,had,trad,laid', 'bad'),
(82, '10', 'blank -', 'space,empty,nothing,anything', 'empty'),
(83, '10', 'hard-', 'difficult,dart,mad,spade', 'diificult'),
(84, '10', 'mad-', 'verdict,crazy,spam,treated', 'crazy'),
(85, '2', '15-7?', '7,8,6,4', '8'),
(86, '2', '10*12', '130,140,120,110', '120'),
(87, '2', '12/4', '4,5,3,1', '3'),
(88, '2', '12-8', '5,6,4,3', '4'),
(89, '2', '28-22', '4,6,7,8', '6'),
(90, '2', '42+36', '79,78,69,66', '78'),
(91, '2', '45-32', '13,14,11,16', '13'),
(92, '2', '81/9', '9,7,8,4', '9'),
(93, '2', '75-22', '56,54,53,61', '53'),
(94, '2', '39/3', '7,8,9,4', '9'),
(95, '4', '72-13', '55,59,58,46', '59'),
(96, '4', '13*12', '147,156,172,134', '156'),
(97, '4', '13*15?', '186,195,172,140', '195'),
(98, '4', '13 * 16?', '208,178,168,214', '208'),
(99, '4', '144/6?', '23,15,24,18', '24'),
(100, '4', '152/4?', '40,36,32,38', '38'),
(101, '4', '13*19?', '250,248,247,290', '247'),
(102, '4', '142/2?', '80,72,74,71', '71'),
(103, '4', '120/8?', '15,13,11,12', '15'),
(104, '4', '148/4?', '37,34,35,31', '37');

-- --------------------------------------------------------

--
-- Table structure for table `testdata`
--

CREATE TABLE IF NOT EXISTS `testdata` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `time` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `skip` varchar(20) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `testdata`
--

INSERT INTO `testdata` (`sno`, `name`, `age`, `gender`, `time`, `level`, `skip`) VALUES
(2, 'hgldlhdfhdfgfuygduyefy', 6, 'male', '26', '9', '1'),
(3, 'hariprasath', 17, 'male', '60', '9', '2'),
(4, '', 0, '', '', '', ''),
(5, 'ram', 45, 'male', '33', '1', '10'),
(6, 'hariprasath', 56, 'male', '29', '4', '7'),
(7, 'hariprasath', 56, 'male', '', '', ''),
(8, '', 0, '', '', '', ''),
(9, 'hari', 0, '', '21', '11', '0'),
(10, 'akhil', 0, '', '25', '4', '7'),
(11, 'akhil', 0, '', '23', '10', '1'),
(12, 'akhil', 0, '', '', '', ''),
(13, 'akhil', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `iw` varchar(20) NOT NULL,
  `fw` varchar(20) NOT NULL,
  `itime` varchar(20) NOT NULL,
  `ftime` varchar(20) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`sno`, `email`, `date`, `iw`, `fw`, `itime`, `ftime`) VALUES
(1, 'akhilreddymandadi1@gmail.com', '09/27/15', '1', '0', '18:36', '0'),
(2, 'akhilreddymandadi1@gmail.com', '09/27/15', '1', '0', '19:54', '0'),
(3, 'akhilreddymandadi1@gmail.com', '09/27/15', '1', '0', '22:42', '0'),
(4, 'hari@gmail.com', '09/27/15', '0', '0', '23:51', '0'),
(5, 'akhilreddymandadi1@gmail.com', '09/27/15', '1', '0', '00:22', '0'),
(6, 'akhilreddymandadi1@gmail.com', '09/28/15', '1', '0', '06:48', '0'),
(7, 'akhilreddymandadi1@gmail.com', '09/28/15', '3', '0', '06:50', '0'),
(8, 'akhilreddymandadi1@gmail.com', '09/28/15', '1', '0', '07:26', '0'),
(9, 'hari@gmail.com', '09/28/15', '1', '0', '07:30', '0'),
(10, 'hari@gmail.com', '09/28/15', '3', '0', '07:35', '0'),
(11, 'hari@gmail.com', '09/28/15', '0', '0', '07:36', '0'),
(12, 'hari@gmail.com', '09/28/15', '0', '0', '07:40', '0'),
(13, 'hari@gmail.com', '09/28/15', '0', '0', '07:41', '0'),
(14, 'akhilreddymandadi1@gmail.com', '09/28/15', '1', '0', '08:43', '0'),
(15, 'akhilreddymandadi1@gmail.com', '09/28/15', '0', '0', '08:45', '0'),
(16, 'akhilreddymandadi1@gmail.com', '09/28/15', '0', '0', '08:50', '0'),
(17, 'akhilreddymandadi1@gmail.com', '09/28/15', '1', '0', '08:52', '0'),
(18, 'akhilreddymandadi1@gmail.com', '09/28/15', '1', '0', '08:52', '0'),
(19, 'hari@gmail.com', '09/28/15', '1', '0', '09:15', '0'),
(20, 'hari@gmail.com', '09/28/15', '1', '0', '09:15', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
