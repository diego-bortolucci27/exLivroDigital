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

        public function __construct()
        {
            $this->aberto = true;
        }

        public function detalhes($pessoa)
        {
            echo "<p>";
                echo "Livro: " . $this->getTitulo();
                echo "Autor: " . $this->getAutor();
                echo "Paginas: " . $this->getPag();
                echo "Pagina Atual: " . $this->getPagAtual();
                echo "Leitor: " . $pessoa->getNome();
                echo "Aberto: " . $this->getAberto();
            echo "</p>";
        }

        public function abrir()
        {
            echo "<p>";
                echo "O Livro " . $this->getTitulo() . " do Autor " . $this->getAutor() . " está " . $this->getAberto();
            echo "</p>";
        }

        public function fechar()
        {
            $this->aberto = false;
            echo "<p>";
                echo "O Livro " . $this->getTitulo() . " do Autor " . $this->getAutor() . " está " . $this->getAberto();
            echo "</p>";
        }

        public function folhear()
        {
            echo "Está folheando o livro";
        }

        public function avancarPag()
        {   
            if($this->getAberto())
            {
                echo "Página Atual: " . $this->getPagAtual();
                echo "Avançar 1 pagina";
                $this->setPagAtual($this->getPagAtual() + 1);
                echo "A Página está " . $this->getPagAtual(); 
            }
            else
            {
                echo "O Livro não está aberto";
            }
        }

        public function voltarPag()
        {
            if($this->getAberto())
            {
                echo "Pagina Atual: " . $this->getPagAtual();
                echo "Voltar 1 pagina";
                $this->setPagAtual($this->getPagAtual() - 1);
                echo "A Página está " . $this->getPagAtual(); 
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
            $this->nome = $t;
        }

        public function setAutor($a)
        {
            $this->idade = $a;
        }

        public function setPag($pg)
        {
            $this->sexo = $pg;
        }

        public function setPagAtual($pgA)
        {
            $this->sexo = $pgA;
        }

        public function setAberto($a)
        {
            $this->sexo = $a;
        }

        public function setLeitor($l)
        {
            $this->sexo = $l;
        }
    }

?>