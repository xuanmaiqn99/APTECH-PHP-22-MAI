CREATE DATABASE aptech_php_22_5;

CREATE TABLE aptech_php_22_5.users(
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE
);

SELECT * FROM aptech_php_22_5.users;

INSERT INTO aptech_php_22_5.users( name, email)
VALUES ('mai', 'xuanmaiqn1999@gmail.com'), ('nam', 'nam@gmail.com'),
('hung','hung@gmail.com'), ('han', 'han@gmail.com'), ('bui', 'bui@gmail.com');

SELECT *FROM aptech_php_22_5.users;

CREATE TABLE aptech_php_22_5.passports(
	id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(255),
    ngay_cap DATE,
    user_id INT
);

INSERT INTO aptech_php_22_5.passports(code, ngay_cap, user_id)
VALUES ('36737ghcv', '2017-12-25', 4), ('6ffh7gd', '2016-03-27', 5),
('g77dgf', '2019-12-30', 1), ('jhgeygd34', '2018-05-17', 2),
('hgdy658', '2018-08-12',3); 

SELECT users.id as user_id, users.name, users.email, passports.id as passports_id, 
passports.code, passports.ngay_cap  
FROM aptech_php_22_5.users
INNER JOIN aptech_php_22_5.passports ON 
users.id =  passports.user_id
WHERE passports.user_id=1;
