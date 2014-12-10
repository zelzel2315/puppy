<?php

class BananaSplit {

    protected $make;

    public function __construct($make) {
        $this->make = $make;
    }
}

class Banana {
    public function __construct($ripeness, $size) {
    }
}

$DiContainer = new DiContainer();

$DiContainer->register('banana', 'Banana')->addArgument('ripeness')->addArgument('size');

$DiContainer->register('bsplit', 'BananaSplit')->addArgument('@@banana');

$bsplit = $DiContainer->getInstance('bsplit');

