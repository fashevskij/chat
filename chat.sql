-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 27 2020 г., 07:39
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  `id_User_2` int(11) NOT NULL,
  `text` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id_message`, `id_User`, `id_User_2`, `text`, `time`) VALUES
(574, 121, 122, '111', '2020-10-26 09:51:33'),
(575, 123, 121, '222', '2020-10-26 10:03:15'),
(576, 121, 123, '1', '2020-10-26 10:03:37');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_User` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_User`, `name`, `email`, `photo`, `password`, `status`) VALUES
(121, 'Andreyka', 'Andrey@mail.ru', 'images/user4.png', '123', 0),
(122, 'Vika', 'Vika@mail.ru', 'images/user1.png', '111', 0),
(123, 'Anna', 'Anna@mail.ru', 'images/user1.png', '111', 0),
(124, 'Oksana', 'Oksana@mail.ru', 'images/user1.png', '111', 0),
(125, 'Gosha', 'Gosha@mail.ru', 'images/user4.png', '111', 0),
(126, 'Alexey', 'Alexey@mail.ru', 'images/user4.png', '111', 0),
(127, 'Tanya', 'Tanya@mail.ru', 'images/user1.png', '111', 0),
(128, 'Sahka', 'Sahka@mail.ru', 'images/user4.png', '111', 0),
(129, 'Roman', 'Roman@mail.ru', 'images/user4.png', '111', 0),
(130, 'Veronika', 'Veronika@mail.ru', 'images/user1.png', '111', 0),
(131, 'Stanislav', 'Stanislav@mail.ru', 'images/user4.png', '111', 0),
(132, 'Sergey', 'Sergey@mail.ru', 'images/user4.png', '111', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_User`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=577;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
