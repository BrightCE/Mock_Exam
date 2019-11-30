<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'functions.php';

if(isset($_POST['email']))
    {
       $email = sanitizeString($_POST['email']);
       $q_db = "insert into newsletter(email)
                    values('$email')";
       if(queryMysql($q_db))
            {
                echo <<<_END
                <h2>Newsletter subscription successful</h2>
                <div class="clear30"></div>
                <p>Thank you for subscribing to our Newsletter. We shall regularly send you updates about MockExamNG.</p>
                <div class="clear30"></div><div class="clear30"></div><div class="clear30"></div><div class="clear30"></div>
                <div class="clear30"></div><div class="clear30"></div><div class="clear30"></div><div class="clear30"></div>
                <div class="clear30"></div><div class="clear30"></div><div class="clear30"></div><div class="clear30"></div>
<div class="clear30"></div><div class="clear30"></div><div class="clear30"></div>
_END;
            }
    }
?>
