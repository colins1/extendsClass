<?php

namespace Personal;

abstract class PersonalAbstract
{
    protected $name;
    protected $surname;
    protected $job;
    protected $salary;

    public function __construct(string $name, string $surname, string $job, int $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->job = $job;
        $this->salary = $salary;
    }

    abstract public function personalTraits(string $text): string;
}

?>