<?php


namespace App\classes;


class operator
{

//    =====operator====
    /*
     * *Arithmetic Operator
        * Binary operator (+,-,*,/,%)
        * unary operator(++,--,(-) )

     * Assignment operator (=,+=,-=,*=,/=,.=)
     * condition operator (>,>=,<,<=,==,!=,===,!==)
     * logical Operator (&&,||,!)
     */

    public $x;
    public $y;
    protected $z;

    public function index()
    {
        $this->x=10;
        $this->y=20;
        $this->z=30;


//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>.....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>.....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>.....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>.....<br/>';
//



//            =========statement=========
        /*
         * single Line statement
         * Condition Statement
            *if
            *if else
             * if else if
             * switch
         * repeated statement
            * For
             * while
             * do while
             * foreach
             * array

         */

        switch ($this->y)
        {
            case 10:
                echo 'Hello World';
                break;
            case 20:
                echo 'Hello BITM';
                break;
            case 30:
                echo 'Hello BANGLA';
                break;
            default :
                echo 'Bye';
        }

//        if ($this->x > $this->y)
//        {
//            echo 'Its true';
//        }
//        else
//        {
//            echo 'Its False';
//        }

//        if ($this->x < $this->y)
//        {
//            echo 'Its true';
//        }

//        echo $this->x += $this->y;
//        echo '<br/>';
//        echo $this->x -= $this->y;
//        echo '<br/>';
//        echo $this->x *= $this->y;
//        echo '<br/>';
//        echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;
//        echo '<br/>';
//


//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';

//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';

    }

}