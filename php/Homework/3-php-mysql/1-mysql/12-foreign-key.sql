-- FOREIGN KEY --
-- EXERCISE 1 : Create table Role describe role of user in database and 
-- add some values.

-- SUGGESTION :
/* CREATE TABLE aptech_php.apRole
(
    rId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rTitle varchar(255) NOT NULL UNIQUE,
    rState int DEFAULT 1
);
INSERT INTO aptech_php.apRole (rTitle)
VALUES ('Administrator'),('Copywriter');
 */
CREATE TABLE mai_my_project.role(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255)
);
INSERT INTO mai_my_project.role ( name)
VALUES ("Mai"), ("Lan");

-- EXERCISE 2 : 
/* 
Change column Email in User table to NOT NULL UNIQUE.
Set column Role in User table default to 2.
Set column State in User table default to 1.
Set colum uCreatedDate default is moment create data. 
Add FOREIGN KEY Role to Role table. 
Then add some new values, no need to insert into columns have default value.  
*/
-- SUGGESTION :
/* ALTER TABLE aptech_php.apUser
MODIFY COLUMN uEmail varchar(255) NOT NULL UNIQUE;
ALTER TABLE aptech_php.apUser
MODIFY COLUMN uState int DEFAULT 1, 
MODIFY COLUMN uRole int DEFAULT 2;
ALTER TABLE aptech_php.apUser
MODIFY COLUMN uCreatedDate datetime DEFAULT NOW();
ALTER TABLE aptech_php.apUser
ADD FOREIGN KEY (uRole) REFERENCES aptech_php.apRole(rId); 
INSERT INTO aptech_php.apUser (uLastName,uFirstName,uEmail)
VALUES ('Ford','Henry','henry.ford@gmail.com');
*/
-- Bảng tham chiếu gọi là bảng mẹ, còn bảng chứa khóa ngoại gọi là bảng con. 
-- Khóa ngoại trong bảng con thường tham chiếu tới khóa chính PRIMARY KEY 
-- trong bảng mẹ.
-- Có thể dùng từ khóa CREAT hoặc ALTER
ALTER TABLE mai_my_project.table
	MODIFY COLUMN email VARCHAR(255) NOT NULL UNIQUE;
ALTER TABLE mai_my_project.table 
	MODIFY COLUMN id int DEFAULT 2;

ALTER TABLE mai_my_project.table 
	ADD dob DATE;	
ALTER TABLE mai_my_project.table 
	MODIFY COLUMN dob datetime DEFAULT  NOW();
-- ALTER TABLE mai_my_project.role
-- ADD CONSTRAINT  fk_ten
-- FOREIGN KEY (id, name) REFERENCES mai_my_project.table (id, name);

