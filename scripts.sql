-- CREATE TABLE

CREATE TABLE persona (
    idpersona  INT AUTO_INCREMENT PRIMARY KEY,
    cedula INT NOT NULL,
    nombre VARCHAR(50),
    apellidos VARCHAR(100),
    correo VARCHAR(80),
    direccion VARCHAR(200),
    telefono VARCHAR(50),
    fechaNacimiento DATE
) default charset utf8 comment '';


-- INSER DATA

INSERT INTO persona (cedula, nombre, apellidos, correo, direccion, telefono, fechaNacimiento)
VALUES (
    1075660396, 
    "Sergio", 
    "Trujillo del Valle", 
    "strujillodv@gmail.com", 
    "+573144000233",
    "20-02-1990"
    );

INSERT INTO persona (cedula, nombre, apellidos, correo, direccion, telefono, fechaNacimiento)
VALUES (
    1024456789, 
    "Yury", 
    "Tavera Gomez", 
    "almatysta@gmail.com", 
    "+573213850184",
    "08-11-1993"
    );

INSERT INTO persona (cedula, nombre, apellidos, correo, direccion, telefono, fechaNacimiento)
VALUES (
    35423813, 
    "Johanna", 
    "Trujillo del Valle", 
    "johannatrujillo@gmail.com", 
    "+573108867890",
    "08-01-1981"
    );
