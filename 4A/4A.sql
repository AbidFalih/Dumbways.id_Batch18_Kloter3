--Menampilkan seluruh data dari table book
SELECT * FROM book_tb;

--Menampilkan seluruh data book, category dan penulis
SELECT * FROM book_tb INNER JOIN category_tb t2 ON category_id = t2.id INNER JOIN writer_tb t3 ON writer_id = t3.id;

--Menampilkan seluruh data penulis
SELECT * FROM writer_tb;

--Mampilkan spesifik book beserta category maupun penulis.
SELECT t1.name, t2.name, t3.name FROM book_tb t1 INNER JOIN category_tb t2 ON category_id = t2.id INNER JOIN writer_tb t3 ON writer_id = t3.id WHERE t1.name LIKE "%of%";


--https://stackoverflow.com/questions/14290857/sql-select-where-field-contains-words
--https://www.mysqltutorial.org/mysql-inner-join.aspx/
--https://stackoverflow.com/questions/6544822/how-to-select-fields-from-two-tables