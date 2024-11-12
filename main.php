<?php
    namespace PHP\Modelo;//Definir o local do projeto
    require_once('Cliente.php');//Requisitando uma classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('DAO/Conexão.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');
    use PHP\Modelo\Cliente;//Definir a classe 
    use PHP\MOdelo\Pessoa;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\DAO\Conexão;
    use PHP\Modelo\DAO\Inserir;
    use PHP\MOdelo\DAO\Consultar;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;



    /*


    $cliente = new Cliente("1235","Anderson","119999","Rua",560.60);//Criar um objeto
    $clienteDois = new Cliente("12","João","13","Rua", 1020.25);
    $funcionario = new Funcionario("1", "Buganza", "69", "Rua", "Assistente", 1200);

    echo $cliente->imprimir()."<br>";
    echo $clienteDois->imprimir()."<br>";
     echo $funcionario->imprimir();
     */

     $conn = new Conexão();
     $conn->conectar(); //Acessar o banco de dados

    /* $inserir = new Inserir();
     echo $inserir->cadastrarPessoa($conn,"1", "Fabio", "Rua","11");
    */
     $consultar = new Consultar();
     echo $consultar->consultarIndividual($conn,'1');
     echo $consultar->consultarIndividual($conn,'2');
     echo $consultar->consultarIndividual($conn,'3');

     $atualizar = new Atualizar();
     echo $atualizar->atualizarPessoa($conn, "nome", "Allan", 1);

     $excluir = new Excluir();
     $excluir->excluirPessoa($conn,1);


?>