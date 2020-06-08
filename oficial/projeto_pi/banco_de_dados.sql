CREATE TABLE filial (
  id_filial INT(11) NOT NULL AUTO_INCREMENT,
  nome_filial VARCHAR(255) NOT NULL,
  endereco_filial VARCHAR(255) NOT NULL,
  PRIMARY KEY(id_filial)
);


CREATE TABLE funcionario (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  FUNCIONARIO VARCHAR(255) NOT NULL,
  SENHA VARCHAR(255) NOT NULL,
  id_filial INT,
  PRIMARY KEY(ID),
  FOREiGN KEY(id_filial) REFERENCES filial(id_filial),
  UNIQUE KEY(FUNCIONARIO)
);


CREATE TABLE leitor (
  id_leitor INT(11) NOT NULL AUTO_INCREMENT,
  nome_leitor VARCHAR(255) NOT NULL,
  rg_leitor INT(7) NOT NULL,
  endereco_leitor VARCHAR(255) NOT NULL,
  email_leitor VARCHAR(255) NOT NULL,
  data_nascimento DATE NOT NULL,
  telefone_leitor VARCHAR(14) NOT NULL,
  ID INT,
  FOREIGN KEY(ID) REFERENCES funcionario(ID),
  PRIMARY KEY(id_leitor)
);


CREATE TABLE livro (
  id_livro INT(11) NOT NULL AUTO_INCREMENT,
  nome_livro VARCHAR(255) NOT NULL,
  genero_livro VARCHAR(255) NOT NULL,
  editora_livro VARCHAR(255) NOT NULL,
  autor_livro VARCHAR(255) NOT NULL,
  quant_exemp INT(255) NOT NULL,
  ID INT,
  FOREIGN KEY(ID) REFERENCES funcionario(ID),
  PRIMARY KEY(id_livro)
);


CREATE TABLE emprestimo (
  id_emprestimo INT(11) NOT NULL AUTO_INCREMENT,
  id_leitor INT(11) NOT NULL,
  id_livro INT(11) NOT NULL,
  data_atual DATE NOT NULL,
  data_entrega DATE NOT NULL,
  FOREIGN KEY(id_leitor) REFERENCES leitor(id_leitor),
  FOREIGN KEY(id_livro) REFERENCES livro(id_livro),
  PRIMARY KEY(id_emprestimo)

);
