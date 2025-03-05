CREATE SCHEMA IF NOT EXISTS BD_Proveedores;
USE BD_Proveedores;

DROP TABLE IF EXISTS Proveedores;
CREATE TABLE Proveedores (
  nombre               VARCHAR(50) NOT NULL,
  apellido paterno              VARCHAR(50) NOT NULL,
  apellido materno            VARCHAR(50) NOT NULL,
  telefono           VARCHAR(20),
  email              VARCHAR(100),
);
