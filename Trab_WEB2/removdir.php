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
    .divrem{border:1px solid #CCC; float:left; padding:12px;margin-top:50px;margin-left:500px;font:16px Arial, Helvetica, sans-serif;color:#999;}
    p{background: #A9A9A9; border-radius: 6px; padding: 7px; cursor: pointer; color: #ffff; border: none; font-size: 16px;}
    p1{background: #585858; border-radius: 6px; padding: 7px; cursor: pointer; color: #ffff; border: none; font-size: 15px;}
</style>
</head>
<body background="Imagens/background.jpg" bgproperties="fixed">

<div class="divrem" align="center">

<h3> Excluir: </h3><hr>

<?php 
    
#Chamada do diretório
$pasta = 'Usuarios/' . $_GET['dir'];

    if (rmdir($pasta)) {
        echo 'Pasta deletada com sucesso.';
        echo '<br/>';
        echo '<a href="javascript:history.back()"><p> Voltar</p><a/>';
        
    }else{
        echo ' A pasta não pode ser deletada. (Possívelmente possui arquivos dentro).';
        echo '<br/>';
        echo '<a href="javascript:history.back()"><p> Voltar</p><a/>';
    }

?>

</div>

</body>
</html>
