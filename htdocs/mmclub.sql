-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 23 2016 г., 17:46
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mmclub`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `USER_ID` int(20) NOT NULL,
  `Nick_Name` text NOT NULL,
  `User_Pass` text NOT NULL,
  `SessionID` int(11) NOT NULL,
  `User_Email` text NOT NULL,
  `Security_Answer` text NOT NULL,
  `Full_Name` text NOT NULL,
  `User_Birth_Day` date NOT NULL,
  `Character_Birth_Day` date NOT NULL,
  `User_Gender` int(4) NOT NULL,
  `User_City` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`USER_ID`, `Nick_Name`, `User_Pass`, `SessionID`, `User_Email`, `Security_Answer`, `Full_Name`, `User_Birth_Day`, `Character_Birth_Day`, `User_Gender`, `User_City`) VALUES
(1, 'ÑÑƒÑ†ÐºÐ²Ð°Ð¿Ð²Ð°Ð¿', '232423Ð²Ð°Ð¿Ð°Ð²Ð¿', 0, 'lexapsxu1@ua.ru', '', 'Ð²Ñ‹Ð° Ñ‹Ð²Ð° Ñ‹Ð²Ñ‹Ð°Ñ‹ Ð²', '0000-00-00', '0000-00-00', 0, 'Ñ‹Ð²Ð°Ñ‹Ð²'),
(2, 'lexapsux', '23751404', 0, 'lexapsux@mail.ru', 'Ð—Ð¸Ð¼Ð°', 'Ð’ÐµÑ‡ÐºÐ¸Ð½ ÐÐ»ÐµÐºÑÐµÐ¹ Ð’Ð°Ð»ÐµÑ€ÑŒÐµÐ²Ð¸Ñ‡', '0000-00-00', '0000-00-00', 0, 'ÐŸÐµÐ½Ð·Ð°'),
(3, 'asdasd', '2sfdsf', 0, 'dfsf@dsds.ru', 'sdad', 'sad sad asa', '0000-00-00', '0000-00-00', 0, 'sdasd'),
(4, 'Ñ‹Ñ„Ð²Ñ‹', '8d2665fd7003a62f44e7b6a8d9e429a0', 0, 'Ñ„Ñ‹Ð²2@usdfdf.ru', 'sad', 'asd sa sad', '0000-00-00', '0000-00-00', 0, 'asd'),
(5, 'Ñ‹Ð²Ñ„ Ñ‹Ñ„Ð²', '176e1a1f144abbc334fb698fb18bf6e8', 0, 'sads@tyfgh.ru', 'as Ñ‹Ñ„Ð²Ñ„Ñ‹Ð²', 'sad sad Ñ‹Ñ„Ð²Ñ„Ñ‹Ð²', '0000-00-00', '0000-00-00', 0, 'Ñ„Ñ‹Ð² sadasd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `USER_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
