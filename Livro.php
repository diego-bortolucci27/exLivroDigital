<?php

    class Livro
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

        public function detalhes()
        {
            echo "<p>";
                echo "Livro: " . $this->getTitulo();
                echo "Autor: " . $this->getAutor();
                echo "Paginas: " . $this->getPag();
                echo "Pagina Atual: " . $this->getPagAtual();
                echo "Leitor: " . $this->getLeitor();
                echo "Aberto: " . $this->getAberto();
            echo "</p>";
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