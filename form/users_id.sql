-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 06 2024 г., 10:09
-- Версия сервера: 5.6.51
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `form`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users_id`
--

CREATE TABLE `users_id` (
  `id` int(11) NOT NULL,
  `name_org` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_sokr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_ryk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_otv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_otv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_id`
--

INSERT INTO `users_id` (`id`, `name_org`, `name_sokr`, `organization`, `position_ryk`, `username`, `position_otv`, `username_otv`, `number`, `email`) VALUES
(1, 'ЧПОУ &quot;Московский городской открытый колледж&quot;', 'ЧПОУ &quot;МГОК&quot;', '1', 'Директор', 'Иванов Иван Иванович', 'Руководитель отдела', 'Миронов Олег Игоревич', '89134566511', 'miron@open-college.ru'),
(2, 'Московский государственный университет ', 'МГУ', 'ЦО - центр обучения', 'Декан', 'Петров Виктор Алексеевич', 'Заместитель декана', 'Ванечкин Алексей Викторович', '+7 915 234 43 25', 'vanka@mail.com'),
(3, 'РГСУ', 'РГСУ', '3', 'Директор', 'Лиза', 'Руководитель отдела', 'Лёша', '89776544532', 'voiko@mail.ru'),
(4, 'МЭИ', 'МЭИ', 'РО - центр обучения', 'Декан', 'Васильев Иван Иванович', 'Завуч', 'Петров Владимир Игорервич', '88005553535', 'petika@mail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users_id`
--
ALTER TABLE `users_id`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users_id`
--
ALTER TABLE `users_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
