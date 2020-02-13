<?php

namespace table;

class Table
{
    public function GetAllUsersAllDate($array)
    {
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
                print '<td>' . $data . '</td>';
            }
            print '</tr>';
        }
        print '</table>';
    }
}

$table = New Table();

?>