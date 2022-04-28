<?php

namespace University;

class Student
{
    protected string $firstName;
    protected string $lastName;
    protected int $group;
    protected int $mark;

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

class Aspirant extends Student
{
    protected bool $isScientificWork = true;

    public function getScholarship(): int
    {
        return $this->mark === 5 ? 200 : 180;
    }
}

$student = [
    new Student('Jack', 'London', 22, 4),
    new Aspirant('Alan', 'Parker', 14, 4)
];

foreach ($student as $value) {
    echo $value->getScholarship() . PHP_EOL;
}