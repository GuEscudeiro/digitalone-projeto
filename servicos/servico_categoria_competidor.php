<?php


function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        # ----- Condicionais das categorias -----
        if ($idade >= 6 && $idade <= 12) {
            for ($contador = 0; $contador <= count($categorias); $contador++) {
                if ($categorias[$contador] == 'infantil')
                    setarMensagemSucesso('O nadador ' . $nome . ' compete na categoria ' . $categorias[$contador]);
                return null;
            }
        } else if ($idade >= 13 && $idade <= 18) {
            for ($contador = 0; $contador <= count($categorias); $contador++) {
                if ($categorias[$contador] == 'adolescente')
                    setarMensagemSucesso('O nadador ' . $nome . ' compete na categoria ' . $categorias[$contador]);
                return null;
            }
        } else {
            for ($contador = 0; $contador <= count($categorias); $contador++) {
                if ($categorias[$contador] == 'adulto')
                    setarMensagemSucesso('O nadador ' . $nome . ' compete na categoria ' . $categorias[$contador]);
                return null;
            }
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}

