<?php

class Page {

    public $path;
    public $name;
    public $controller;
    public $method;
    // public $subPages;

    public function __construct($path, $name, $controller, $method) {
        $this->path=$path;
        $this->name=$name;
        $this->controller=$controller;
        $this->method=$method;
    }
}

?>