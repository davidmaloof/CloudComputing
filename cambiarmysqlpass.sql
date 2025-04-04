/* sustituir la cadena MyNewPass por el PASSWORD de preferencia */

UPDATE mysql.user SET authentication_string=PASSWORD('MyNewPass') WHERE user='root';
