<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function dbconnect()
    {
        @ $db = new mysqli('localhost', 'mockexamapp', 'mockpswd', 'mockexam');

        if (mysqli_connect_error())
            {
                die('Could not connect: ' . mysqli_connect_error());
            }

        return $db;
    }
?>
