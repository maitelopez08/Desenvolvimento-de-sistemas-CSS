<?php
    if(isset($_post['num_comanda'])&& isset($_post['id_produto'])&& isset($_post['categoria_produto'])&& isset($_post['nome_produto'])&& isset($_post['quantidade'])&& isset($_post['preco'])&& isset($_post['unidade'])){
        echo "Dados dos produtos recebidos :<br>";
        echo "Número de Comanda: " . $_post['num_comanda'] . "<br>";
        echo "ID do Produto: " . $_post['id_produto'] . "<br>";
        echo "Categoria: " . $_post['categoria_produto'] . "<br>";
        echo "Nome: " . $_post['nome_produto'] . "<br>";
        echo "Quantidade: " . $_post['quantidade'] . "<br>";
        echo "Preço: " . $_post['preco'] . "<br>";
        echo "Unidade: " . $_post['unidade'] . "<br>";
    }
?>