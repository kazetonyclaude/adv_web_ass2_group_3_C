CREATE DATABASE uss_db;

USE uss_db;

CREATE TABLE requests(
    postedOn TIMESTAMP ,
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    telephone VARCHAR(20),
    problem VARCHAR(100),
    level_priority VARCHAR(20),
    description TEXT
);
