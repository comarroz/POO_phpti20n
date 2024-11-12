<?php
     namespace PHP\MOdelo;
     require_once('DAO\inserir.php');
     require_once('DAO\Conexão.php');
     use PHP\MOdelo\DAO\Inserir;
     use PHP\Modelo\DAO\Conexão;

?>




<!Doctype HTML>

     <head>
        <meta charset="UTF-8"/>
        <title>Página Principal</title>        
    </head>

                <body>
                    <form method="POST">
                        <label>Código</label>
                        <input type="number" name="codigo" id="codigo"><br><br>

                        <label>Nome</label>
                        <input type="number" name="nome" id="nome"><br><br>

                        <label>Endereço</label>
                        <input type="number" name="endereco" id="endereco"><br><br>

                        <label>Telefone</label>
                        <input type="number" name="telefone" id="telefone"><br><br>

                        <button type="submit">Cadastrar
                            <?php
                               
                                $conexao = new Conexão();//Conectando o banco

                                $codigo = $_POST['codigo'];
                                $nome = $_POST['nome'];
                                $endereco = $_POST['endereco'];
                                $telefone = $_POST['telefone'];
                                //Chamar a classe inserir
                                $inserir = new Inserir();
                                echo $inserir->cadastrarPessoa($conexao,$codigo,$nome,$endereco,$telefone);


                            ?>



                        </button>
                    </form><!--fim do form-->
                    


                </body>



</html>
