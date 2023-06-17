<?php

namespace Personal;

require_once('autoload.php');

use Personal\Manager;

class Programmer extends Personal
{
    protected $workApp;
    private $workWEbinar;
    private $personalTraitsProgrammer;
    
    public function __construct(string $name, string $surname, string $job, int $salary, string $workApp, string $personalTraitsProgrammer, string $workWEbinar)
    {
        parent::__construct($name, $surname, $job, $salary);
        $this->workApp = $workApp;
        $this->personalTraitsProgrammer = $personalTraitsProgrammer;
        $this->workWEbinar = $workWEbinar;
    }

    private function messForWebinar(): string
    {
        return $this->getProfAnswerToWebinar() .' '. $this->workWEbinar;
        
    }

    protected function messForCoding(): string
    {
        return $this->getProfAnswerToApp() .' '. $this->workApp;
    }

    public function answerMessage(): string
    {
        self::setCount();
        return "$this->name $this->surname" . '<br/>' . "Позиция: $this->job" . '<br/>' . "зарплата:" . "{$this->additionalayment($this->workWEbinar, $this->salary)}" . '<br/>' . "{$this->messForWebinar()}" . '<br/>' . "{$this->messForCoding()}" . '<br/>' . "{$this->personalTraits($this->personalTraitsProgrammer)}" . '<br/>' . '<br/>';
    }
}

?>