CREATE DATABASE  escola;

CREATE TABLE `aluno` (
  `id_aluno` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `fone` BIGINT(11) NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `cpf` BIGINT(11) NOT NULL,
  `curso` VARCHAR(255)
)  CHARSET=utf8;
