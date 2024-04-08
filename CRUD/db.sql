CREATE DATABASE db_crud;

USE db_crud;

CREATE TABLE tbl_books(
  Book_ID INT(11) NOT NULL AUTO_INCREMENT,
  Title VARCHAR(100) NOT NULL,
  Author VARCHAR(100) NOT NULL,
  Book_Type VARCHAR(100) NOT NULL,
  Book_Description VARCHAR(100) NOT NULL,
  Created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
  PRIMARY KEY(Book_ID)
);