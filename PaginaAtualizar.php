<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexão.php');
    require_once('DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conwxão;
    use PHP\Modelo\DAO\Atualizar;

?>
<!Doctype HTML>

    <head>
        <meta charset="UTF-8">
        <tittle>Página Atualizar</tittle>
    </head>
    <body>
        <form method="POST">
            <label>Código: </label>
            <input type="number" name="codigo" id="codigo"/><br><br>

            <label>Campo: </label>
            <select name="atualizacao">
                <option value="nome">Nome</option>
                <option value="telefone">Telefone</option>
                <option value="endereco">Endereço</option>
            </select>

            <label>Novo Dado: </label>
            <input type="text" name="novoDado" id="novoDado"/><br><br>

            <button type="submit"> Atualizar
                <?php
                $conexao = new Conexao();
                $atualizar = new Atualizar();

                $codigo = $_POST['codigo'];
                $campo = $_POST['atualizacao'];
                $novoDAdo = $_POST['novoDado'];

                echo $atualizar->atualizarPessoa($conexao,$campo,$novoDado, $codigo)

                ?>



            </button>
            



        </form>
        <br><br>
        <a href="menu.php"><<button>Voltar</button></a>










    </body>








</html>