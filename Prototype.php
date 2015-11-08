<?php

abstract class HeroPrototype
{
    protected $id;
    protected $name;
    protected $picture;
    protected $price;

    // 设置价格
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }

    // Id
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    // 名字
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    // 图片
    public function setPic($pic)
    {
        $this->picture = $pic;
    }
    public function getPic()
    {
        return $this->picture;
    }

    abstract function __clone();

}