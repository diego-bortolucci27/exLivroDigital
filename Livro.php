<?php

    require_once "Pessoa.php";
    require_once 'Publicacao.php';

    class Livro implements Publicacao
    {
        private $titulo;
        private $autor;
        private $pag;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($titulo, $autor, $leitor, $pag)
        {
            $this->setAberto(false);
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setLeitor($leitor);
            $this->setPag($pag);
            $this->setPagAtual(1);
        }

        public function detalhes()
        {
            echo "<p>";
                echo "<h2> Detalhes </h2>";
                echo "Livro: " . $this->getTitulo() . "<br>";
                echo "Autor: " . $this->getAutor() . "<br>";
                echo "Paginas: " . $this->getPag() . "<br>";
                echo "Pagina Atual: " . $this->getPagAtual() . "<br>";
                echo "Leitor: " . $this->getLeitor()->getNome() . "<br>";
                echo "Aberto: " . $this->getAberto() . "<br>";
            echo "</p>";
        }

        public function abrir()
        {   
            $this->setAberto(true);
            echo "<p>";
                echo "O Livro " . $this->getTitulo() . " do Autor " . $this->getAutor() . " está aberto";
            echo "</p>";
        }

        public function fechar()
        {
            $this->aberto = false;
            echo "<p>";
                echo "O Livro " . $this->getTitulo() . " do Autor " . $this->getAutor() . " está fechado";
            echo "</p>";
        }

        public function folhear()
        {
            echo "<p>Está folheando o livro</p>";
        }

        public function avancarPag()
        {   
            if($this->getAberto())
            {   
                echo "<p>";
                    echo "Página Atual: " . $this->getPagAtual() . "<br>";
                    echo "Avançar 1 pagina " . "<br>";
                    $this->setPagAtual($this->getPagAtual() + 1);
                    echo "A Página está " . $this->getPagAtual();
                echo "</p>";
            }
            else
            {
                echo "<p>O Livro não está aberto</p>";
            }
        }

        public function voltarPag()
        {
            if($this->getAberto())
            {   
                echo "<p>";
                    echo "Pagina Atual: " . $this->getPagAtual() . "<br>";
                    echo "Voltar 1 pagina " . "<br>";
                    $this->setPagAtual($this->getPagAtual() - 1);
                    echo "A Página está " . $this->getPagAtual(); 
                echo "</p>";
            }
        }

        // Métodos Get e Set

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function getAutor()
        {
            return $this->autor;
        }

        public function getPag()
        {
            return $this->pag;
        }

        public function getPagAtual()
        {
            return $this->pagAtual;
        }

        public function getAberto()
        {
            return $this->aberto;
        }

        public function getLeitor()
        {
            return $this->leitor;
        }

        public function setTitulo($t)
        {
            $this->titulo = $t;
        }

        public function setAutor($a)
        {
            $this->autor = $a;
        }

        public function setPag($pg)
        {
            $this->pag = $pg;
        }

        public function setPagAtual($pga)
        {
            $this->pagAtual = $pga;
        }

        public function setAberto($a)
        {
            $this->aberto = $a;
        }

        public function setLeitor($l)
        {
            $this->leitor = $l;
        }
    }

?>