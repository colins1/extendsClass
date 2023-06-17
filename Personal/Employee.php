<?php

namespace Personal;

require_once('autoload.php');

use Personal\Manager;

class Employee extends Manager
{
    private $personalTraitsEmployee;

    public function __construct(string $name, string $surname, string $job, int $salary, string $workWEbinar, string $personalTraitsEmployee)
    {
        parent::__construct($name, $surname, $job, $salary, $workDir = '', $workWEbinar, 0);
        $this->personalTraitsEmployee = $personalTraitsEmployee;
    }

    public function answerMessage(): string
    {
        self::setCount();
        return "$this->name $this->surname" . '<br/>' . "Позиция: $this->job" . '<br/>' . 'зарплата:' . "{$this->additionalayment($this->workWEbinar, $this->salary)}" . '<br/>' . "{$this->messForWebinar($this->workWEbinar)}" . '<br/>' . "{$this->personalTraits($this->personalTraitsEmployee)}" . '<br/>' . '<br/>';
    }

}

?>