CREATE DATABASE library;

USE library;
CREATE TABLE collection (
idCol BIGINT(20) NOT NULL AUTO_INCREMENT,
title VARCHAR(512),
author VARCHAR(512),
publication VARCHAR(256),
`status` ENUM('Available', 'Borrowed') NOT NULL DEFAULT 'Available',
`subject` TEXT,
PRIMARY KEY (idCol),
KEY IX_TITLE (title),
KEY IX_AUTHOR (author),
FULLTEXT  IX_SUBJECT (`subject`)
) ENGINE=INNODB;

CREATE TABLE users (
idUser BIGINT(20) NOT NULL AUTO_INCREMENT,
userName VARCHAR(64) NOT NULL,
userPassword VARCHAR(32),
email VARCHAR(128),
userStatus VARCHAR(64),
userType VARCHAR(64),
createDate DATE,
PRIMARY KEY (idUser),
KEY IX_USERNAME (userName)
) ENGINE=INNODB;

CREATE TABLE lending (
idLen BIGINT(20) NOT NULL AUTO_INCREMENT,
idCol BIGINT(20) NOT NULL,
idUser BIGINT(20) NOT NULL,
outDate DATE,
scheduleDelivaryDate DATE,
delivaryDate DATE,
PRIMARY KEY (idLen),
KEY IX_SCHEDULE_DATE (scheduleDelivaryDate)
) ENGINE=INNODB;

CREATE TABLE penalty_ticket (
idTck BIGINT(20) NOT NULL AUTO_INCREMENT,
idUser BIGINT(20) NOT NULL,
idLen BIGINT(20) NOT NULL,
ticketOpenDate DATE,
ticketCloseDate DATE,
ticketStatus ENUM('Open', 'Closet'),
ticketValue DECIMAL(10,2),
PRIMARY KEY (idTck),
KEY IX_USER (idUser),
KEY IX_TICKET_STATUS (ticketStatus)
) ENGINE=INNODB;