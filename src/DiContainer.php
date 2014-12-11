<?php

class DiContainer {

    protected $reg = array();

    public function register($name, $className){
        $this->reg[$name] = $className;
    }

    public function get($name){
        return $this->reg[$name];
    }
}