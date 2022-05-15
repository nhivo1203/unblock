<?php

namespace Nhivonfq\Unlock\Decorator;

abstract class PizzaDecorator implements PizzaInterface
{
    /**
     * @var PizzaInterface
     */
    protected PizzaInterface $modifyPizza;

    /**
     * @param PizzaInterface $pizza
     */
    public function __construct(PizzaInterface $pizza)
    {
        $this->modifyPizza = $pizza;
    }

    /**
     * @return PizzaInterface
     */
    public function getPizza(): PizzaInterface
    {
        return $this->modifyPizza;
    }

    /**
     * @param PizzaInterface $modifyPizza
     * @return void
     */
    public function setPizza(PizzaInterface $modifyPizza)
    {
        $this->modifyPizza = $modifyPizza;
    }
}
