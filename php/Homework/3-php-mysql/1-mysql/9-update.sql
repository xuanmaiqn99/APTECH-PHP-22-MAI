-- UPDATE --
-- EXERCISE 1 : Set state = -1 for user who has Id = 4 ;
-- SUGGESTION :
/* UPDATE aptech_php.apUser 
SET uState = -1 
WHERE uId = 4; */

SET SQL_SAFE_UPDATES=0;
UPDATE mai_my_project.table 
SET name = 'Nam' 
WHERE id = 2;

