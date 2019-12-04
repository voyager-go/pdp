<?php
/**
 * Created by PhpStorm.
 * User: artist
 * Date: 2019/12/4
 * Time: 10:43 AM
 */
// 简单工厂模式与策略模式结合
require_once 'Strategy.php';
class FactoryContext
{
    private $strategy;

    public function __construct($operation)
    {
        switch ($operation){
            case 'a':
                $this->strategy = new ConcreateStrategyA();
                break;
            case 'b':
                $this->strategy = new ConcreateStrategyB();
                break;
            case 'c':
                $this->strategy = new ConcreateStrategyC();
                break;
        }
    }

    public function contextInterface()
    {
        return $this->strategy->AlgorithmInterface();
    }
}
echo '-----------------------------' . PHP_EOL;
// client
$context = new FactoryContext('b');
$context->contextInterface();