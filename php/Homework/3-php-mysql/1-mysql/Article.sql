CREATE DATABASE aptech_php_22_mai;
-- CREATE TABLE aptech_php_22_mai.projects (
-- 	id INT,
-- 	name VARCHAR(255),
--     age INT
-- );
-- INSERT INTO aptech_php_22_mai.projects (id, name, age)
-- VALUES (1, "Hung", 20), (2, "Lan", 30);
CREATE TABLE aptech_php_22_mai.article(
	id INT,
	name_authors VARCHAR(255),
	name_articles VARCHAR(255),
    DOB DATE,
    number_of_likes BIGINT
);
INSERT INTO aptech_php_22_mai.article(id, name_authors, DOB, name_articles, number_of_likes)
VALUES (1, "Hung", '1989-12-30', "Mua xuan", 3000), (2, "Lan", '1995-06-30', "Mua he", 26007),
(3, "Mai", '1999-01-22', "Mua thu", 767646), (4, "Hue",'1994-12-30', "Mua dong", 76236),
(5, "Anh", '1978-12-24', "Bon mua", 87796256);