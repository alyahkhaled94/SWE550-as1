# Assigment1
using php Language and html using notpad frame work connected with Mysql database and docker container.


My Sql Data query:

--------------------------------------

 mysql LocalServer
 CREATE TABLE members (
 names CHAR(20) DEFAULT ''     NOT NULL,
 ID  INT UNSIGNED  DEFAULT '0000' NOT NULL,    PRIMARY KEY(ID));

INSERT INTO `members` (`names`,`ID`) VALUES ('Mohammed','12345');
INSERT INTO `members` (`names`,`ID`) VALUES ('Saad','12346');
INSERT INTO `members` (`names`,`ID`) VALUES ('Ibrahim','12347');
INSERT INTO `members` (`names`,`ID`) VALUES ('Khaled','12348');

SELECT * FROM shop ORDER BY ID;

+---------+--------+
|names    |   ID  |
+---------+---------+
|Mohammed | 12345 |
|Saad     | 12346 |
|Ibrahim  | 12347 |
|Khaled   | 12348 |
+---------+--------+



docker-compose tool to containerize a PHP web app that uses the MySQL database.
Both the web app and the database will be containerized in two separate containers - one for PHP with Apache and the other with MySQL
