<?php 

$diretorio = 'Usuarios/';
$arquivo = isset($_FILES['dir']) ? $_FILES['dir'] : false;

echo '<pre>';
print_r($arquivo);
echo '<pre>';
 
?>