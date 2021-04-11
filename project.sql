-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 11, 2021 at 10:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `name`, `email`, `msg`) VALUES
(4, 'Darshan Kulkarni', 'dk601313@gmail.com', 'cvcvcvc'),
(5, 'Darshan Kulkarni', 'dk601313@gmail.com', 'Hello there'),
(7, 'darsh1', 'dk1@gmail.com', 'Hey there');

-- --------------------------------------------------------

--
-- Table structure for table `gameimage`
--

CREATE TABLE `gameimage` (
  `gameid` int(11) NOT NULL,
  `img1` longtext NOT NULL,
  `img2` longtext NOT NULL,
  `img3` longtext NOT NULL,
  `img4` longtext NOT NULL,
  `img5` longtext NOT NULL,
  `img6` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gameimage`
--

INSERT INTO `gameimage` (`gameid`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES
(1, 'acv-1.jpg', 'acv-2.jpg', 'acv-3.jpg', 'acv-4.jpg', 'acv-5.jpg', 'acv-6.png'),
(2, 'bb-1.jpg', 'bb-2.jpg', 'bb-3.jpg', 'bb-4.jpg', 'bb-5.jpg', 'bb-6.jpg'),
(3, 'codb-1.jpg', 'codb-2.jpg', 'codb-3.jpg', 'codb-4.jpg', 'codb-5.jpg', 'codb-6.jpg'),
(4, 'division-1.jpg', 'division-2.jpg', 'division-3.jpg', 'division-4.jpg', 'division-5.jpg', 'division-6.jpg'),
(5, 'dota-1.jpg', 'dota-2.jpg', 'dota-3.jpg', 'dota-4.jpg', 'dota-5.jpg', 'dota-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gameinfo`
--

CREATE TABLE `gameinfo` (
  `gameid` int(11) NOT NULL,
  `img` text NOT NULL,
  `thumbnail` text NOT NULL,
  `genre` text NOT NULL,
  `gtitle` longtext NOT NULL,
  `gintro` longtext NOT NULL,
  `gstory` longtext NOT NULL,
  `grelease` longtext NOT NULL,
  `gcompatible` longtext NOT NULL,
  `greq` longtext NOT NULL,
  `gprice` longtext NOT NULL,
  `glink` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gameinfo`
--

INSERT INTO `gameinfo` (`gameid`, `img`, `thumbnail`, `genre`, `gtitle`, `gintro`, `gstory`, `grelease`, `gcompatible`, `greq`, `gprice`, `glink`) VALUES
(1, 'acvthumb.png', 'acvthumb.png', 'Action role-playing game, Stealth game', 'Assassin\'s Creed Valhalla', 'Assassin\'s Creed Valhalla is an action role-playing video game developed by Ubisoft Montreal and published by Ubisoft. It is the twelfth major installment and the twenty-second release in the Assassin\'s Creed series, and a successor to the 2018 game Assassin\'s Creed Odyssey. Set in 873 AD, the game recounts a fictional story during the Viking invasion of Britain. The player controls Eivor, a Viking raider who becomes embroiled in the conflict between the Brotherhood of Assassins and the Templar Order.', 'Set in 873 AD, the game recounts a fictional story during the Viking invasion of Britain. The player controls Eivor, a Viking raider who becomes embroiled in the conflict between the Brotherhood of Assassins and the Templar Order.', 'Assassin\'s Creed Valhalla launched on November 10th. It is available on PC, Stadia, Xbox One, Xbox Series X, and PlayStation 4.', ' Xbox Series X | S, PlayStation 5, Xbox One, PS4,PC', 'CPU: Ryzen 7 1700 - 3.0 Ghz /Core i7-6700 – 3.4 Ghz\r\nRAM: 8 GB\r\nOS: Windows 10 (64-bit versions only)\r\nVIDEO CARD: AMD Vega 64 - 8GB / GeForce GTX 1080- 8GB\r\nPIXEL SHADER: 5.1\r\nVERTEX SHADER: 5.1\r\nSOUND CARD: Yes\r\nFREE DISK SPACE: 50 GB\r\nDEDICATED VIDEO RAM: 8192 MB', 'Rs. 3,999', 'https://www.amazon.in/Assassins-Creed-Valhalla-Drakkar-Xbox/dp/B0894K9YS7/ref=asc_df_B0894K9YS7/?tag=googleshopdes-21&linkCode=df0&hvadid=397079114627&hvpos=&hvnetw=g&hvrand=13309395370203317812&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9301513&hvtargid=pla-928862655299&psc=1&ext_vrnc=hi'),
(2, 'bbthumb.jpg', 'bbthumb.jpg', 'Action role-playing game', 'Bloodborne', 'Bloodborne is an action role-playing game developed by FromSoftware and published by Sony Computer Entertainment for the PlayStation 4. It was released worldwide in March 2015. Bloodborne follows the player\'s character, a Hunter, through the decrepit Gothic, Victorian era–inspired city of Yharnam, whose inhabitants are afflicted with a blood-borne disease. Attempting to find the source of the plague, the player\'s character unravels the city\'s mysteries while fighting beasts and cosmic beings.', 'A giant sluglady washes up dead on a beach in Innsmouth, scholars from the local community college and church come on down and start drinking its blood because lets be frank the local brew is piss swill. Anyway surprise surprise a giant slug\'s blood is infected by fuck knows what and starts making people sick, at the same time the community college parties way too hard and starts doing inhumane experiments on the local populace.\r\n\r\nEventually this leads to an outbreak of Furries into a nearby xenophobic city. A few people, the Old Hoonters, do what most sensible people would do in a furry outbreak and make some of the most badass weapons imaginable to make sure the furry scourge does not spread further. Gerhman the OG, was the first hunter and had an (unwanted) crazy infatuation with one of his proteges, Maria, who was disgusted at the partying of the community college and their crazy experiments, and at some point deciding that blood was, quote \"whack\", tossed her beloved weapon in a well and killed herself. Gerhman, realizing he will never be with his waifu and that it was ruining his laifu, makes a doll in her image. And well thats just how things get started.', '24 March 2015', 'PS4,PS5,PC', 'OS: Windows 7 SP1 64bit, Windows 8.1 64bit Windows 10 64bit.\r\nProcessor: AMD FX 8150 3.6 GHz or Intel Core™ i7 2600 3.4 GHz.\r\nMemory: 8 GB RAM.\r\nGraphics: NVIDIA GeForce GTX 750, ATI Radeon HD 7850.\r\nDirectX: Version 11.\r\nNetwork: Broadband Internet connection.\r\nStorage: 50 GB available space.', 'Rs. 1,130', 'https://www.amazon.in/Sony-Bloodborne-PS4/dp/B00U62BFB0'),
(3, 'codthumb.jpg', 'codthumb.jpg', 'First-person shooter', 'Call of Duty: Black Ops', 'Call of Duty: Black Ops 4 (stylized as Call of Duty: Black Ops IIII) is a 2018 multiplayer first-person shooter developed by Treyarch and published by Activision. It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October 12, 2018. It is a sequel to the 2015 game Call of Duty: Black Ops III, the fifth entry in the Black Ops sub-series, and the 15th installment in the Call of Duty series overall.', 'Black Ops 4 is the first Call of Duty title without a traditional single-player campaign mode. Instead, it features the Solo Missions mode, which focuses on the backstories of the game\'s multiplayer characters, known as \"Specialists\". The missions take place between Black Ops II and III chronologically.', 'Call of Duty: Black Ops 4 is a 2018 multiplayer first-person shooter developed by Treyarch and published by Activision. It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October 12, 2018.', 'Xbox One, PlayStation 3, Xbox 360, Wii, Microsoft Windows, Nintendo DS, Macintosh operating systems', 'OS: Windows 10 64-bit\r\nCPU: Intel i5-2500K / Ryzen R5 1600X\r\nRAM: 12GB GPU: Nvidia GeForce GTX 970 / GTX 1060 6GB or AMD Radeon R9 390 / AMD RX 580\r\nHDD: 55GB HD space\r\nDirectX: Version 11.0 compatible video card or equivalent\r\nNetwork: Broadband Internet connection\r\nSound Card: DirectX Compatible', 'Rs 1,299', 'https://www.flipkart.com/call-duty-black-ops-4/p/itmf37f9ztbzgtge'),
(4, 'divisionthumb.jpg', 'divisionthumb.jpg', 'Action role-playing game, Third-person shooter.', 'Tom Clancy\'s The Division', 'Tom Clancy\'s The Division 2 is a shooter RPG with campaign, co-op, and PvP modes that offers more variety in missions and challenges, new progression systems with unique twists and surprises, and fresh innovations that offer new ways to play.', 'The Division 2 is set after the events of Tom Clancy\'s The Division, in a world devastated by Green Poison, a potent smallpox strain engineered and released in New York City by an environmental terrorist. Green Poison became a pandemic, resulting in casualties and chaos on a global scale. Facing imminent social collapse, the United States government activated a contingent of domestic sleeper agents called the Strategic Homeland Division (SHD), or \"The Division\", to preserve order and continuity of government. Division agents leverage advanced technology and wide autonomy to deal with threats as they see fit. They are supplemented on the field with an advanced A.I. system called ISAC.', '12 March 2019', 'PlayStation 4, Xbox One, Google Stadia, Microsoft Windows', 'OS: 64-bit Windows 7 SP1 | 8.1 | 10.\r\nCPU: AMD FX-6350 | Intel Core I5-2500K.\r\nRAM: 8 GB.\r\nGPU: AMD Radeon R9 280X | NVIDIA GeForce GTX 780.\r\nVRAM: 3 GB.\r\nDIRECT X: DirectX 11 | 12.', 'Rs. 749', 'https://www.flipkart.com/tom-clancy-s-division/p/itme5gg6jkkhryry'),
(5, 'dotathumb.jpg', 'dotathumb.jpg', 'Multiplayer online battle arena', 'Dota 2', 'Dota 2 is a multiplayer online battle arena (MOBA) video game developed and published by Valve. The game is a sequel to Defense of the Ancients (DotA), which was a community-created mod for Blizzard Entertainment\'s Warcraft III: Reign of Chaos and its expansion pack, The Frozen Throne.', 'Dota 2 is a multiplayer online battle arena (MOBA) video game in which two teams of five players compete to collectively destroy a large structure defended by the opposing team known as the \"Ancient\", whilst defending their own.As in Defense of the Ancients, the game is controlled using standard real-time strategy controls, and is presented on a single map in a three-dimensional isometric perspective.Ten players each control one of the game\'s 119 playable characters, known as \"heroes\", with each having their own design, strengths, and weaknesses.Heroes are divided into two primary roles, known as the core and support.', '9 July 2013', 'PC', 'OS: Windows 7 or newer.\r\nProcessor: Dual core from Intel or AMD at 2.8 GHz.\r\nMemory: 4 GB RAM.\r\nGraphics: nVidia GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600.\r\nDirectX: Version 9.0c.\r\nNetwork: Broadband Internet connection.\r\nStorage: 15 GB available space.\r\nSound Card: DirectX Compatible.', 'Free to Play', 'https://store.steampowered.com/app/570/Dota_2/');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gameid` int(11) NOT NULL,
  `gamename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameid`, `gamename`) VALUES
(1, '\r\nAssassin\'s Creed valhalla'),
(2, 'Bloodbourne'),
(3, 'COD blackops'),
(4, 'The Division'),
(5, 'Dota 2'),
(6, 'FIFA2020'),
(7, 'God of war'),
(8, 'GTA5'),
(9, 'Resident evil 7'),
(10, 'Spiderman 3'),
(11, 'Witcher 3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `level`) VALUES
(1, 'dk601313@gmail.com', 'Darsh16', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(2, 'dk601313@gmail.in', 'darshan', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user'),
(5, 'Poseidon@gmail.com', 'Poseidon', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(6, 'd1@gmail.com', 'darsh1', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `gameimage`
--
ALTER TABLE `gameimage`
  ADD PRIMARY KEY (`gameid`);

--
-- Indexes for table `gameinfo`
--
ALTER TABLE `gameinfo`
  ADD PRIMARY KEY (`gameid`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gameimage`
--
ALTER TABLE `gameimage`
  MODIFY `gameid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gameinfo`
--
ALTER TABLE `gameinfo`
  MODIFY `gameid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
