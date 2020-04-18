<?php

use Entities\Box;
use Entities\Cart;
use Entities\Product;

require('autoload.php');

$cart = new Cart();

$product = new Product();
$product->setQuantity(3);

$cart->addItem($product); // Added 3 products to cart

$box = new Box();
$product2 = new Product();
$product2->setQuantity(7);
$box->addItem($product2);
$cart->addItem($box);

$box2 = new Box();
$box3 = new Box();
$box4 = new Box();
$box5 = new Box();

$product3 = new Product();
$product3->setQuantity(5);

$box3->addItem($product3);

$box2->addItem($box3);

$box4->addItem($box2);

$cart->addItem($box2);
$cart->addItem($box3);
$cart->addItem($box4);

$box5->addItem($box4);

$cart->addItem($box5);

echo $cart->count();