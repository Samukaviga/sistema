<?php
    

    $servidor = ;
    $usuario = ;
    $senha = ;
    $banco = 'bolsas_liceubrasil_com_br';

    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
         echo "Erro na conexão: " . $e->getMessage();   
    }
    
?>