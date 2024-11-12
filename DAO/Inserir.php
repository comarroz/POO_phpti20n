<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexão.php');
    use PHP\Modelo\DAO\Conexão;

    class Inserir{
        function cadastrarPessoa(
                                       Conexão $conexao,
                                       int $codigo,
                                       string $nome,
                       
                                       string $endereco,
                                       string $telefone

        ){
            try{
                $conn = $conexao->conectar();//Abrindo a conexão com o banco
                $sql = "Insert into pessoa(codigo,nome, endereco,telefone)
                        values('$codigo', '$nome', '$endereco', '$telefone')";
                $result = mysqli_query($conn, $sql);//Commit no banco

                //Fechar a conexão com o banco
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com Sucesso! ";
                }else{
                    return "<br><br>Não Inserido";
                }
            }catch(Except $erro)
            {
                return "<br>Algo deu errado<br><br>".$erro;

            }//fim do catch


        }//fim do método



    }//fim da classe





?>