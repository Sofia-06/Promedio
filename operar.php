<?php

    $nota1=$_POST['n1'];
    $nota2=$_POST['n2'];
    $nota3=$_POST['n3'];
    $nota4=$_POST['n4'];

    $promedio=(($nota1+$nota2+$nota3+$nota4)/4);

    if($promedio >=60)
    {
        echo "Felicidades, ha aprobado";
    }
    else
    {
        echo "Ha reprobado";
    }


?>