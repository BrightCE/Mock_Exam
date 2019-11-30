<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'functions.php';

if(isset($_POST['list']))
    {
       $list= get_subj_list();
       display_list($list);
    }


function get_subj_list()
    {
        $q_list = "Select * from subjects";
        $result = queryMysql($q_list);
        return $result;
    }

function display_list($result)
    {

        $n = mysqli_num_rows($result);
        echo "<ul>";
        for($i=0; $i<$n; $i++)
            {
                $row = mysqli_fetch_row($result);
                $subj = ucfirst($row[1]);
                echo "<li><label><input type='checkbox' name = 'subject[]' value= '$row[1]' /> $subj</label></li>";
            }
       echo"</ul>";
    }
?>
