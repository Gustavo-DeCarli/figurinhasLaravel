CREATE DATABASE figurinhas;
USE figurinhas;

CREATE TABLE users(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(400) NOT NULL,
    senha VARCHAR(200)
);

CREATE TABLE figurinhas(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    foto VARCHAR(200) NOT NULL,
    dtnasc DATE NOT NULL,
    naturalidade VARCHAR(200) NOT NULL
);

CREATE TABLE pacotes(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    f1 INT NOT NULL,
    f2 INT NOT NULL,
    f3 INT NOT NULL,
    f4 INT NOT NULL,
    f5 INT NOT NULL,
    FOREIGN KEY (f1) REFERENCES figurinhas(ID),
    FOREIGN KEY (f2) REFERENCES figurinhas(ID),
    FOREIGN KEY (f3) REFERENCES figurinhas(ID),
    FOREIGN KEY (f4) REFERENCES figurinhas(ID),
    FOREIGN KEY (f5) REFERENCES figurinhas(ID),
    FOREIGN KEY (user_id) REFERENCES users(ID)
);

CREATE TABLE compras(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    p_id INT NOT NULL,
    data DATETIME NOT NULL,
    FOREIGN KEY (p_id) REFERENCES pacotes(ID)
);

CREATE TABLE local(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    posicao INT,
    f_id INT,
    FOREIGN KEY (f_id) REFERENCES figurinhas(ID)
);