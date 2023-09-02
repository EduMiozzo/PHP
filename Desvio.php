<html>
  <head>
    <title>Desvio Condicional</title>
  </head>
  <body>
    <?php
/*
    O desvio condicional ocorre quando uma condição é dentro de um bloco "se.. senão", assim 

    SE <condição booleana> {
    BLOCO QUE SERÁ EXECUTADO CASO A CONDIÇÃO SEJA FALSE
    }

    NO PHP:
    if (condição) {
    //true
    } else {
    //false
    }

<=
    == comparação. Exemplo: 2 == 2 -> Verdadeiro
    != Diferente. Exemplo: 3 != 3 -> Falso
    < ou > menor ou maior. Exemplo 2 < 5 -> Verdadeiro 
    === -> São iguais e do mesmo tipo
    !== -> São diferentes e de tipos diferentes 
    */

$x = '33';
$y = 34;

if ($x === $y) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}
echo '<br>';
$fumante = false


?>
  </body>
</html>
