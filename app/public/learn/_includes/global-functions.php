<?php 

/**
 * print_r2
 *
 * @param  mixed $a
 * @return void
 */
 function print_r2($a)
{
    echo "<pre>";
    print_r($a);
    echo "</pre>";


}

/* 
* render_copyright
*
* @return void;
*/

function render_copyright()
{
    $year = date("Y");

    echo "&copy; $year Emil Näslund";

}
?>