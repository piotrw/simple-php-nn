# SimpleNN

Simple Neural Network implementation in PHP-OOP.
Just for fun.

Inspired by Sentdex tutorial 
https://github.com/Sentdex/NNfSiX

## Prerequisite
* php > 7.4
* composer (http://getcomposer.org)

## Installation

```shell
composer install
```

## Usage

``` shell
php demo.php
```

File demo.php contains:

```php
<?php
 
use NumPHP\Core\NumArray;
use SimpleNN\AbstractActivation;
use SimpleNN\Layer;

require_once "vendor/autoload.php";

// Input data
$X = [
    [1, 2, 3, 2.5],
    [2, 5, -1, 2],
    [-1.5, 2.7, 3.3, -0.8],
];

// Initialize pseudo-random generator, for testing
srand(0);

// Define layers and activation functions
$layer1 = new Layer(4, 5);
$layer2 = new Layer(5, 2);
$activation1 = new Activation\ReLU();
$activation2 = new Activation\ReLU(); // todo SoftPlus

// Forward network
$layer1->forward($X);
$activation1->forward($layer1->getOutput());
$layer2->forward($activation1->getOutput());
$activation2->forward($layer2->getOutput());

// display output of network
\SimpleNN\Tools\Matrix::print($activation2->getOutput());
```