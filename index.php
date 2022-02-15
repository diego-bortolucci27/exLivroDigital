<?php

    require_once "Pessoa.php";
    require_once "Livro.php";
    require_once "Publicacao.php";

    $pessoa[0] = new Pessoa("Diego Bortolucci", 19, "Masculino");
    $pessoa[0]->fazerAniver();

    echo "<br>";

    $pessoa[1] = new Pessoa("Jader", 580, "Mulher");
    $pessoa[1]->fazerAniver();

    echo "<h2> Livro 1 </h2>";
    $livro[0] = new Livro("Senhor dos Anéis: A Sociedade do Anel", "J.R.R Tolkien", $pessoa[0], 576);

    $livro[0]->detalhes();

    $livro[0]->abrir();
    $livro[0]->folhear();
    $livro[0]->avancarPag();
    $livro[0]->voltarPag();
    $livro[0]->fechar();

    
    echo "<h2> Livro 2 </h2>";
    $livro[1] = new Livro("O Hobbit", "J.R.R Tolkien", $pessoa[1], 336);
    $livro[1]->detalhes();

    $livro[1]->abrir();
    $livro[1]->folhear();
    $livro[1]->avancarPag();
    $livro[1]->voltarPag();
    $livro[1]->fechar();
?>