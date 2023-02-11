<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título</title>
</head>
<body>

    <?php
    echo "Para printar na tela: 'echo' ou 'print'.";
    $nome = 'Jonas';
    echo " Meu nome é $nome. ";

    // | phpinfo(); | Mostra as informações do servidor. //


                //Date 
    date_default_timezone_set("America/Sao_Paulo");
    //Define como defalt o horário do Brasil, São Paulo.

    echo "Hoje é dia ". date("d/M/Y");
    //D = dia do mês, d = dia da semana, M = mês, Y = ano.

    echo " e são ". date("G:i:s T. ");
    //G = hora, i = minuto, s = segundo T = Timezone q o tempo é medido.


    
    ?>

</body>
</html>