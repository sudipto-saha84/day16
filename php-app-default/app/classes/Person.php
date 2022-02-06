<?php


namespace App\classes;


class Person
{
    public $district ='savar';
    protected $division ='Dhaka';
    private $country ='Bangladesh';

    public function district ()
    {
        echo 'Gaibandha';
    }
    protected function division ()
    {
        echo 'Rangpur';
    }
    private function country ()
    {
        echo 'Bangladesh';
    }


}
