<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function get_demo_ques($subj)
    {
        $query ="select * from $subj";
                $result = queryMysql($query);
        $num = mysqli_num_rows($result);
        for($i=1; $i<= $num; $i++)
            {
                $row = mysqli_fetch_row($result);
                $ques[$i]= $row;
            }

        return $ques;
    }

function save_demo($subj,$score)
    {
        $q_record = "insert into demo_record(subj,score)
                           values ('$subj','$score')";

            $result = queryMysql($q_record);
            if ($result)
                {
                    return true;
                }
            else {return false;}
    }


function end_of_test_mesg($score,$num)
    {
     echo <<<_END
   <div class="clear30"></div>
        <p>Thank you for completing the test. Your score is: $score out of $num</p>
    <p>To enjoy more features of this program such as:</p>
    <p>
       <ul>
       <li>Multiple subjects to choose from</li>
       <li>Full lenght exam timing</li>
       <li>Different set of 50 questions per test from our pool of over 5000</li>
       <li>Pictorial questions</li>
       <li>Comprehension passage test</li>
       <li>Test reviews</li>
       <li>Performance analysis etc...</li>
       </ul>
     </p>
        <h3><a href = "signup.html">Sign up Now!</a></h3>
    
<script>clearTimeout(handle);
clear_name();
</script>
_END;
    }

function displayquestion($questions, $q_num, $selected)
    {
        $checked = $selected;
        $question = $questions[$q_num];
        $option = array('_','_','A','B','C','D');
           echo <<<_END

             <h3> Question $q_num of 10. </h3><div class="clear20"></div>
            <p> $question[1]</p>
            <form name = "exam">
                <p>
_END;
                    for($i=2; $i<=5; ++$i)
                        {
                            if($option[$i] == $checked)
                                {
                                    echo "<label>$option[$i] <input type='radio'  name='answer' value='$option[$i]' checked = 'checked'/> $question[$i]</label><br>";
                                 }
                            else
                                {
                                    echo "<label>$option[$i] <input type='radio'  name='answer' value= '$option[$i]'/> $question[$i]</label><br>";

                                }
                        }


        if($q_num==1)
        {
            echo <<<_END
             </p>
             <div class = "buttons">
            <input type='button' value='Next' onClick="test('Yes','No','No')"/>
            <input type='button' value='End Test' onClick="test('No','No','Yes')"/>
            </div>
            </form>
           
_END;
        }
       else if ($q_num==10)
       {
            echo <<<_END
             </p>
            <div class = "buttons">
            <input type='button' value='Previous' onClick="test('No','Yes','No')"/>
            <input type='button' value='Submit' onClick="test('No','No','Yes')"/>
            </div>
            </form>
            
_END;
       }
   else
        {
            echo <<<_END
             </p>
            <div class = "buttons">
            <input type='button' value='Previous' onClick="test('No','Yes','No')"/>
            <input type='button' value='Next' onClick="test('Yes','No','No')"/>
            <input type='button'  value='End Test' onClick="test('No','No','Yes')"/>
            </div>
            </form>
            
_END;
        }

    }

function destroySession()
{
    $_SESSION=array();

    session_destroy();
}
?>
