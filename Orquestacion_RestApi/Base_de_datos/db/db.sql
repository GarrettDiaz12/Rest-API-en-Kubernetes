SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

drop database if exists `isc`;

create database isc;
 
use isc;

drop table if exists `materias`; 

CREATE TABLE `materias` (
  `clave` varchar(30) NOT NULL,
  `materia` varchar(60) NOT NULL,
  `semestre` int(10) NOT NULL,
  `creditos` int(10) NOT NULL
);

INSERT INTO `materias` (`clave`, `materia`, `semestre`, `creditos`) VALUES
('ACF0901', 'Calculo diferencial', 1, 5),
('AEF1041', 'Matematicas discretas', 1, 5),
('AED1285', 'Fundamentos de programacian', 1, 5),
('SCH1024', 'Taller de administracian', 1, 4),
('ACC0906', 'Fundamentos de investigacian', 1, 4),
('ACA0907', 'Taller de atica', 1, 4),

('ACF0902', 'Calculo integral', 2, 5),
('ACF0903', 'Algebra lineal', 2, 5),
('AED1286', 'Programación orientada a objetos', 2, 5),
('AEC1008', 'Contabilidad financiera', 2, 5),
('AEC1058', 'Quimica', 2, 4),
('AEF1052', 'Probabilidad y estadistica', 2, 5),

('ACF0904', 'Calculo vectorial', 3, 5),
('SCC1013', 'Investigacion de operaciones', 3, 4),
('AED1026', 'Estructura de datos', 3, 5),
('SCC1005', 'Cultura empresarial', 3, 4),
('ACD0908', 'Desarrollo sustentable', 3, 5),
('SCF1006', 'Fisica general', 3, 5),

('ACF0905', 'Ecuaciones diferenciales', 4, 5),
('AEF1031', 'Fundamentos de bases de datos', 4, 5),
('SCD1027', 'Topicos avanzados de programacion', 4, 5),
('SCD1022', 'Simulacion', 4, 5),
('SCC1017', 'Métodos numericos', 4, 4),
('SCD1018', 'Principios electricos y aplicaciones digitales', 4, 5),

('SCC1007', 'Fundamentos de ingenieria de software', 5, 4),
('SCA1025', 'Taller de bases de datos', 5, 4),
('AEC1061', 'Sistemas operativos', 5, 4),
('SCC1010', 'Graficacion', 5, 4),
('AEC1034', 'Fundamentos de telecomunicaciones', 5, 4),
('SCC1010', 'Arquitectura de computadoras', 5, 4),

('SCD1011', 'Ingeniería desoftware', 6, 5),
('SCB100', 'Administracion de bases de datos', 6, 5),
('SCD1015', 'Lenguajes y Automatas I', 6, 5),
('SCA1026', 'Taller de sistemas operativos', 6, 4),
('SCD1021', 'Redes de computadora', 6, 5),
('SCC1014', 'Lenguajes de interfaz', 6, 4),
('ACA ', 'Actividades complementarias', 6, 5),

('SCG1009', 'Gestion de proyectos de software', 7, 6),
('DAH2101', 'Bases de datos avanzadas', 7, 4),
('SCD1016', 'Lenguajes y Autómatas II', 7, 5),
('ACA0909', 'Taller de investigacion I', 7, 4),
('SCD1004', 'Conmutacion y enrutamiento de redes de datos', 7, 5),
('SCC1023 ', 'Sistemas programables', 7, 4),

('DAH2103', 'Ciencia de datos', 8, 4),
('DAH2103', 'Computo y servicios en la nube', 8, 4),
('DAH2102', 'Desarrollo de aplicaciones para dispositivos moviles', 8, 4),
('ACA0910', 'Taller de investigacion II', 8, 4),
('SCA1002', 'Administracion de redes', 8, 4),
('SCC1019', 'Programacion lógica y funcional', 8, 4),
('S1', 'Servicio Social', 8, 10),

('AEB1055', 'Programacion web', 9, 5),
('DAH2105', 'Desarrollo de aplicaciones empresariales', 9, 4),
('DAD2106', 'Laboratorio para despliegue de aplicaciones empresariales', 9, 5),
('SCC1012', 'Inteligencia artificial', 9, 4),
('R1', 'Residencia', 9, 10);




