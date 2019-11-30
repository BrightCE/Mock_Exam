<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include 'functions.php';

if(isset($_POST['f_name']))
    {
        $f_name = $_POST['f_name'];
        $db_table = $_POST['table'];

        load_questions($f_name,$db_table);

    }
else if(isset($_POST['que']))
    {
        $db_table = $_POST['table'];
        $q_no = trim($_POST['q_no']);
        $question = trim($_POST['que']);
        $A= trim($_POST['A']);
        $B = trim($_POST['B']);$C = trim($_POST['C']); $D =trim($_POST['D']); $Ans = trim($_POST['Ans']);
        $img_src = "<img src='images/p_question/$question' alt = 'Missing image'/>";
        $img_src = escapestring($img_src);

        $update = "update $db_table set question = '$img_src', A = '$A', B = '$B',C = '$C',D = '$D',answer = '$Ans'
                   where qnum = '$q_no'";
        if(queryMysql($update))
        {
            echo "Question updated successfully.";
        }
    }
echo <<<_END
<form action="load_questions.php" method="POST">
File name: <input type="text" name="f_name" value="" />
Database table: <input type="text" name="table" value="" />
<input type="submit" value="upload" />
</form>

<form action="load_questions.php" method="POST">
    <select name="table">
    <option value = "biology">Biology</option>
    <option value = "government">Government</option>
</select>
    <table border="1" cellspacing="1" cellpadding="5">
<thead>
<tr>
<th>Num</th>
<th>Question</th>
<th>A</th>
<th>B</th>
<th>C</th>
<th>D</th>
<th>Answer</th>
</tr>
</thead>
<tbody>
<tr>
<td><input type="text" name="q_no" value="" /></td>
<td><input type="text" name="que" value="" /></td>
<td><input type="text" name="A" value="" /></td>
<td><input type="text" name="B" value="" /></td>
<td><input type="text" name="C" value="" /></td>
<td><input type="text" name="D" value="" /></td>
<td><input type="text" name="Ans" value="" /></td>
</tr>

</tbody>
</table>
<input type="reset" value="Reset" /> | <input type="submit" value="Update" />

</form>

_END;

function load_questions($name,$table)
    {
        $path = "question/";
        $path.=$name;
        $ques = file($path);
        for ($i = 0; $i<count($ques); $i++)
            {
                //get each column in each row of the questions array
                $line = explode("\N", $ques[$i]);
                echo $ques[$i]."<br>";
                echo $line[0]."<br>".$line[1]."<br>".$line[2]."<br>".$line[3]."<br>".$line[4]."<br>".$line[5]."<br>";
                $que = escapestring($line[0]);
                $a = escapestring($line[1]);
                $b = escapestring($line[2]);
                $c = escapestring($line[3]);
                $d = escapestring($line[4]);
                $ans = trim($line[5]);
                $query = "insert into $table
                        values(NULL, '$que','$a','$b','$c','$d', '$ans')";
                 queryMysql($query);
            }
    }


        
?>
