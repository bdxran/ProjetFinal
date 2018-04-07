DROP DATABASE IF EXISTS ultra_gaming;

CREATE DATABASE ultra_gaming;

USE ultra_gaming;

-- Structure table game:
-- ---------------------

DROP TABLE IF EXISTS Game;
CREATE TABLE Game (
	gnum INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nameGame VARCHAR(50) NOT NULL,
	editeur VARCHAR(100) NOT NULL,
	plateform VARCHAR(50) NOT NULL,
	prix DECIMAL(10,2) NOT NULL,
	pegi INT(2) NOT NULL,
	genre VARCHAR(255) NOT NULL,
	jacket VARCHAR(100) NOT NULL,
	date_parution DATE NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=latin1;

-- Structure table Customer:
-- -------------------------

DROP TABLE IF EXISTS Customers;
CREATE TABLE Customers (
	cnum INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	pseudo VARCHAR(50) NOT NULL UNIQUE,
	`password` VARCHAR(255) NOT NULL,
	mail VARCHAR(255) NOT NULL UNIQUE,
	adress VARCHAR(255) NOT NULL,
	naissance DATE NOT NULL,
	genre VARCHAR(10) NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=latin1;

-- Structure table Orders:
-- -------------------------

DROP TABLE IF EXISTS Orders;
CREATE TABLE Orders (
	onum INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idUser INT(11) NOT NULL REFERENCES Customers(idUser),
	idGame INT(11) NOT NULL REFERENCES Game(idGame),
	prix DECIMAL(10,2) NOT NULL,
	odate DATE NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=latin1;

-- Structure table Admin:
-- -------------------------

DROP TABLE IF EXISTS Admin;
CREATE TABLE Admin (
	anum INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	pseudo VARCHAR(50) NOT NULL UNIQUE,
	`password` VARCHAR(255) NOT NULL,
	mail VARCHAR(255) NOT NULL UNIQUE
)ENGINE=INNODB DEFAULT CHARSET=latin1;
