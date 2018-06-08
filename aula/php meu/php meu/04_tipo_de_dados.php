<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /*A linguagem PHP é de tipagem dinamica.
    No desenvolvimento usamos muito o va_dump para debugar uma variavel.
    o PHP possui 4 tipos de dados básicos, 
    (integer, float, boolean e string)
                 2 compostos(Array e Objeto). 
                 E 2 especiais(Resource e Null).

    */
    $cliente = "José";
    var_dump($cliente);
    echo "<hr>";
    $peso = 81;
    var_dump($peso);
    $peso = 81.6;
    var_dump($peso);
    $casado = true;
    var_dump($casado);
    $casado = false;
    var_dump($casado);

    $cores = [
        "amarelo", "verde", "azul","branco"
    ];

    var_dump($cores);
    echo $cores[2];

    $produto = [
        "Lapis"=>10,
        "Caneta"=>15,
        "Mouse"=>40
    ];
    var_dump($produto);
    echo "O valor da Caneta é: R$" .number_format($produto['Caneta'], "2", ",", "." );
    
    class Pessoa{
    public $cliente1;
    public $idade;
    public $renda;
    }
    $pessoa =  new Pessoa;
        $pessoa ->cliente1 ="Maria";
        $pessoa ->idade = 18; 
        $pessoa ->renda = 17500;

        var_dump($pessoa);
        echo "A renda do Maria é R$" . number_format($pessoa->renda,2,",","."); 

    $pessoa2 =  new Pessoa;
        $pessoa2 ->cliente1 ="José";
        $pessoa2 ->idade = 38; 
        $pessoa2 ->renda = 7500;

        var_dump($pessoa2);
        echo "A renda do José é R$" . number_format($pessoa2->renda,2,",","."); 
    
/*A Função gettype informa o tipo de dado da variavel*/
    echo "<hr>";
        echo "<hr>A variavel\$cliente é do tipo: " . gettype($cliente)."<br>";  
        echo "<hr>A variavel\$peso é do tipo: " . gettype($peso)."<br>";    
        echo "<hr>A variavel\$casado é do tipo: " . gettype($casado)."<br>";   
        echo "<hr>A variavel\$cores é do tipo: " . gettype($cores)."<br>";   
        echo "<hr>A variavel\$pessoa2 é do tipo: " . gettype($pessoa2)."<br>";   

//tabem ultilizamos funçoes booleans de cerificalção de tipo
        echo is_real($peso) . "<hr>";
        echo is_bool($casado)."<hr>";
        echo is_object($pessoa2). "<hr>";
        echo is_object($casado)."<hr>";

        if (is_object($pessoa2)){
                echo"a variavel \$casado é um objeto ";
        }else{
            echo"a varivel não um obejto";
        }

        if (!is_object($pessoa2)){
            echo "<br>essa variavel não é um obejeto";
        }else{
            echo"<br>essa variavel é um obejto";
        }

        $saida = "<hr> o estado civil do $cliente é: ";
        if($casado){
            $saida = $saida . "Casado";
        }else{
            $saida = $saida . "Solteiro";
        }
        echo $saida;
        /* A função settype altera o tipo da variavel */

        $idade = "18";
        var_dump($idade);
        settype ($idade,"integer");
        var_dump($idade);
        // sttype cria tambem uma variavel determinando seu tipo implicita

        settype($compras,"float");
        var_dump($compras);

        //tambem podemos alterar o tipo usando uma conversão explicita 

        $vendas = 250.56;
        $total = $vendas *2;

        echo "<hr>Total (1):" . $total;
        $total2 = (int)$vendas *2;
        echo"<hr> Total (2):" .$total2;
        var_dump($vendas);
        //porem note que $vendas continua igual a 250.56
        settype($vendas,"integer");
        var_dump($vendas);
        // ja com o settype a variavel tem uma alteração permanenete


        //coerção são convresões explicitas feitas pelo proprio PHP

        $p1 = "10Canetas";
        $p2 = "20Lapis";
        echo "O total de produtos em estoque é: " . @($p1+$p2);

        //A função isset verifica a existencia de uma variavel
        if(isset($p1)){
            echo"<hr>A variavel \$p1 existe";
        }else{
            echo"<hr>A variavel \$p1 não existe";   
        }

        if(isset($p3)){
            echo"<hr>A variavel \$p1 existe";
        }else{
            echo"<hr>A variavel \$p3 não existe";   
        }
        // a função unset deleta a variavel

        unset($p1);
        if(isset($p1)){
            echo"<hr>A variavel \$p1 existe";
        }else{
            echo"<hr>A variavel \$p1 não existe";   
        }

        //A FUNÇÃO empty($variavel) verifica se esta vazia.
        settype($empresa,"string");
        var_dump($empresa);
        if(empty($empresa)){
            echo"<hr>preencha o campo empresa";
        }else{
            echo"<hr>A empresa informada é a: $empresa";
        }
        $empresa = "impacta";
        if(empty($empresa)){
            echo"<hr>preencha o campo empresa";
        }else{
            echo"<hr>A empresa informada é a: $empresa";
        } 
    ?>
</body>
</html>