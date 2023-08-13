<?php
    /*
    Crie uma função que receba 2 notas ($n1 e $n2) de um aluno. Essa função deve
    retornar um booleano indicando se o aluno foi aprovado. Para ser aprovado, a soma das
    notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7.
    */

    function aprovado($n1, $n2) 
    {
        if ($n1 + $n2 >= 19 && $n1 > 7 && $n2 > 7)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    var_dump(aprovado(20, 20));
    echo "<br>";
    var_dump(aprovado(12, 8));
    echo "<br>";
    var_dump(aprovado(30, 7));