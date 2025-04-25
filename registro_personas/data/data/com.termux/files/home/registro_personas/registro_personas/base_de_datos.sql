CREATE DATABASE IF NOT EXISTS registro_mvc;
USE registro_mvc;


CREATE TABLE persona (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    sexo VARCHAR(20) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    estado_civil VARCHAR(20) NOT NULL
);
