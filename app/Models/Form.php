<?php

namespace form;

class Form
{
    public function RegForm()
    {
        print "
        <form method='POST'>
            <input type='text' name='username' placeholder='User name'>
            <input type='email' name='email' placeholder='Email'>
            <input type='password' name='password' placeholder='password'>
            <button name='sent'>Sent</button>     
            <button name='edit'>Edit</button>            
        </form>
        ";
    }
}

$form = New Form();

?>