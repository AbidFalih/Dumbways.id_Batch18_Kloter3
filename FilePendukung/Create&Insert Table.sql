CREATE TABLE book_tb (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(60), category_id INT, writer_id INT, publication_year INT, img text);

CREATE TABLE category_tb (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(60));

CREATE TABLE writer_tb (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(60));

INSERT INTO book_tb
VALUES
("", "Kambing Jantan", 1, 1, 2005, "KambingJantan.jpeg"),
("", "Radikus Makankakus", 1, 1, 2007, "Radikus.jpeg"),
("", "Babi Ngesot", 1, 1, 2008, "BabiNgesot.jpeg"),
("", "Bumi", 2, 2, 2014, "Bumi.jpeg"),
("", "Bulan", 2, 2, 2015, "Bulan.jpeg"),
("", "Matahari", 2, 2, 2016, "Matahari.jpeg"),
("", "Chamber of Secrets", 3, 3, 1998, "Chamber.jpeg"),
("", "Prisoner of Azkaban", 3, 3, 1999, "Azkaban.jpeg"),
("", "Goblet of Fire", 3, 3, 2000, "goblet.jpeg"),
("", "Eragon", 4, 4, 2003, "Eragon.jpeg"),
("", "Eldest", 4, 4, 2005, "Eldest.jpeg"),
("", "Brisingr", 4, 4, 2008, "Brisingr.jpeg");

INSERT INTO category_tb
VALUES
(1, "Comedy"),
(2, "Romance"),
(3, "Fantasy"),
(4, "Fiction");

INSERT INTO writer_tb
VALUES
(1, "Raditya Dika"),
(2, "Tere Liye"),
(3, "J. K. Rowling"),
(4, "Christopher Paolini");