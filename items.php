<?php
//items.php

$myItem = new Item(1, "Taco", "Our Tacos are awesome!", 1.99);
$myItem->addExtra("Sour Cream");
$myItem->addExtra("Reduced Fat Sour Cream");
$myItem->addExtra("Cheese");
$myItem->addExtra("Nacho Cheese Sauce");
$myItem->addExtra("Chipotle Sauce");
$myItem->addExtra("Pico de Gallo");
$myItem->addExtra("Guacamole");
$config->items[] = $myItem;

$myItem = new Item(2,"Burrito","Our Burritos are awesome!",3.95);
$myItem->addExtra("Sour Cream");
$myItem->addExtra("Reduced Fat Sour Cream");
$myItem->addExtra("Cheese");
$myItem->addExtra("Nacho Cheese Sauce");
$myItem->addExtra("Chipotle Sauce");
$myItem->addExtra("Pico de Gallo");
$myItem->addExtra("Guacamole");
$config->items[] = $myItem;

$myItem = new Item(3,"Salad","Our Salads are awesome!",5.95);
$myItem->addExtra("Croutons");
$myItem->addExtra("Bacon");
$myItem->addExtra("Lemon Wedges");
$myItem->addExtra("Avacado");
$config->items[] = $myItem;

class Item
{
    public $id = 0;
    public $name = '';
    public $description = '';
    public $price = 0;
    public $extras = array();
    
    public function __construct($id, $name, $description, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        
    } #end Item constructor
    
    public function addExtra($extra) {
        $this->extras[] = $extra;
    } #end addExtra()
} #end Item class
