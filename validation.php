<?php
function validated():array
{
    $operations = [
        'add' => '+',
        'sub' => '-',
        'mult' => '*',
        'div' => '/',
        'pow' => '^',
        'mod' => '%'
    ];
    if (!array_key_exists($_GET['operation'], $operations)) {
        return ['error' => 'L’opération demandée n’est pas prévue par notre système.'];
    }
    if (!is_numeric($_GET['nbr1']) && !is_numeric($_GET['nbr2'])) {
        return ['error' => 'Aucun des nombres fournis n’est valide.'];
    }
    if (!is_numeric($_GET['nbr1'])) {
        return ['error' => 'Le premier nombre fourni n’est pas valide.'];
    }
    if (!is_numeric($_GET['nbr2'])) {
        return ['error' => 'Le deuxième nombre fourni n’est pas valide.'];
    }
    if((float)$_GET['nbr2'] === 0.0 && ($_GET['operation'] === 'div' || $_GET['operation'] === 'mod')){
        return ['error' => 'Diviser par zéro est une opération qui ne peut être réalisée.'];
    }
    $nbr1 = (float)$_GET['nbr1'];
    $nbr2 = (float)$_GET['nbr2'];
    $operation = $_GET['operation'];
    return compact(
        'nbr1',
        'nbr2',
        'operation'
    );
}