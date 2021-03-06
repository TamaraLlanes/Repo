# insertar un registro USUARIOS
INSERT INTO usuarios
(usrNAME,usrNOM,usrPAS)
VALUES
('Admin','Administrador','admin');

INSERT INTO usuarios
(usrNAME,usrNOM,usrPAS)
VALUES
('Pepe','Pedro Perez','123');

#insertar un PRODUCTO
INSERT INTO productos
(idPROD,descPROD,precioPROD,marcaPROD,categoriaPROD,paisPROD,imgPROD)
VALUES
(null,'AAA','1','1','1','China','url');

INSERT INTO productos
(idPROD,descPROD,precioPROD,marcaPROD,categoriaPROD,paisPROD,imgPROD)
VALUES
(null,'BBB','2','2','2','USA','url');

INSERT INTO productos
(idPROD,descPROD,precioPROD,marcaPROD,categoriaPROD,paisPROD,imgPROD)
VALUES
(null,'CCC','3','3','3','UK','url');

#insertar una MARACA
INSERT INTO marca 
(idMARCA,nomMARCA)
VALUES
(null,'Nikon');

INSERT INTO marca 
(idMARCA,nomMARCA)
VALUES
(null,'Canon');


INSERT INTO marca 
(idMARCA,nomMARCA)
VALUES
(null,'Fujifilm');

#insertar una CATEGORIA
INSERT INTO categorias
(idCAT,nomCAT)
VALUES
(null, 'Cámaras Digitales');

INSERT INTO categorias
(idCAT,nomCAT)
VALUES
(null,'Cámaras SLR‎ ');

INSERT INTO categorias
(idCAT,nomCAT)
VALUES
(null,'Cámaras TRL');

#CONSULTAS
# Nombre de marca 
SELECT  p.idPROD,p.descPROD,p.precioPROD,m.nomMARCA,p.categoriaPROD,p.paisPROD,p.imgPROD
FROM productos AS p
INNER JOIN marca AS m
ON p.idPROD=m.idMARCA

#Nombre de categoria
SELECT  p.idPROD,p.descPROD,p.precioPROD,p.marcaPROD,c.nomCAT,p.paisPROD,p.imgPROD
FROM productos AS p
INNER JOIN categorias AS c
ON p.idPROD= c.idCAT


#SELECCIONAR MARCA Y CATEGORIA en tabla productos y mostrar su nombre 
SELECT p.idPROD,p.descPROD,p.precioPROD,m.nomMARCA,c.nomCAT,p.paisPROD,p.imgPROD
FROM productos AS p
INNER JOIN marca AS m
ON p.marcaPROD= m.idMARCA
INNER JOIN categorias AS c
ON p.categoriaPROD = c.idCAT;

#Para el combo Categoria
SELECT * FROM categorias;

#Para el combo Marca
SELECT * FROM marca;

SELECT * FROM productos;

 #Consulta estados activos
   SELECT p.idPROD,p.descPROD,p.precioPROD,m.nomMARCA,c.nomCAT,p.paisPROD,p.imgPROD,P.estadoPROD
   FROM productos AS p 
   INNER JOIN marca AS m 
   ON p.marcaPROD= m.idMARCA 
   INNER JOIN categorias AS c 
   ON p.categoriaPROD = c.idCAT    
   WHERE estadoPROD ='ACTIVO'      
   ORDER BY nomMARCA


 #Consulta bajas
   SELECT p.idPROD,p.descPROD,p.precioPROD,m.nomMARCA,c.nomCAT,p.paisPROD,p.imgPROD,P.estadoPROD
   FROM productos AS p 
   INNER JOIN marca AS m 
   ON p.marcaPROD= m.idMARCA 
   INNER JOIN categorias AS c 
   ON p.categoriaPROD = c.idCAT    
   WHERE estadoPROD ='BAJA'   

#FILTRO CAT A MARCA
SELECT p.idPROD, m.idMARCA,m.nomMARCA,c.idCAT,c.nomCAT,estadoPROD,precioPROD,paisPROD
FROM productos  AS p 
INNER JOIN marca AS m
ON p.marcaPROD = m. idMARCA
INNER JOIN categorias AS c
ON p.categoriaPROD =c.idCAT
WHERE p.estadoPROD = 'ACTIVO' ORDER BY nomMARCA

#FILTRO MARCA AXAJ ESTADO ACTIVO
 SELECT p.idPROD,m.idMARCA,m.nomMARCA,p.categoriaPROD,p.estadoPROD
 FROM productos AS p 
 JOIN marca AS m 
 ON p.marcaPROD= m. idMARCA  
 WHERE estadoPROD = 'ACTIVO'
 ORDER BY nomMARCA asc

#MARCA AJAX
SELECT DISTINCT  m.nomMARCA,idMARCA
FROM productos AS p 
INNER JOIN marca AS m 
ON p.marcaPROD= m.idMARCA 
INNER JOIN categorias AS c 
ON p.categoriaPROD = c.idCAT
ORDER BY  nomMARCA       


#Rango de Precios segun la marca
SELECT p.precioPROD,p.idPROD,nomMARCA
FROM productos AS p 
INNER JOIN marca AS m 
ON p.marcaPROD= m.idMARCA 
WHERE p.marcaPROD= 2; 


#Precio Minimo 
SELECT MIN(precioPROD),idPROD,marcaPROD
FROM productos
WHERE marcaPROD= 2;

#Precio Maximo
SELECT MAX(precioPROD),idPROD,marcaPROD
FROM productos
WHERE marcaPROD= 2;

SELECT paisPROD,idPROD
 FROM productos WHERE precioPROD='111' 

SELECT idPROD,paisPROD FROM productos



