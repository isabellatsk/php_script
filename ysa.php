<?php
// imprimir na tela
echo "<h1>My first PHP script!</h1><br><br>";

// echo pode ser com ou sem parênteses
echo "Hello"; 
echo("Hello<br>");

// print em vez de echo
print "Hello";
print("Hello<br><br>");

// variável
$txt = "JAVA";
echo "Eu amo $txt!<br><br>";  

// usando variáveis
$idade = 15;
$nome = "John";
echo "Nome: $nome<br> Idade: $idade <br><br>";

// atribuindo o mesmo valor a várias variáveis
$f = $s = "Arroz";
echo "O alimento é: $f<br>";
echo "O alimento é: $s<br><br>";

// mostrando a versão do PHP
echo "PHP Version: " . phpversion() . "<br><br>";

// operação 
$num1 = 5;
$num2 = 4;
echo "$num1 + $num2: " . ($num1 + $num2) . "<br><br>";

// função var_dump para exibir tipo e valor de variáveis
var_dump(5); echo "<br>";
var_dump("Ysa"); echo "<br>";
var_dump(3.14); echo "<br>";
var_dump(true); echo "<br>";
var_dump([2, 3, 56]); echo "<br>";
var_dump(NULL); echo "<br><br>";

// convertendo tipos de dados
$n1 = 5; var_dump($n1); echo "<br>";
$n1 = (string) $n1;  // p string
var_dump($n1);
echo "<br><br>";

// variáveis em HTML
$txt1 = "Hello word";
$txt2 = "W3Schools.com";
echo "<h3>$txt1</h3>";
echo "<p>Study PHP at $txt2</p>";

// concatenando 
$t1 = "Teste 1"; $t2 = "Teste 2";
echo "Esse é o $t1!<br>";  
echo $t1 . " " . $t2 . "<br>";
echo "$t1 $t2 <br>";
print $t1 . " " . $t2 . "<br><br>";


// classe em PHP
class Car {
  public $color;
  public $model;

  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  public function message() {
    return "Meu carro é " . $this->color . " " . $this->model . "!";
  }
}
$myCar = new Car("Rosa", "BMW");
echo $myCar->message();
echo "<br><br>";


// arrays
$cars = array("Volvo", "Corsa", "Toyota");
print_r($cars);
echo "<br><br>";

// strpos para procurar uma palavra dentro de uma string
echo strpos("Hello world!", "world") . "<br>";
// strpos procura a palavra "world" dentro da string "Hello world!".
// retorna a posição (índice) onde a palavra "world" começa na string.
// "w" começa na posição 6, então o resultado será 6.
echo "<br>";

// manipulando letras em uma string
$text = "HellO WoRld!";
echo strtoupper($text) . "<br>";  // maiúsculas
echo strtolower($text) . "<br>";  // minúsculas
echo "<br>";

// explode para dividir uma string
$x = "Foguete Amarelo!";
$y = explode(" ", $x);
print_r($y); // mostra o array resultante da divisão
echo "<br><br>";


// aspas dentro de strings
$x = "Eles são os \"Vikings\" do Norte.";
echo $x . "<br><br>";


// convertendo string p inteiro
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast . "<br>";
var_dump($int_cast);
echo "<br><br>";

// operações matemáticas e funções
echo round(0.90) . "<br>"; //arredonda para o inteiro mais próximo
echo rand(10, 100) . "<br>"; //gera um número aleatório entre 10 e 100
echo rand() . "<br>";
echo sqrt(64) . "<br>"; //calcula a raiz quadrada
echo min(0, 150, 30, 20, -8, -200) . "<br>"; //menor valor
echo max(0, 150, 30, 20, -8, -200) . "<br>"; //maior valor
echo pi() . "<br>"; //valor de Pi

# comentando uma linha
/* comentando várias linhas */
?>

<!-- HTML com PHP -->
<!DOCTYPE html>
<html>
  <body>
    <h1>My first PHP page</h1>
    <?php
      echo "Hello World!<br>";
    ?>
  </body>
</html>