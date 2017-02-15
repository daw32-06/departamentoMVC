-- Crear usuario si no existe
#CREATE USER IF NOT EXISTS 'usuariodepartamento'@'%' identified by 'paso';

-- Base de datos a crear
CREATE DATABASE IF NOT EXISTS `DAW206_PMMDBdepartamento`;

-- Permiso al usuario creado anteriormente
#grant all privileges on PMMDBdepartamento.* to 'usuariodepartamento'@'%';
#grant all privileges on DAW206_PMMDBdepartamento.* to 'DAW206'@'%';

-- Base de datos a usar
USE DAW206_PMMDBdepartamento;

-- Estructura para la tabla `departamento`
CREATE TABLE departamento (
  codDepartamento varchar(3) NOT NULL PRIMARY KEY,
  descDepartamento varchar(200) NOT NULL,
  volumenDeNegocio float,
    UNIQUE(codDepartamento),
    UNIQUE(descDepartamento)
) ENGINE=InnoDB;

CREATE TABLE usuario(
    codUsuario varchar(20) NOT NULL PRIMARY KEY,
    descUsuario varchar(100) NOT NULL,
    password varchar(64) NOT NULL,
    perfil varchar(15) NOT NULL,
    ultimaConexion DATETIME NOT NULL,
    contadorAccesos int NOT NULL
)ENGINE=InnoDB;
