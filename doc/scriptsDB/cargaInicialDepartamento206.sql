-- Base de datos a usar
USE DAW206_JJRIDBdepartamento;

-- Volcado de datos para la tabla `departamento`
INSERT INTO departamento(codDepartamento,descDepartamento,volumenDeNegocio, disabled) VALUES
('COM', 'compras',100,null),
('VEN', 'ventas',34,null),
('MAR', 'marketing',25,null),
('DEV', 'desarrolladores', 500,null),
('MAN', 'mantenimiento', 200,null),
('LOG', 'logistica', 500,null),
('NET', 'comunicaciones', 400,null),
('ANA', 'analistas', 200,null),
('TST', 'testers',500,null),
('PRU', 'Departamento de prueba',0, now());

INSERT INTO usuario(codUsuario,descUsuario,password,perfil,ultimaConexion,contadorAccesos)VALUES
('heraclio', 'heracliooo',SHA2('paso',256),'Administrador','2016-12-01 23:59:59',1),
('JOPERFER', 'Pepe',SHA2('paso',256),'Administrador','2016-12-01 23:59:59',1),
('VICENGAL', 'Pepe1',SHA2('paso',256),'Usuario','2016-12-01 23:59:59',1),
('TEPASAS', 'Pepe2',SHA2('paso',256),'Usuario','2016-12-01 23:59:59',1);
