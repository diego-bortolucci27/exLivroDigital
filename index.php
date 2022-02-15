<?php

    require_once "Pessoa.php";
    require_once "Livro.php";
    require_once "Publicacao.php";

    $pessoa1 = new Pessoa();
    $pessoa1->setNome("Diego Bortolucci");
    $pessoa1->setIdade(19);
    $pessoa1->setSexo("Masculino");
    $pessoa1->fazerAniver();

    $pessoa2[0] = new Pessoa("Jader", 580, "Mulher");

    echo "<h2> Livro 1 </h2>";
    $livro1 = new Livro();
    $livro1->setTitulo("Senhor dos Anéis: A Sociedade do Anel");
    $livro1->setAutor("J.R.R Tokien");
    $livro1->setLeitor("Diego Bortolucci");
    $livro1->setPag(576);

    $livro1->detalhes();

    $livro1->abrir();
    $livro1->folhear();
    $livro1->avancarPag();
    $livro1->voltarPag();

    echo "<h2> Livro 2 </h2>";
    $livro2[0] = new Livro("O Hobbit", "J.R.R Tolkien", $pessoa2[0], 336);
    var_dump($livro2[0]);
?>