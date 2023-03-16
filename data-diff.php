<?php
function datadiff($data_inicial, $data_final)
{
    $datatime1 = new DateTime($data_inicial);
    $datatime2 = new DateTime($data_final);

    $data1 = $datatime1->format('Y-m-d H:i:s');
    $data2 = $datatime2->format('Y-m-d H:i:s');


    $diff = $datatime1->diff($datatime2);

    $diferenca_De_tempo = sprintf("%02d", (($diff->d * 24) + $diff->h)) . ':' . sprintf("%02d", $diff->i) . ':00';

    $minutos_resultado = (intval(substr($diferenca_De_tempo, 0, 2)) * 60) + (intval(substr($diferenca_De_tempo, 3, 2)));




    return floor($minutos_resultado / 60);
}

?>