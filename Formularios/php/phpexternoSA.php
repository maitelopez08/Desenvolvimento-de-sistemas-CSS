<?php
    if(isset($_post['num_comanda'])&& isset($_post['id_produto'])&& isset($_post['categoria_produto'])&& isset($_post['nome_produto'])&& isset($_post['quantidade'])&& isset($_post['preco'])&& isset($_post['unidade'])){
        echo "Dados dos produtos recebidos :<br>";
        echo "Num: " . $_post['num_comanda'] . "<br>";
        echo "CPF: " . $_post['id_produto'] . "<br>";
        echo "Senha: " . $_post['categoria_produto'] . "<br>";
        echo "Email: " . $_post['nome_produto'] . "<br>";
        echo "Telefone: " . $_post['quantidade'] . "<br>";
        echo "Rua: " . $_post['preco'] . "<br>";
        echo "Número: " . $_post['unidade'] . "<br>";
    }
?>