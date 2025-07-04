-- Active: 1750671289944@@127.0.0.1@3306@seneca

use nba;

create DATABASE seneca
character set latin1
collate latin1_spanish_ci;

drop user if EXISTS 'seneca'@'%';

use seneca;
-- crea un usuario seneca que puede conectarse desde cualquier ip (@%). con contraseña 1234
create user 'seneca'@'%' IDENTIFIED BY '1234'



---damos permiso al usuario para realizar cualquier sentencia en la base de datos seneca

GRANT ALL PRIVILEGES ON seneca.* to 'seneca'@'%';


CREATE Table alumnos(
    id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(20) not NULL,
    apellido1 varchar(30) not NULL,
    apellido2 varchar(30), 
    fecha_nac date,
    email varchar(100)
)
