<?php
/**
 * Created by PhpStorm.
 * User: artist
 * Date: 2019/12/4
 * Time: 2:13 PM
 */
// 工厂方法模式
require_once 'SimpleFactory.php';
interface IFactory
{
    public function CreateOperation();
}

class AddFactory implements IFactory
{
    public function CreateOperation()
    {
        return new OperationAdd();
    }
}

class SubFactory implements IFactory
{
    public function CreateOperation()
    {
        return new OperationSub();
    }
}

class MulFactory implements IFactory
{
    public function CreateOperation()
    {
        return new OperationMul();
    }
}

class DivFactory implements IFactory
{
    public function CreateOperation()
    {
        return new OperationDiv();
    }
}

//客户端代码
$operationFactory = new AddFactory();
$operation = $operationFactory->CreateOperation();
$operation->setA(10);
$operation->setB(10);
echo $operation->getResult()."\n";