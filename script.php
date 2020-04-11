
<?php
/*  Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir a inserção de competidores
com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo, 6 a 12 anos
categoria infantil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar a
categoria para cada nadador que for cadastrado.  */

# Incluindo outros arquivos para funcionar as validações
include 'servicos/servico_mensagem_sessao.php';
include 'servicos/servico_validacao.php';
include 'servicos/servico_categoria_competidor.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome,$idade);

header('location: index.php');






#var_dump($nome, $idade);
#print_r($categorias);