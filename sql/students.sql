/*
CREATE DATABASE web;
USE web;
*/

DROP TABLE student;

CREATE TABLE student (
  cislo VARCHAR(8) NOT NULL PRIMARY KEY,
  krestni VARCHAR(20) NOT NULL,
  prijmeni VARCHAR(20) NOT NULL,
  rocnik INT(1)
);

INSERT INTO student VALUES('A00001','Ivan', 'Kachna',3);
INSERT INTO student VALUES('A00002','Karel','Sobota',5);
INSERT INTO student VALUES('A00003','Pepa', 'Vodička',1);
INSERT INTO student VALUES('A00004','Standa','Máslo',9);

/*
GRANT ALL ON web.* to web@localhost identified by 'web';
*/
