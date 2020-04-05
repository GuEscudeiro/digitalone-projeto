
<?php
/*  Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir a inserção de competidores
com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo, 6 a 12 anos
categoria infantil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar a
categoria para cada nadador que for cadastrado.  */

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

# ----- Validação dos dados no formulário ------------
# ----- Tudo isso pode ser feito no próprio HTML5 ----

# ----- Campo nome --------------------
if(empty($nome))
{
    echo 'O nome não pode ser vazio!';
    return;
}
if(strlen($nome) < 3)
{
    echo 'O nome deve conter mais de 3 caracteres!';
    return;
}
if(strlen($nome) > 40)
{
    echo 'O nome não deve conter mais de 40 caracteres!';
    return;
}
# ----- Campo idade -------------------
if(!is_numeric($idade))
{
    echo 'Informe um número para idade!';
    return;
}

# ----- Condicionais das categorias -----
if($idade >= 6 && $idade <= 12)
{
    for($contador = 0; $contador <= count($categorias); $contador++)
    {
        if($categorias[$contador] == 'infantil')
            echo 'O nadador '.$nome.' compete na categoria '.$categorias[$contador];
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($contador = 0; $contador <= count($categorias); $contador++)
    {
        if($categorias[$contador] == 'adolescente')
            echo 'O nadador '.$nome.' compete na categoria '.$categorias[$contador];
    }
}
else{
    for($contador = 0; $contador <= count($categorias); $contador++)
    {
        if($categorias[$contador] == 'adulto')
            echo 'O nadador '.$nome.' compete na categoria '.$categorias[$contador];
    }
}


#var_dump($nome, $idade);
#print_r($categorias);