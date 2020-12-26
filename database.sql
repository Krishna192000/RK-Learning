-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2020 at 03:57 AM
-- Server version: 10.2.36-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brahmbhk_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `Cid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Timings` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descriptions` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`Cid`, `Name`, `Timings`, `IName`, `Descriptions`) VALUES
('BUS 100', 'Introduction to Business', 'Every Monday from 7:00pm to 9:50pm', 'Fabio Costante', 'This course takes a holistic approach in helping students develop an understanding of their future places, as entry level managers, in business and other forms of organizations. Functional business learning is undertaken using the lecture method. In parallel, the basic elements of strategic management are introduced in order to develop students strategic thinking capabilities.'),
('COMP 212', 'Object-Oriented Programming Using Java', 'Every Wednesday from 4:00pm to 5:30pm', 'Ziad Kobti', 'Concepts of classes and objects, Java applications, frames, event handling, control structures, methods, recursion, arrays, string manipulations, object-based programming, object-oriented programming— inheritance, polymorphism, interface and abstract classes, anonymous classes, data structures in Java. Linked lists, stacks, exception handling, and introduction to graphical user interface.'),
('COMP 256', 'System Programming', 'Every Monday from 2:30pm to 4:00pm', 'Robert Kent', 'This course introduces students to advanced software development techniques in system programming using the C language in the UNIX environment. Topics include introduction to modern operating systems, system calls, managing processes, the use of fork and exec, signals, file processing, filters, pipes, scripting languages, introduction to concurrency (e.g. synchronization), network programming (e.g. using sockets), client-server problems.'),
('COMP 270', 'Advance Website Design', 'Every Friday from 11:00am to 12:00pm', 'Ziad Kobti', 'This course is intended to teach the student about advanced website creation and to give an understanding of some of the technology behind websites, as well as an understanding of emerging web-related technologies. Topics covered will include JavaScript, Style Sheets, Dynamic HTML, XML, XHTML, Web Browser compatibility issues, and how web servers work. (Prerequisite: 60-205.) (This course may not be taken to fulfill the major requirements of any major or joint major in Computer Science.)'),
('COMP 315', 'Database Management System', 'Every Thursday from 11:30am to 12:50pm', 'Robert Kent', 'This course covers basic concepts of database systems. Topics covered will include 3-level architecture, introduction to file structures, B-trees, B+ Trees and hashed files, relational model, relational algebra and calculus, SQL and database design with normalization theory. The goal is to learn components of a database management system (DBMS), be able to design, create and query databases for problem domains using the SQL language.');

-- --------------------------------------------------------

--
-- Table structure for table `Person`
--

CREATE TABLE `Person` (
  `fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userId` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sId` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `student_or_teacher` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `course1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `course2` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Person`
--

INSERT INTO `Person` (`fname`, `lname`, `userId`, `password`, `sId`, `student_or_teacher`, `course1`, `course2`) VALUES
('Krishna', 'Brahmbhatt', 'kb@uwindsor.ca', 'uwinkb', '104251250', 's', 'COMP 270', 'COMP 315'),
('Ziad', 'Kobti', 'zk@uwindsor.ca', 'uwinzk', '104666666', 't', 'COMP 212', 'COMP 270'),
('Raj', 'Patel', 'rp@uwindsor.ca', 'uwinrp', '104683349', 's', 'COMP 256', 'COMP 212'),
('Robert', 'Kent', 'rk@uwindsor.ca', 'uwinrk', '104777777', 't', 'COMP 256', 'COMP 315'),
('Krutik', 'Patel', 'kp@uwindsor.ca', 'uwinkp', '104888888', 's', 'COMP 212', 'BUS 100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `Person`
--
ALTER TABLE `Person`
  ADD PRIMARY KEY (`sId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
