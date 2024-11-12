<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexão.php');
    use PHP\Modelo\DAO\Conexão;

    class Consultar{
        function consultarIndividual(
                            Conexão $conexao,
                            int $codigo





        )
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo){
                        echo "\nCódigo: ".$dados['codigo'].
                            "<br>Nome: ".$dados['nome'].
                            "<br>Telefone: ".$dados['telefone']. 
                            "<br>Endereço: ".$dados['endereco'];
                        return;//Encerrar o processo
                    }
                    echo "Código digitado não é válido!";
                }

            }catch(Execption $erro)
            {
                echo $erro;
            }



        }//fim do método













    }





?>









