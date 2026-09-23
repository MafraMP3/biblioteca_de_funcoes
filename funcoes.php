<?php
function gerarSenha($QuantiaCaracteres){

    for ($x = 1; $x <= 10; $x++) {
    $PossiveisMinusculas = 'abcdefghijklmnopqrstuvwxyz';
    $PossiveisMaiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $PossiveisNumeros = '0123456789';
    $PossiveisEspeciais = '!@#$%&*-_=+';

    $senha1 = substr( str_shuffle($PossiveisMinusculas), 0, $QuantiaCaracteres/4 );  
    $senha2 = substr( str_shuffle($PossiveisMaiusculas), 0, $QuantiaCaracteres/4 );    
    $senha3 = substr( str_shuffle($PossiveisNumeros), 0, $QuantiaCaracteres/4 );    
    $senha4 = substr( str_shuffle($PossiveisEspeciais), 0, $QuantiaCaracteres/4 );     
    }  

    $senha = $senha1.$senha2.$senha3.$senha4;
    return $senha;

    }
    $QuantiaCaracteres = 8;
    echo gerarSenha($QuantiaCaracteres);

function contarVogais($texto) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contadorVogais = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vogais)) {
            $contadorVogais++;
        }
    }
    return $contadorVogais;
}
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function inverterTexto($texto) {
    return strrev($texto);
}

function calcularIdade($dataNascimento) {
    $nascimento = new DateTime($dataNascimento);
    $hoje = new DateTime();

    return $hoje->diff($nascimento)->y;
}

function converterMoeda($valor, $cotacao) {
    return $valor * $cotacao;
}



function gerarSaudacao() {
    $hora = date('H');

    if ($hora >= 5 && $hora < 12) {
        return "Bom dia!";
    } elseif ($hora >= 12 && $hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

function formatarTelefone($telefone) {
    $telefone = preg_replace('/\D/', '', $telefone);

    return '(' . substr($telefone, 0, 2) . ') ' .
           substr($telefone, 2, 5) . '-' .
           substr($telefone, 7, 4);
}

function validarSenhaForte($senha) {
    if (strlen($senha) < 8) {
        return false;
    }

    if (!preg_match('/[A-Z]/', $senha)) {
        return false;
    }

    if (!preg_match('/[a-z]/', $senha)) {
        return false;
    }

    if (!preg_match('/[0-9]/', $senha)) {
        return false;
    }

    return true;
}

?>