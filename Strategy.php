<?php
/**
 * Created by PhpStorm.
 * User: artist
 * Date: 2019/12/4
 * Time: 10:32 AM
 */
// 策略模式


abstract class Strategy
{
    // 算法方法
    abstract public function AlgorithmInterface();
}

// 算法A
class ConcreateStrategyA extends Strategy
{
    public function AlgorithmInterface()
    {
        // TODO: Implement AlgorithmInterface() method.
        echo '算法A实现' . PHP_EOL;
    }
}

// 算法B
class ConcreateStrategyB extends Strategy
{
    public function AlgorithmInterface()
    {
        // TODO: Implement AlgorithmInterface() method.
        echo '算法B实现' . PHP_EOL;
    }
}

// 算法C
class ConcreateStrategyC extends Strategy
{
    public function AlgorithmInterface()
    {
        // TODO: Implement AlgorithmInterface() method.
        echo '算法C实现' . PHP_EOL;
    }
}

class Context
{
    private $strategy;
    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function contextInterface()
    {
        $this->strategy->AlgorithmInterface();
    }
}

$context = new Context(new ConcreateStrategyA());
$context->contextInterface(); // 算法A实现

$context = new Context(new ConcreateStrategyB());
$context->contextInterface(); // 算法B实现

$context = new Context(new ConcreateStrategyC());
$context->contextInterface(); // 算法C实现