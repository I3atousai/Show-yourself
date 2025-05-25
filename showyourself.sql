-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2025 г., 23:55
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `showyourself`
--

-- --------------------------------------------------------

--
-- Структура таблицы `resumes`
--

CREATE TABLE `resumes` (
  `id` int NOT NULL,
  `style` varchar(20) NOT NULL DEFAULT 'default',
  `html` text NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(120) NOT NULL,
  `avatar` varchar(20) NOT NULL DEFAULT 'defolt.png',
  `role` varchar(14) NOT NULL DEFAULT 'user',
  `resumes_left` smallint NOT NULL DEFAULT '5',
  `phone` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password_hash` varchar(150) NOT NULL,
  `password_reset_hash` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password_reset_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `role`, `resumes_left`, `phone`, `email`, `password_hash`, `password_reset_hash`, `password_reset_time`, `created_at`) VALUES
(1, 'ivan', 'defolt.png', 'user', 5, '89160062674', 'freed5one@mail.ru', '$2y$10$vaaLQG/0Sx405KNEHzJ74.UpfsF5ZEjHimi2s2GG4wKyLFaO6IXKS', NULL, NULL, '2025-05-21 13:46:08'),
(14, 'Гор', 'PHOTO-113643.jpeg', 'user', 5, '8(916)006-26-74', 'gor.aslanyan.01@mail.ru', '$2y$10$YXiyjM4tZaYFPT4dxeXyL./zBlvhVA1ydDCd1SQ3DPZKA7cfcNMdy', NULL, NULL, '2025-05-25 17:09:32');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `resumes`
--
ALTER TABLE `resumes`
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
