-- Base de datos a usar
USE DAW206_PMMDBdepartamento;

-- Volcado de datos para la tabla `departamento`
INSERT INTO departamento(codDepartamento,descDepartamento,volumenDeNegocio) VALUES
('COM', 'compras',100),
('VEN', 'ventas',34),
('MAR', 'marketing',25);
INSERT INTO usuario(codUsuario,descUsuario,password,perfil,ultimaConexion,contadorAccesos)VALUES
('heraclio', 'heracliooo',SHA2('paso',256),'Administrador','2016-12-01 23:59:59',1),
('JOPERFER', 'Pepe',SHA2('paso',256),'Administrador','2016-12-01 23:59:59',1),
('VICENGAL', 'Pepe1',SHA2('paso',256),'Usuario','2016-12-01 23:59:59',1),
('TEPASAS', 'Pepe2',SHA2('paso',256),'Usuario','2016-12-01 23:59:59',1);
