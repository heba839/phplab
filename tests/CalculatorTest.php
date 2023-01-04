<?php
use PHPUnit\Framework\TestCase;
//use SebastianBergmann\Complexity\Calculator;
require './src/Calculator.php';
//require 'E:\XAMPP\htdocs\phpunit\src\Calculator.php';
class CalculatorTest extends TestCase{
    public function testAdd(){
$c=new Calculator;
$result =$c->Add(5,10);
$this->assertEquals(15,$result,'failure from add()');
    }
public function testSubtract(){
    $c=new Calculator;
    $this->assertEquals(5,$c->Subtract(10,5),'failure from Subtract()');
}

    }


?>