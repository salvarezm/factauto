CREATE TABLE usuarios(
  username VARCHAR(30),
  password VARCHAR(255),
  role VARCHAR(50)
)

INSERT INTO usuarios
VALUES
('admin@factauto.cl','12345','admin'),
('usuario@factauto.cl','12345','usuario')


CREATE TABLE respuesta(
  username VARCHAR(30),
  fecha_respuesta VARCHAR(10),
  resp1 VARCHAR(255),
  resp2 VARCHAR(30),
  resp3 VARCHAR(30)
)

INSERT INTO respuesta
VALUES
('admin@factauto.cl','2020-10-15','todo esta ok','Si','5')