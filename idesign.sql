-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 14 2022 г., 20:41
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `s92141d0_idesign`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--
-- Создание: Июн 14 2022 г., 23:34
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `type`, `keywords`, `description`) VALUES
(1, 'Ванные', 'Ванные Ключевики', 'Ванные Описание'),
(2, 'Спальни', 'Спальни Ключевики', 'Спальни Описание'),
(3, 'Кухни', 'Кухни Ключевики', 'Кухни Описание'),
(4, 'Гостинные', 'Гостинные Ключевики', 'Гостинные Описание'),
(5, 'Офисы', 'Офисы Ключевики', 'Офисы Описание'),
(6, 'Прочие дизайны', 'Прочие дизайны Ключевики', 'Прочие дизайны Описание'),
(15, 'Детские комнаты', 'Детские комнаты Ключевики', 'Детские комнаты Описание');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--
-- Создание: Июн 14 2022 г., 23:34
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT 'Мы ответим Вам, как только сможем!'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `name`, `email`, `subject`, `body`, `answer`) VALUES
(1, 6, 'tets', 'sete@rtgs.yty', '5456', '4566465', 'ответилиервкер'),
(2, 8, 'Екатерина', 'cat@mail.ru', 'У меня возникла проблема с заказом.', 'У меня возникла проблема с заказом, пожалуйста, помогите.', 'Мы ответим Вам, как только сможем!');

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--
-- Создание: Июн 14 2022 г., 23:34
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` tinyint(1) DEFAULT NULL,
  `modelName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlAlias` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `filePath`, `itemId`, `isMain`, `modelName`, `urlAlias`, `name`) VALUES
(3, 'Projects/Project27/f6f605.jpg', 27, 1, 'Project', '787db42f34-2', ''),
(4, 'Projects/Project11/d5e7b6.jpg', 11, 1, 'Project', 'f4a83fa82a-2', ''),
(5, 'Projects/Project28/061281.jpg', 28, 1, 'Project', 'f708ef508b-1', ''),
(6, 'Projects/Project29/f37e46.jpg', 29, 1, 'Project', '78310f046c-1', ''),
(7, 'Projects/Project30/454dbc.jpg', 30, 1, 'Project', 'c40efdf950-1', ''),
(8, 'Projects/Project22/8303e8.jpg', 22, 1, 'Project', '1de25f11a8-1', ''),
(9, 'Projects/Project23/7b36f2.jpg', 23, 1, 'Project', '6869310ece-1', ''),
(10, 'Projects/Project24/ce6101.jpg', 24, 1, 'Project', '9e1fa74c52-1', ''),
(11, 'Projects/Project25/994c1d.jpg', 25, 1, 'Project', 'fa608a4e54-1', ''),
(12, 'Projects/Project26/13b496.jpg', 26, 1, 'Project', 'f23f48404a-1', ''),
(13, 'Projects/Project1/16408a.jpg', 1, 1, 'Project', '4a2286f27f-1', ''),
(14, 'Projects/Project2/db3f12.jpg', 2, 1, 'Project', '474ef08574-1', ''),
(15, 'Projects/Project4/b47842.jpg', 4, 1, 'Project', '5dfc082802-1', ''),
(16, 'Projects/Project5/c35adc.jpg', 5, 1, 'Project', '2bc24133ee-1', ''),
(17, 'Projects/Project6/f84ec2.jpg', 6, 1, 'Project', 'f5dfc7fd76-1', ''),
(18, 'Projects/Project3/980f59.jpg', 3, 1, 'Project', 'af9ee21a56-1', ''),
(19, 'Projects/Project7/5fd235.jpg', 7, 1, 'Project', '21053b3208-1', ''),
(20, 'Projects/Project8/c89108.jpg', 8, 1, 'Project', 'dde02a5b19-1', ''),
(21, 'Projects/Project9/f11d52.jpg', 9, 1, 'Project', '93b71328a2-1', ''),
(22, 'Projects/Project10/b0c13b.jpg', 10, 1, 'Project', '3fafece475-1', ''),
(23, 'Projects/Project17/1eed8c.jpg', 17, 1, 'Project', 'bac6d591cc-1', ''),
(24, 'Projects/Project18/3f5f6f.jpg', 18, 1, 'Project', 'c787501175-1', ''),
(25, 'Projects/Project19/c1ff72.jpg', 19, 1, 'Project', '63f8adad11-1', ''),
(26, 'Projects/Project20/da1efe.jpg', 20, 1, 'Project', 'ddfe242720-1', ''),
(27, 'Projects/Project21/1f2f54.jpg', 21, 1, 'Project', '21752c5f61-1', ''),
(28, 'Projects/Project12/c76561.jpg', 12, 1, 'Project', 'fddb8bbde7-1', ''),
(29, 'Projects/Project13/4ad9f1.jpg', 13, 1, 'Project', 'e156871dc1-1', ''),
(30, 'Projects/Project14/65900b.jpg', 14, 1, 'Project', 'c5748cce1c-1', ''),
(31, 'Projects/Project15/81548d.jpg', 15, 1, 'Project', '3a952ae86a-1', ''),
(32, 'Projects/Project16/010096.jpg', 16, 1, 'Project', 'fd613fd6a3-1', ''),
(50, 'Projects/Project73/kidsroom-1.jpg', 73, 1, 'Project', NULL, NULL),
(51, 'Projects/Project74/kidsroom-2.jpg', 74, 1, 'Project', NULL, NULL),
(52, 'Projects/Project75/kidsroom-3.jpg', 75, 1, 'Project', NULL, NULL),
(53, 'Projects/Project76/kidsroom-4.jpg', 76, 1, 'Project', NULL, NULL),
(54, 'Projects/Project77/kidsroom-5.jpg', 77, 1, 'Project', NULL, NULL),
(55, 'Projects/Project78/kidsroom-6.jpg', 78, 1, 'Project', NULL, NULL),
(56, 'Projects/Project79/kidsroom-7.jpg', 79, 1, 'Project', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--
-- Создание: Июн 14 2022 г., 23:34
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1651541383),
('m140622_111540_create_image_table', 1651541403),
('m140622_111545_add_name_to_image_table', 1651541403);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--
-- Создание: Июн 14 2022 г., 23:34
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `sum` float DEFAULT NULL,
  `order_status` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancellation` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `user_id`, `created_at`, `updated_at`, `sum`, `order_status`, `name`, `email`, `phone`, `address`, `description`, `cancellation`) VALUES
