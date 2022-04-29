<?php

namespace University;

class Student
{
    protected string $firstName;
    protected string $lastName;
    protected int $group;
    public int $mark;

    public function __construct(string $firstName, string $lastName, int $group, int $mark)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->mark = $mark;
    }

    public function getScholarship(): int
    {
        return $this->mark === 5 ? 100 : 80;
    }

}

class Aspirant
{
    protected object $object;
    protected bool $isScientificWork = true;

    public function __construct(string $firstName, string $lastName, int $group, int $mark)
    {
        $this->object = new Student($firstName, $lastName, $group, $mark);
    }

    public function getScholarship(): int
    {
        return $this->object->mark === 5 ? 200 : 180;
    }
}

$student = [
    new Student('Jack', 'London', 22, 5),
    new Aspirant('Alan', 'Parker', 14, 5)
];

foreach ($student as $value) {
    echo $value->getScholarship() . PHP_EOL;
}