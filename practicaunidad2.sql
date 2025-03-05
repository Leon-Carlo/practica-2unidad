CREATE SCHEMA IF NOT EXISTS PersonalDB;
USE PersonalDB;

DROP TABLE IF EXISTS Personal;

CREATE TABLE Personal (
  nombre              VARCHAR(50) NOT NULL,
  apellido_paterno    VARCHAR(50) NOT NULL,
  apellido_materno    VARCHAR(50) NOT NULL,
  edad                VARCHAR(2) NOT NULL,
  telefono            VARCHAR(20),
  email               VARCHAR(100)
);
