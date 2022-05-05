-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 08:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-librabry`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `book_img` varchar(500) NOT NULL,
  `book_pdf` varchar(500) NOT NULL,
  `book_author` varchar(40) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `description`, `date`, `book_img`, `book_pdf`, `book_author`, `category_id`, `user_id`) VALUES
(7, 'បេះដូងអ្នកដឹងនាំ', 'This is the book that talk about politic.', '2021-08-18 23:08:12', 'បេះដូងអ្នកដឹកនាំ.jpg', 'បេះដូងមេដឹកនាំ.pdf', 'N/A', 2, 1),
(10, 'សូ ផាត', 'សុផាតគឺជាប្រលោមលោកមនោសញ្ចេតនាខ្មែរដំបូងបង្អស់ដែលនិពន្ធនៅឆ្នាំ ១៩៣៨ ដោយរីមគីនហើយត្រូវបានបោះពុម្ពផ្សាយនៅឆ្នាំ ១៩៤២ រួមជាមួយកុលាបប៉ៃលិននិងផាកសុផុនសុផាតត្រូវបានគេចាត់ទុកថាជាប្រលោមលោកបុរាណមួយក្នុងចំណោមប្រលោមលោកបុរាណទាំងបីរបស់អក្សរសិល្ប៍ខ្មែរ', '2021-08-19 14:25:10', 'Roeung-Sophat-រីម គីន.jpg', 'sophat.pdf', 'រីម គីន', 1, 1),
(11, 'ព្រះអាទិត្យថ្មីរះលើដែនដីចាស់', 'ព្រះអាទិត្យថ្មីរះលើដែនដីចាស់  ជាអក្សរសិល្ប៍ខេមរនិយមឆ្លុះបញ្ចាំងពីសតិអារម្មណ៍របស់ប្រជារាស្រ្តក្រីក្រ\r\nដែលបាន ស្ថិតនៅក្នុងសៀវភៅប្រលោមលោក និពន្ធដោយលោក សួន សុរិន្ទ ហើយនៅឆ្នាំ ១៩៩៣, ៩៤ នឹង​ ទទួលឥទ្ធិពលពីរបបសង្គមរាស្រ្តនិយម ព្រោះដំណើររឿងបានបំផុសឲ្យប្រជារាស្រ្ត​ស្រឡាញ់ការងារពលកម្ម កសិកម្ម ហត្ថកម្ម នយោបាយទឹក តួយ៉ាងដូចជាតួអង្គសមជា​ដើម។', '2021-08-19 14:31:04', 'ព្រះអាទិត្យថ្មី-សួន សុរិន្.jpg', 'Preah-Atit-Reas-Leu-Den-Dey-Chas-7khmer.pdf', 'សួន សុរិន្ទ', 1, 1),
(12, 'មាយើង', 'រឿង មាយើង ជារឿងនិទានបុរាណខ្មែរ ដែលបង្កប់នូវតម្លៃអប់រំ និងតួនាទីដ៏សំខាន់របស់ស្រ្តីភេទ។ ព្រេងនិទានមួយនេះត្រូវបានលោកមហាកវី គង្គ ប៊ុនឈឿន និង លោក យ៉ែម បូណ៌ផាន់ ប្រែសម្រួលឲ្យចេញជាផ្ទាំងទស្សនីយភាពជាមួយផលិតកម្ម យ៉ែម បូណ៌ផាន់ ភាពយន្ត ក្នុងឆ្នាំ ២០០៤។', '2021-08-19 14:35:08', 'មាយើង-គិន ធារ៉ា.jpg', 'មាយើង.pdf', 'គិន ធារ៉ា', 1, 1),
(13, 'លិខិតឆ្លងឆ្លើយទាក់ទង', 'លិខិតឆ្លងឆ្លើយទាក់ទង ជាអក្សរសិល្បដែលយកចេញពីបរទេស ហើយក៍ត្រូវបានយកមកកែសម្រួលនឹងចែកចាយអោយយើងបានសិក្សារៀនសូត្រ។', '2021-08-19 14:37:23', 'លិខិតឆ្លងឆ្លើយទាក់ទង.jpg', 'លិខិតឆ្លើយឆ្លង_.pdf', 'N/A', 1, 1),
(14, 'Harry Potter', 'Harry Potter is a series of seven fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry.', '2021-08-19 14:38:17', 'porter-J.K.ROWLING.jpg', 'harry-potter-2-ver-2.pdf', 'J.K.ROWLING', 1, 1),
(15, 'ខ្ញុំមានទោសព្រោះអ្វី?', 'ខ្ញុំមានទោសព្រោះអ្វី? ជាអត្ថបទដែលនិយាយពីប្រជាជនខ្មែរដែលបានស្លាប់ដោយអយុត្តិធ៏មដោយសារតែរបបផ្ដាច់ការនៃសម័យ ពុល ពោត', '2021-08-19 14:42:47', 'ខ្ញុំមានទោសព្រោះអ្វី-ទ្រិញ វ៉ាញ.jpg', 'Khnhom_Mean_Taus_Pruos_Avey_Part_1.pdf', 'ទ្រិញ វ៉ាញ', 1, 1),
(16, 'ទុកបរិញ្ញាបត្រអោយមេឃមើល', 'ទុកបរិញ្ញាបត្រឱ្យមេឃមើល ជាប្រលោមលោកឆ្លុះបញ្ចាំងតថភាពជីវិតនិស្សិតមករៀននៅទីក្រុងភ្នំពេញ។', '2021-08-19 14:44:56', 'ទុកបរិញ្ញាបត្រអោយមេឃមើល-យូ សុភា.png', 'ទុកបរិញ្ញាបត្រ.pdf', 'យូ សុភា', 1, 1),
(17, 'បុប្ផាបាត់ដំបង់', 'បុប្ផាបាត់ដំបង់ ជាប្រលោមបែបមនោសច្ចេតនា។', '2021-08-19 14:48:26', 'បុប្ផាបាត់ដំបង-ឯម សត្យា.jpg', 'flower_of_battambang_kh.pdf', 'ឯម សត្យា', 1, 1),
(18, 'The Secret Garden', 'The Secret Garden is a 2020 British fantasy drama film based on the 1911 novel of the same name by Frances Hodgson Burnett, the fourth film adaptation of the novel. Directed by Marc Munden and produced by David Heyman, it stars Dixie Egerickx, Colin Firth, and Julie Walters.', '2021-08-19 14:52:48', 'the secret garden-Marc Munden.jpg', 'the_secret_garden.pdf', 'Marc Munden', 4, 1),
(19, 'The Tale of Patter', 'Peter is far more adventurous than his siblings Flopsy, Mopsy, and Cottontail, and almost as soon as their mother has told them to avoid Mr. McGregor’s garden, he crawls under the garden gate to gorge himself on Mr. McGregor’s vegetables.', '2021-08-19 14:54:33', 'The Tale of Peter Rabbit-Beatrix Potter.jpg', 'the_tale_of_peter_rabbit.pdf', 'Beatrix Potter', 4, 1),
(22, 'ភាពជាបុគ្គលិកឆ្នើម', 'General Knowledge Book.', '2021-08-19 15:03:19', 'ភាពជាបុគ្គលឆ្នើម-ហេង សុភា.jpg', 'ជំនាញភាពបុគ្គលិកឆ្នើម.pdf', 'ហេង សុភា', 2, 1),
(23, 'ចំណេះដឹងប្លែកៗ', 'ចំណេះដឹងប្លែកៗ ជាសៀវភៅដែលនិយាយពីចំណេះដឹងទូទៅ។', '2021-08-19 15:04:30', 'ចំណេះដឹងប្លែកៗ.jpg', 'ចំណេះដឹងប្លែកៗ.pdf', 'N/A', 2, 1),
(24, 'The Success Principle 2', 'The Success Principles™ will teach you how to increase your confidence, tackle daily challenges, live with passion and purpose, and realize all your ambitions.', '2021-08-19 15:05:41', 'the-success-princilple-Jack Canfield.jpg', 'the-success-principles-2-chapters.pdf', 'Jack Canfield', 3, 1),
(25, 'សិល្បះលួងលោម', 'និយាយ​អំពី​រឿង​សិល្បះ​លួង​លោម ប្រាកដ​ជា​មិត្ត​យល់​ថា​ប្រហែល ជាមា​ន​រឿង​ចម្លែក​អ្វី ​ដូច​ជា​មាន​បញ្ហា​មន្ត​អាគម​គាថា​អ្វី​អាថ៌​កំបាំង​ច្រើន​មិន​​ងាយ​​ទៅ​​លួង​​លោម​​គេ​​បាន​ ពី​​ព្រោះ​​មនុស្ស​​យើង​ចេះ​ដឹង​មាន​ការ​រៀន​សូត្រ​ច្រើន​មិន​ងាយ​ទៅ​ លួង​លោម​គេ​បាន​ដោយ​ងាយ​ទេ… ។ល។ ការ​យល់​បែប​នេះ​វា​សមរម្យ​ហើយ ហើយ​រិត​តែ​សមរម្យ​ទៅ​ទៀត​ ចំពោះ​មនុស្ស​ល្ងង់​គេ​មិន​អាច​ទៅ​លួង​លោម​បាន​ដោយ​ងាយ​ដែរ​ ។', '2021-08-19 15:06:48', 'សិល្បះលួងលោម-ហ៊ុនគឹមស៊ា.jpg', 'សិល្បះលួងលោម.pdf', 'ហ៊ុន គឹមស៊ា', 3, 1),
(30, 'អាចារ្យស្វា', 'អាចារ្យ​ស្វា ជាអ្នកបម្រើរបស់នាម៉ឺនម្នាក់ (ឧកញ៉ាវិជ្ជោសុខ) នៅរាជធានីឧដុង្គ។ ពេលបារាំងមកតាំងអាណាព្យាបាលលើប្រទេសខ្មែរនៅគ.ស ១៨៦៤ លោកអាចារ្យ ស្វា បានភៀសទៅកទ័ពវាយយកបានខេត្តទ្រាំង (កំពត - តាកែវ) ហើយលើកឆ្ពោះមកក្រុងភ្នំពេញទៀត។', '2021-08-20 12:26:02', 'អាចារ្យស្វា.jpg', 'AcharSva.pdf', 'N/A', 5, 1),
(35, 'បាក់ធ្មេញ', 'N/A', '2021-08-22 11:47:13', 'បាក់ធ្មេញ-សុទ្ធ ប៉ូលីន.jpg', 'bak-thmenh-archphkai.pdf', 'សុទ្ធ ប៉ូលីន', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `categoryName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `categoryName`) VALUES
(1, 'Novel'),
(2, 'General Knowledge'),
(3, 'Motivation'),
(4, 'Funny'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `profile`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'Admin.jpg', 'admin123@gmail.com', '$2y$10$nAC.8og/dsrUdgYFvA4xwOR9hZ.2a9fhjYqFh0g7TSTCCajTJ/DGC', 'Admin'),
(9, 'Jame', 'jame123.jpg', 'jame@gmail.com', '$2y$10$US1L4B0zNrMtgQQTvNlk2eTrRGIaO2FtbpDQ5SYdVFSXCYLKLbH2m', 'User'),
(12, 'Bella', 'Bella.jpg', 'bella@gmail.com', '$2y$10$69GBinzTSTQf8.6UOqO2e.JNq2u9H8spXKO/83eKJLkPlr797MAG2', 'User'),
(20, 'Koemsak', 'processed.jpeg', 'koemsak@gmail.com', '$2y$10$rFAnetHCl3WZJ.khgO9BXuutmEfOnkNgcufLjbcJROwpmkwc/elfS', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
