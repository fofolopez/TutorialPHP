CREATE USER 'desarrollo'@'localhost' IDENTIFIED BY 'desarrollo_2018';

GRANT 
create, drop
ON cursophp
TO 'desarrollo'@'localhost';

GRANT
delete, insert,select, update
on cursophp.usuarios
to 'desarrollo'@'localhost';