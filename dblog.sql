CREATE TABLE `log` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `page_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `referrer_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
 `user_ip_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `user_agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;