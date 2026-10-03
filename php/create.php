<?php
$conexao = new PDO("sqlite:banco.db");
$conexao->exec("PRAGMA foreign_keys = ON");
$conexao->exec(
    "create table usuarios(
    id INTEGER PRIMARY KEY,
    nome VARCHAR(90),
    senha VARCHAR(30),
    foto TEXT,
    gostos TEXT,
    status BOOLEAN
    );"
);

$conexao->exec(
    "create table publicacao(
    id INTEGER PRIMARY KEY,
    titulo VARCHAR(60),
    autor_id INTEGER NOT NULL,
    capa TEXT,
    FOREIGN KEY (autor_id) REFERENCES usuarios(id)

);"
);

$conexao -> exec(
    "create table whitelist(
    usuario VARCHAR(30),
    comentario TEXT,
    likes INT,
    );");

$conexao -> exec(
    "create table blacklist(
    usuario VARCHAR(30),
    ofensa TEXT,
)"
);
?>
