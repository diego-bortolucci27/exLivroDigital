<?php

    require_once "Pessoa.php";
    require_once "Livro.php";
    require_once "Publicacao.php";

    $pessoa1 = new Pessoa();
    $pessoa1->setNome("Diego Bortolucci");
    $pessoa1->setIdade(19);
    $pessoa1->setSexo("Masculino");
    $pessoa1->fazerAniver();


    $livro1 = new Livro();
    $livro1->setTitulo("Senhor dos Anéis: A Sociedade do Anel");
    $livro1->setAutor("J.R.R Tokien");
    $livro1->setPag(576);
    $livro1->setPagAtual(1);
    $livro1->setAberto(true);

    $livro1->fechar();
    $livro1->abrir();
    $livro1->folhear();
    $livro1->avancarPag();
    $livro1->voltarPag();
?>