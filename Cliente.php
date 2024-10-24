<?php
  namespace PHP\Modelo;
  require_once('Pessoa.php');
  use PHP\Modelo\Pessoa;

  Class Cliente extends Pessoa{
    protected float $precoTotal;

    public function __construct(string $cpf,
                                 string $nome,
                                string $telefone,
                                string $endereco,
                                float  $precoTotal

            

    )
    {
        parent::__construct($cpf,$nome,$telefone,$endereco);
        $this->precoTotal = $precoTotal;



    }//fim do construtor


    //Método Gets e Set
    public function __get(string $nome):mixed
    {
        return $this->nome;
    }//fim do get

    public function __set(string $nomeVariavel, string $novoDado):void
    {
        $this->nomeVariavel = $novoDado;


    }//fim do método set

    public function imprimir():string
    {
        return parent:: imprimir();
                "<br>Preco Total: ".$this->precoTotal;


    }//fim do imprimir
    




  }//fim da Classe






?>