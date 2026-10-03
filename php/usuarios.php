<?php

class Noticia {
    private string $titulo;
    private string $conteudo;
    private string $autor;
    private DateTime $datadepublicacao;

    public function __construct(string $titulo, string $conteudo, string $autor, DateTime $datadepublicacao)
    {
        $this -> titulo  = $titulo;
        $this -> conteudo = $conteudo;
        $this -> autor = $autor;
        $this -> datadepublicacao = $datadepublicacao;
    }
    public function GetTitulo(): string {
        return $this -> titulo;
    }

}

class Redator {
    private string $nome;
    private string $senha;
    private string $foto;
    private string $gostos;

    public function PublicarNoticia()
    {


    }

}



?>
