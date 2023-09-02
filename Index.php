<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

#Váriavel tipo "String":
$nome = "Eduardo C. Miozzo";

#Variavél tipo inteiro:
$idade = 22;

#Váriavel tipo real (float):
$saldo_em_conta = 238,10;

#Booleana (V ou F)
$fumante = false;

?>

<h1>Dados informados</h1>
<hr>
<p>Nome:  <?= $nome ?> </p>
<p>Idade:  <?= $idade ?> </p>
<p>Saldo em conta:  <?= $saldo_em_conta ?> </p>
<p>Fumante:  <?= $fumante ?> </p>
  
  </body>
</html>
