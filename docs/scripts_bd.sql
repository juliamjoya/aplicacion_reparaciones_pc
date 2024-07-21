-- Creacion de la base de datos
CREATE DATABASE app_reparaciones_pc;

-- Creacion tabla registro_recepcion
CREATE TABLE registro_recepcion (
    id int,
    numero_recibido varchar(200),
    estado_pc varchar(200),
    marca_pc varchar(200),
    nombre_cliente varchar(200),
    telefono_cliente varchar(200),
    codigo_operario varchar(200)
    fecha_recepcion TIMESTAMP
);

-- Creacion tabla registro_operador
CREATE TABLE registro_operador (
    id int,
    numero_recibido varchar(200),
    descripcion_fallos_pc varchar(200),
    repuestos_reparacion varchar(200),
    fecha_revision TIMESTAMP
);

-- Creacion tabla registro_operador
CREATE TABLE usuarios (
    id int,
    nombre_usuario varchar(200),
    nombres varchar(200),
    apellidos varchar(200),
    email varchar(200),
    contrasena varchar(200),
    id_role int,
    fecha_revision TIMESTAMP
);

-- Datos de prueba tabla registro_recepcion
INSERT INTO `registro_recepcion`(`numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`) VALUES ('001','Excelente estado','Ordenador marca Dell','Cliente: Sheldon Cooper','Telefono Cliente: 01800123456','Codigo Operario: CODOPERARIO # 111');
INSERT INTO `registro_recepcion`(`numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`) VALUES ('002','Bueno estado','Lenovo thinkpad','Leonard Hofstadter','123456','CODOPERARIO # 112');
INSERT INTO `registro_recepcion`(`numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`) VALUES ('003','Regular estado','Hewlett Packard Gamer','Rajesh Koothrappali','456789','CODOPERARIO # 113');
INSERT INTO `registro_recepcion`(`numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`) VALUES ('004','Malo estado','Asus ROG FLOW X13','Penny Dayana Rojas','321654','CODOPERARIO # 115');
INSERT INTO `registro_recepcion`(`numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`) VALUES ('005','Critico estado','MSI','Amy Farrah Fowler','987654','CODOPERARIO # 117');
INSERT INTO `registro_recepcion`(`numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`) VALUES ('006','Delicado estado','ACER Gamer','Howard wolowits','142536','CODOPERARIO # 120');
INSERT INTO `registro_recepcion`(`numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`) VALUES ('007','Se requiere atencion inmediata','Lenovo ideapad','Bernadette Rostenkowski','475869','CODOPERARIO # 151');
INSERT INTO `registro_recepcion`(`numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`) VALUES ('008','Buen estado pero con detalles','Dell AlienWare','Priya Koothrappli','748596','CODOPERARIO # 180');
INSERT INTO `registro_recepcion`(`numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`) VALUES ('009','Excelente estado','Asus zenbook','Missy Cooper','172839','CODOPERARIO # 230');
INSERT INTO `registro_recepcion`(`numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`) VALUES ('010','Muy mal estado','Samsung','Alex Jensen','718293','CODOPERARIO # 256');

-- Datos de prueba tabla registro_operacion
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('001','Se pone muy lento el ordenador al abrir 2-3 ventanas','No aplica');
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('002','El monitor esta roto/quebrado','Monitor 13'' para asus rog flow');
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('003','El teclado numerico independiente no funciona','Teclado alfanumerico para Dell Gamer');
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('004','Se reinicia el pc cuando se recalienta','Pasta termica para cambio y mantenimento preventivo a disipadores.');
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('005','Presenta un ruido alto al momento de encenderse','No aplica');
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('006','No enciende el ordenador','Disco Duro de estado solido de 512 GB');
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('007','El ordenador no da imagen/video','Tarjeta grafica nvidia RTX 3050');
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('008','No funcionan los puertos USB','Placa base MSI-32250');
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('009','No da sonido el ordenador','Bocinas para Hewlett Packard 5420');
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('010','El microfono se daño','Microfono generico');
INSERT INTO `registro_operacion`(`numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`) VALUES ('011','La camara web no se ve bien','Camara web generica para Acer');