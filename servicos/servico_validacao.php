
<?php
# ----- Validação dos dados no formulário ------------
# ----- Tudo isso pode ser feito no próprio HTML5 ----

# ----- Campo nome --------------------
function validaNome(string $nome)
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio, preencha novamente!');
        return false;
    }
    else if(strlen($nome) < 3)
    {
        setarMensagemErro('O nome não pode conter menos de 3 caracteres!');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro('O nome não pode conter mais de 40 caracteres!');
        return false;
    }
    return true;
}

# ----- Campo idade -------------------
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro('Informe um número para idade!');
        return false;
    }
    return true;
}



?>


