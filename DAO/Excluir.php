<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexão.php');
    use PHP\Modelo\DAO\Conexão;

    class Excluir{
        function excluirPessoa(
                            Conexão $conexao,
                            int $codigo
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql = "delete from pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Excluido com sucesso!";
                }else{
                    echo "<br><br>Não foi possivel excluir!";
                }

            }
            catch(Exception $erro)
            {
                echo $erro;
            }//fim do catch

        }

    }//fim da classe






?>