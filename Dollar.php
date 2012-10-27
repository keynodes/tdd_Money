<?php

class Dollar
{
    public $amount;

    /**
     * __construct
     *
     * @param mixed $amount
     * @access public
     * @return void
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * times
     *
     * @param int $multiplier
     * @access public
     * @return void
     */
    public function times($multiplier)
    {
        $this->amount *= $multiplier;
    }
}
