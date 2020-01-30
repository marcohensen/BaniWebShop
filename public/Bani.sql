/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `bani` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bani`;

CREATE TABLE IF NOT EXISTS `btw` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `btw` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `btw` DISABLE KEYS */;
REPLACE INTO `btw` (`id`, `btw`) VALUES
	(1, 8),
	(2, 21);
/*!40000 ALTER TABLE `btw` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(105, '2014_10_12_000000_create_users_table', 1),
	(106, '2014_10_12_100000_create_password_resets_table', 1),
	(107, '2019_03_04_105035_create_order_info_table', 1),
	(108, '2019_03_04_105122_create_order_row_table', 1),
	(109, '2019_03_04_105159_create_product_table', 1),
	(110, '2019_03_04_105226_create_btw_table', 1),
	(111, '2019_03_04_105245_create_product_categorie_table', 1),
	(112, '2019_03_04_105303_create_recipe_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `order_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cart` longtext COLLATE utf8mb4_unicode_ci NOT NULL,banibani
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `order_info` DISABLE KEYS */;
REPLACE INTO `order_info` (`id`, `user_id`, `cart`) VALUES
	(2, 1, 'O:8:"App\\Cart":4:{s:5:"items";a:2:{i:3;a:3:{s:6:"aantal";i:2;s:5:"prijs";d:33.58;s:4:"item";O:11:"App\\Product":26:{s:8:"\0*\0table";s:7:"product";s:13:"\0*\0connection";s:5:"mysql";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:10:{s:2:"id";i:3;s:4:"naam";s:25:"Heineken Premium Pilsener";s:12:"omschrijving";s:110:"- Is het lekkerst op een temperatuur van 2 a 5 graden<br>\r\n- Inclusief biertegoed (heineken.nl/Biertegoed)<br>";s:9:"categorie";s:8:"Pilsener";s:5:"prijs";d:16.79;s:6:"btw_id";i:2;s:10:"afbeelding";s:35:"producten/alcohol/heineken-krat.jpg";s:10:"aanbieding";i:1;s:10:"created_at";N;s:10:"updated_at";N;}s:11:"\0*\0original";a:10:{s:2:"id";i:3;s:4:"naam";s:25:"Heineken Premium Pilsener";s:12:"omschrijving";s:110:"- Is het lekkerst op een temperatuur van 2 a 5 graden<br>\r\n- Inclusief biertegoed (heineken.nl/Biertegoed)<br>";s:9:"categorie";s:8:"Pilsener";s:5:"prijs";d:16.79;s:6:"btw_id";i:2;s:10:"afbeelding";s:35:"producten/alcohol/heineken-krat.jpg";s:10:"aanbieding";i:1;s:10:"created_at";N;s:10:"updated_at";N;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:1;a:3:{s:6:"aantal";i:1;s:5:"prijs";d:1.53;s:4:"item";O:11:"App\\Product":26:{s:8:"\0*\0table";s:7:"product";s:13:"\0*\0connection";s:5:"mysql";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:10:{s:2:"id";i:1;s:4:"naam";s:33:"De Zaanse Hoeve Halfvolle melk 2L";s:12:"omschrijving";s:128:"- Gepasteuriseerde halfvolle melk<br>\r\n<br>\r\n<b>Inhoud en gewicht</b><br>\r\n2 Liter, 200 mililiter eenheid/eenheden, 10 portie(s)";s:9:"categorie";s:4:"Melk";s:5:"prijs";d:1.53;s:6:"btw_id";i:1;s:10:"afbeelding";s:44:"producten/zuivel/halfvolle-melk-jerrycan.jpg";s:10:"aanbieding";i:1;s:10:"created_at";N;s:10:"updated_at";N;}s:11:"\0*\0original";a:10:{s:2:"id";i:1;s:4:"naam";s:33:"De Zaanse Hoeve Halfvolle melk 2L";s:12:"omschrijving";s:128:"- Gepasteuriseerde halfvolle melk<br>\r\n<br>\r\n<b>Inhoud en gewicht</b><br>\r\n2 Liter, 200 mililiter eenheid/eenheden, 10 portie(s)";s:9:"categorie";s:4:"Melk";s:5:"prijs";d:1.53;s:6:"btw_id";i:1;s:10:"afbeelding";s:44:"producten/zuivel/halfvolle-melk-jerrycan.jpg";s:10:"aanbieding";i:1;s:10:"created_at";N;s:10:"updated_at";N;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:9:"totAantal";i:3;s:8:"totPrijs";d:35.11;s:6:"totBtw";i:0;}');
/*!40000 ALTER TABLE `order_info` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `order_row` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `order_row` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_row` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `omschrijving` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prijs` double NOT NULL,
  `btw_id` int(11) NOT NULL,
  `afbeelding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aanbieding` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `product` DISABLE KEYS */;
REPLACE INTO `product` (`id`, `naam`, `omschrijving`, `categorie`, `prijs`, `btw_id`, `afbeelding`, `aanbieding`) VALUES
	(1, 'De Zaanse Hoeve Halfvolle melk 1L', '- gepasteuriseerde halfvolle melk', 'Melk', 0.79, 1, 'producten/zuivel/halfvolle-melk-pak.jpg', 1),
	(2, 'De Zaanse Hoeve Halfvolle melk 2L', '- Gepasteuriseerde halfvolle melk', 'Melk', 1.53, 1, 'producten/zuivel/halfvolle-melk-jerrycan.jpg', 0),
	(3, 'Heineken Premium pilsener', '- Het frisse en heldere karakter van Heineken bier is over de hele wereld gelijk omdat het vergist wordt met de unieke Heineken A-gist.<br>\r\n- Inclusief Biertegoed!<br>', 'Bier', 15.99, 2, 'producten/alcohol/heineken-krat.jpg', 1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `product_categorie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `afbeelding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subnaam1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subafbeelding1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subnaam2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subafbeelding2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subnaam3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subafbeelding3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `product_categorie` DISABLE KEYS */;
REPLACE INTO `product_categorie` (`id`, `naam`, `afbeelding`, `subnaam1`, `subafbeelding1`, `subnaam2`, `subafbeelding2`, `subnaam3`, `subafbeelding3`) VALUES
	(1, 'Zuivel', '-', 'Boter', 'producten/zuivel/blue-band-halvarine.jpg', 'Melk', 'producten/zuivel/halfvolle-melk-pak.jpg', 'Toetjes', 'producten/zuivel/almhof-lekker-licht.jpg'),
	(2, 'Graan producten', '-', 'Ontbijtgranen', 'producten/granen/quaker-granola.jpg', 'Koekjes', 'producten/granen/stroopwafels.jpg', 'Brood', 'producten/granen/volkoren-heel.jpg'),
	(3, 'Beleg', '-', 'Salades', 'producten/beleg/ei-salade.jpg', 'Kaas', 'producten/beleg/kaas.jpg', 'Vleeswaren', 'producten/beleg/kipfilet.jpg'),
	(4, 'Alcohol', '-', 'Lentebieren', 'producten/alcohol/lentebok.jpg', 'Pilsener', 'producten/alcohol/heineken-krat.jpg', 'Sterke dranken', 'producten/alcohol/bacardi.jpg');
/*!40000 ALTER TABLE `product_categorie` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `recipe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredienten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `beschrijving` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortspec` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `afbeelding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `recipe` DISABLE KEYS */;
REPLACE INTO `recipe` (`id`, `naam`, `ingredienten`, `beschrijving`, `shortspec`, `afbeelding`) VALUES
	(1, 'Spinazietaart', '<h3>ingrediënten</h3><br>\r\n- 450 gram dievries spinazie à la crème<br>\r\n- 5 plakjes diepvries bladerdeeg<br>\r\n- 4 middelgrote eieren<br>\r\n- 200 gram rundergehakt<br>\r\n- 150 gram gemalen pittige kaas<br>\r\n<br>\r\n<h3>Keukenspullen</h3><br>\r\n- quichevorm (26 centimeter doorsnee)', '- Laat de spinazie en deeg ontdooien volgens de aanwijzingen op de verpakking. Verwarm de oven voor op 200 °C of gasovenstand 4.<br>\r\n- Vet de taartvorm in en bekleed met het deeg. Klop de eieren los met peper en zout. Bak in een koekenpan met anti-aanbaklaag het gehakt rul. Breng pittig op smaak met peper en zout. Roer het gehakt, de eieren en kaas door de spinazie. Vul de vorm met het spinaziemengsel.<br>\r\n- Bak de taart in het midden van oven in ca. 40 min. gaar en goudbruin. Neem de taart uit de oven en snijd in vieren.<br>', '- Hoofdgerecht<br>\r\n- 4 personen<br>\r\n- 645 kca<br>\r\n- 15 minuten bereiden<br>\r\n- 40 minuten oventijdl', 'recepten/spinazie_quiche.jpg'),
	(2, 'Spaghetti bolognese', '<h3>ingrediënten</h3><br>\r\n- 1 ui<br>\r\n- 250 gram winterpeen<br>\r\n- 2 stengels bleekselderij<br>\r\n- 2 eetlepels traditionele olijfolie<br>\r\n- 25 gram ongezouten roomboter<br>\r\n- 450 gram mager rundergehakt<br>\r\n- 6 eetlepels runderbouillon van tablet<br>\r\n- 800 gram tomatenblokjes<br>\r\n- 1 eetlepel tomatenpuree<br>\r\n- 300 gram spaghetti', '- Snipper de ui zeer fijn. Schil de winterpeen en snijd in dunne plakjes. Snijd de bleekselderij in kleine stukjes. Verhit de olie en de boter in een pan en bak de ui, winterpeen en bleekselderij 5 min. Voeg het gehakt toe en bak het in ca. 4 min. rul. Voeg de bouillon toe en roer goed.<br>\r\n- Voeg de tomatenblokjes en tomatenpuree bij de saus en roer goed door. Breng op smaak met peper en zout. Laat de saus 30 min. pruttelen op laag vuur. Roer af en toe.<br>\r\n- Bereid de spaghetti volgens de aanwijzingen op de verpakking. Verdeel de spaghetti over borden en schep de saus erover.<br>', '- hoofdgerecht<br>\r\n- 4 personen<br>\r\n- 670 kcal<br>\r\n- 20 minuten bereiden<br>\r\n- 30 minuten wachten', 'recepten/pasta_bolognese.jpg');
/*!40000 ALTER TABLE `recipe` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tussenvoegsel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achternaam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plaats` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefoon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `adres`, `plaats`, `postcode`, `provincie`, `email`, `telefoon`, `password`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Marco', NULL, 'Hensen', 'Kortenaerlaan 27', 'Hilversum', '1215NG', 'Noord-Holland', 'marco.hensen@hotmail.com', '0614533935', '$2y$10$yL2vo4koEKnz.uSy3Aq1Je0MEhnS5evGy3dy0W1TQcU5Jveh7HhU2', 0, NULL, '2019-04-01 12:23:11', '2019-04-01 12:23:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
