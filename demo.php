<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include 'functions.php';

session_start();

$q_num = 1; $score=0; $ttl = 10;
$start = $_POST['start'];
$next = $_POST['next'];
$back = $_POST['back'];
$end = $_POST['end'];
$subj = $_POST['subject'];

$t_que = ""; $t_ans = "";$selected="";

if ($start == "Yes")
    {
          $questions = get_demo_ques($subj);
         
            $_SESSION['Ques'] = $questions;
            $_SESSION['Ans']= $answer;
            displayquestion($questions,$q_num,$selected);
            $_SESSION['Q_n'] = $q_num;
            $_SESSION['total'] = $ttl;
            $_SESSION['SUB'] = $subj;

    }
 if ( $next=="Yes")
        {
            $option = $_POST['option'];

            $questions = $_SESSION['Ques'];
            $answer = $_SESSION['Ans'];
            $q_num = $_SESSION['Q_n'];
            $answer[$q_num]= $option;

            $q_num += 1;
            if(empty($answer[$q_num]))
                {
                    $selected="";
                }
             else{
                    $selected = $answer[$q_num];
                 }

            displayquestion($questions,$q_num,$selected);
            $_SESSION['Q_n'] = $q_num;
            $_SESSION['Ans']=$answer;
            $_SESSION['Ques'] = $questions;

        }
 if ($back =="Yes")
        {
            $option = $_POST['option'];
            $questions = $_SESSION['Ques'];
            $answer = $_SESSION['Ans'];
            $q_num = $_SESSION['Q_n'];
            $answer[$q_num]=$option;

            $q_num -= 1;

           if(empty($answer[$q_num]))
                {
                    $selected="";
                }
             else{
                    $selected = $answer[$q_num];

                 }

            displayquestion($questions, $q_num,$selected);
            $_SESSION['Q_n'] = $q_num;
            $_SESSION['Ans']=$answer;
            $_SESSION['Ques'] = $questions;
        }
 if ($end =="Yes")
        {
            $option = $_POST['option'];
            $answer = $_SESSION['Ans'];
            $q_num = $_SESSION['Q_n'];
            $answer[$q_num]=$option;
            $questions = $_SESSION['Ques'];
            $ttl = $_SESSION['total'];
            //score test
            for($x=1; $x <= $ttl; ++$x)
                {
                   $row = $questions[$x];
                   $t_que .= "$row[0],";

                   if ($answer[$x]== "")
                    {
                        $t_ans.= "z";
                    }
                   else {$t_ans .="$answer[$x]";}

                   if($row[6]==$answer[$x])
                        {
                            $score+=1;
                        }
                }
           
                $subj = $_SESSION['SUB'];
               
           //save demo record into database.
                $saved = save_demo($subj,$score);
                 if($saved)
                    {
                        end_of_test_mesg($score,$ttl);
                    }
                 else end_of_test_mesg($score,$ttl);
destroySession();
          //End session and delete session variables...

        }


?>
