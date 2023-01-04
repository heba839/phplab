<?php
use PHPUnit\Framework\TestCase;
//require 'E:\XAMPP\htdocs\unittesting\src\Factorial.php';
require './src/Factorial.php';
class FactorialTest extends TestCase{
    public function testFactorial(){
    $a=new FactorialA;
    $this->assertEquals(1,$a->Factorial(0),'failure from factorial(0)');
    $b=new FactorialA;
    $this->assertEquals(1,$b->Factorial(1),'failure from factorial(1)');
    $c=new FactorialA;
    $this->assertEquals(120,$c->Factorial(5),'failure from factorial(5)');
    $d=new FactorialA;
    $this->assertEquals($c->Factorial(5),(5*($d->Fact(5))),"n! !=n*( (n-1)!)");
    $e=new FactorialA;
    $this->assertEquals(null,($e->Factorial(-3)),"factorial(-3)is wrong");
    $this->assertEquals(null,($e->Factorial(1.5)),"factorial(1.5)is wrong");
    $this->assertEquals(null,($e->Factorial(false)),"factorial(false)is wrong");
    $this->assertEquals(null,($e->Factorial('abc')),"factorial('abc')is wrong");

    }
}
?>