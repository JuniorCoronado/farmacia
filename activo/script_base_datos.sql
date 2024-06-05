

create table PRODUCTOS
(
id int auto_increment primary key,
codigo varchar(50) unique not null,
nombre_comercial varchar(40),
nombre_generico varchar(40) default 'Nombre generico',
descripcion varchar(120),
presentacion varchar(80) default '1 Unidad',
marca varchar (25) default 'Marca' not null,
stock int, 
precio decimal(7,2) default '0.00', 
imagen longblob,
nombre_imagen varchar(100) default 'sinimagenproducto.png'
);

ALTER TABLE PRODUCTOS ADD FULLTEXT nombre_producto (nombre_comercial, nombre_generico);
ALTER TABLE PRODUCTOS ADD FULLTEXT(nombre_generico);



insert into PRODUCTOS(
    `codigo`,
    `nombre_comercial`,
    `nombre_generico`,
    `descripcion`,
    `presentacion`,
    `marca`,
    `stock`,
    `precio`,
    `imagen`,
    `nombre_imagen`
    )
values
('123456', 'ALCOHOL', 'sin nombre generico' , 'Indicado como antiseptico que elimina gran cantidad de bacterias cuando es aplicado sobre la piel, superficies u objetos', '1 Unidad', 'JOHNSONS', '20', '10.8', null ,'alcohol.png'),
('123654', 'JABON NIVEA', 'sin nombre generico', 'En tus habitos de higiene personal agrega este jabon de tocador Dove. Este jabon es la mejor forma de hidratar tu piel i', '1 Unidad', 'NIVEA', '35', '6.5', null ,'jabonniveabarra.jpg'),
('321456', 'PRESTOBARBA GILLETTE ICE', 'sin nombre generico', '3 hojas, Te deja calvo de una sola pasada, compralo', '1 Unidad', 'GILLETTE', '40', '6.9', null,'prestobarbaice.png'),
('14789632', 'CONDONES DUREX', 'sin nombre generico', 'Creo que esto no merece descripción', '1 Unidad', 'BAYER', '100', '4.5', null ,'durex.png'),
('5959522', 'PAÑALES PARA BEBE', 'sin nombre generico', 'Para tus bebes que los quieres mucho', '1 Unidad', 'HEAD AND SHOULDERS', '47', '9.0', null ,'johnsonsbaby.jpg'),
('6669955', 'PARACETAMOL', 'sin nombre generico', 'lo que cura todo', '1 Unidad', 'PALMOLIVE', '52', '2.4', null,'paracetamol.jpg'),
('789632', 'CURITAS-BANDITAS', 'sin nombre generico', 'pues curitas', '1 Unidad', 'SEDAL', '23', '1.2', null,'curitasbanditas.png'),
('78454225','TE VERDE', 'sin nombre generico', 'para bajar de peso y malograrte el estomago', '1 Unidad', 'ASEPXIA', '77', '2.8', null,'teverde.png'),
('753951', 'AMOXICILINA', 'sin nombre generico', 'es como el parecetamol pero mas barato', '1 Unidad', 'APPLE', '30', '1.4', null,'amoxicilina.jpg'),
('432345', 'ALCOHOL', 'ETANOL' , 'Elimina bacterias cuando es aplicado sobre la piel, superficies u objetos', '1 Unidad', 'BAYER', '2', '8.5', null,'etanol.png');


