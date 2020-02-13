<?php

class Test
{
    public $name;
    public $lastname;
    public $age;

    public function __construct($name, $lastname, $age)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function getAllData($array)
    {
        foreach ($array as $man){
            if ($man->age == 22){
                $bg = 'background-color:red;';
            }
        }

        print '<table><tr>';
        foreach ($array as $object) {
            foreach ($object as $key => $value) {
                print '<th>' . $key . '</th>';
            }
            break;
        }
        print '</tr>';
        foreach ($array as $userData) {
            print '<tr>';
            foreach ($userData as $data) {
                print '<td style=' . $bg . '>' . $data . '</td>';
            }
            print '</tr>';
        }
        print '</table>';
    }
}

$man1 = New Test('Tomas', 'Tomaitis', 22);
$man2 = New Test('Karolis', 'Karolis', 30);

$man3 = New Test('','','','');

var_dump($man1);

$people = [$man1, $man2];
$man1->getAllData($people);


?>