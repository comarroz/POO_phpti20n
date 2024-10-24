<?php
    namespace PHP\Modelo;//Definir o local do projeto
    require_once('Cliente.php');//Requisitando uma classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    use PHP\Modelo\Cliente;//Definir a classe 
    use PHP\MOdelo\Pessoa;
    use PHP\Modelo\Funcionario;


    $cliente = new Cliente("1235","Anderson","119999","Rua",560.60);//Criar um objeto
    $clienteDois = new Cliente("12","João","13","Rua", 1020.25);
    $funcionario = new Funcionario("1", "Buganza", "69", "Rua", "Assistente", 1200);

    echo $cliente->imprimir()."<br>";
    echo $clienteDois->imprimir()."<br>";
     echo $funcionario->imprimir();



?>