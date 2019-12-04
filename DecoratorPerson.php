<?php
/**
 * Created by PhpStorm.
 * User: artist
 * Date: 2019/12/4
 * Time: 11:24 AM
 */
// 加深装饰模式理解
class Person
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo "打扮".$this->name."\n";
    }
}
// 服饰类
class Finery
{
    protected $person;

    public function decorate($person)
    {
        $this->person = $person;
    }

    public function show()
    {
        if ($this->person != null)
        {
            $this->person->show();
        }
    }
}
// 具体服饰类
class TShirts extends Finery
{
    public function show()
    {
        parent::show(); // TODO: Change the autogenerated stub
        echo "大T恤\n";
    }
}
class BigTrouser extends Finery
{
    public function show()
    {
        parent::show();
        echo "跨裤\n";
    }
}
class Sneakers extends Finery
{
    public function show()
    {
        parent::show();
        echo "破球鞋\n";
    }
}

class Suit extends Finery
{
    public function show()
    {
        parent::show();
        echo "西装\n";
    }
}

class Tie extends Finery
{
    public function show()
    {
        parent::show();
        echo "领带\n";
    }
}

class LeatherShoes extends Finery
{
    public function show()
    {
        parent::show();
        echo "跨裤\n";
    }
}

// 客户端代码
$person = new Person("alex");
$sneakers = new Sneakers();
$bigTrouser = new BigTrouser();
$tShirts = new TShirts();

$sneakers->decorate($person);
$bigTrouser->decorate($sneakers);
$tShirts->decorate($bigTrouser);
$tShirts->show();