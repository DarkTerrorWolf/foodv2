<?php

class Order
{
    private $_food;
    private $_meal;
    private $_condiments;

    function __construct() {
        $this->_food = "";
        $this->_meal = "";
        $this->_condiments = array();
    }

    /**
     * @return string
     */
    public function getFood()
    {
        return $this->_food;
    }

    /**
     * @param string $food
     */
    public function setFood($food)
    {
        $this->_food = $food;
    }

    /**
     * @return string
     */
    public function getMeal()
    {
        return $this->_meal;
    }

    /**
     * @param string $meal
     */
    public function setMeal($meal)
    {
        $this->_meal = $meal;
    }

    /**
     * @return array
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    /**
     * @param array $condiments
     */
    public function setCondiments($condiments)
    {
        $this->_condiments = $condiments;
    }


}