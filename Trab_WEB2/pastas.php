<!DOCTYPE html>
<html lang="en">
<head>
    <meta charseat="UTF-8">
    <title>Atividade_PW01</title>

<style>
    div{align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;}
    .divpasta{border:1px solid #CCC; float:left; padding:12px;margin-top:50px;margin-left:860px;font:16px Arial, Helvetica, sans-serif;color:#999;}
    p{background: #A9A9A9; border-radius: 6px; padding: 7px; cursor: pointer; color: #ffff; border: none; font-size: 16px;}
    p1{background: #585858; border-radius: 6px; padding: 7px; cursor: pointer; color: #ffff; border: none; font-size: 15px;}
</style>
</head>
<body background="Imagens/background.jpg" bgproperties="fixed">

<div class="divpasta" align="center">

<h3> Pastas: </h3><hr>

<?php
 #Diretório das Pastas, e adicionando opção chamando a pag removdir.
            
            $diretorio_pasta = 'Usuarios/';
            $temp = opendir($diretorio_pasta);
            
            while($nome_pastas = readdir($temp)) {
                $pastas[] = $nome_pastas;
            }

            sort($pastas); #ordenar

            foreach($pastas as $listar){
                if($listar != '.' && $listar != '..') {
                    $itens[] = $listar;
                }
            }

            if($itens != '') {
                foreach($itens as $listar) {

                    echo "<ul><li>$listar - <a href=\"removdir.php?dir=$listar\"><p1>Excluir</p1></a> | <a href=\"downdir.php?dir=$listar\"><p1>Baixar</p1></a></li></ul>";
                    
                }
                
            }

            echo '<a href="javascript:history.back()"><p> Voltar</p><a/>';
 ?>

</div>

</body>
</html>