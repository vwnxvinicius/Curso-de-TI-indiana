<?php
    /*
    Termine o script abaixo. A variável $preco contém o valor da venda. 
    Acrescente 12% ao preço do produto, divida em 10 parcelas e mostre 
    na tela o valor de cada parcela e o valor total da compra.
    */
    $preco = 320;
    $preco_total = $preco+=($preco * 12) / 100;
    $parcela = $preco_total / 10;
    echo "O valor de cada parcela é de R$$parcela e o valor total é de R$$preco_total";