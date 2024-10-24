<?php
    namespace PHP\Modelo;

        class Pessoa{
            protected string $cpf;
            protected string $nome;
            protected string $telefone;
            protected string $endereco;

            public function __construct(string $cpf,
                                        string $nome,
                                        string $telefone,
                                        string $endereco
            
            )
            {
                $this->cpf = $cpf;
                $this->nome = $nome;
                $this->telefone = $telefone;
                $this->endereco = $endereco;
            }//fim do método

            public function __get(string $nome)
            {
                return $this->nome;

            }//fim do método

            public function __set(string $nomeVariavel, string $dado):void 
            {
                $this->nomeVariavel = $dado;
            }//fi do método

            public function imprimir():string 
            {
                return "<br>CPF: "      .$this->cpf. 
                        "<br>Nome:"     .$this->nome. 
                        "<br>Endereço: ".$this->endereco;

            }




        }//fim da classe 










?>
