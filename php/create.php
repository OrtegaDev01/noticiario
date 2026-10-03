 <?php
    $pdo = new PDO("sqlite:banco.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo > exec("PRAGMA foreign_keys = ON");
    $pdo->exec(
    "CREATE TABLE IF NOT EXISTS usuarios(
     id INTEGER PRIMARY KEY,
     nome VARCHAR(90),
     senha VARCHAR(30),
     foto TEXT,
     gostos TEXT,
     status BOOLEAN
     );
    CREATE TABLE IF NOT EXISTS blacklist(
    usuario VARCHAR(30),
    ofensa TEXT,
    );

    CREATE TABLE IF NOT EXISTS usuarios(
     id INTEGER PRIMARY KEY,
     nome VARCHAR(90),
     senha VARCHAR(30),
     foto TEXT,
     gostos TEXT,
     status BOOLEAN
     );

    CREATE TABLE IF NOT EXISTS publicacao(
    id INTEGER PRIMARY KEY,
    titulo VARCHAR(60),
    autor_id INTEGER NOT NULL,
    capa TEXT,
    FOREIGN KEY (autor_id) REFERENCES usuarios(id)
    create table whitelist(
    usuario VARCHAR(30),
    comentario TEXT,
    likes INT,
);"

);

    ?>
