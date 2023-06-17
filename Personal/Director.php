<?php

namespace Personal;

require_once('autoload.php');

use Personal\Personal;

class Director extends Personal
{
    protected $workDir;
    protected $personalTraitsDirector;

    public function __construct(string $name, string $surname, string $job, int $salary, string $workDir, string $personalTraitsDirector)
    {
        parent::__construct($name, $surname, $job, $salary);
        $this->workDir = $workDir;
        $this->personalTraitsDirector = $personalTraitsDirector;
    }

    private function getPrize($salary): int
    {
        $this->setAllMany($this->salary * 1.3);
        return $salary * 1.3;
    }

    protected function getMessforDirector($workDir): string
    {
        return $this->getProfAnswerToManage() .' '. $workDir;
    }

    public function answerMessage(): string
    {
        self::setCount();
        return "$this->name $this->surname" . '<br/>' . "Позиция: $this->job" . '<br/>' . "зарплата: {$this->getPrize($this->salary)}" . '<br/>' . "{$this->getMessforDirector($this->workDir)}" . '<br/>' . "{$this->personalTraits($this->personalTraitsDirector)}" . '<br/>' . '<br/>';
    }
}

?>