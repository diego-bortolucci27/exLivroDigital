<?php

    require_once "Pessoa.php";
    require_once "Livro.php";
    require_once "Publicacao.php";

    $pessoa[0] = new Pessoa("Diego Bortolucci", 19, "Masculino");
    $pessoa[0]->fazerAniver();

    //$pessoa2[0] = new Pessoa("Jader", 580, "Mulher");

    echo "<h2> Livro 1 </h2>";
    $livro[0] = new Livro("Senhor dos Anéis: A Sociedade do Anel", "J.R.R Tolkien", $pessoa[0], 576);

    $livro[0]->detalhes();

    $livro[0]->abrir();
    $livro[0]->folhear();
    $livro[0]->avancarPag();
    $livro[0]->voltarPag();

    /*
    echo "<h2> Livro 2 </h2>";
    $livro2[0] = new Livro("O Hobbit", "J.R.R Tolkien", $pessoa2[0], 336);
    var_dump($livro2[0]);
    */
?>