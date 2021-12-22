<?php
// creazione class

class Movies
{
    public $title;
    public $description;
    public $author;
    public $age;
    public $discount;


    // costruttore
    function __construct($title, $description, $age, $discount = 10, $author = 'Anonymous')
    {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
        $this->age = $age;
        $this->discount = $discount;
    }

    // metodi
    public function getMovies($lenght = 16)
    {
        $sub = substr($this->description, 0, $lenght);
        return $sub;
    }

    public function getDiscount()
    {
        if ($this->age > 50) {
            $this->discount = 30;
        }

        return $this->discount;
    }
}
