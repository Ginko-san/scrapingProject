
CREATE TABLE Promocion(
	idPromocion TINYINT AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	precioReal LONG NOT NULL,
	precioOferta LONG NOT NULL,
	ahorro INT NOT NULL,
	cantVentas LONG NOT NULL,
	validez VARCHAR(15) NOT NULL,
	imagenusers VARCHAR(300) NOT NULL,
    PRIMARY KEY(idPromocion)
);

CREATE TABLE Cupon(
	idCupon TINYINT AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	precioReal LONG NOT NULL,
	precioOferta LONG NOT NULL,
	ahorro INT NOT NULL,
	cantVentas LONG NOT NULL,
	validez VARCHAR(15) NOT NULL,
    imagen VARCHAR(300) NOT NULL,
    PRIMARY KEY(idCupon)
);

SELECT * FROM Promocion;

SELECT * FROM Cupon;

DROP TABLE Promocion;
DROP TABLE Cupon;