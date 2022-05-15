<?php

namespace Nhivonfq\Unlock\Decorator;

class PizzaChicken implements PizzaInterface
{

    /**
     * @return string
     */
    public function doPizza(): string
    {
        return "Pizza Chicken";
    }
}
