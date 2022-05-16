<?php

namespace Nhivonfq\Unlock\Decorator;

class PepperDecorator extends PizzaDecorator
{

    public function doPizza(): string
    {
        $type = $modifyPizza->doPizza();
    }
}