(2, 2, '2022-05-01 23:42:20', '2022-05-24 15:54:37', 0, '3', 'testordername', 'test@order.email', '324234', 'testorderaddress', 'testorderdescription', 'отмена'),
(3, 2, '2022-05-01 23:50:21', '2022-05-24 15:54:37', 0, '3', 'проверка русский', '3@1.ru', '12341414', 'русский', 'русский', 'отмена'),
(7, 3, '2022-05-01 23:50:50', '2022-05-24 15:54:37', 0, '3', 'sthy', 'tsh@rger.ru', '45232', 'sththsrd', 'sdrhtdrst', 'отмена'),
(8, 3, '2022-05-03 14:35:39', '2022-05-24 15:54:37', 0, '3', '14215341', '1@1.ru', '45161', '3634613', '6436135', 'отмена'),
(10, 3, '2022-05-12 19:20:47', '2022-05-24 15:54:37', 0, '3', '2131', '2314@tg.try', '234234', '2423', '23425', 'отмена'),
(11, 3, '2022-05-12 19:21:13', '2022-05-20 23:39:20', 0, '1', '2131', '2314@tg.try', '234234', '2423', '23425', NULL),
(12, 3, '2022-05-12 19:28:04', '2022-05-20 23:39:27', 0, '1', '12313', '1@try.yu', '34525', 'rsherh', 'wsrhwrj', NULL),
(13, 3, '2022-05-12 19:34:58', '2022-05-13 23:39:59', 0, '1', '1451', '1@trwert.tyu', '24562456', 'dyjjy', 'edtjytej', NULL),
(18, 3, '2022-05-13 21:54:27', '2022-05-20 23:39:34', 0, '1', '12', '12@1.1', '11', '11', '11', NULL),
(20, 6, '2022-05-13 22:18:21', '2022-05-13 23:39:59', 0, '1', 'bewe', 'b@e.ru', '+453535', 'srg', 'rsg', NULL),
(26, 6, '2022-05-14 20:33:24', '2022-05-24 15:54:37', 0, '3', 'sggr', 'ger@gse.rsg', '5353', 'sgre', 'dsgr', 'отмена'),
(27, 6, '2022-05-19 16:46:35', '2022-05-24 15:54:37', 0, '3', '456', '4564@tyr.ttry', '453432', 'xfhrt', 'rdht', 'отмена'),
(28, 6, '2022-05-19 16:49:57', '2022-05-24 15:54:37', 0, '3', '324', '213@thyrs.yui', '5656754', 'sghht', '546wy45', 'отмена'),
(29, 6, '2022-05-19 16:51:18', '2022-05-24 15:54:37', 0, '3', '435q54', '243@ger.565', '6456', '5456', '456ww', 'отмена'),
(34, 6, '2022-05-19 16:56:57', '2022-05-24 15:54:37', 0, '3', '4356324', '44335@ter.yrtyu6', '46465465564465', '645654465546', '465465465645645', 'отмена'),
(36, 6, '2022-05-19 17:00:29', '2022-05-20 23:40:14', 0, '1', '4565', '435@greg.ty', '887686', 'hdf', 'djyjy', NULL),
(38, 6, '2022-05-26 19:06:37', '2022-05-27 20:13:12', 101123, '2', '65464', '6@t.t', '655655', 'ffhhfhf', 'hffhhf', ''),
(39, 8, '2022-05-29 00:17:48', '2022-05-29 00:26:08', NULL, '1', 'Екатерина', 'cat@mail.ru', '+79211234567', 'Санкт-Петербург, улица, дом', 'Мне нужно сделать кухню большую и функциональную кухню, где я могла бы готовить самые вкусные блюда!', NULL),
(40, 8, '2022-05-29 01:31:50', '2022-05-29 03:08:32', 46444.5, '3', 'Екатерина', 'cat@mail.ru', '+79211234567', 'СПБ', 'Очень милая ванная комната, хотелось бы такую, но немного больше.', 'Извините, мы отменяем заказ.'),
(41, 6, '2022-06-15 00:33:04', '2022-06-15 01:07:05', 23474.8, '1', '56456', '546@453.543', '3453535', '35453', '543', '45345'),
(42, 8, '2022-06-15 09:07:53', '2022-06-15 09:09:34', 99689.9, '3', 'екатерина', '3424@dfew.tyr', '342424', 'dfsfsf', 'rtetger', 'fhf'),
(43, 10, '2022-06-15 14:24:43', '2022-06-15 14:24:43', 78996.9, '0', 'Водыды', 'Sjsknsns@jeks.kdm', '278282', 'Xhjsjs', 'Shhsjs', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--
-- Создание: Июн 14 2022 г., 23:34
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `image` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `project_id`, `price`, `image`, `name`) VALUES
(1, 11, 17, 0, 23, 'Викторианская золотая спальня'),
(2, 12, 12, 0, 28, 'Белая ванная комната с растениями'),
(3, 12, 13, 0, 29, 'Фиолетово-белая ванная комната'),
(4, 12, 11, 0, 4, 'Черно-белая ванная комната'),
(5, 13, 15, 0, 31, 'Ванная комната из белого стекла'),
(10, 18, 19, 0, 25, 'Фиолетовая современная спальня'),
(12, 20, 19, 0, 25, 'Фиолетовая современная спальня'),
(23, 36, 11, 0, 4, 'Черно-белая ванная комната'),
(24, 38, 16, 46444, 32, 'Компактная белая деревяная ванная комната'),
(25, 38, 15, 54678, 31, 'Ванная комната из белого стекла'),
(26, 40, 16, 46444, 32, 'Компактная белая деревяная ванная комната'),
(27, 41, 12, 23474, 28, 'Белая ванная комната с растениями'),
(28, 42, 13, 99689, 29, 'Фиолетово-белая ванная комната'),
(29, 43, 8, 78996, 20, 'Красно-черная деревенская кухня');

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--
-- Создание: Июн 14 2022 г., 23:34
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(10) NOT NULL,
  `status_id` int(10) NOT NULL DEFAULT '0',
  `category_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `status_id`, `category_id`, `name`, `price`, `keyword`, `description`) VALUES
(1, 1, 4, 'Белая гостиная в современном стиле ', 55645.4, '', ''),
(2, 1, 4, 'Аква гостиная', 45935.1, '', ''),
(3, 2, 3, 'Красная кухня', 98676.8, '', ''),
(4, 2, 4, 'Белая гостиная', 95433.6, '', ''),
(5, 3, 4, 'Солнечная гостиная', 89985.3, '', ''),
(6, 3, 4, 'Деревяная гостинная', 97422.9, '', ''),
(7, 1, 3, 'Черно-белая кухня с орхидеями', 87767.9, '', ''),
(8, 1, 3, 'Красно-черная деревенская кухня', 78996.9, '', ''),
(9, 2, 3, 'Бело-золотая кухня в викторианском стиле', 89655.8, '', ''),
(10, 3, 3, 'Кухня из мрамора и дерева', 74744.5, '', ''),
(11, 1, 1, 'Черно-белая ванная комната', 84933.9, '', ''),
(12, 1, 1, 'Белая ванная комната с растениями', 23474.8, '', ''),
(13, 1, 1, 'Фиолетово-белая ванная комната', 99689.9, '', ''),
(14, 2, 1, 'Турецкая золотая ванная комната', 97334, '', ''),
(15, 2, 1, 'Ванная комната из белого стекла', 54678.9, '', ''),
(16, 3, 1, 'Компактная белая деревяная ванная комната', 46444.5, '', ''),
(17, 1, 2, 'Викторианская золотая спальня', 99879.5, '', ''),
(18, 1, 2, 'Викторианская спальня в розовых тонах', 76556, '', ''),
(19, 1, 2, 'Фиолетовая современная спальня', 75644.9, '', ''),
(20, 2, 2, 'Коричневая спальня', 123334, '', ''),
(21, 3, 2, 'Черная современная спальня', 76449, '', ''),
(22, 1, 5, 'Деревяный современный офис', 34555.9, '', ''),
(23, 2, 5, 'Современный кафельный офис', 97898.5, '', ''),
(24, 2, 5, 'Светло-серый офис', 129360, '', ''),
(25, 3, 5, 'Современный коричневый офис', 77799.9, '', ''),
(26, 3, 5, 'Современный серый офис', 76668.4, '', ''),
(27, 1, 6, 'Футуристическая гостевая комната', 123244, '', ''),
(28, 2, 6, 'Старинное деревяное кафе', 75657.8, '', ''),
(29, 2, 6, 'Современная столовая отеля', 310967, '', ''),
(30, 3, 6, 'Кафе во \"Французком\" стиле', 203399, '', ''),
(73, 1, 15, 'Морская детская комната', 64559.8, '', ''),
(74, 1, 15, 'Голубая детская комната', 54559, '', ''),
(75, 2, 15, 'Современная детская комната', 89884.5, '', ''),
(76, 2, 15, 'Детская комната в стиле \"Моряк\"', 64566.5, '', ''),
(77, 2, 15, 'Мягкая детская комната', 52114.9, '', ''),
(78, 3, 15, 'Детская комната в стиле \"Машина\"', 54433.9, '', ''),
(79, 3, 15, 'Современная серая детская комната', 33322.9, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--
-- Создание: Июн 14 2022 г., 23:34
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pow` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id`, `user_id`, `name`, `pow`, `review`) VALUES
(1, 2, 'Квон Джун', 'Художник', 'Достойно сделали ремонт в нашем доме. Я доволен их робой. Фирму не просто так выбирал. Они давно работают в данной сфере. Много про них слышал. На самом деле много реальных отзывов от знакомых. Поэтому осознано шел к ним.\r\nЛюди здесь работают ответственные. Качество работы очень приличное. Рабочих много, каждый занят своим направлением. Ну, и вобще, этапность соблюдена.'),
(2, 3, 'Ханбин Чои', 'Архитектор', 'Если вы все еще задумываетесь над тем, к кому обратиться за помощью в правильной планировке дизайна и в целом в проведении ремонта, то советую обратить внимание на эту строительную компанию. \r\nМне уже почти закончили обустраивать комнату в прихожей. Я очень рад, что поручил это нелегкое задание именно специалистам.'),
(3, 6, 'привет тест', 'тест', 'я люблю свою жизнь'),
(4, 6, 'Кытя', 'коляга', 'я люблю котов и ромашки!!!!!'),
(5, 8, 'Екатерина У', 'студент колледжа', 'Мне сделали очень красивую кухню и ванную комнату! Спасибо!');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--
-- Создание: Июн 14 2022 г., 23:34
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(10) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `status`, `keywords`, `description`) VALUES
(1, 'Завершен', NULL, NULL),
(2, 'В процессе', NULL, NULL),
(3, 'В разработке', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--
-- Создание: Июн 14 2022 г., 23:34
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `role`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', 'admin', '$2y$13$wSj/SrxktHjPIoyuUeEJ2.9IjqBBOEBIW2CVVC2NOX4sYqfPA2qwC', NULL),
(2, 'user', 'testuser', '$2y$13$AMHYwUkhGBXZP1ezY6iiyua4FP4c5OpkURZZhEjZy8pMIlqTWaCJK', NULL),
(3, 'user', 'hello', '$2y$13$4lOZ7nsMpv5CQLE7TmOgTuT4I8GL/K5BZuWQ9.HARW.903BLF0frC', NULL),
(4, 'user', 'lasttest', '$2y$13$bs.u7PZriCO2z9uauBHvrOXg6npHurcgfwCO2nhcAHsbivyqLMlwK', NULL),
(5, 'user', 'cat', '$2y$13$7zXDwT3gMVK/UCgkXOUpYOiqnYnJNzGVMfgoJf0b40kaiScA1rSO6', NULL),
(6, 'user', 'new', '$2y$13$Az.rHZHuklXEBS5swwWYh.ZeoQ.zckW1qrPlF2P4edewfcD6G2Hjy', NULL),
(7, 'user', 'yamoya', '$2y$13$J.4oDWPq3qEsG9zMD9222OK9HyjhVjIyQqNPJlCtaqtvpV9DrDY4O', NULL),
(8, 'user', 'Екатерина', '$2y$13$9fTdkgbq2xQdsp8ZIHLCWOR86WjfyFaOvRzVNI.8cTSOZWuz8HbYq', NULL),
(9, 'user', 'Yes', '$2y$13$FSna4y24h2jLSlGRSQ1Ege.GaCR83wGRL/Plwb7D152.E9l3AWIKC', NULL),
(10, 'user', 'exi', '$2y$13$ksV90KB6BQ1AWwKfQEajKu9RVssBE/qLtQp4vzKissS6tWDKgpWjy', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_ibfk_1` (`itemId`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_ibfk_1` (`order_id`),
  ADD KEY `order_items_ibfk_2` (`project_id`),
  ADD KEY `order_items_ibfk_3` (`image`);

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `project_ibfk_2` (`category_id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`itemId`) REFERENCES `project` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_3` FOREIGN KEY (`image`) REFERENCES `image` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
