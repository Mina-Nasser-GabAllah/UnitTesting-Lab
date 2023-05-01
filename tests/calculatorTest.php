<?php
use PHPUnit\Framework\TestCase;
require './src/Calculator.php';
class calculatorTest extends Testcase{
    public function testmult(){
        $obj=new Calculator;
        $result=$obj->mult(2,3);
        $this->assertEquals(6,$result);
    }
    public function testfactorial(){
        $obj=new Calculator;
        $obj1=new Calculator;
        $obj2=new Calculator;
        $obj3=new Calculator;
        $obj4=new Calculator;
        $obj5=new Calculator;
        $obj6=new Calculator;
        $result=$obj->factorial(0);
        $result1=$obj1->factorial(1);
        $result2=$obj2->factorial(5);
        $result3=$obj3->factorial(-3);
        $result4=$obj4->factorial(1.5);
        $result5=$obj5->factorial(false);
        $result6=$obj6->factorial('abc');
        $this->assertEquals(1,$result1);
        $this->assertEquals(120,$result2);
        $this->assertEquals(null,$result3);
        $this->assertEquals(null,$result4);
        $this->assertEquals(null,$result5);
        $this->assertEquals(null,$result6);
        $this->assertEquals(1,$result);
        

    }
}
?>