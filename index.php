<?php

class Student
{
    public function __construct(public string $firstName = '',
                                public string $lastName = '',
                                public string $group = '',
                                public int $mark = 0)
    {

    }

    public function getScholarship(int $high = 100, int $low = 80)
    {
       return $this->mark == 5 ? $high : $low;
    }

}

class Aspirant extends Student
{
    public bool $work = false;

    public function __construct($firstName,
                                $lastName,
                                $group,
                                $mark,
                                bool $work = false)
    {
        parent::__construct($firstName,$lastName, $group, $mark);
        $this->work = $work;
    }

    public function getScholarship(int $high = 200, int $low = 180)
    {
        return parent::getScholarship($high, $low);
    }
}

$student = new Student('Serhii', 'Pristapchuk', 'B', 4);
$aspirant = new Aspirant('Ivan', 'Ivanov', 'A', 4, true);

$obj_arr[] = $student;
$obj_arr[] = $aspirant;

for ($i = 0; $i < count($obj_arr); $i++ ) {
    $salary = $obj_arr[$i]->getScholarship();
    $class = get_class($obj_arr[$i]);
    echo $class.'\'s salary is ' . $salary . ' grn' . '<br>';
}

