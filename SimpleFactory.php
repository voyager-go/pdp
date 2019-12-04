<?php
/**
 * Created by PhpStorm.
 * User: artist
 * Date: 2019/12/4
 * Time: 10:10 AM
 */

class Operation
{
    protected $a = 0;
    protected $b = 0;

    public function setA($a)
    {
        $this->a = $a;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function getResult()
    {
        $result = 0;
        return $result;
    }
}

class OperationAdd extends Operation
{
    public function getResult()
    {
        return $this->a + $this->b;
    }
}

class OperationSub extends Operation
{
    public function getResult()
    {
        return $this->a - $this->b;
    }
}

class OperationMul extends Operation
{
    public function getResult()
    {
        return $this->a * $this->b;
    }
}

class OperationDiv extends Operation
{
    public function getResult()
    {
        return $this->a / $this->b;
    }
}

class SimpleFactory
{
    public static function createOperation($operation)
    {
        switch ($operation){
            case '+':
                $oper = new OperationAdd();
                break;
            case '-':
                $oper = new OperationSub();
                break;
            case '*':
                $oper = new OperationMul();
                break;
            case '/':
                $oper = new OperationDiv();
                break;
        }
        return $oper;
    }
}

// client
$operation = SimpleFactory::createOperation('+');
$operation->setA(1);
$operation->setB(2);
echo $operation->getResult() . PHP_EOL;