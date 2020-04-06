
<?php
/*  Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir a inserção de competidores
com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo, 6 a 12 anos
categoria infantil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar a
categoria para cada nadador que for cadastrado.  */

session_start();

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
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, preencha novamente!';
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres!';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres!';
    header('location: index.php');
    return;
}
# ----- Campo idade -------------------
else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Informe um número para idade!';
    header('location: index.php');
    return;
}

# ----- Condicionais das categorias -----
if($idade >= 6 && $idade <= 12)
{
    for($contador = 0; $contador <= count($categorias); $contador++)
    {
        if($categorias[$contador] == 'infantil')
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria '.$categorias[$contador];
            header('location: index.php');
            return;
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($contador = 0; $contador <= count($categorias); $contador++)
    {
        if($categorias[$contador] == 'adolescente')
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria '.$categorias[$contador];
            header('location: index.php');
            return;
    }
}
else{
    for($contador = 0; $contador <= count($categorias); $contador++)
    {
        if($categorias[$contador] == 'adulto')
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria '.$categorias[$contador];
            header('location: index.php');
            return;
    }
}


#var_dump($nome, $idade);
#print_r($categorias);