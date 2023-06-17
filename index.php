<?php
    require_once('autoload.php');

    use Personal\Director;
    use Personal\Employee;
    use Personal\Manager;
    use Personal\Programmer;
    use Personal\Tester;
    use Personal\Personal;

    $director = new Director('Максим', 'Рожков', 'Директор', 150000, 'Хороший директор', 'Отличная работа с сотрудниками');
    echo $director->answerMessage();
    echo '<br/>';

    $manager = new Manager('Миша', 'Катов', 'Менеджер', 100000, 'Хороший Менеджер', 'Может провести вебинар', 'Комуникабельность');
    echo $manager->answerMessage();
    echo '<br/>';

    $employee = new Employee('Саша', 'Мышов', 'сотрудник', 50000,'Может провести вебинар', 'Высокий рабочий КПД');
    echo $employee->answerMessage();
    echo '<br/>';

    $programmer = new Programmer('Женя', 'Дибров', 'програмист', 100000, 'Пишет код', 'Быстрая работа над ошибками', 'Может провести вебинар');
    echo $programmer->answerMessage();
    echo '<br/>';

    $tester = new Tester('Толя', 'Пушов', 'Тестер', 60000, 'Хорошо тестирует программу', 'Опыт тестирования 5 лет');
    echo $tester->answerMessage();
    echo '<br/>';

    echo 'Общее количество сотрудников:' . $director->getCounts();
    echo '<br/>';
    echo 'Общая сумма зарплат:' . $director->getAllManys();


?>