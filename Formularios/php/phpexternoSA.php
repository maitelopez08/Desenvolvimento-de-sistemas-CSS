<?php session_start();?>
   <?php
    $lista_tarefas = array();
        if (isset($_GET['nome'])){
            $_SESSION['lista_tarefas'][] = $_GET['nome'];
        }

    $lista_tarefas = array();

        if (isset($_GET['nome'])){
            $lista_tarefas[] = $_SESSION['lista_tarefas'];
    }
    ?>
    <table>
        <tr>
        <th>Número de Comanda</th>    
        <th>ID do Produto</th>
        <th>Categoria</th>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Preço</th>
        <th>Unidade</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa): ?>
        <tr>
            <td><?php echo $tarefa; ?> </td>
        </tr>
        <?php endforeach; ?>
    </table>


    
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comanda</title>
</head>
<body>
    <h1>Comanda</h1>

    <form>
        <fieldset>
            <legend>Novo Produto</legend>
            <label>
                Produto:
                <input type="text" name="produto" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>

    <?php
        if (!isset($_SESSION['comanda'])) {
            $_SESSION['comanda'] = array();
        }

        if (isset($_GET['produto']) && $_GET['produto'] != "") {
            $_SESSION['comanda'][] = $_GET['produto'];
        }

        $lista = $_SESSION['comanda'];
    ?>

    <table>
        <tr>
            <th>Produto</th>
        </tr>
        <?php foreach ($lista as $item): ?>
        <tr>
            <td><?php echo $item; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>


