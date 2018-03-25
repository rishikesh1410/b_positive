-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 06:46 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b_positive`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(11) NOT NULL,
  `A+` int(11) NOT NULL,
  `A-` int(11) NOT NULL,
  `B+` int(11) NOT NULL,
  `B-` int(11) NOT NULL,
  `O+` int(11) NOT NULL,
  `O-` int(11) NOT NULL,
  `AB+` int(11) NOT NULL,
  `AB-` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `A+`, `A-`, `B+`, `B-`, `O+`, `O-`, `AB+`, `AB-`) VALUES
(697300, 40, 35, 68, 27, 46, 42, 28, 55),
(800800, 60, 33, 37, 34, 70, 55, 58, 51),
(329708, 7, 8, 9, 9, 9, 9, 0, 9),
(391056, 57, 31, 31, 48, 67, 45, 29, 70),
(517743, 66, 43, 50, 39, 60, 69, 49, 54),
(497347, 39, 70, 69, 67, 51, 28, 48, 46),
(803111, 34, 61, 42, 62, 73, 66, 48, 45),
(414753, 52, 60, 38, 38, 66, 58, 60, 42),
(454163, 26, 40, 42, 42, 65, 30, 50, 48),
(100043, 39, 50, 51, 28, 53, 35, 37, 29),
(652797, 43, 56, 39, 55, 69, 46, 36, 31),
(404217, 56, 72, 31, 33, 45, 54, 59, 73),
(887780, 37, 31, 65, 40, 27, 32, 58, 25),
(687564, 25, 47, 57, 56, 65, 27, 72, 25),
(898941, 27, 35, 56, 36, 40, 48, 56, 54),
(423957, 31, 74, 70, 46, 64, 48, 33, 53),
(546063, 42, 72, 32, 73, 69, 75, 45, 61),
(458894, 53, 45, 68, 69, 32, 65, 29, 37),
(589227, 30, 28, 57, 72, 61, 74, 69, 59),
(226683, 73, 51, 57, 68, 61, 35, 62, 53),
(129535, 61, 49, 75, 62, 40, 58, 70, 37),
(811673, 75, 55, 66, 47, 46, 74, 31, 34),
(190831, 52, 46, 50, 45, 28, 73, 25, 49),
(651127, 42, 38, 45, 65, 35, 62, 52, 46),
(695164, 36, 66, 59, 74, 56, 26, 53, 75),
(263172, 34, 38, 28, 70, 39, 72, 43, 54),
(777052, 71, 31, 67, 25, 45, 27, 63, 38),
(568526, 36, 74, 70, 66, 55, 56, 41, 35),
(957969, 71, 55, 73, 57, 40, 37, 38, 26),
(981076, 47, 58, 38, 40, 63, 72, 51, 44),
(278572, 42, 49, 73, 61, 55, 62, 64, 64),
(298363, 60, 25, 26, 55, 38, 50, 72, 36),
(898291, 73, 64, 27, 44, 43, 39, 62, 33),
(564884, 57, 32, 51, 38, 66, 29, 30, 40),
(362243, 45, 37, 40, 64, 38, 40, 70, 67),
(280924, 35, 70, 74, 31, 46, 29, 48, 34),
(591823, 51, 42, 52, 51, 60, 48, 33, 41),
(463856, 32, 65, 46, 26, 33, 67, 51, 66);

-- --------------------------------------------------------

--
-- Table structure for table `donatereq`
--

CREATE TABLE `donatereq` (
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatereq`
--

