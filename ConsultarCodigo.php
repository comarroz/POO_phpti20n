<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexão.php');
    require_once('DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexão;
    use PHP\MOdelo\DAO\Consultar;

?>


<!Doctype HTML>
        <head>
            <meta chartset="UTF-8"/>
            <title>Página de Consulta</title>
        </head>
        <body>
            <form metho="POST">
                <label>Código: </label>
                <input type="number" name="codigo" id="codigo"><br><br>

                <button type="submit">
                    Consultar
                <?php
                    //Conexão com o banco
                    $conexao = new Conexão();
                    //Coletar o Código
                    $codigo =$_POST['codigo'];
                    //Chamar o consultar
                    $consultar = new COnsultar();
                    echo $consultar->consultarIndividual($conexao,$codigo);

                ?>
                </button>    
            </form>
        </body>
</html>
