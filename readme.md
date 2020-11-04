** REQUERIMIENTOS

- php 5.6  
- python 3.8
- motor relacional (sql server)
- codeigniter (incluido en el repo)

** librerias python
- pyodbc
- flask

** configuraciones codeigniter

- modificar por el endpoint utilizado en la maquina local o produccion 


$config['base_api'] = 'http://localhost:5000/';

base_api: corresponde a el endpoint base utilizado por la API.

$config['base_url'] = 'http://localhost/factautofront/';

base_url: corresponde a la url base del framework codeigniter

** Data de prueba

Se requiere ejecutar el script.sql, el cual trae dos usuarios de prueba.
El script fue probado en sql server, no obstante, se utilizaron sentencias estandar por lo que eventualmente puede ser aplicado en MySQL, PostgreSQL u otro motor relacional.

admin@factauto.cl -> rol admin
usuario@factauto.cl -> rol usuario