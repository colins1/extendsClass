<?php

namespace Personal;

require_once('autoload.php');

use Personal\Director;

class Manager extends Director
{

    protected $workWEbinar;
    private $personalTraitsManager;

    public function __construct(string $name, string $surname, string $job, int $salary, string $workDir, string $workWEbinar, string $personalTraitsManager)
    {
        parent::__construct($name, $surname, $job, $salary, $workDir, $personalTraitsManager);
        $this->workWEbinar = $workWEbinar;
        $this->personalTraitsManager = $personalTraitsManager;
    }

    protected function messForWebinar(string $text): string
    {
        return $this->getProfAnswerToWebinar() .' '. $this->workWEbinar;
        
    }

    public function answerMessage(): string
    {
        self::setCount();
        return "$this->name $this->surname" . '<br/>' . "Позиция: $this->job" . '<br/>' . 'зарплата:' . "{$this->additionalayment($this->workWEbinar, $this->salary)}" . '<br/>' . "{$this->getMessforDirector($this->workDir)}" . '<br/>' . "{$this->messForWebinar($this->workWEbinar)}" . '<br/>' . "{$this->personalTraits($this->personalTraitsManager)}" . '<br/>' . '<br/>';
    }
}

?>