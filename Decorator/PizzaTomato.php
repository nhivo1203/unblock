<?php

namespace Nhivonfq\Unlock\Decorator;

class PizzaTomato implements PizzaInterface
{

    /**
     * @return string
     */
    public function doPizza(): string
    {
        return "Pizza Tomato";
    }
}
