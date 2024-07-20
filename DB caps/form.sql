/* Creacion de tabla clientes (caps). NO TIENE RELACIONES */
USE form_caps;
CREATE TABLE clientes(
    id_cliente INT UNSIGNED NOT NULL UNIQUE PRIMARY KEY,
    dni VARCHAR(12) NOT NULL UNIQUE DEFAULT "0",
    nombre VARCHAR(25) NOT NULL DEFAULT "",
    primer_apellido VARCHAR(25) NOT NULL DEFAULT "",
    segundo_apellido VARCHAR(25) NOT NULL DEFAULT "",
    email VARCHAR(25) NOT NULL DEFAULT "",
    direccion VARCHAR(30) NOT NULL DEFAULT "",
    poblacion VARCHAR(25) NOT NULL DEFAULT "",
    fecha_alta DATE NOT NULL DEFAULT CURRENT_TIME,
    fecha_baja DATE NOT NULL DEFAULT CURRENT_TIME,
    fecha_nacimiento DATE NOT NULL DEFAULT CURRENT_TIME,
    horas_semanales INT(4) UNSIGNED NOT NULL DEFAULT 0,
    centro VARCHAR(20) NOT NULL DEFAULT "",
    categoria VARCHAR(20) NOT NULL DEFAULT "",
    num_cuenta VARCHAR(255) NOT NULL UNIQUE DEFAULT "",
    num_seguridad_social VARCHAR(255) NOT NULL UNIQUE DEFAULT "",
    observaciones MEDIUMTEXT NULL DEFAULT ""
)ENGINE=INNODB;

/* Modificacion de columnas */
USE form_caps;
ALTER TABLE clientes MODIFY COLUMN num_cuenta INT NOT NULL UNIQUE DEFAULT 0;
ALTER TABLE clientes MODIFY COLUMN num_seguridad_social INT NOT NULL UNIQUE DEFAULT 0;

/* Prueba insercion cliente */
USE form_caps;
INSERT INTO clientes 
(id_cliente, dni, nombre, primer_apellido, segundo_apellido, email, direccion, poblacion, fecha_alta, fecha_baja, fecha_nacimiento, horas_semanales, centro, categoria, num_cuenta, num_seguridad_social, observaciones)
VALUES
(1, "z1198958l", "joshua", "mariño", "monroy", "joshua@example.com", "direccion de su madre", "torrente", "10-10-2015", "05-09-2020", "11-06-2000", 20, "torrente", "programacion", 12345678901234567890, 12345678901234567890, "nada");

USE form_caps;
INSERT INTO clientes 
(id_cliente, dni, nombre, primer_apellido, segundo_apellido, email, direccion, poblacion, fecha_alta, fecha_baja, fecha_nacimiento, horas_semanales, centro, categoria, num_cuenta, num_seguridad_social, observaciones)
VALUES
(2, "z1198958i", "pepito", "mariño", "monroy", "pepito@example.com", "direccion de su madre", "torrente", "2015-10-10", "2020-05-09", "2000-11-02", 20, "torrente", "programacion", 987654321, 987654321, "nada2");


/* Prueba de datos con consulta */
USE form_caps;
SELECT * FROM clientes;

/* Eleminacion usuario 1 */
USE form_caps;
DELETE FROM clientes
WHERE id_cliente=1;

/* Modificacion de datos de cliente con id "2" */
USE form_caps;
UPDATE clientes SET id_cliente=1 WHERE nombre="pepito";