CREATE TABLE bairros (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  bairro VARCHAR(60) NULL,
  cidades_id INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(id),
  INDEX bairros_FKIndex1(cidades_id)
);

CREATE TABLE cidades (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cidade VARCHAR(60) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE clientes (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(60) NULL,
  telefone VARCHAR(20) NULL,
  email VARCHAR(50) NULL,
  senha VARCHAR(15) NULL,
  cep VARCHAR(15) NULL,
  rua VARCHAR(100) NULL,
  numero VARCHAR(5) NULL,
  bairro VARCHAR(50) NULL,
  cidade VARCHAR(50) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE finalidades (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  finalidade VARCHAR(10) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE imoveis (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tipos_id INTEGER UNSIGNED NOT NULL,
  clientes_id INTEGER UNSIGNED NOT NULL,
  finalidades_id INTEGER UNSIGNED NOT NULL,
  bairros_id INTEGER UNSIGNED NOT NULL,
  titulo VARCHAR(100) NULL,
  descricao VARCHAR(255) NULL,
  imagem VARCHAR(255) NULL,
  qtd_quartos INTEGER UNSIGNED NULL,
  qtd_banheiros INTEGER UNSIGNED NULL,
  preco_venda FLOAT NULL,
  preco_aluguel FLOAT NULL,
  endereco VARCHAR(255) NULL,
  localizacao VARCHAR(255) NULL,
  situacao CHAR(1) NULL,
  PRIMARY KEY(id),
  INDEX imoveis_FKIndex1(clientes_id),
  INDEX imoveis_FKIndex2(bairros_id),
  INDEX imoveis_FKIndex3(finalidades_id),
  INDEX imoveis_FKIndex4(tipos_id)
);

CREATE TABLE tipos (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tipo VARCHAR(30) NULL,
  PRIMARY KEY(id)
);


