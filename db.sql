CREATE TABLE tb_usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,  
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO tb_usuarios (nome, email, senha) VALUES ('Talyson', 'talysonsoares@gmail.com', '123456');
INSERT INTO tb_usuarios (nome, email, senha) VALUES ('Teste', 'teste@gmail.com', 'teste');