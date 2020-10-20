<!DOCTYPE html>
<html lang="en">
<head>
    <meta charseat="UTF-8">
    <title>Atividade_PW01</title>

    <!-- Edição CSS -->
<style>
    div{align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;}
    .divli{border:1px solid #CCC; float:left; padding:12px;margin-top:50px;margin-left:860px;font:16px Arial, Helvetica, sans-serif;color:#999;}
    p{background: #A9A9A9; border-radius: 6px; padding: 15px; cursor: pointer; color: #ffff; border: none; font-size: 16px;}
</style>
</head>
<body background="Imagens/background.jpg" bgproperties="fixed">


<div class="divli" align="center">

<h3> Aviso: </h3><hr>

<?php

#Criação da Pasta /diretório
$nomedir = $_POST['cod_dir'];
$dir = "Usuarios/$nomedir";

if (is_dir($dir)) {
    echo "A pasta \"$nomedir\" já existe";
    echo '<br/>';
    echo '<a href="javascript:history.back()"><p> Voltar</p><a/>';
} else {
    mkdir($dir,0777); #cria a pasta
    echo 'Pasta criada com sucesso.';
    echo '<br/>';
    echo '<a href="javascript:history.back()"><p> Voltar</p><a/>';
  
}

#Salvando o conteúdo em arquivo e movendo para PASTA.
$nomearq = $_POST['name_dir'] . '.txt'; #criando o arquivo txt
$desc_arquivo = $_POST['desc_dir']; #adicionando a variavel com o valor do text area
$arquivo = fopen($nomearq, 'w+' ); #abre arquivo
fwrite($arquivo, $desc_arquivo); #escreve no arquivo
fclose($arquivo); #fecha 

$move_arquivo = "Usuarios/$nomedir/$nomearq"; #diretório do arquivo
rename($nomearq, $move_arquivo); #posiciona o arquivo dentro  da pasta

?>
</div>

</body>
</html>
