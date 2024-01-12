-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2024 lúc 11:20 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mrobot`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answers`
--

CREATE TABLE `answers` (
  `answerID` int(6) NOT NULL,
  `detail` text NOT NULL,
  `vote` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `questID` int(11) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `bannerID` int(6) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `link` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `blogID` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `title_detail` text DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `share_view` int(11) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `cmtID` int(6) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `detiail` text DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `blogID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `questID` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `tab` varchar(50) DEFAULT NULL,
  `cate` int(11) NOT NULL,
  `vote` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`questID`, `title`, `body`, `tab`, `cate`, `vote`, `view`, `reg_date`, `userID`) VALUES
(1, 'thu nghiem', 'abc', 'test', 1, 0, 0, '2024-01-09 08:05:38', 3),
(2, 'thunghiem 2', '<p>abc</p>', 'test', 1, 0, 0, '2024-01-09 08:05:48', 3),
(3, 'thu nghiem 3', '<h4><strong>thu xem </strong><i>123</i></h4><h2><i>423</i></h2><figure class=\"table\"><table><tbody><tr><td>4</td><td>5</td><td>6</td></tr></tbody></table></figure>', 'test', 1, 0, 0, '2024-01-09 08:05:57', 3),
(4, 'Unlimited Blade Works', '<p>&nbsp;I am the bone of my sword<br>&nbsp;Steel is my body and fire is my blood<br>&nbsp;I have created over a thousand blades<br>&nbsp;Unknown to Death,<br>&nbsp;Nor known to Life.<br>&nbsp;Have withstood pain to create many weapons<br>&nbsp;But yet, those hands will never hold anything<br>&nbsp;So as I pray, Unlimited Blade Works.</p>', 'anime', 2, 0, 1, '2024-01-09 08:57:57', 3),
(5, 'Unlimited Blade Works', '<p>&nbsp;I am the bone of my sword<br>&nbsp;Steel is my body and fire is my blood<br>&nbsp;I have created over a thousand blades<br>&nbsp;Unknown to Death,<br>&nbsp;Nor known to Life.<br>&nbsp;Have withstood pain to create many weapons<br>&nbsp;But yet, those hands will never hold anything<br>&nbsp;So as I pray, Unlimited Blade Works.</p>', 'anime', 2, 0, 0, '2024-01-09 08:34:53', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `roleID` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`roleID`, `name`) VALUES
(1, 'admin'),
(2, 'người dùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userID` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `roleID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userID`, `email`, `pass`, `reg_date`, `roleID`) VALUES
(1, 'tam753951@gmail.com', '123', '2023-12-21 08:07:44', 1),
(2, 'abc123@gmail.com', '123', '2023-12-21 08:07:44', 2),
(3, 'khongco@gmail.com', '123', '2024-01-05 08:43:03', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answerID`),
  ADD KEY `questID` (`questID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bannerID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmtID`),
  ADD KEY `blogID` (`blogID`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `roleID` (`roleID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answers`
--
ALTER TABLE `answers`
  MODIFY `answerID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `bannerID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `blogID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `cmtID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `questID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `roleID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`questID`) REFERENCES `question` (`questID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`blogID`) REFERENCES `blog` (`blogID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roleID`) REFERENCES `role` (`roleID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
