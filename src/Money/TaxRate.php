<?php
namespace Money;

class TaxRate
{
    /**
     * @var float
     */
    protected $rate;

    /**
     * @param float $rate between 0 and 1
     *
     * @throws \LogicException if rate is invalid
     * @throws \InvalidArgumentException if not float provided
     */
    public function __construct($rate)
    {
        if (false == \is_float($rate)) {
            throw new \InvalidArgumentException('Invalid tax rate provided must be a float value but it is provided `'.var_export($rate, true).'`');
        }
        if (false == ($rate >= 0 && $rate < 1)) {
            throw new \LogicException('Invalid tax rate provided it must be bigger or equal to zerro and less then one but it is `'.$rate.'`');
        }

        $this->rate = $rate;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function getPercent()
    {
        return 100 * $this->getRate();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        return (string) $this->getRate();
    }
}