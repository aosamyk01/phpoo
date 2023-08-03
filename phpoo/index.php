<?php 
require ("pessoa.php");
require ("retangulo.php");
class Fruta {
    //atributos
    public $nome;
    public $cor;

    //metodo

    function __construct ($nome, $cor)
    {
        $this-> nome = $nome;
        $this-> cor = $cor;

    }

    function set_name($nome){
        $this -> nome = $nome;
    }

    function get_name(){
        return $this -> nome;
    }

    function set_color($cor){
        $this -> cor = $cor;
    }
    
    function get_color(){
        return $this -> cor;
    }
}
 //criando um obj
$maca = new Fruta ("maca_ifsp", "vermelha");
$banana = new Fruta ("banana_ifsp", "amarela" );

/* $maca-> set_name ("maca_ifsp");
$banana-> set_name ("banana_ifsp"); */

echo $maca -> get_name();
echo "<br>" .$banana -> get_name();

$aluno1= new pessoa ("samara", '19', "estudante");
$aluno2= new pessoa ("sla", '19', "estudante");

echo $aluno1->apresentar();
echo $aluno2->apresentar();

$retangulo = new retangulo (2,4);
echo "<br> Area do retangulo = " .$retangulo-> calcular
?>