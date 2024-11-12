<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexão.php');
    use PHP\MODelo\DAO\Conexão;

    class Atualizar
    {
        function atualizarPessoa(
                            Conexão $conexao,
                            string $campo,
                            string $novoDado,
                            int $codigo

        ){
            try{
                 $conn = $conexao->conectar();
                 $sql = "update pessoa set $campo =
                        '$novoDado' where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);


                mysqli_close($conn);
                if($result){
                    echo "<br>Atualizado com sucesso!";
                }else{
                    echo "<br><br>Não foi possivel atualizar";
                }


            }
            catch(Exeption $erro)
            {
                echo $erro;
            }//fim do catch





        }//fim do método

    }//fim do atualizar

?>