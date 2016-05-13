<?php

/**
 * Created by PhpStorm.
 * User: Ray Brown-Amory
 * Date: 13/05/2016
 * Time: 12:00
 */
class game
{
    // properties for random numbers
    public $rand_number1 =array(0,30);
    public $rand_number2 =array(0.30);


    // construct function

    public function __construct($rand_number1, $rand_number2){
          $this ->rand_number1 = $rand_number1;
          $this ->rand_number2 = $rand_number2;

    }

    // check winning condations


    public function checkwin() {
        
    }


}