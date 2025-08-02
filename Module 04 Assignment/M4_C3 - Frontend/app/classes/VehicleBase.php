<?php

abstract class VehicleBase {
    protected $name;
    protected $type;
    protected $price;
    protected $image;

    public function __construct($name, $type, $price, $image) {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }

    public function getDetails() {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'price' => $this->price,
            'image' => $this->image,
        ];
    }
}
