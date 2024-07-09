<?php

// Função para calcular e imprimir estatísticas dos GRENAIS
function calcularEstatisticas($jogos) {
    $totalGrenais = count($jogos);
    $vitoriasInter = 0;
    $vitoriasGremio = 0;
    $empates = 0;

    foreach ($jogos as $resultado) {
        if ($resultado[0] > $resultado[1]) {
            $vitoriasInter++;
        } elseif ($resultado[0] < $resultado[1]) {
            $vitoriasGremio++;
        } else {
            $empates++;
        }
    }

    echo "$totalGrenais grenais\n";
    echo "Inter:$vitoriasInter\n";
    echo "Gremio:$vitoriasGremio\n";
    echo "Empates:$empates\n";

    if ($vitoriasInter > $vitoriasGremio) {
        echo "Inter venceu mais\n";
    } elseif ($vitoriasInter < $vitoriasGremio) {
        echo "Gremio venceu mais\n";
    } else {
        echo "Nao houve vencedor\n";
    }
}

// Função principal
function main() {
    $jogos = []; // Array para armazenar os resultados dos GRENAIS

    while (true) {
        fscanf(STDIN, "%d %d", $golsInter, $golsGremio);
        $jogos[] = [$golsInter, $golsGremio]; // Adiciona o resultado atual ao array de jogos

        echo "Novo grenal (1-sim 2-nao)\n";
        fscanf(STDIN, "%d", $continuar);

        if ($continuar != 1) {
            calcularEstatisticas($jogos);
            break;
        }
    }
}

main();

?>
