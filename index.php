<?php

namespace Zoo;

class Animal

{
    public string $food;
    public string $location;

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
    private string $bark = 'barking';

    public function makeNose(): void
    {
        echo "Dog is " . $this->bark;
    }

    public function eat(): void
    {
        echo "Dog is eating";
    }

}

class Cat extends Animal
{
    private string $mew = 'mewing';

    public function makeNose(): void
    {
        echo "Cat is " . $this->mew;
    }

    public function eat(): void
    {
        echo "Cat is eating";
    }

}

class Horse extends Animal
{
    private string $gallop = 'galloping';
}


class Veterinarian
{
    public function treatAnimal(Animal $animal): void
    {
        echo $animal->food . PHP_EOL;
        echo $animal->location . PHP_EOL;
    }
}


$animal = [
    new Dog('meat', 'booth'),
    new Cat('milk', 'house'),
    new Horse('hay', 'barn'),
];

foreach ($animal as $value) {
    $veterinarian = new Veterinarian();
    $veterinarian->treatAnimal($value);
}