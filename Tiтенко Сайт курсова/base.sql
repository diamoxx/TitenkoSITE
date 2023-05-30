DROP TABLE IF EXISTS `abonements`;
CREATE TABLE `abonements` (
                              `id` int NOT NULL AUTO_INCREMENT,
                              `type` text NOT NULL,
                              `user_id` int NOT NULL,
                              `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
                              `price` int NOT NULL,
                              PRIMARY KEY (`id`)
);
LOCK TABLES `abonements` WRITE;
UNLOCK TABLES;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
                         `id` int NOT NULL AUTO_INCREMENT,
                         `email` varchar(64) NOT NULL,
                         `fio` varchar(32) NOT NULL,
                         `phone` varchar(64) NOT NULL,
                         `password` text NOT NULL,
                         PRIMARY KEY (`id`)
);
LOCK TABLES `users` WRITE;
UNLOCK TABLES;