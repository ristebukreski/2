--
-- Script was generated by Devart dbForge Studio for MySQL, Version 6.3.358.0
-- Product home page: http://www.devart.com/dbforge/mysql/studio
-- Script date 23.12.2016 18:06:12
-- Server version: 5.5.8-log
-- Client version: 4.1
--


-- 
-- Disable foreign keys
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Set SQL mode
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Set default database
--
USE login;

--
-- Definition for table roles
--
DROP TABLE IF EXISTS roles;
CREATE TABLE roles (
  IdRole INT(11) NOT NULL AUTO_INCREMENT,
  RoleName VARCHAR(50) NOT NULL,
  Description VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (IdRole)
)
ENGINE = INNODB
AUTO_INCREMENT = 4
AVG_ROW_LENGTH = 5461
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Definition for table users
--
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  IdUser INT(11) NOT NULL AUTO_INCREMENT,
  Username VARCHAR(255) NOT NULL,
  Password VARCHAR(255) NOT NULL,
  IdRole INT(11) DEFAULT NULL,
  PRIMARY KEY (IdUser),
  CONSTRAINT FK_Users_roles_IdRole FOREIGN KEY (IdRole)
    REFERENCES roles(IdRole) ON DELETE RESTRICT ON UPDATE RESTRICT
)
ENGINE = INNODB
AUTO_INCREMENT = 4
AVG_ROW_LENGTH = 5461
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Dumping data for table roles
--
INSERT INTO roles VALUES
(1, 'Admin', NULL),
(2, 'User', NULL),
(3, 'Operator', NULL);

-- 
-- Dumping data for table users
--
INSERT INTO users VALUES
(1, 'momak', '0000', 2),
(2, 'admin', '0000', 1),
(3, 'operator', '0000', 3);

-- 
-- Restore previous SQL mode
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Enable foreign keys
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;