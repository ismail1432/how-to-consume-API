<?php

namespace App\Model;

class Book
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $price;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice($price): self
    {
        $this->price = $price;
        return $this;
    }
}