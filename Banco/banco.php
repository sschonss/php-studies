<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 1000
    ],
    '123.789.456-10' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '789.123.456-10' => [
        'titular' => ' Luiz',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'], 500
);

$contasCorrentes['123.789.456-10'] = sacar(
    $contasCorrentes['123.789.456-10'], 200
);

$contasCorrentes['789.123.456-10'] = depositar(
    $contasCorrentes['789.123.456-10'], 2500
);

unset($contasCorrentes['123.789.456-10']);

titularComLetrasMaiusculas($contasCorrentes['789.123.456-10']);

?>

<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Contas Correntes</h1>

<dl>
    <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>

        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
    <?php } ?>
</dl>

</body>
</html>
