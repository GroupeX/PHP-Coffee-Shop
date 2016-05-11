<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CoffeeEntity {
    public $id;
    public $name;
    public $type;
    public $price;
    public $roast;
    public $country;
    public $image;
    public $review;
    
    function __construct($id, $name, $type, $price, $roast, $country, $image, $review) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->roast = $roast;
        $this->country = $country;
        $this->image = $image;
        $this->review = $review;
    }
    
    

}