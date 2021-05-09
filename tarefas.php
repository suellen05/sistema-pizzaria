<?php
if(isset($_GET['nome']) && $_GET['nome'] != ''){
    $pizzaria = [];
    $pizzaria['nome'] = $_GET['nome'];

    if(isset($_GET['telefone'])) {
        $pizzaria['telefone'] = $_GET['telefone'];
    }else{
        $pizzaria['telefone'] = '';
    }
    if(isset($_GET['endereco'])) {
        $pizzaria['endereco'] = $_GET['endereco'];
    }else{
        $pizzaria['endereco'] = '';
    }

    if(isset($_GET['cidade'])) {
        $pizzaria['cidade'] = $_GET['cidade'];
    }else{
        $pizzaria['cidade'] = '';
    }
    
    if(isset($_GET['estado'])) {
        $pizzaria['estado'] = $_GET['estado'];
    }else{
        $pizzaria['estado'] = '';
    }

    if(isset($_GET['tamanho'])) {
        $pizzaria['tamanho'] = $_GET['tamanho'];
    }else{
        $pizzaria['tamanho'] = '';
    }


    if(isset($_GET['sabores'])) {
        $pizzaria['sabores'] = $_GET['sabores'];
    }else{
        $pizzaria['sabores'] = '';
    }

    if(isset($_GET['bordas'])) {
        $pizzaria['bordas'] = $_GET['bordas'];
    }else{
        $pizzaria['bordas'] = '';
    }

    if(isset($_GET['pagamento'])) {
        $pizzaria['pagamento'] = $_GET['pagamento'];
    }else{
        $pizzaria['pagamento'] = '';
    }

    if(isset($_GET['troco'])) {
        $pizzaria['troco'] = $_GET['troco'];
    }else{
        $pizzaria['troco'] = '';
    }
}

    include "conexao.php";
   
    
    if(isset($pizzaria)){

        $sqlInserir = "INSERT INTO tb_pizzarias( nome, telefone, endereco, cidade, estado, tamanho, sabores, bordas, pagamento, troco
    ) VALUES(
    '{$pizzaria['nome']}',
    '{$pizzaria['telefone']}',
    '{$pizzaria['endereco']}',
    '{$pizzaria['cidade']}',
    '{$pizzaria['estado']}',
    '{$pizzaria['tamanho']}',
    '{$pizzaria['sabores']}',
    '{$pizzaria['bordas']}',
    '{$pizzaria['pagamento']}',
    '{$pizzaria['troco']}'

    
);";

        mysqli_query($conexao, $sqlInserir);
        
    }

include "template.php";

?>
