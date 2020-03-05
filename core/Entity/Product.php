<?php

namespace App\Entity;

class Product implements \JsonSerializable
{
    private $id;
    private $product;
    private $description;
    private $src;
    private $alt;

    public function jsonSerialize()
    {
        return [
            'id'          => $this->id,
            'product'     => $this->product,
            'description' => $this->description,
            'src'         => $this->src,
            'alt'         => $this->alt
        ];
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSrc()
    {
        return $this->src;
    }

    public function setSrc($src)
    {
        $this->src = $src;
    }

    public function getAlt()
    {
        return $this->alt;
    }

    public function setAlt($alt)
    {
        $this->alt = $alt;
    }
}