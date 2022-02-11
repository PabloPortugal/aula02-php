<?php

    // Sintaxe de Declaração de Variáveis 
    // nome da variável = (tipo de dado) valorInicial!
    $grade1 = (double) null;
    $grade2 = (double) null;
    $grade3 = (double) null;
    $grade4 = (double) null;
    $media = (double) null;

    // Validação para verificar se o botão foi clicado!
    if(isset($_POST['btnCalcular'])){

        //Recebendo dados utilizando o POST do formulário!
        $grade1 = $_POST['txtGrade1'];
        $grade2 = $_POST['txtGrade2'];
        $grade3 = $_POST['txtGrade3'];
        $grade4 = $_POST['txtGrade4'];

        /*
        E - (and, &&)
        OU - (or, ||)
        NÃO - (!)
        */

        /*
        Funções para validação de tipos de dados:
        is_type(var) - Verifica se a variável é do tipo type!
        is_numeric() - Verifica se é um número
        is_integer() - Verifica se é um número inteiro
        is_float() - Verifica se é um número real
        is_bool() - Verifica se é um valor boolean
        is_string() - Verifica se é uma string
        */

        //Validação para tratamento de caixas vazias 
        if($grade1 == "" || $grade2 == "" || $grade3== "" || $grade4 == ""){
        //Quando você insere uma tag html dentro de aspas no PHP, se a tag tiver atributos com valores, estes devem ser esciritos com aspas diferentes das usadas no código PHP
        //OBSERVE AS ASPAS ABAIXO!
            echo('<p class="msgErro">É obrigatório prencher todos os valores com números para realizar o cálculo da média!</p>');
        }else if (!is_numeric($grade1) || !is_numeric($grade2) || !is_numeric($grade3) || !is_numeric($grade4)) {
            echo('<p class="msgErro">Digite apenas números!</p>');
        }else{
            $media = ($grade1+$grade2+$grade3+$grade4) / 4;
        }
    }

?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="get" action="">
						Valor 1:<input type="text" name="txtn1" value="0" > <br>
						Valor 2:<input type="text" name="txtn2" value="0" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" checked>Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						0
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

