<?php
//é uma maneira mais direta de usar a orientaão a obtejo
//n é necessario instanciar a classe , para chamar um metodo
//na propriedade note q temos q dizer q é estatica;
//o metodo tb
//qdo o metodo é statico nao uasmos this, usamos self::
class Valida 
{
    // Definimos que a qtd mínima de
    // $parMin seja 3
    static public $parMin=3;
    
    // Método que irá validar tamanho
    // máximo/mínimo de caracteres do valor
    static public function max($valor, $max, $charset='UTF-8') 
    {
        // Pega o total de caracteres em UTF8
        $total_char = mb_strlen($valor, $charset);
        
        // Se o total de chars for menor que o padrão
        // definido em $parMin 3
        if ($total_char < self::$parMin) {
            return false;
        }
        // Se o total de chars for maior que o
        // máximo passado pelo método
        if ($total_char > $max) {
            return false;
        }
        return true; // Caso não entre nos ifs acima
    }
}
//note que o self é dentro do metodo;
// e qdo chamamos colocamos valida (a classe) doispontosdoispontos metodo

$input1 = 'Teste é 123';
$input2 = 'INPUT INVÁLIDO MAIOR QUE 20 CHARS';
$input3 = 'a';

echo 'Valor mínimo padrão aceito: ' . Valida::$parMin . '<br>';

// Acessando Valida::max()
// não usamos o new e muito menos uma variável
if (Valida::max($input1, 20)) {
    echo 'Input validado com sucesso';
}
echo '<br>';
if (!Valida::max($input2, 20)) {
    echo 'Input inválido';
}
echo '<br>';
if (!Valida::max($input3, 20)) {
    echo 'Input inválido';
}