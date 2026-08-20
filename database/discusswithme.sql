-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 09:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discusswithme`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL AUTO_INCREMENT PRIMARY,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `timestamp` timestamp DEFAULT NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timestamp`) VALUES
(1, 'jay', 'jay'),
(19, 'harsh', '123'),
(20, 'sourabh', '123'),
(21, 'pushpa', '12');


-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(8) NOT NULL PRIMARY AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  `_category_description` varchar(500) NOT NULL,
  `created` timestamp DEFAULT 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `created`) VALUES
(1, 'Python', 'Python is a high-level, general-purpose, interpreted, programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically typed and garbage-collected. It supports multiple programming paradigms, including structured (particularly procedural), object-oriented and functional programming. It is often described as a "batteries included" language due to its comprehensive standard library.'),
(2, 'Javascript', 'JavaScript, often abbreviated as JS, is a programming language and core technology of the World Wide Web, alongside HTML and CSS. As of 2023, 98.7% of websites use JavaScript on the client side for webpage behavior, often incorporating third-party libraries. All major web browsers have a dedicated JavaScript engine to execute the code on users devices.'),
(3, 'Danjo', 'Django is a free and open-source, Python-based web framework that follows the model–template–views architectural pattern. It is maintained by the Django Software Foundation, an independent organization.'),
(4, 'HTML', 'The Hypertext Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It defines the content and structure of web content. It is often assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.'),
(5, 'CSS', 'Cascading Style Sheets (CSS) is a style sheet language used for specifying the presentation and styling of a document written in a markup language such as HTML or XML. CSS is a cornerstone technology.'),
(6, 'C++', 'C++ is a high-level, general-purpose programming language created by Danish computer scientist Bjarne Stroustrup. It was first released in 1985 as an extension of the C programming language and has since expanded significantly over time. C++ has object-oriented, generic, and functional features, in addition to facilities for low-level memory manipulation.');

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL PRIMARY NOT NULL AUTO_INCREMENT,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  'timestamp' timestamp DEFAULT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1,'Unable to install pyaudio.', 'Please help to install pyaudio.',1,1,CURRENT_TIMESTAMP),
(2, 'Not able to install vs code','Please help me to install vs code in windows 11.',1,19,CURRENT_TIMESTAMP),
(8,'Fetch api is not working.','I am into trouble. My fetch api is not working in microsoft edge.',2,20,CURRENT_TIMESTAMP),
(44,'install cpp','how to install cpp in vs code?',6,1,CURRENT_TIMESTAMP),
(46,'water jug problem in python','how to solve water jug problem in python programming.',1,1,CURRENT_TIMESTAMP),
(47,'Django with Postgres: Bulk insert objects ignoring conflicts, then bulk insert related objects','I have two models: Template and TemplateVersion. I want to bulk insert templates and versions so that if the template already exists, it stays as is, but only new version of this template is created. ...',3,1,CURRENT_TIMESTAMP),
(48,'Storing C++ template function definitions in a .CPP file','I have some template code that I would prefer to have stored in a CPP file instead of inline in the header. I know this can be done as long as you know which template types will be used. …',6,1,CURRENT_TIMESTAMP),
(49,'Does IOS input type=date support min and max?','It seems that input type="date" does not support min and max options in iOS. Is it still the case? If so, what workaround or alternative can I use?',4,19,CURRENT_TIMESTAMP),
(50,'How to stop Auto HTML anchors added to heading tags in WordPress','Is it possible to prevent anchors being automatically added to the heading tags in WordPress 5.7.1? It looks like some sort of JS is adding the HTML anchor when you edit a post. This is duplicating ...',4,1,CURRENT_TIMESTAMP),
(51,'How do I implement a partialy-covered effect for a number?','The effect I am trying to achieve: I tried using overflow-y, but it does not work. My project is written in reactjs and with some custom css-rules.',5,19,CURRENT_TIMESTAMP),
(52,'use hover effect','in vs code how to use hover effect in css.',5,20,CURRENT_TIMESTAMP),
(53,'How to define array in Js','hum log javascript me array ko kaise define karte hai.',2,21,CURRENT_TIMESTAMP),
(55,'Which compiler should install in vs code for coding in c++.',6,1,CURRENT_TIMESTAMP);

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(8) NOT NULL PRIMARY NOT NULL AUTO_INCREMENT,
  `comment_content` text NOT NULL,
  `thread_id` int(7) NOT NULL,
  `commented_by` int(8) NOT NULL,
  'comment_time' DEFAULT timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `thread_id`, `commented_by`, `comment_time`) VALUES
(1,'Im also find same problem, please help me.',1,20,CURRENT_TIMESTAMP),
(30,'Not find any solution for this.',1,19,CURRENT_TIMESTAMP),
(32,'to use hover effect , use colon after any class.',52,20,CURRENT_TIMESTAMP),
(33,'Use mingw compiler for cpp.',63,19,CURRENT_TIMESTAMP);

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(8) NOT NULL PRIMARY NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL,
  'time' DEFAULT timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `username`, `email`, `message`, `time`) VALUES
(1,'Jay dewangan','jayrgh75@gmail.com','this is a first message for developer.',CURRENT_TIMESTAMP),
(2,'jay','dsad@fgh','this is my msg.',CURRENT_TIMESTAMP),
(3,'digesh','this is a best website',CURRENT_TIMESTAMP);