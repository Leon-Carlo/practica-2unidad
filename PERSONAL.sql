CREATE SCHEMA IF NOT EXISTS PERSONAL;
USE PERSONAL;

DROP TABLE IF EXISTS PERSONAL;
CREATE TABLE PERSONAL (
  nombre               VARCHAR(50) NOT NULL,
  apellido paterno              VARCHAR(50) NOT NULL,
  apellido materno            VARCHAR(50) NOT NULL,
  telefono           VARCHAR(20),
  email              VARCHAR(100),
);
