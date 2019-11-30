<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'functions.php';
session_start();

$page = "";
$header = "Signup to MockExamNG";

display_header($page);
display_menu($header);
open_content();
newsletter_form();
display_footer();
?>
