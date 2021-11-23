DROP DATABASE IF EXISTS resource_hub;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE resource_hub; 
USE resource_hub;

CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT,
    email varchar(255) NOT NULL, 
    fullname varchar(255) NOT NULL, 
    major varchar(255) NOT NULL, 
    yeargroup varchar(255) NOT NULL, 
    password varchar(255) NOT NULL, 
    PRIMARY KEY(id)
);

CREATE TABLE files (
    id int(11) NOT NULL AUTO_INCREMENT,
    user_id int(11) NOT NULL,
    filename varchar(255),
    uploaded_by varchar(255), 
    course varchar(255) NOT NULL, 
    file varchar(255),
    date DATE DEFAULT CURRENT_TIMESTAMP(),
    PRIMARY KEY(id), 
);

INSERT INTO `users` (`id`, `email`, `fullname`, `major`, `yeargroup`, `password`) VALUES 
(NULL, 'lorraine@example.com', 'Lorraine Makuyana', 'CE', '2022', '12345678'), 
(NULL, 'joana@example.com', 'Joana Teye', 'CE', '2022', '87654321');