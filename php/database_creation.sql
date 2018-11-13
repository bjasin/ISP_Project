DROP TABLE IF EXISTS USERS;

CREATE TABLE USERS (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
image_path VARCHAR(60),
radius DOUBLE(20,6),
circleX DOUBLE(20,6),
circleY DOUBLE(20,6),
caption VARCHAR(30) NOT NULL);
