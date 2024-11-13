<?php
      namespace PHP\Modelo;
      require_once('DAO\Conexão.php');
      require_once('DAO\Excluir.php');
      use PHP\Modelo\DAO\Conwxão;
      use PHP\Modelo\DAO\Excluir;

?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8">
        <title>Página Excluir</title>
    </head>
    <body>
        <form method="POST">
            <laberl>Código: </label>
            <input type="number" name="codigo" id="codigo"/><br><br>

                <button type="submit"> Excluir
                    <?php
                        $conexao = new Conexão();
                        $codigo = $_POST['codigo'];
                        $excluir = new Excluir();
                        $excluir->exclluirPessoa($conexao, $codigo);

                    ?>
                </button>
        </form>
        <?php
            $excluir-excluirPessoa($conexao, $codigo);
        ?>
        <br><br>
        <a href="menu.php"><<button>Voltar</button></a>

    </body>


</html>