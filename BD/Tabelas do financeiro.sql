CREATE TABLE contrato(
	empresa VARCHAR(200),
	emailEmpresa VARCHAR(80),
	telEmpresa VARCHAR(30),
	celular1 VARCHAR(30),
	celular2 VARCHAR(30),
	nomeContrato VARCHAR(150),
	dtContrato VARCHAR(30),
	dtVencimento VARCHAR(200),
	comprovante VARCHAR(80),
	ID INT PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE pagamento(
	nEmpresa VARCHAR(200),
	nContrato VARCHAR(200),
	dtPGMT VARCHAR(30),
	valor VARCHAR(80),
	recibo VARCHAR(80),
	ID INT PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE contasPagar(
	estabelecimento VARCHAR(200),
	dtCompra VARCHAR(30),
	valorCompra VARCHAR(80),
	reciboCompra VARCHAR(80),
	ID INT PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE rendimentoMensal(
	dtLancamento VARCHAR(30),
	totalMensal VARCHAR(80),
	statusMensal VARCHAR(30),
	ID INT PRIMARY KEY AUTO_INCREMENT
);
