# inventario-php

SQL:
CREATE TABLE pais(idPais int NOT NULL, nombrePais varchar(80));
ALTER TABLE pais ADD PRIMARY KEY(idPais);
CREATE TABLE departamento(idDep int NOT NULL, nombreDep varchar(80), idPais int);
ALTER TABLE departamento ADD PRIMARY KEY(idDep);
CREATE TABLE region(idReg int NOT NULL, nombreReg varchar(60), idDep int);
ALTER TABLE region ADD PRIMARY KEY(idReg);
CREATE TABLE campers(idCamper int NOT NULL, nombreCamper varchar(50), apellidoCamper varchar(50), fechaNac date, idReg int);
ALTER TABLE campers ADD PRIMARY KEY(idCamper);
ALTER TABLE campers ADD CONSTRAINT idReg_campers FOREIGN KEY (idReg) REFERENCES region (idReg);
ALTER TABLE region ADD CONSTRAINT idDep_regions FOREIGN KEY (idDep) REFERENCES departamento(idDep);
ALTER TABLE departamento ADD CONSTRAINT idPais_dep FOREIGN KEY (idPais) REFERENCES pais(idPais);

NOMBRE CAMPER: DANIELA ANDREA GOMEZ ABRIL 