INSERT INTO `donatereq` (`email`, `state`, `city`, `locality`, `bloodgroup`) VALUES
('vutukuruchandu639@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `individual`
--

CREATE TABLE `individual` (
  `name` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bloodgroup` varchar(25) NOT NULL,
  `weight` int(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `office` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individual`
--

INSERT INTO `individual` (`name`, `username`, `password`, `bloodgroup`, `weight`, `mobile`, `office`, `email`, `state`, `city`, `locality`) VALUES
('Prakhar  Sharma', '16mt001343', '16mt001343', 'A+', 67, 9929208672, 8672, 'prakhar5star@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Manoj  Kumar', '2013MT0099', '2013MT0099', 'O+', 87, 7209129457, 9457, 'manojkumar.aries16@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Manisha  Das', '2013MT0288', '2013MT0288', 'O+', 60, 8895356144, 6144, 'das.manisha1991@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Kundan Kumar Suman', '16mt001021', '16mt001021', 'A+', 63, 8804474664, 4664, 'kundan.oltron@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Debolina  Sur', '16mt001420', '16mt001420', 'A+', 83, 9940488236, 8236, 'debolinasur26@yahoo.in', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Ruchita  Sonak', '16mt001429', '16mt001429', 'A+', 54, 9591609900, 9900, 'ruchitasonak@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Somil  Yadav', '15mt000308', '15mt000308', 'A+', 80, 7292828861, 8861, 'somilyadavbit@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Rohan  Paul', '15mt000337', '15mt000337', 'A+', 57, 7273949590, 9590, 'rohanpaul35@yahoo.co.in', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Divya  Saurav', '15mt000608', '15mt000608', 'A+', 66, 7857907221, 7221, 'divyasaurav224@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Aditya  Mehra', '16mt000741', '16mt000741', 'A+', 69, 8800121531, 1531, 'adi990000@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Vivek Kumar Gautam', '16mt000743', '16mt000743', 'A+', 51, 9472388971, 8971, 'vivek5523.gautam@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Kumar  Aditya', '16mt000759', '16mt000759', 'A+', 94, 8882968545, 8545, 'kumaraditya301@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Gaurav  Chand', '16mt001297', '16mt001297', 'A+', 69, 9540295826, 5826, 'grvchand92@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Amiri Hamis Salum', '14MT000598', '14MT000598', 'A+', 67, 7544909795, 9795, 'amirihamis@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Mukesh Kumar Patel', '15mt000207', '15mt000207', 'A+', 85, 7781986931, 6931, 'nmukesh.kumar5@yahoo.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Anuranjeet  Ranjan', '16mt001017', '16mt001017', 'O+', 59, 9472729184, 9184, 'ianuranjeet@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Jayant  Pratap', '16mt001075', '16mt001075', 'O+', 65, 7461999972, 9972, 'jayantpratap26@yahoo.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Kunal  Modak', '2012DR0118', '2012DR0118', 'O-', 91, 7209748133, 8133, 'modak.kunal@yahoo.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Jaspreet  Kaur', '2013DR0192', '2013DR0192', 'A-', 61, 9931921849, 1849, 'jsprtkr81@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Anita  Kumari', '2014DR0082', '2014DR0082', 'A-', 55, 9572252099, 2099, 'anita.kumari409@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Mohd  Azam', '2014DR0220', '2014DR0220', 'A-', 77, 9709740185, 185, 'mohdazam@ap.ism.ac.in', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Rajesh  Bajaj', '2014dr1139', '2014dr1139', 'A-', 91, 7599117374, 7374, 'rajeshbajaj_hbti@rediffmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Nilanjan  Pal', '2015DR0205', '2015DR0205', 'A-', 95, 9572180585, 585, 'nilanjanpaul01@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Sachin Kumar Maurya', '2015DR0256', '2015DR0256', 'A-', 79, 9125991800, 1800, 'sachinram.iit@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Manoj Kumar Verma', '2016dr1074', '2016dr1074', 'A-', 84, 9450034622, 4622, 'mannuverma@rediffmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Gaurav Kr Singh', '14je000312', '14je000312', 'A-', 65, 7277378366, 8366, 'studybuddy.gs@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Poolla Srirama Subba Rao', '16mt000972', '16mt000972', 'A-', 68, 7382130748, 748, 'sriramviru@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Abhishek  Sankhla', '16mt001076', '16mt001076', 'O-', 55, 8804493666, 3666, 'chevellesome@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Rana  Ghosh', '2012JE0988', '2012JE0988', 'O-', 76, 7759011307, 1307, 'ranaghosh293@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Amrendra  Kumar', '2013je0827', '2013je0827', 'O-', 92, 8521035337, 5337, 'amrendra1296@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Satyananda  Patra', '2013DR0257', '2013DR0257', 'AB-', 94, 9162783396, 3396, 'spsatyananda05@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Rakesh Kumar Singh', '2015DR0005', '2015DR0005', 'AB-', 90, 9031000243, 243, 'rakeshsingh5725@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Chandra  Prakash', '2015DR0137', '2015DR0137', 'AB-', 82, 9411423805, 3805, 'cp.mit777@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Shweta Manoj Rani', '2015DR0214', '2015DR0214', 'AB-', 77, 9905371196, 1196, 'shwetarani99@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Narayan Lal Parihar', '14JE000082', '14JE000082', 'AB-', 84, 9610275210, 5210, 'pariharnarayan457@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Tadi Mahanthi Babu', '14je000186', '14je000186', 'AB-', 73, 9572385085, 5085, 'mahanthibabutadi@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Vutukuru Chandrakiran Reddy', '14je000500', '14je000500', 'AB-', 76, 7546851177, 1177, 'vutukuruchandu639@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Rishabh  Kumar', '2012JE1157', '2012JE1157', 'AB+', 83, 8877208081, 8081, 'rishabhkumar.ism@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Sarita  Kumari', '15mt000160', '15mt000160', 'AB+', 55, 9835802000, 2000, 'saritak0506@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Kuntal  Mitra', '16KT000091', '16KT000091', 'AB+', 70, 9836316519, 6519, 'kuntalmitra001@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Chandan Kumar Singh', '16mt000915', '16mt000915', 'AB+', 55, 9504595999, 5999, 'cksingh1234@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Ranjeet  Saw', '15mt000632', '15mt000632', 'B+', 69, 9122659085, 9085, 'RANJEETSAW137@GMAIL.COM', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Rabindra  Kumar', '15MT000670', '15MT000670', 'B+', 79, 8102454666, 4666, 'imrabindrakumar@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Sarita  Anand', '16mt000802', '16mt000802', 'B+', 92, 9716542819, 2819, 'sarita.anand786@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Naval  Mishra', '16mt000933', '16mt000933', 'B+', 82, 9075393366, 3366, 'nmishra847@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Purvi  Bhardwaj', '16mt000962', '16mt000962', 'B+', 54, 7389586533, 6533, 'purvigarewal@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Pravar  Yadav', '16mt000980', '16mt000980', 'B+', 66, 8287803539, 3539, 'pravaryadav@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Arkaprabha  Chattopadhyay', '16mt000994', '16mt000994', 'B+', 57, 9836424768, 4768, 'arkaprabhachattopadhyay94@yahoo.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Shrestha Sankar Kulsi', '16mt001069', '16mt001069', 'B+', 63, 9163647587, 7587, 'tistha06@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Rishi  R', '16mt001078', '16mt001078', 'B+', 66, 9487272079, 2079, 'rishicivil8963@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Ravi  Kumar', '16mt001260', '16mt001260', 'B+', 62, 9473396465, 6465, 'ravikumar90621@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Mohit Singh Thakur', '16mt001460', '16mt001460', 'B+', 90, 9406261166, 1166, 'mst2301@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Krishna  Sharma', '15mt000533', '15mt000533', 'B+', 89, 9097227135, 7135, 'radskrishna27@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Pratik  Ranjan', '15mt000601', '15mt000601', 'B+', 60, 7209470980, 980, 'pratik.ranjan8@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Sarbartha  Sarkar', '16mt001088', '16mt001088', 'B+', 71, 8981441515, 1515, 'sarkar.sarbartha@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Ashish  Singh', '16mt001261', '16mt001261', 'B+', 94, 9431784757, 4757, 'singh111ashish@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Anshu Jalan', 'anshujalan', 'ANSHUJALAN', 'A+', 54, 9706007500, 7255934341, 'a.jalan03@gmail.com', 'Assam', 'Guwahati', ''),
('Charul Patidar', 'charul_patidar', 'qwertyuiop', 'A_Positive', 55, 942456053, 942456053, 'charul05@gmail.com', 'Jharkhand', 'Dhanbad', ''),
('poiu', 'poiuygtf', '123456', 'B-', 76, 89765, 9087654, 'rishikeshsahu2017@gmail.com', 'kjhgh', 'kjihg', ''),
('jhljkgh', 'uiyoug', 'qwerty', 'O+', 76, 876879, 807967, 'rishikeshsahu201@gmail.com', 'jlhg', 'hiougih', ''),
('Rishikesh Sahoo', 'rishikesh123', 'qwerty', 'B+', 80, 8349000000, 877773444, 'rishikeshsahu14@gmail.com', 'Jharkhand', 'Dhanbad', '');

-- --------------------------------------------------------

--
-- Table structure for table `organ`
--

CREATE TABLE `organ` (
  `name` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` varchar(11) NOT NULL,
  `office` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organ`
--

INSERT INTO `organ` (`name`, `username`, `password`, `id`, `office`, `email`, `state`, `city`, `locality`) VALUES
('Jalans Hospital', 'jalan03', 'jalan03', '123456789', '9706007501', 'anshu.jalan@yahoo.co.in', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Tamilnadu Agricultural University', '867204', '867204', '697300', '9052', 'sachin916ISM@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('SSM College of Engineering', '985563', '985563', '800800', '3556', 'shyamsirka@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Keystone Foundation', '442915', '442915', '329708', '6749', 'borautpal7@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Aditanar College of Arts & Science, Tiruchendur, Tamilnadu', '387311', '387311', '391056', '6865', 'mtrai874@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('AVRC, Anna University, Chennai', '154862', '154862', '517743', '2831', 'priyanka16oct1993@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Erode Sengunthar Engg. College, Erode', '108790', '108790', '497347', '8225', 'krishnarajranjan@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Holy Cross College, Tiruchirapalli', '215787', '215787', '803111', '9781', '12345physics@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Kongu Engg.College, Perundurai, Erode, Tamilnadu', '527911', '527911', '414753', '3190', 'somarani93@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Loyola College, Chennai', '601452', '601452', '454163', '1424', 'swapandolui5656@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('M.O.P.Vaishnav College for Woman, Chennai, Tamilnadu', '799142', '799142', '100043', '6611', 'vijaypaul875@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Peace Industrial School,Dindigul, Tamilnadu', '710412', '710412', '652797', '8426', 'pjmahto26@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('PSG College of Technology, Peelamedu,Coimbatore', '999831', '999831', '404217', '6126', 'rohitpandey1711@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('SRM College of Engineering, Kattankulathur, Distt-Kanchipuram, Tamilnadu', '820862', '820862', '887780', '6112', 'prateek.kumar66@gmail.com', 'Jharkhand', 'Dhanbad', 'Hirapur'),
('Subhalakshmi College of Scinence, Madurai', '626466', '626466', '687564', '4854', 'vinathi.noty@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Periyar Maniamai College of Tech.for Women, Thanjavur, Tamilnadu', '715894', '715894', '898941', '8856', 'yashbhagwat@hotmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Sunbeam English School, Lanka, Varanasi', '718850', '718850', '423957', '1425', 'rishabhrajwansh30@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Kisan Seva Sanstahn', '633365', '633365', '546063', '6717', 'palashsiddha03@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Mirza Ahsanullah Beg Educational and Social Welfare Society', '287837', '287837', '458894', '2311', 'rounakg79@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Allahabad Agricultural Institute Deemed University', '440238', '440238', '589227', '7216', 'dheerajbhu96@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Asian School of Media Studies ', '701612', '701612', '226683', '6595', 'adityarajvns@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Bharti Shiksha Samiti', '391227', '391227', '129535', '1447', 'anjaneybhu5@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('City Montessori School, Gomti Nagar, Lucknow', '917029', '917029', '811673', '4002', 'sarulbagla.phy@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('CMS Degree College, LDA Colony, Lucknow', '462453', '462453', '190831', '7704', 'ashwinikumarpatel8@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Dr B.R.A. University', '156639', '156639', '651127', '7350', 'kunal007giri@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Hint Instt of Mass Communication', '156865', '156865', '695164', '9707', 'amritanshrocks931@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('IIMT College, Meerut', '151583', '151583', '263172', '1503', 'pritamsaying@gmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Indian Institute of Technology, Kanpur', '811981', '811981', '777052', '2428', 'sanjoy100kuiri@rediffmail.com', 'Jharkhand', 'Dhanbad', 'Bank More'),
('Institute of Management Studies', '266880', '266880', '568526', '8212', 'jyoti15ism@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Krishi vigyan kendra, Saharanpur ', '915651', '915651', '957969', '3372', 'jmtdcrock@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('P.G.College, Ghazipur', '200492', '200492', '981076', '3458', 'devsharmajayanta@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Sai Jyoti Gramodhyog Samaj', '180290', '180290', '278572', '9472', 'aditi.seal.94@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('The Energy & Resources Institute ', '247042', '247042', '298363', '4295', 'satyap766@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('GB Pant University of Agriculture & Technology ', '885412', '885412', '898291', '7070', 'samjain613@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('National Institute for the Visually Handicapped', '693349', '693349', '564884', '5968', 'shivpoojanagnihotri@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Aastha Jan Kalyan Evam Vikas Samiti', '604990', '604990', '362243', '7384', 'anupamrock11@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Guru Nanak Fifth Centenary School, Vincent Hill/Shangri-la, Sardar Mehtab Singh Road, Mussorie, Uttaranchal', '454654', '454654', '280924', '7832', 'incrediblemanan@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Jadavpur University', '960649', '960649', '591823', '8450', 'lalmohanhembram4@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Satyajit Ray Film & TV Institute, Kolkata', '638604', '638604', '463856', '2204', 'pratikshatiwari112@gmail.com', 'Jharkhand', 'Dhanbad', 'Sarai Dhela'),
('Sahu Hospitals', 'sahu_01', 'qwerty', '12345678', '9876543210', 'rishikesh@gmail.com', 'Jharkhand', 'Dhanbad', ''),
('sachin ', 'sachiii', 'qwerty', '123456', '2486159730', 'sachin001@gmail.com', 'Jharkhand', 'Dhanbad', ''),
('ljhlgkhjfgvhb', 'jhkg', 'qwerty', '879', '876', 'rishikeshsahu2017@gmail.com', 'llhkjhv', 'ljklhj', ''),
('jlhkgj', 'ljhkgjv', 'qwerty', '88888', '87968', 'rishikeshsahu20179@gmail.com', 'lhkgj', 'uiyug', ''),
('jihukg', 'iohjk', 'qwerty', '23424', '876', 'rishikeshsahu201447@gmail.com', 'lkjh', 'kjh', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `used`
--

CREATE TABLE `used` (
  `email` varchar(255) NOT NULL,
  `A+` int(11) NOT NULL,
  `A-` int(11) NOT NULL,
  `B+` int(11) NOT NULL,
  `B-` int(11) NOT NULL,
  `O+` int(11) NOT NULL,
  `O-` int(11) NOT NULL,
  `AB+` int(11) NOT NULL,
  `AB-` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `used`
--

INSERT INTO `used` (`email`, `A+`, `A-`, `B+`, `B-`, `O+`, `O-`, `AB+`, `AB-`) VALUES
('697300', 25, 100, 13, 90, 17, 147, 21, 59),
('800800', 18, 142, 27, 126, 10, 147, 29, 57),
('329708', 17, 56, 24, 124, 13, 144, 15, 90),
('391056', 18, 118, 17, 116, 21, 149, 29, 65),
('517743', 20, 134, 12, 98, 10, 94, 13, 72),
('497347', 29, 69, 26, 56, 18, 53, 12, 142),
('803111', 13, 71, 20, 120, 13, 71, 18, 132),
('414753', 10, 131, 12, 103, 28, 114, 12, 80),
('454163', 16, 108, 14, 63, 12, 133, 17, 89),
('100043', 19, 56, 18, 119, 14, 126, 15, 99),
('652797', 13, 121, 29, 88, 21, 110, 24, 145),
('404217', 11, 127, 19, 102, 25, 142, 12, 143),
('887780', 14, 54, 11, 85, 15, 74, 28, 130),
('687564', 16, 127, 25, 99, 30, 121, 15, 54),
('898941', 26, 107, 11, 114, 22, 140, 13, 83),
('423957', 14, 96, 30, 142, 12, 63, 13, 136),
('546063', 14, 123, 30, 128, 23, 79, 29, 59),
('458894', 19, 142, 24, 98, 12, 94, 17, 148),
('589227', 78, 26, 100, 25, 136, 21, 86, 15),
('226683', 70, 23, 109, 30, 133, 13, 115, 18),
('129535', 93, 22, 108, 30, 134, 16, 117, 13),
('811673', 103, 13, 139, 26, 110, 28, 87, 11),
('190831', 101, 19, 119, 13, 130, 28, 99, 30),
('651127', 114, 13, 121, 21, 90, 22, 83, 26),
('695164', 91, 19, 53, 17, 146, 15, 53, 28),
('263172', 50, 11, 110, 18, 58, 27, 102, 12),
('777052', 79, 11, 51, 12, 135, 24, 110, 13),
('568526', 141, 19, 115, 29, 129, 27, 91, 13),
('957969', 89, 17, 54, 22, 107, 25, 147, 28),
('981076', 64, 24, 146, 19, 126, 27, 126, 17),
('278572', 92, 21, 71, 13, 89, 19, 136, 29),
('298363', 137, 27, 122, 26, 102, 28, 69, 19),
('898291', 50, 29, 121, 12, 72, 20, 66, 29),
('564884', 105, 10, 117, 20, 111, 22, 107, 21),
('362243', 135, 18, 76, 22, 62, 20, 77, 20),
('280924', 69, 21, 60, 18, 85, 19, 112, 29),
('591823', 83, 23, 117, 10, 77, 22, 50, 21),
('463856', 66, 15, 98, 26, 73, 25, 83, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual`
--
ALTER TABLE `individual`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `organ`
--
ALTER TABLE `organ`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `used`
--
ALTER TABLE `used`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
