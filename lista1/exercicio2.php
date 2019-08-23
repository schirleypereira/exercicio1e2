<?php  
       
        # Tarefa 1
        echo " Tarefa1 ) <br>";
        $valor01= isset($_POST['valor01']) ? $_POST['valor01'] : 0;
        if($valor01 < 0) {
            echo "O modulo do {$valor01} é: " . ($valor01 * -1);
        } else {
            echo "O modulo do {$valor01} é: " . $valor01;
        }
         echo "<hr>";

         # Tarefa 2
         echo " Tarefa 2) <br>";
         $num= 5;
         if($num/2==0) {
            echo "é par";
        } else {
            echo "é impar ";
        }
        echo "<hr>";

        # Tarfa 3
        echo " Tarefa 3) <br>";
        $numInteiro1=5;
        $numInteiro1=10;
        if($numInteiro1*$numInteiro1) {
            echo "é multiplo";
        } else {
            echo "não é multiplo";
        }
        echo "<hr>";

        # Tarefa 4
        echo " Tarefa 4) <br>";
        $valorInteiro=10; 
        if($valorInteiro < 0) {
            echo "é negativo";
        } elseif($valorInteiro > 0) {
            echo "é positivo";
        }else {
            echo "é zero ";
        }

        echo "<hr>";
        echo " Tarefa 5) <br>";

        # Tarefa 5,
        $num=100;
        if($num<5) {
            echo " não se encontra";
        } else if($num<20) {
            echo "se encontra";
        } else {
            echo "não se encontra ";
        }
        echo "<hr>";

        #tarefa 6
        echo " Tarefa 6) <br>";
        $valor1=20;
        $valor2=80;
        if($valor1>$valor2) {
          echo "<br>A soma é:" .$valor1 += $valor2;
        } else {
        echo "<br>A multiplicação é: " .$valor1*= $valor2;
        
        }
        echo "<hr>";

        # Tarefa 7
        echo " Tarefa 7) <br>";
        $valor1=40;
        $valor2=30;
        if($valor1<$valor2) {
            echo "O primeiro é maior que o segundo";
        } else if($valor1>$valor2) {
            echo "O primeiro é maior que o segundo";
        } else {
            echo "os dois são iguais ";
        }
        echo "<hr>";

        # Tarefa 8
        echo " Tarefa 8) <br>";
        $ano = 2020;
        if ($ano/400 == 0) {
            echo "é bissexto";
         }elseif (($ano/4 == 0) &&($ano/100 == 0)){
            echo "não é bissexto";
          }elseif (($ano/4 == 0) || ($ano/100 != 0)){
              echo "é bissexto";
          }else{}
            


           echo "<hr>";  
         # Tarefa 9
         echo " Tarefa 9) <br>";
        $num1=10;
        $num2=2;
        echo "<br>A divisão é:" .$num1 /= $num2;
      

        echo "<hr>"; 

        # Tarefa 10
        echo " Tarefa 10) <br>";
        $salario=420;
        if($salario>20/100) {
            echo "Empréstimo não pode ser concedido";
        } else if($salario<20/100){
            echo "Empréstimo pode ser concedido";
        } else {
            echo "Empréstimo em analise";
        }
        
        ?>