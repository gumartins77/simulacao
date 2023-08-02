<?php
$conexao_dominio = '';
$conexao_usuario = '';
$conexao_senha = '';
$conexao_database = '';

$conn = mysqli_connect($conexao_dominio, $conexao_usuario, $conexao_senha);
mysqli_select_db($conn, $conexao_database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$maquina = $_POST['maquina'];
$valorDigitadoFormatado = $_POST['valor'];
$valorDigitado = (float) preg_replace("/[^0-9]/", "", str_replace(',', '.', str_replace('.', '', $valorDigitadoFormatado)));


$sql = "SELECT * FROM maquinas WHERE titulo = '$maquina'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $valorDeMercado = $row['valor'];
    $porcentagemMinima = $row['porcentagem'];

    $diferenca = $valorDeMercado - ($valorDigitado / 100);

    $porcentagemVenda = (abs($diferenca) / $valorDeMercado) * 100;

    $diferencaMinima = ($valorDeMercado * $porcentagemMinima) / 100;

    $vendaMinima = $valorDeMercado - $diferencaMinima;

    if ($porcentagemVenda <= $porcentagemMinima) {
        $porcentagemAlcancada = 'R$ 1.000,00';
    } else {
        $porcentagemAlcancada = 'Não alcançou.';
    }

    $entrada = $valorDigitado * 0.20;

    $valorRestante = $valorDigitado - $entrada;

    $x24 = $valorRestante * 0.05015395;
    $x36 = $valorRestante * 0.03655728;
    $x48 = $valorRestante * 0.02999596;

    $comissao = $valorDigitado * 0.003;

    echo "Máquina selecionada: " . $maquina . "<br>";
    echo "Valor de mercado: R$ " . number_format($valorDeMercado, 2, ',', '.') . "<br>";
    echo "Valor digitado: R$ " . number_format($valorDigitado / 100, 2, ',', '.') . "<br>";
    echo "Diferença: R$ " . number_format($diferenca, 2, ',', '.') . "<br>";
    echo "Porcentagem de desconto: " . number_format($porcentagemVenda, 2, ',', '.') . "%" . "<br>";
    echo "Valor de Entrada: R$ " . number_format($entrada / 100, 2, ',', '.') . "<br>";
    echo "Valor restante a pagar: R$ " . number_format($valorRestante / 100, 2, ',', '.') . "<br>";
    echo "Parcelado em 24x: R$ " . number_format($x24 / 100, 2, ',', '.') . "<br>";
    echo "Parcelado em 36x: R$ " . number_format($x36 / 100, 2, ',', '.') . "<br>";
    echo "Parcelado em 48x: R$ " . number_format($x48 / 100, 2, ',', '.') . "<br>";
    echo "Comissão: R$ " . number_format($comissao / 100, 2, ',', '.') . "<br>";
    echo "Porcentagem minima para ganhar bonus: " . number_format($porcentagemMinima, 2, ',', '.') . "%" . "<br>";
    echo "Mínimo para conseguir bonus: R$ " . number_format($vendaMinima, 2, ',', '.') . "<br>";
    echo "Bônus: " . $porcentagemAlcancada . "<br>";
} else {
    echo "Máquina não encontrada no banco de dados.";
}

$conn->close();
?>
