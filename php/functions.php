<?php

function Gerar_publicacoes() {
    include_once "../php/create.php";
    $conexao -> exec(
        "select * from publicacao;"
    );


}
