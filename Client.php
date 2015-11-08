<?php

spl_autoload_register(function ($class) {
    require $class . '.php';
});

class Client
{
    private $adc;
    private $apc;
    private $tank;

    public function __construct()
    {
        $this->generatePrototype();

        $adc1 = clone $this->adc;
        $this->setPropety($adc1, '23', '女警', 'adc1.jpg', 6300);
        $this->showPropety($adc1);
        $adc2 = clone $this->adc;
        $this->setPropety($adc2, '25', '女枪', 'adc2.jpg', 3600);
        $this->showPropety($adc2);

        $tank = clone $this->tank;
        $this->setPropety($tank, '21', '牛头', 'tank.jpg', 1350);
        $this->showPropety($tank);

        $apc1 = clone $this->apc;
        $this->setPropety($apc1, '43', '皎月', 'apc1.jpg', 6300);
        $this->showPropety($apc1);
        $apc2 = clone $this->apc;
        $this->setPropety($apc2, '54', '发条', 'apc2.jpg', 4800);
        $this->showPropety($apc2);
    }

    private function generatePrototype()
    {
        $this->adc = new Adc();
        $this->apc = new Apc();
        $this->tank = new Tank();
    }

    private function setPropety(HeroPrototype $tmp, $id, $name, $picture, $price)
    {
        $tmp->setId($id);
        $tmp->setName($name);
        $tmp->setPic($picture);
        $tmp->setPrice($price);
    }

    private function showPropety(HeroPrototype $tmp)
    {
        $pic = $tmp->getPic();
        echo $tmp->getId() . "<br />";
        echo $tmp->getName() . $tmp::TYPE . "<br />";
        echo $tmp->getPrice() . "<br />";
        echo "<img src=$pic width='150' height='150'>" . "<br />";
    }
}

$client = new Client();




