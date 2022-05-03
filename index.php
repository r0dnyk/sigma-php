<?php

namespace Zoo;

class Animal

{
    protected string $food;
    protected string $location;

    public function __construct(string $food, string $location)
    {
        $this->food = $food;
        $this->location = $location;
    }

    public function makeNose(): void
    {
        echo "Така тварина спить";
    }

    public function eat(): void
    {
    }

    public function sleep(): void
    {
    }

}

class Dog extends Animal
{
    private string $brid;

}

class Cat extends Animal
{
    private string $;
}

class Horse extends Animal
{
    private string $;

}


class Veterinarian
{
    public function treatAnimal(Animal $animal): void
    {
    }
}


$animal = [
    new Dog(),
    new Cat(),
    new Horse(),
];

foreach ($animal as $value) {
}