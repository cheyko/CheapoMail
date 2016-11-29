DROP DATABASE IF EXISTS cheapomail;
CREATE DATABASE cheapomail;
USE cheapomail;
    
DROP TABLE IF EXISTS user ;
CREATE TABLE user 
(
    id int(4) NOT NULL auto_increment,
	firstname char(20) NOT NULL default '',
	lastname char(20) NOT NULL default '',
	password char(20) NOT NULL,
	username char(20) NOT NULL,
	PRIMARY KEY (id)

);

CREATE TABLE message
(
    id int(8) NOT NULL auto_increment,
    recipients_id int(8) NOT NULL,
    users_id int(4) NOT NULL,
    subject char(40) NOT NULL default '',
    body text NOT NULL default '',
    date_sent date NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE message_read
(
    id int(8) NOT NULL auto_increment,
    message_id char(20) NOT NULL default '',
    readers_id char (20) NOT NULL default '',
    the_date date NOT NULL,
    PRIMARY KEY(id)
);

LOCK TABLES user WRITE;

INSERT INTO user VALUES (0000, 'gucci', 'mane', 'admin', 'pass');

UNLOCK TABLES;

