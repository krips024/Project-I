<?php

    class product{
        public $id;
        public $name;
        public $price;

        public function __construct($id, $name, $product, $price){
            $this -> name = $name;
            $this -> name = $price;
            $this -> quantity = $name;
        }       
    }

    class cart{
        public $product;

        public function __construct(){
            $this -> product = array();
        }

        public add_product($ob){

        }

        public remove_product($id){
            for (let i = 0; i < this.items.length; i++) {
                if (item.name === itemName) {
                  this.items.splice(i, 1);
                }
              }
        }
    }
     $prod1 = new product();
     $cart -> add_product($prod1);

 ?>    