<?php

class Person {
    // public string $name;
    // public int $age;

    public function __construct(public string $name, public int $age)
    {}

    public function introduce(): string {
        return "Hi, I'm {$this ->name} and I'm {$this ->age} years old";
    }
}


class Employee extends Person {
    public function __construct(
        public string $name,
        public int $age,
        public string $position)
    {}

    #[Override]
    public function introduce(): string
    {
        return parent::introduce() . " I work as a {$this ->position}";
    }
}

$people = [
    new Employee("Jerry", 55, "Manager"),
    new Person("perrot", 4)    
];

function introduce(Person $person){
    echo $person ->introduce() . "\n";
}

foreach ($people as $person) {
    introduce($person);
}

