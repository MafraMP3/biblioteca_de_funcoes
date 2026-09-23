<?php

include "funcoes.php";

echo "<h2>Biblioteca de Funções</h2>";

$peso = 70;
$altura = 1.75;

echo "<h3>1. Calcular IMC</h3>";
echo "IMC: " . calcularIMC($peso, $altura);

echo "<h3>2. Validar E-mail</h3>";
$email = "teste@email.com";

if (validarEmail($email)) {
    echo "E-mail válido";
} else {
    echo "E-mail inválido";
}

echo "<h3>3. Gerar Senha Aleatória</h3>";
echo gerarSenhaAleatoria(10);

echo "<h3>4. Contar Vogais</h3>";
$texto = "Olá, meu nome é João";
echo "Texto: " . $texto . "<br>";
echo "Quantidade de vogais: " . contarVogais($texto);

echo "<h3>5. Inverter Texto</h3>";
$texto = "Programação";
echo "Texto original: " . $texto . "<br>";
echo "Texto invertido: " . inverterTexto($texto);

echo "<h3>6. Calcular Idade</h3>";
$dataNascimento = "2005-10-15";
echo "Idade: " . calcularIdade($dataNascimento) . " anos";

echo "<h3>7. Converter Moeda</h3>";
$valor = 100;
$cotacao = 5.20;

echo "R$ " . $valor . " em dólar: US$ " . converterMoeda($valor, 1 / $cotacao);

echo "<h3>8. Formatar Telefone</h3>";
$telefone = "47999998888";

echo formatarTelefone($telefone);

echo "<h3>9. Gerar Saudação</h3>";
echo gerarSaudacao();

echo "<h3>10. Validar Senha Forte</h3>";
$senha = "Teste123";

if (validarSenhaForte($senha)) {
    echo "A senha é forte";
} else {
    echo "A senha não é forte";
}

?>