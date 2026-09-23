<?php

include "funcoes.php";

?>



<h3>1. Calcular IMC</h3>

<form method="POST">
    <input type="number" name="peso" step="0.1" placeholder="Peso (kg)" required>
    <input type="number" name="altura" step="0.01" placeholder="Altura (m)" required>
    <button type="submit" name="imc">Calcular</button>
</form>

<?php
if (isset($_POST['imc'])) {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    echo "IMC: " . calcularIMC($peso, $altura);
}
?>


<h3>2. Validar E-mail</h3>

<form method="POST">
    <input type="email" name="email" placeholder="Digite seu e-mail" required>
    <button type="submit" name="validarEmail">Validar</button>
</form>

<?php
if (isset($_POST['validarEmail'])) {
    $email = $_POST['email'];

    if (validarEmail($email)) {
        echo "E-mail válido";
    } else {
        echo "E-mail inválido";
    }
}
?>


<h3>3. Gerar Senha Aleatória</h3>

<form method="POST">
    <input type="number" name="tamanho" placeholder="Tamanho da senha" required>
    <button type="submit" name="gerarSenha">Gerar</button>
</form>

<?php
if (isset($_POST['gerarSenha'])) {
    $tamanho = $_POST['tamanho'];

    echo "Senha: " . gerarSenha($tamanho);
}
?>


<h3>4. Contar Vogais</h3>

<form method="POST">
    <input type="text" name="textoVogais" placeholder="Digite um texto" required>
    <button type="submit" name="contarVogais">Contar</button>
</form>

<?php
if (isset($_POST['contarVogais'])) {
    $texto = $_POST['textoVogais'];

    echo "Quantidade de vogais: " . contarVogais($texto);
}
?>


<h3>5. Inverter Texto</h3>

<form method="POST">
    <input type="text" name="textoInverter" placeholder="Digite um texto" required>
    <button type="submit" name="inverterTexto">Inverter</button>
</form>

<?php
if (isset($_POST['inverterTexto'])) {
    $texto = $_POST['textoInverter'];

    echo "Texto invertido: " . inverterTexto($texto);
}
?>


<h3>6. Calcular Idade</h3>

<form method="POST">
    <input type="date" name="dataNascimento" required>
    <button type="submit" name="calcularIdade">Calcular</button>
</form>

<?php
if (isset($_POST['calcularIdade'])) {
    $dataNascimento = $_POST['dataNascimento'];

    echo "Idade: " . calcularIdade($dataNascimento) . " anos";
}
?>


<h3>7. Converter Moeda</h3>

<form method="POST">
    <input type="number" name="valor" step="1" placeholder="Valor em reais" required>
    <input type="number" name="cotacao" step="1" placeholder="dolar = 5,17" required>
    <button type="submit" name="converterMoeda">Converter</button>
</form>

<?php
if (isset($_POST['converterMoeda'])) {
    $valor = $_POST['valor'];
    $cotacao = $_POST['cotacao'];

    echo "Valor em dólar: US$ " . converterMoeda($valor, 1 / $cotacao);
}
?>


<h3>8. Formatar Telefone</h3>

<form method="POST">
    <input type="text" name="telefone" placeholder="Digite o telefone" required>
    <button type="submit" name="formatarTelefone">Formatar</button>
</form>

<?php
if (isset($_POST['formatarTelefone'])) {
    $telefone = $_POST['telefone'];

    echo "Telefone: " . formatarTelefone($telefone);
}
?>


<h3>9. Gerar Saudação</h3>

<?php
echo gerarSaudacao();
?>


<h3>10. Validar Senha Forte</h3>

<form method="POST">
    <input type="password" name="senha" placeholder="Digite sua senha" required>
    <button type="submit" name="validarSenha">Validar</button>
</form>

<?php
if (isset($_POST['validarSenha'])) {
    $senha = $_POST['senha'];

    if (validarSenhaForte($senha)) {
        echo "A senha é forte";
    } else {
        echo "A senha não é forte";
    }
}
?>