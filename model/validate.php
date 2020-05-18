<?php


//Validate.php

/**
 * Class Validate
 * Contains validation methods for app
 * @author Tylor Schlosser
 * @version 0.1
 */
class Validate
{
    /* Return a value indicating if food parameter is valid
       Valid foods are not empty and do not contain anything except letters
       @param String $food
       @return boolean
    */
    function validFood($food)
    {
        /*
        if(!empty($food) && ctype_alpha($food)) {
            return true;
        } else {
            return false;
        }
        */

        $food = str_replace(' ', '', $food);
        return !empty($food) && ctype_alpha($food);
    }

    /* Return a value indicating if meal is valid
       Valid meals are breakfast, lunch and dinner
       @param String $meal
       @return boolean
    */
    function validMeal($meal)
    {
        $meals = getMeals();
        return in_array($meal, $meals);
    }


}