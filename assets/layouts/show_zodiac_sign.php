<?php include('header.php'); ?>

<?php
$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file('signos.xml');

$dn = new DateTime($data_nascimento);
$dia_nasc = (int)$dn->format('d');
$mes_nasc = (int)$dn->format('m');

foreach ($signos->signo as $signo) {
    list($dia_ini, $mes_ini) = explode('/', $signo->dataInicio);
    list($dia_fim, $mes_fim) = explode('/', $signo->dataFim);

    $dia_ini = (int)$dia_ini;
    $mes_ini = (int)$mes_ini;
    $dia_fim = (int)$dia_fim;
    $mes_fim = (int)$mes_fim;

    if ($mes_ini > $mes_fim) {
        if (($mes_nasc == $mes_ini && $dia_nasc >= $dia_ini) ||
            ($mes_nasc == $mes_fim && $dia_nasc <= $dia_fim) ||
            ($mes_nasc > $mes_ini) || ($mes_nasc < $mes_fim)
        ) {

            echo "<div class='d-flex flex-column justify-content-center align-items-center' style='height: 100vh;'><h1 class='mb-0'>Seu signo é: $signo->signoNome</h1><br><br>";
            echo "<p class='blockquote-footer'>$signo->descricao</p></div>";
            break;
        }
    } else {
        if (($mes_nasc > $mes_ini || ($mes_nasc == $mes_ini && $dia_nasc >= $dia_ini)) &&
            ($mes_nasc < $mes_fim || ($mes_nasc == $mes_fim && $dia_nasc <= $dia_fim))
        ) {

            echo "<div class='d-flex flex-column justify-content-center align-items-center' style='height: 100vh;'><h1 class='mb-0'>Seu signo é: $signo->signoNome</h1><br><br>";
            echo "<p class='blockquote-footer'>$signo->descricao</p></div>";
            break;
        }
    }
}
?>