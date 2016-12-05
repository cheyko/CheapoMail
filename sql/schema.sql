DROP DATABASE IF EXISTS cheapomail;
CREATE DATABASE cheapomail;
USE cheapomail;
    
DROP TABLE IF EXISTS user ;
CREATE TABLE user 
(
    id int(4) NOT NULL auto_increment,
	firstname char(20) NOT NULL default '',
	lastname char(20) NOT NULL default '',
	username char(20) NOT NULL,
    password_digest VARCHAR(64),
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

LOCK TABLE user WRITE;

INSERT INTO user(firstname, lastname, username, password_digest) VALUES ('Ajax', 'team', 'admin', MD5('password'));

INSERT INTO user(firstname, lastname, username, password_digest) VALUES ('Ajax2', 'team2', 'admin2', 'MD5(password)');

UNLOCK TABLES;

