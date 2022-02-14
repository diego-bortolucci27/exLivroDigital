<?php

    class Pessoa
    {
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniver()
        {
            echo $this->getNome() . " está fazendo aniversário";
            $this->setIdade($this->getIdade + 1);
            echo "Sexo: " . $this->getSexo();
            echo "Idade: " . $this->getIdade() . " anos";
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