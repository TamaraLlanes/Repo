

#
# Table structure for table 'categorias'
#

CREATE TABLE  categorias (
  idCAT int(10) unsigned NOT NULL AUTO_INCREMENT,
  nomCAT varchar(50) NOT NULL,
  PRIMARY KEY (idCAT)
);






CREATE TABLE marca (
  idMARCA int(10) unsigned NOT NULL AUTO_INCREMENT,
  nomMARCA varchar(50) NOT NULL,
  PRIMARY KEY (idMARCA),
  UNIQUE KEY nomMARCA (idMARCA,nomMARCA)
);



# Table structure for table 'productos'
#

CREATE TABLE productos (
  idPROD int(10) unsigned NOT NULL AUTO_INCREMENT,
  descPROD varchar(255) NOT NULL,
  precioPROD int(50) unsigned NOT NULL,
  marcaPROD int(50) unsigned NOT NULL,
  categoriaPROD int(50) unsigned NOT NULL,
  paisPROD varchar(50) NOT NULL,
  imgPROD varchar(50) NOT NULL,
  estadoPROD varchar(20) NOT NULL,
   fecha_ingreso timestamp,
  PRIMARY KEY (idPROD),

 
);



#
# Table structure for table 'usuarios'
#

CREATE TABLE usuarios (
  usrNAME varchar(50) NOT NULL,
  usrNOM varchar(50) NOT NULL,
  usrPAS varchar(32) NOT NULL,
  PRIMARY KEY (usrNAME),
  UNIQUE KEY usrNAME (usrNAME)
);



INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('106','Camara  X3 Fujifilm','12345','3','1','china','descargas/Camara  X3 Fujifilm.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('107','Camara D. Canon','12000','2','1','usa','descargas/Camara D. Canon.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('108','Camara D. Nikon','12500','1','1','uk','descargas/Camara D. Nikon.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('109','Camara Fujifilm 1.0','12100','3','1','uk','descargas/Camara Fujifilm 1.0.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('110','Camara Fujifilm P10','13000','3','1','uk','descargas/Camara Fujifilm P10.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('111','Camara Fujifilm XT-10','12900','3','1','usa','descargas/Camara Fujifilm XT-10.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('112','Camara  Fujifilm','10120','3','1','china','descargas/Camara Fujifilm.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('113','Camara Nikon 1.2','12789','1','1','uk','descargas/Camara Nikon 1.2.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('114','Camara Nikon D810','14000','1','1','usa','descargas/Camara Nikon D810.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('115','Camara Nikon P10','12980','1','1','uk','descargas/Camara Nikon P10.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('116','Camara Nikon Retro','14678','1','1','uk','descargas/Camara Nikon.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('119','Lente Fuji','1798','3','3','china','descargas/Lente Fuji.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('120','Lente Min 2','3200','1','3','usa','descargas/Lente Min 2.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('121','Lente Min. Canon','2343','2','3','china','descargas/Lente Min. Canon.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('122','Lente Nikon (2)','2300','1','3','usa','descargas/Lente Nikon (2).jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('123','Lente Nikon','1275','1','3','usa','descargas/Lente Nikon.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('126','Lentes F1','1234','3','3','china','descargas/Lentes F1.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('129','Lentes Nikon','3456','1','3','uk','descargas/Lentes Nikon.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('130','Lentes SET x 6','8900','1','3','usa','descargas/Lentes SET x 6.jpg','ACTIVO');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('132','Tripode Ajustable 2.0','8900','2','2','usa','descargas/Tripode Ajustable 2.0.jpg','BAJA');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('135','Tripode mini 1','3600','1','2','uk','descargas/Tripode mini 1.jpg','BAJA');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('138','Tripode X3','3600','2','2','china','descargas/Tripode X3.jpg','BAJA');
INSERT INTO productos (idPROD, descPROD, precioPROD, marcaPROD, categoriaPROD, paisPROD, imgPROD, estadoPROD) VALUES
	('139','Tripode1','2477','2','2','uk','descargas/Tripode1.jpg','BAJA');


