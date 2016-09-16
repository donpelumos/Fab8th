-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2016 at 12:33 PM
-- Server version: 5.5.50-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fabthpro_fab8th`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` varchar(20) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `body` mediumtext NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `views` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `image_name`, `heading`, `body`, `date`, `time`, `views`) VALUES
('20160502031626', 'art0.jpg', 'Fab8th New\r\nAct\r\nPerforms\r\nSODI Live\r\nin Unilag', 'The SODI\r\ncrooner\r\npopularly\r\nknown by\r\nhis stage\r\nname "OT"\r\nperformed\r\nhis hit\r\ntrack to\r\nthe\r\namazement\r\nof fans\r\nwho kept\r\ncalling\r\nfor more.\r\nThe\r\nNigerian\r\nmusic\r\nindustry\r\nhas just\r\nwelcomed a\r\nnew star.', '02-May-2016', '03:16 AM', 25),
('20160623060214', 'download.jpeg', 'SICKLE CELL DISEAESE', 'What do we know about Sickle Cell? How does it affects us and the people around us? How do we help people with the disease? A lot of people do \r\nnot concern themselves with things they feel do not affect them. Just because it hasn''t affected you yet doesn''t mean we cant be affected directly or \r\nindirectly. Just like cancer and other killer diseases, sickle cell is one that has been and is still taking lives.\r\n\r\nINTRODUCTION:\r\n\r\nSickle cell anaemia is a hereditary form of anaemia where a mutated haemoglobin distorts the red blood cells into a crescent shape at low oxygen \r\nlevels. Sickle Cell Disease is an inherited red blood disorder that affects haemoglobin. People with this disorder have the typical haemoglobin "S" \r\n.These sickled red blood cells can block blood vessels, reducing blood flow in many parts of the body. This process results in tissue and organ \r\ndamage.Problems in sickle cell disease typically begin around 5 to 6 months of age. A number of health problems may develop, such as attacks of \r\npain ("sickle-cell crisis"), anemia, bacterial infections, and stroke. Long term pain may develop as people get older. The average life expectancy in \r\nthe developed world is 40 to 60 years.\r\n\r\nTHE DISEASE PROCESS:\r\n\r\nThe symptoms and problems of sickle cell disease are a result of the haemoglobin S molecule:\r\nWhen the sickle haemoglobin molecule loses its oxygen, it forms rigid rods called polymers that change the red blood cells into a sickle or crescent \r\nshape.\r\nThese sickle-shaped cells stick to the walls and cannot squeeze through the capillaries. Blood flow through tiny blood vessels becomes slowed or \r\nstopped in many parts of the body. This deprives tissues and organs of oxygen.\r\nWhen this blood flow slows or stops suddenly in a certain part of the body, the decrease in oxygen (hypoxia) can cause severe pain (the sickle cell \r\ncrisis). Over time, it leads to gradual destruction in organs and tissues throughout the body.Sickle cells also have a shorter life span (10 - 20 days) \r\nthan normal red blood cells (90 - 120 days). Every day the body produces new red blood cells to replace old ones, but sickle cells become destroyed \r\nso fast that the body cannot keep up.\r\n\r\nINHERITANCE RISK:\r\n\r\nThe risk of a child inheriting sickle cell disease or sickle cell trait is as follows:\r\n\r\nIf both parents have sickle cell trait, the child has a 50% chance of inheriting sickle cell trait, 25% chance of inheriting sickle cell disease and 25% \r\nchance of not inheriting either the trait or the disease.\r\nIf one parent has sickle cell trait and the other parent has two normal haemoglobin genes, the child has a 50% chance of inheriting sickle cell trait \r\nand a 50% of inheriting neither the trait nor the disease. The child is not at risk of inheriting sickle cell disease.\r\nIf one parent has sickle cell disease and the other parent has sickle cell trait , the child has a 50% chance of inheriting sickle cell trait and a 50% \r\nchance of inheriting sickle cell disease.\r\nIf one parent has sickle cell disease and the other parent has two normal haemoglobin genes, the child has a 100% chance of inheriting sickle cell \r\ntrait, but not the disease.\r\nIf both parents have sickle cell disease, the child has a 100% chance of inheriting the disease.\r\n\r\nGENERAL SYMPTOMS:\r\n\r\nFever\r\nSwelling of the hands and feet\r\nPain in the chest, abdomen, limbs, and joints\r\nNosebleeds and frequent upper respiratory infections\r\nFatigue and shortness of breath (signs of anemia)\r\nIrritability\r\nJaundice\r\nDelayed puberty (in young teenagers)\r\nSevere joint pain\r\nProgressive anemia\r\nLeg sores\r\nGum disease\r\nVision problems\r\n\r\nSICKLE CELL CRISIS:\r\n\r\nSickle cell crises are episodes of pain that occur with varying frequency and severity in different patients and are usually followed by periods of \r\nremission. Severe sickle cell pain has been described as being equivalent to cancer pain and more severe than post-surgical pain. It most commonly \r\noccurs in the lower back, leg, abdomen, and chest, usually in two or more locations\r\n\r\nDIAGNOSIS:\r\n\r\nIt can be diagnosed through blood tests.\r\n\r\nCURE :\r\n\r\nThere is still no known cure for the disease but treatments are given to relief pain, prevent infections and manage complications. Blood transfusions \r\nare also used in episodic or chronic cases.\r\n\r\nMANAGEMENT/CONTROL:\r\n\r\nAvoid excessive demands on the body, avoid high altitudes, ensure regular checkups. Have sufficient rest , warmth and fluid intake. Do not smoke.\r\n\r\nLet`s educate people about the disease and reach out to the people already suffering from the disease. You could be saving someones life.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '23-Jun-2016', '06:02 AM', 4),
('20160623065516', 'download_(1).jpeg', 'MARRIAGE AND DIVORCE', '             A whole lot of marriages don`t last these days for so many reasons. Marriage is now made to look like an item you can just walk into a store \r\nand pickup, when you realise you do not want it anymore or find something better , you toss it in the trash. So many people go into marriage with \r\nthat very wrong idea of " I can walk out whenever i feel like". Nobody wants to fix or try to make it work anymore. Growing up in a happy home \r\nprotects children from mental, physical, educational and social problems. Although children should not also be the reason to stay in certain \r\nmarriages. Just like arranged marriages where you know nothing about your spouse, a lot of people get married these days without knowing a thing \r\nor two about their spouse. People get married for reasons such as; he/she comes from a rich home, he/she is rich and famous, he/she looks good, i \r\nused to know him/her way back, time is running out on me, i owe him/her, we have a child together, etc.\r\n             The main foundation on which marriage is meant to be built "love" is gradually going extinct. People fail to realise that divorce especially \r\nmessy ones have bad effects on the children and even on the parties involved. Divorce has sent a lot of people into a state of depression and we all \r\nknow how dangerous that can be. Although in very few and life threatening cases, divorce is totally advisable. For example; In a case of sexual \r\nimmorality. Most spouses have cultivated the habit of having extramarital affairs. Cases have been reported of men and women who have died from \r\nsexual diseases transmitted by their spouse e.g HIV/ AIDS.etc. Rather than sit there and die of something you know nothing about, divorce or a \r\nseparation might be a very good option. Secondly, in a case of battering. Many men have killed their wives unintentionally while trying to beat her up \r\nfor something she may have done wrong and most women have killed their husbands while trying to defend themselves. Battering shouldn''t be part \r\nof a marriage but once that unwanted guest has stepped in, the best option is to walk away.\r\n            Most times the issues affecting a marriage might be something resolvable if we work towards fixing it. His/Her change in attitude might be \r\ndue to pressure at work, financial crisis or a midlife crisis. At this point, support is all your spouse needs from you and not adding fuel to the fire. A lot \r\nof people also make the silly mistake of comparing their spouse to someone else. The fact that those people look perfect on the outside don`t mean \r\nall is well on the inside. Another issue is the issue of letting a third party into your marriage, bet friends,parents,etc. Marriage is a party for two and \r\nthree is a crowd. Also when the kids start coming, a lot of people shift their entire focus to the children forgetting to take care of their spouse. \r\nMarriage should be seen as a fire that needs to be kept burning.\r\n          To the women, the fact that you`re married now doesn`t mean you should let yourself go. Try to make yourself look good and make sure your \r\nhusband looks forward to coming home to something well kept everyday. Being divorced doesn`t make you look cool and getting married so many \r\ntimes doesn`t make you richer. Let`s try to make things work. Marry your best friend they say, simply means marry that one person who loves you \r\nfor who you are, understands you, ready to stand by you no matter the storm, someone who no matter how many times you argue you still carry on, \r\nsomeone who knows your flaws and still loves you.\r\n          ', '23-Jun-2016', '06:55 AM', 3);

-- --------------------------------------------------------

--
-- Table structure for table `artiste_booking`
--

CREATE TABLE IF NOT EXISTS `artiste_booking` (
  `title` varchar(20) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `artiste` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artiste_booking`
--

INSERT INTO `artiste_booking` (`title`, `surname`, `firstname`, `email`, `phone`, `event`, `artiste`) VALUES
('Mr', 'Kab', 'Kas', 'enito2008@yahoo.com', '0807376739893', 'Birthday', 'Leo'),
('Mr', 'we', 'we', 'donpelumos@gmail.com', 'e', 'Birthday', 'wiz');

-- --------------------------------------------------------

--
-- Table structure for table `artiste_gallery`
--

CREATE TABLE IF NOT EXISTS `artiste_gallery` (
  `image_name` varchar(300) NOT NULL,
  `alt` varchar(200) NOT NULL,
  `id` varchar(20) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artiste_gallery`
--

INSERT INTO `artiste_gallery` (`image_name`, `alt`, `id`, `date`, `time`) VALUES
('art1.jpg', '', '20150624090837', '24-Jun-2015', '09:08 AM'),
('art2.jpg', '', '20150624090931', '24-Jun-2015', '09:09 AM'),
('art3.jpg', '', '20150624090956', '24-Jun-2015', '09:09 AM'),
('art0.jpg', '', '20160502030838', '02-May-2016', '03:08 AM');

-- --------------------------------------------------------

--
-- Table structure for table `artiste_management`
--

CREATE TABLE IF NOT EXISTS `artiste_management` (
  `title` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artiste_management`
--

INSERT INTO `artiste_management` (`title`, `surname`, `firstname`, `email`, `phone`) VALUES
('Mr', 'Ajayi', 'Ayo', 'donpelumos@gmail.com', '123456'),
('Mr', 'wd', 'dw', 'donpelumos@gmail.com', 'bg ');

-- --------------------------------------------------------

--
-- Table structure for table `event_gallery`
--

CREATE TABLE IF NOT EXISTS `event_gallery` (
  `image_name` varchar(300) NOT NULL,
  `alt` varchar(200) NOT NULL,
  `id` varchar(20) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_gallery`
--

INSERT INTO `event_gallery` (`image_name`, `alt`, `id`, `date`, `time`) VALUES
('event1.jpg', 'Fab8th\r\nEvent ', '20150624092850', '24-Jun-2015', '09:28 AM'),
('event2.jpg', 'Fab8th\r\nEvent ', '20150624092919', '24-Jun-2015', '09:29 AM'),
('event3.jpg', 'Fab8th\r\nEvent ', '20150624092944', '24-Jun-2015', '09:29 AM'),
('event5.jpg', 'Fab8th\r\nEvent ', '20150624093253', '24-Jun-2015', '09:32 AM'),
('event7.jpg', 'Fab8th\r\nEvent ', '20150624093611', '24-Jun-2015', '09:36 AM'),
('event8.jpg', 'Fab8th\r\nEvent ', '20150624093659', '24-Jun-2015', '09:36 AM'),
('event9.jpg', 'Fab8th\r\nEvent ', '20150624093729', '24-Jun-2015', '09:37 AM'),
('event10.jpg', 'Fab8th\r\nEvent ', '20150624093743', '24-Jun-2015', '09:37 AM'),
('event11.jpg', 'Fab8th\r\nEvent ', '20150624093806', '24-Jun-2015', '09:38 AM'),
('event12.jpg', 'Fab8th\r\nEvent ', '20150624093822', '24-Jun-2015', '09:38 AM'),
('event13.jpg', 'Fab8th\r\nEvent ', '20150624093854', '24-Jun-2015', '09:38 AM'),
('event14.jpg', 'Fab8th\r\nEvent ', '20150624093856', '24-Jun-2015', '09:38 AM'),
('event15.jpg', 'Fab8th\r\nEvent ', '20150624093914', '24-Jun-2015', '09:39 AM'),
('event16.jpg', 'Fab8th\r\nEvent ', '20150624093944', '24-Jun-2015', '09:39 AM'),
('event17.jpg', 'Fab8th\r\nEvent ', '20150624094010', '24-Jun-2015', '09:40 AM'),
('event18.jpg', 'Fab8th\r\nEvent ', '20150624094014', '24-Jun-2015', '09:40 AM'),
('event19.jpg', 'Fab8th\r\nEvent ', '20150624094048', '24-Jun-2015', '09:40 AM'),
('event21.jpg', 'Fab8th Event', '20160502030527', '02-May-2016', '03:05 AM'),
('event22.jpg', 'Fab8th Event', '20160502030606', '02-May-2016', '03:06 AM'),
('event23.jpg', 'Fab8th Event', '20160502030622', '02-May-2016', '03:06 AM');

-- --------------------------------------------------------

--
-- Table structure for table `event_management`
--

CREATE TABLE IF NOT EXISTS `event_management` (
  `title` varchar(20) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `event` varchar(300) NOT NULL,
  `cbox` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `phone`, `subject`, `message`) VALUES
('Johnson', 'j_ede@gmail.com', '08021223456', 'Comment', 'Nice Work'),
('Candice', 'lnpvfiteg@googlemail.com', 'Candice', 'Candice', 'Hello my name is Candice and I just wanted to drop you a quick note here instead of calling you. I came to your Carousel Template for Bootstrap page and noticed you could have a lot more hits. I have found that the key to running a successful website is making sure the visitors you are getting are i');

-- --------------------------------------------------------

--
-- Table structure for table `film_gallery`
--

CREATE TABLE IF NOT EXISTS `film_gallery` (
  `image_name` varchar(300) NOT NULL,
  `alt` varchar(200) NOT NULL,
  `id` varchar(20) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film_gallery`
--

INSERT INTO `film_gallery` (`image_name`, `alt`, `id`, `date`, `time`) VALUES
('Capture.PNG', 'Fab8th\r\nFilm Prod\r\nEquipment', '20150624085701', '24-Jun-2015', '08:57 AM'),
('film1.jpg', 'Fab8th\r\nFilm Prod\r\nLightening\r\nEquip', '20150624085853', '24-Jun-2015', '08:58 AM'),
('film2.jpg', 'Fab8th\r\nEquip on\r\nset', '20150624090007', '24-Jun-2015', '09:00 AM'),
('film3.jpg', 'Fab8th\r\nFilm Prod\r\nTeam on\r\nSet', '20150624090135', '24-Jun-2015', '09:01 AM'),
('film4.jpg', '', '20150624090204', '24-Jun-2015', '09:02 AM'),
('film6.jpg', '', '20150624090412', '24-Jun-2015', '09:04 AM'),
('film7.jpg', 'Fab8th\r\nFilm Prod\r\nEquip', '20150624094200', '24-Jun-2015', '09:42 AM');

-- --------------------------------------------------------

--
-- Table structure for table `film_production`
--

CREATE TABLE IF NOT EXISTS `film_production` (
  `title` varchar(20) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `film_type` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film_production`
--

INSERT INTO `film_production` (`title`, `surname`, `firstname`, `email`, `phone`, `film_type`, `duration`, `description`) VALUES
('Mr', 'pelumi', 'akorede', 'donpelumos@gmail.com', 'gdh', 'skits', '1-5', 'Ijh\r\n'),
('Mr', 'fe', 'fec', 'donpelumos@gmail.com', 'de', 'skits', '1-5', 'Very Fantastic Website');

-- --------------------------------------------------------

--
-- Table structure for table `headlines`
--

CREATE TABLE IF NOT EXISTS `headlines` (
  `id` varchar(20) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `body` mediumtext NOT NULL,
  `category` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(50) NOT NULL,
  `views` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headlines`
--

INSERT INTO `headlines` (`id`, `image_name`, `heading`, `body`, `category`, `date`, `time`, `views`) VALUES
('20160502033756', 'art3.jpg', 'Koko Master Wows Unilag Students', '3wrgfwrgwgebeg weg webr brwh w hgewgb db hb r rb edgggggggggggbrgbrg rnb r hr r rn br nrbn rb rgb rwb rwb rb r r nrgb rb rb rg brfd rhb rh r bnrg \r\nbrgb rb rg br br rb rb rgb b b erb br brg bw r br nbr n4re nbrgbnrnb rnbbnh egrdddddhber r r nr ryn\r\n<br><br> <a href="http://www.fab8thproductions.com/pictures/download.jpg" target="_blank"> <img \r\nsrc="http://www.fab8thproductions.com/pictures/download.jpg" width="90%" height="330"/> </a> <br><br>	\r\nhrgn4jh n tynm n thm tmn tnm ', 'entertainment', '02-May-2016', '03 37 AM', 20),
('20160622011231', 'PRINCEDEAD.jpg', 'MUSIC LEGEND "PRINCE'' PASSES ON', 'Music icon "PRINCE" passes on. He was found dead in an elevator in his home. Sources say he died of drug overdose, some say he died as a result of \r\ncomplications from AIDS. All we know is that the purple rain star has passed on.', 'entertainment', '22-Jun-2016', '01 12 AM', 2),
('20160622012222', 'MuhammadAliDeath.png', 'MUHAMMAD ALI "THE GREATEST" PASSES ON', 'Popularly known as "THE GREATEST", boxing legend Muhammad Ali dies of septic shock after a very long battle with parkinsons disease. He was \r\naged 74.', 'other', '22-Jun-2016', '01 22 AM', 3),
('20160622013124', 'Stephen_Keshi.jpg', 'NIGERIAN FOOTBALL LEGEND DIES AT 54', 'Shortly after the death of his wife, former defender and football manager STEPHEN KESHI dies of a heart attack in his benin home. He was confirmed \r\ndead on arrival at the hospital. May his soul rest in peace.', 'soccer', '22-Jun-2016', '01 31 AM', 3),
('20160622014449', '00.jpg', 'HOUSE OF REPS MEMBER WRITES U.S AMBASSADOR TO \r\nNIGERIA', 'One of the house of representatives members who was accused of sexual misconduct has written to the US ambassador to Nigeria saying he was ill \r\nand couldn''t have been involved in such.', 'politics', '22-Jun-2016', '01 44 AM', 0),
('20160622015333', 'Fayose-Aisha.jpg', 'CLASH OF POWER', 'The first lady of the Federal Republic of Nigeria Mrs Aisha Buhari has been accused by the Ekiti state Governor Ayo Fayose of being involved in the \r\nHalliburton bribery scandal involving a U.S Congressman.', 'politics', '22-Jun-2016', '01 53 AM', 3),
('20160622015842', '3.png', 'ZAHRA BUHARI AND ADEKUNLE GOLD UNVIELED AS \r\nAMBASSADORS FOR SCAF', 'First daughter of the president Zahra Buhari and singer Adekunle Gold have been unveiled as ambassadors for the sickle cell foundation aid.', 'other', '22-Jun-2016', '01 58 AM', 3),
('20160622020602', 'OJB1_(1).jpg', 'MUSIC LEGEND OJB JEZREEL PASSES ON', 'Music star OJB JEZREEL dies after a long battle with kidney disease and a kidney transplant.Burial arrangements are being made by the family. He is \r\nsurvived by three wives and kids.', 'entertainment', '22-Jun-2016', '02 06 AM', 2),
('20160622021329', 'Screen_Shot_2016-06-21_at_7.57.56_AM.png', 'DID IGGY AZALEA DUMP NICK OR VICE VERSA?', 'We don`t know for sure what kind of trouble went down in paradise but one thing we know is that the two love birds have joined the very long list of \r\nHollywood breakups.Rumour also has it that Nick is expecting a baby with his baby mama.', 'entertainment', '22-Jun-2016', '02 13 AM', 2),
('20160622024613', 'Clfb97BWQAAQ1wb.jpg', 'FIRST LADY OF THE UNITED STATES OF \r\nAMERICA JOINS SNAPCHAT', 'Fans of Michelle Obama can officially follow FLOTUS on the popular messaging app, which allows users to send \r\nephemeral photos and videos that disappear after watching. Obama joined the app to promote her upcoming trip \r\nto West Africa and the Iberian Peninsula, where she will be pushing her â€œLet Girls Learnâ€ initiative to increase \r\naccess to education for young girls in Liberia, Morocco and Spain. She just might be the coolest first lady the \r\nworld has ever known.', 'politics', '22-Jun-2016', '02 46 AM', 5),
('20160622025227', 'rs_1024x759-150709052426-1024.Donald-Trump-Hillary-Clinton-JR-70915_copy.jpg', 'DONALD TRUMP VS HILLARY CLINTON', 'Democrats v Republicans, these two have brought it all to the table ( drama,comedy,suspense, etc). If Donald is \r\nnot questioning Hillary`s religious belief or accusing her of raising blood money, Hillary is questioning Donald`s \r\nmental stability or accusing him of making laws that will cause a recession. We sure cant wait to see the end.', 'politics', '22-Jun-2016', '02 52 AM', 3),
('20160622025608', 'The_African_Praise_Experience.jpg', 'THE AFRICAN PRAISE EXPERIENCE 2016', 'Come Friday the 24th of June, The African Praise Experience 2016 will be held at The Rock Cathedral, Lekki. \r\nGospel ministers like Chioma Jesus, Frank Edwards, Nikki, Nathaniel Bassey, Mike Aremu,etc will be ministering.', 'other', '22-Jun-2016', '02 56 AM', 4),
('20160623045445', '12976194_1710083459281007_1761948285_n.jpg', 'THE BEAUTY OF AFRICA INTL 10th YEAR EDITION SET TO \r\nHOLD IN LAGOS', 'The beauty of Africa Intl 10th year edition set to hold in Lagos state on the 8th of October 2016 at the Queens Park event centre. Who wears the \r\ncrown?', 'entertainment', '23-Jun-2016', '04 54 AM', 4),
('20160623045708', 'PHOTO7.jpg', 'M.B.G.A 2016 SET TO HOLD TWO AUDITIONS IN LAGOS', 'Most Beautiful Girl in Abuja set to hold two auditions in Lagos for the 2016 edition, one in Surulere and the other in Lekki.', 'entertainment', '23-Jun-2016', '04 57 AM', 3);

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `track_name` varchar(200) NOT NULL,
  `music_name` varchar(300) NOT NULL,
  `artiste` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`track_name`, `music_name`, `artiste`, `id`, `date`, `time`) VALUES
('BETTER-PIKIN-HARRYSONG.mp3', 'Beta Pikin', 'Harry Song', '20150615221413', '15-Jun-2015', '10:14 PM');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE IF NOT EXISTS `password` (
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`pwd`) VALUES
('7a12b409a17275ee21732044ccca8230');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `image_name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`image_name`, `id`, `date`, `time`) VALUES
('download.jpg', '20160425035636', '25-Apr-2016', '03:56 AM'),
('people-mohammed-ali-2498597_3008.jpg', '20160609214348', '09-Jun-2016', '09:43 PM'),
('10.jpg', '20160609223635', '09-Jun-2016', '10:36 PM');

-- --------------------------------------------------------

--
-- Table structure for table `ushering`
--

CREATE TABLE IF NOT EXISTS `ushering` (
  `title` varchar(20) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `male` varchar(20) NOT NULL,
  `female` varchar(20) NOT NULL,
  `event` varchar(20) NOT NULL,
  `colour1` varchar(20) NOT NULL,
  `colour2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ushering_gallery`
--

CREATE TABLE IF NOT EXISTS `ushering_gallery` (
  `image_name` varchar(300) NOT NULL,
  `alt` varchar(200) NOT NULL,
  `id` varchar(20) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ushering_gallery`
--

INSERT INTO `ushering_gallery` (`image_name`, `alt`, `id`, `date`, `time`) VALUES
('ush1.jpg', 'Fab8th\r\nUshers', '20150624100123', '24-Jun-2015', '10:01 AM'),
('ush2.jpg', 'Fab8th\r\nUshers', '20150624100159', '24-Jun-2015', '10:01 AM'),
('ush4.jpg', 'Fab8th\r\nUshers', '20150624100241', '24-Jun-2015', '10:02 AM'),
('ush5.jpg', 'Fab8th\r\nUshers', '20150624100247', '24-Jun-2015', '10:02 AM'),
('ush6.jpg', 'Fab8th\r\nUshers', '20150624100355', '24-Jun-2015', '10:03 AM'),
('ush7.jpg', 'Fab8th\r\nUshers', '20150624100411', '24-Jun-2015', '10:04 AM'),
('ush8.jpg', 'Fab8th\r\nUshers', '20150624100441', '24-Jun-2015', '10:04 AM'),
('ush9.jpg', 'Fab8th\r\nUshers', '20150624100449', '24-Jun-2015', '10:04 AM'),
('ush10.jpg', 'Fab8th\r\nUshers', '20150624100509', '24-Jun-2015', '10:05 AM'),
('ush13.jpg', 'Fab8th\r\nUshers', '20150624100556', '24-Jun-2015', '10:05 AM'),
('ush14.jpg', 'Fab8th\r\nUshers', '20150624100616', '24-Jun-2015', '10:06 AM'),
('ush15.jpg', 'Fab8th\r\nUshers', '20150624100632', '24-Jun-2015', '10:06 AM'),
('ush16.jpg', 'Fab8th\r\nUshers', '20150624100650', '24-Jun-2015', '10:06 AM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
