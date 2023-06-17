<?php

namespace Personal;

require_once('autoload.php');

use Personal\PersonalAbstract;
use Interface\LeadInterface;
use Interface\WebinarSpeakerInterface;
use Interface\ApplicationCreatorInterface;

class Personal extends PersonalAbstract implements LeadInterface, WebinarSpeakerInterface, ApplicationCreatorInterface
{
    public function getProfAnswerToManage(): string
    {
        return 'Должность:';
    }

    public function getProfAnswerToWebinar(): string
    {
        return 'Работа с персоналом:';
    }

    public function getProfAnswerToApp(): string
    {
        return 'Навыки для работы:';
    }


    static public $countPerson = 0;
    static public $getallManys = 0;

    public function personalTraits(string $text): string
    {
        return 'Личные качества: ' . $text;
    }

    protected function additionalayment(string $text, int $int): int
    {
        if ($text != 'нет') {
            $this->setAllMany($this->salary * 1.3);
            return $int * 1.3;
        } else {
            $this->setAllMany($this->salary);
            return $int;
        }
        
    }

    static public function setCount(): int
    {
        return self::$countPerson++;
    }

    public function getCounts(): int
    {
        return self::$countPerson;
    }

    public function setAllMany($AllMany): int
    {
        $new = self::$getallManys;
        self::$getallManys = $new + $AllMany;
        return ($AllMany);
    }

    public function getAllManys(): int
    {
        return self::$getallManys;
    }

}

?>