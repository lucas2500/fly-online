CREATE TABLE usuario(

nome VARCHAR(250),
cadEmail VARCHAR(250),
permissao VARCHAR(50),
empresa VARCHAR(150),
cadSenha VARCHAR(400),
ID INT PRIMARY KEY AUTO_INCREMENT
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

SELECT * FROM usuario;

DROP TABLE usuario;

CREATE TABLE email(

nome VARCHAR(250),
telefone VARCHAR(80),
email VARCHAR(250),
ID INT PRIMARY KEY AUTO_INCREMENT
);

SELECT * FROM email;

CREATE TABLE Codigos(

token VARCHAR(100),
ID INT PRIMARY KEY AUTO_INCREMENT
);

SELECT * FROM Codigos;

DROP TABLE Codigos;