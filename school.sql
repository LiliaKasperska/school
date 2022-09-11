-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Чрв 09 2021 р., 09:24
-- Версія сервера: 10.4.8-MariaDB
-- Версія PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `school`
--

-- --------------------------------------------------------

--
-- Структура таблиці `downl_file`
--

CREATE TABLE `downl_file` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `id_type` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `downl_file`
--

INSERT INTO `downl_file` (`id`, `name`, `file`, `id_type`) VALUES
(12, 'Про зміну засновника, назви та  затвердження Статуту комунального закладу Козівської селищної ради  «Медівська загальноосвітня школа І-ІІ ступенів»', 'C:/xampp/htdocs/school/adm/adm_file/МЕДОВА.docx', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE `news` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text_start` varchar(255) NOT NULL,
  `text` varchar(1500) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `title`, `text_start`, `text`, `img`) VALUES
(29, 'Закуплено новий інвентар до школи', 'Оновлення матеріально-технічної бази школи.Забезпечення апаратурою актової зали для проведення творчих та масових заходів. Придбання спортивного обладнання для ', 'Оновлення матеріально-технічної бази школи.Забезпечення апаратурою актової зали для проведення творчих та масових заходів. Придбання спортивного обладнання для якісного фізичного виховання учнів.', 'adm/adm_img/зображення_viber_2021-06-06_19-48-27.jpg*');

-- --------------------------------------------------------

--
-- Структура таблиці `type_file`
--

CREATE TABLE `type_file` (
  `id` int(20) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `type_file`
--

INSERT INTO `type_file` (`id`, `type`) VALUES
(1, 'Положення'),
(2, 'Накази'),
(3, 'Листи'),
(4, 'Інші документи');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `downl_file`
--
ALTER TABLE `downl_file`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `type_file`
--
ALTER TABLE `type_file`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `downl_file`
--
ALTER TABLE `downl_file`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблиці `news`
--
ALTER TABLE `news`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблиці `type_file`
--
ALTER TABLE `type_file`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
