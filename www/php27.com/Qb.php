<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 07.11.2018
 * Time: 20:48
 */

class Qb
{
   private function connect ()
    {
        $connect=mysqli_connect('localhost','root','000000');
        mysqli_select_db('db',$connect);
        mysqli_query('set names cp1251');
    }
}