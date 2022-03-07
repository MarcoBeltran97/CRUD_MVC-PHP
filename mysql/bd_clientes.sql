CREATE DATABASE CLIENTE_PHP;
USE CLIENTE_PHP;

--
-- Estructura de tabla `cliente`
--

CREATE TABLE `cliente` (
  `IdCliente` int not null auto_increment,
  `NombreCliente` varchar(60) DEFAULT NULL,
  `Cargo` varchar(60) DEFAULT NULL,
  `Direccion` varchar(120) DEFAULT NULL,
  `Ciudad` varchar(30) DEFAULT NULL,
  `Pais` varchar(30) DEFAULT NULL,
  `Telefono` varchar(48) DEFAULT NULL,
  primary key (`IdCliente`)
);

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`NombreCliente`, `Cargo`, `Direccion`, `Ciudad`, `Pais`, `Telefono`) VALUES
('Maria Anders', 'Representante de ventas', 'Obere Str. 57', 'Berlín', 'Alemania', '030-0074321'),
('Martín Sommer', 'Propietario', 'C/ Araquil, 67', 'Madrid', 'España', '(91) 555 22 82'),
('Laurence Lebihan', 'Propietario', '12, rue des Bouchers', 'Marsella', 'Francia', '91.24.45.40'),
('Janine Labrune', 'Propietario', '67, rue des Cinquante Otages', 'Nantes', 'Francia', '40.67.88.88'),
('Ann Devon', 'Agente de ventas', '35 King George', 'Londres', 'Reino Unido', '(71) 555-0297'),
('Roland Mendel', 'Gerente de ventas', 'Kirchgasse 6', 'Graz', 'Austria', '7675-3425'),
('Peter Franken', 'Gerente de marketing', 'Berliner Platz 43', 'München', 'Alemania', '089-0877310'),
('Carine Schmitt', 'Gerente de marketing', '54, rue Royale', 'Nantes', 'Francia', '40.32.21.21'),
('Paolo Accorti', 'Representante de ventas', 'Via Monte Bianco 34', 'Torino', 'Italia', '011-4988260'),
('Matti Karttunen', 'Prop./Asistente marketing', 'Keskuskatu 45', 'Helsinki', 'Finlandia', '90-224 8858'),
('Zbyszek Piestrzeniewicz', 'Propietario', 'ul. Filtrowa 68', 'Warszawa', 'Polonia', '(26) 642-7012');

-- Resultado --
SELECT * FROM CLIENTE;