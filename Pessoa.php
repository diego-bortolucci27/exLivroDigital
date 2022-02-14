<?php

    class Pessoa
    {
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniver()
        {
            echo $this->getNome() . " está fazendo aniversário" . "<br>";
            $this->setIdade($this->getIdade() + 1);
            echo "Sexo: " . $this->getSexo() . "<br>";
            echo "Idade: " . $this->getIdade() . " anos" . "<br>";
        }

        // Metodos Especiais

        public function getNome()
        {
            return $this->nome;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function getSexo()
        {
            return $this->sexo;
        }

        public function setNome($n)
        {
            $this->nome = $n;
        }

        public function setIdade($i)
        {
            $this->idade = $i;
        }

        public function setSexo($s)
        {
            $this->sexo = $s;
        }
    }

?>