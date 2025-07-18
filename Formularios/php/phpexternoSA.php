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