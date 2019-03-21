-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 21 2019 г., 14:41
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Смартфоны'),
(2, 'Часы'),
(3, 'Телевизоры'),
(4, 'Телевизоры');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `productID`, `userID`) VALUES
(1, 1, 1),
(2, 3, 3),
(3, 3, 3),
(4, 6, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `categoryID` int(11) NOT NULL,
  `price` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `categoryID`, `price`) VALUES
(1, 'Samsung Galaxy A8 (SM-A530F), Black', 'Galaxy A8 расширяет границы увиденного. Большой и красочный безграничный экран занимает всю переднюю поверхность смартфона от края до края. \r\n\r\nЧто бы ты ни предпочитал — классику или современность — среди цветов корпуса Galaxy A8 обязательно найдется тот, что тебе подойдет. А благодаря гладким скругленным краям этот эргономичный смартфон не хочется выпускать из рук. ', 1, '23000'),
(3, 'Умные часы Samsung Gear S3 Спартак, Spartak Edition Watch, SAM-Z-F-SM-R760SPR, черный, красный', 'Красно-белый эксклюзив!\r\nЛимитированная коллекция часов от Samsung и ФК «Спартак». Для ценителей классики.\r\n\r\nВедите активный образ жизни вместе с Samsung Gear S3 Frontier. Умные часы объединяют в себе исключительный стиль и надежность. Оснащенные корпусом из сплава нержавеющей стали 316L, защищенные от ударов, они работают даже при высоких и низких температурах. Лазерная гравировка на рифленом безеле не только подчеркивает уникальный дизайн, но и делает их использование более удобным. ', 2, '18150'),
(6, 'BBK 39LEX-5045/T2C телевизор', 'Телевизор BBK 39LEX-5045/T2C — это современное интеллектуальное устройство для передачи насыщенного и детального изображения с широким диапазоном функций. Встроенные тюнеры DVB-T/T2 и DVB-C обеспечивают бесперебойный прием аналоговых и цифровых каналов. Три цифровых аудиовидеоинтерфейса HDMI отвечают за максимальное качество передачи материала и универсальны для соединения с различной техникой. Режим монитора ПК доступен благодаря разъему VGA, а для воспроизведения HD-видео, аудиофайлов и фотографий со съемных носителей предусмотрены USB2.0-порты.\r\nОбладает дополнительными функциями: телетекст, EPG — электронная программа передач, TimeShift — отложенный просмотр, PVR — запись телепрограмм. Существует возможность использования ТВ в сети Интернет – с помощью LAN-кабеля или посредством встроенного Wi-Fi-модуля. Совместим с настенными креплениями стандарта VESA.', 3, '13000');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `pass`) VALUES
(1, 'user12314', '124shgd24'),
(3, 'user131453', 'dfjg47jsk'),
(4, 'user74637', '127488skdgh22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `categoryID` (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productID` (`productID`),
  ADD KEY `userID` (`userID`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `categoryID_2` (`categoryID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
