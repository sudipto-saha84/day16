<?php


namespace App\classes;
use App\classes\Person;


class Example extends Person
{
    public $firstName ='Sudipto';
    protected $middleName='SSSSSSS';
    private $lastName ='saha';
    public $firstNumber =10;
    protected $secondNumber =20;
    private $lastNumber =30;

    public function index ()
    {
//        $this->firstName ="Santo";
//        $this->firstName ='Shila';
////        echo gettype($this->firstName);
//
//        echo $this->firstName;
        $this->firstName = "Sudippptttoooo";
        echo $this->firstName;
    }
    public function methodOne()
    {
        $this->middleName ='kfdhihgjhsd';
        echo $this->middleName;
    }
    public function methodTwo()
    {
        $this->lastName="saha";
        echo $this->lastName;
    }
    public function methodThree ()
    {
        echo $this->district;
        echo $this->division;
        echo $this->country;
    }
}