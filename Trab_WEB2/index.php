<!DOCTYPE html>
<html lang="en">
<head>
    <meta charseat="UTF-8">
    <title>Atividade_PW01</title>

<style>
    .divform{align-items: center;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;}
    form {border:1px solid #CCC; float:left; padding:12px;margin-top:50px;font:16px Arial, Helvetica, sans-serif;color:#999;}
    form input{padding:4px; width:350px;}
    form textarea{width:354px;}
    form button{width:360px; cursor:pointer;float:left;}
    button{background: #A9A9A9; border-radius: 6px; padding: 15px; cursor: pointer; color: #ffff; border: none; font-size: 16px;}
</style>

</head>
<body background="Imagens/background.jpg" bgproperties="fixed">

     <!-- Utilização do Método POST, pois é o mais adequado para
essa operação, por acrescentar dados sem mostrar em seu URL (mais segurança) -->
<div class="divform">
    <form name="form" action="formdir.php" method="post">
        <h1>Atividade Prog. Web 2</h1>
        <hr>
        <label for="labelcod"><h3>Código:</h3></label>
		<input type="number" name="cod_dir" id="cod_dir" placeholder="Digite seu Codigo" ><br><br>
		<label for="labelname"><h3>Nome do Arquivo:</h3></label>
		<input type="text" name="name_dir" id="name_dir" placeholder="Digite o nome do Arquivo" ><br><br>
		<label name="labeldir"><h3>Conteúdo do Arquivo:</h3></label>
		<textarea name="desc_dir" placeholder="Digite seu texto" rows="10" cols="50"></textarea><br><br>
		<button name="button.dir" type="submit">Criar</button>
	</form>
    
    </div>

    <div class="botao" align="center"><br>
    <a href="http://localhost/Trab_WEB2/pastas.php"><button>Pastas</button></a>
    </div>
</body>
</html>