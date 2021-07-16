CREATE DATABASE animes_db;
CREATE TABLE informacion_animes(
	id int(11) PRIMARY KEY AUTO_INCREMENT,
	nombre_anime varchar(200),
	numero_capitulo varchar(11),
	clave_capitulo varchar(200),
	nombre_captitulo varchar(200),
	tipo_capitulo varchar(200)
);
