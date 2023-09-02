<html>
  <head>
  </head>
  <body>
  <?php
$tem_cartao_fidelidade = true;
$valor_compra = 50;
$valor_frete = 40;

if ($tem_cartao_fidelidade && $valor_compra >= 500) {
  $valor_frete = 0;
} else if ($tem_cartao_fidelidade && $valor_compra >= 200){
  $valor_frete = 10; 
}else if ($tem_cartao_fidelidade && $valor_compra >= 100){
  $valor_frete = 20; 
}
?>
    <hr>
    <hr>
    <h1><center>Resumo do pedido</center</h1>
    <p>Possui cartão fidelidade: <?= ($tem_cartao_fidelidade) ? 'Sim' : 'Não' ?></p>
    <p>Valor dos produtos: <?= $valor_compra ?></p>
    <p>Valor do frete: <?= $valor_frete ?></p>
    <p>Valor total: <?= $valor_compra + $valor_frete ?></p>
    <hr>
    <h4>Digite o nome do criador:<h4><td aling="center"><input type="text" ... ></td>
    <hr>
</body>
</html>
