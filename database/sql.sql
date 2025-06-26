

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT Primary Key,
  `username` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;


LOCK TABLES `admin` WRITE;

INSERT INTO `admin` VALUES (1,'sarita','sarita');

UNLOCK TABLES;



DROP TABLE IF EXISTS `student_data`;

CREATE TABLE `student_data` (
  `id` int Primary key AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `class` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `rollno` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL PRIMARY KEY
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;


LOCK TABLES `student_data` WRITE;

UNLOCK TABLES;



DROP TABLE IF EXISTS `user_mark`;

CREATE TABLE `user_mark` (
  `id`int Primary key AUTO_INCREMENT ,
  `rollno` int NOT NULL PRIMARY KEY,
  `class` int NOT NULL,
  `nepali1` int NOT NULL,
  `english1` int NOT NULL,
  `math1` int NOT NULL,
  `science1` int NOT NULL,
  `social1` int NOT NULL,
  `nepali2` int NOT NULL,
  `english2` int NOT NULL,
  `math2` int NOT NULL,
  `science2` int NOT NULL,
  `social2` int NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;




LOCK TABLES `user_mark` WRITE;

INSERT INTO `user_mark` VALUES (2,12,12,25,30,40,50,60,40,50,60,70,10),(3,10,10,25,21,1,2,2,2,2,2,2,2);

UNLOCK TABLES;
