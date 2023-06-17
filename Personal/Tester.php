<?php

namespace Personal;

require_once('autoload.php');

use Personal\Manager;

class Tester extends Programmer
{
    private $personalTraitsTester;

    public function __construct(string $name, string $surname, string $job, int $salary, string $workWEbinar, string $personalTraitsTester)
    {
        parent::__construct($name, $surname, $job, $salary, $workWEbinar, 0, 0);
        $this->personalTraitsTester = $personalTraitsTester;
    }

    public function answerMessage(): string
    {
        self::setCount();
        $this->setAllMany($this->salary);
        return "$this->name $this->surname" . '<br/>' . "Позиция: $this->job" . '<br/>' . "зарплата: $this->salary" . '<br/>' . "{$this->messForCoding()}" . '<br/>' . "{$this->personalTraits($this->personalTraitsTester)}" . '<br/>' . '<br/>';
    }
}

?>