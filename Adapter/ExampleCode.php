<?php

namespace Nhivonfq\Unlock\Adapter;


class Target
{
    /**
     * @return string
     */
    public function request(): string
    {
        return "Target: The default target's behavior.";
    }
}

class Adaptee
{
    /**
     * @return string
     */
    public function specificRequest(): string
    {
        return ".eetpadA eht fo roivaheb laicepS";
    }
}

class Adapter extends Target
{
    /**
     * @var Adaptee
     */
    private $adaptee;

    /**
     * @param Adaptee $adaptee
     */
    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * @return string
     */
    public function request(): string
    {
        return "Adapter: (TRANSLATED) " . strrev($this->adaptee->specificRequest());
    }
}

/**
 * @param Target $target
 * @return void
 */
function clientCode(Target $target)
{
    echo $target->request();
}

echo "Client: I can work just fine with the Target objects:\n";
$target = new Target();
clientCode($target);
echo "\n\n";

$adaptee = new Adaptee();
echo "Client: The Adaptee class has a weird interface. See, I don't understand it:\n";
echo "Adaptee: " . $adaptee->specificRequest();
echo "\n\n";

echo "Client: But I can work with it via the Adapter:\n";
$adapter = new Adapter($adaptee);
clientCode($adapter);
