-- SELECT --
-- EXERCISE 1 : Display all of user in your database.
-- SUGGESTION :
/* SELECT *
FROM aptech_php.apUser; */

SELECT *
FROM mai_my_project.table;

-- EXERCISE 2 : Display list user role column.
-- SUGGESTION : 
/* SELECT DISTINCT uRole
FROM aptech_php.apUser; */

SELECT DISTINCT name
FROM mai_my_project.table;
-- lựa chọn các cột khác nhau

-- EXERCISE 3 : Display top 3 user in your database.
/* SELECT *
FROM aptech_php.apUser 
LIMIT 3; */

SELECT *
FROM mai_my_project.table
LIMIT 3;

-- EXERCISE 4 : Display users who have role = 1 and state = 1;
/* SELECT *
FROM aptech_php.apUser
WHERE uRole = 1 and uState = 1; */

SELECT *
FROM mai_my_project.table
WHERE id = 1;  

