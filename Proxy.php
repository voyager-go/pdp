<?php
/**
 * Created by PhpStorm.
 * User: artist
 * Date: 2019/12/4
 * Time: 1:59 PM
 */
// 代理模式


class SchoolGirl
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
// 代理接口
interface GiveGift
{
    public function GiveDolls();
    public function GiveFlowers();
    public function GiveChocolate();
}
// 追求者实现送礼物接口
class Pursuit implements GiveGift
{
    protected $girl;
    public function __construct(SchoolGirl $girl)
    {
        $this->girl = $girl;
    }

    public function GiveDolls()
    {
        // TODO: Implement GiveDolls() method.
        echo $this->girl->getName()." 送你娃娃\n";
    }

    public function GiveFlowers()
    {
        // TODO: Implement GiveFlowers() method.
        echo $this->girl->getName()." 送你花\n";
    }

    public function GiveChocolate()
    {
        // TODO: Implement GiveChocolate() method.
        echo $this->girl->getName()." 送你巧克力\n";
    }
}
// 代理实现送礼物接口
class Proxy implements GiveGift
{
    protected $pursuit;
    public function __construct(SchoolGirl $girl)
    {
        $this->pursuit = new Pursuit($girl);
    }

    public function GiveDolls()
    {
        // TODO: Implement GiveDolls() method.
        $this->pursuit->GiveDolls();
    }

    public function GiveFlowers()
    {
        // TODO: Implement GiveFlowers() method.
        $this->pursuit->GiveFlowers();
    }

    public function GiveChocolate()
    {
        // TODO: Implement GiveChocolate() method.
        $this->pursuit->GiveChocolate();
    }
}
// 客户端代码
$girl = new SchoolGirl('艳芳');
$proxy = new Proxy($girl);
$proxy->GiveDolls();
$proxy->GiveFlowers();
$proxy->GiveChocolate();
