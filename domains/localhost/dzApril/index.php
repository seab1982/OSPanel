<?php
interface Strategy
{
    public function execute();
}

/**
 * Strategy Land
 */
class StrategyLand implements Strategy
{
    public function execute()
    {
        echo 'StrategyLand execute<br>';
    }
}

/**
 * Strategy Sea
 */
class StrategySea implements Strategy
{
    public function execute()
    {
        echo 'StrategySea execute<br>';
    }
}

/**
 * Strategy Air
 */
class StrategyAir implements Strategy
{
    public function execute()
    {
        echo 'StrategyAir execute<br>';
    }
}
/**
 * Strategy Space
 */
class StrategySpace implements Strategy
{
    public function execute()
    {
        echo 'StrategySpace execute<br>';
    }
}
/**
 * Base Context
 */
class Context
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function execute()
    {
        $this->strategy->execute();
    }
}

/**
 * demo
 */

$context = new Context(new StrategyLand());
$context->execute();


$context = new Context(new StrategySea());
$context->execute();

$context = new Context(new StrategyAir());
$context->execute();

$context = new Context(new StrategySpace());
$context->execute();
