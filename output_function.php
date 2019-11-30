<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function display_header($pg_title)
    {
        echo <<<_END
       <!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="MockexamNG gives you the oppurtunity to prepare for various  e-testing examinations.">
        <meta name="author" content="Bright Elewendu">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <script src="js/html5.js"></script>
        <![endif]-->

        <script type="text/javascript" src="js/jquery-1.8.2.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="js/animatedcollapse.js"></script>
        <script type="text/javascript" src="js/slide.js"></script>
        <script type="text/javascript" src="js/jquery.preloader.js"></script>

        <script type="text/javascript" src="testfunctions.js"></script>
        <script type="text/javascript" src="signup_functions.js"></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/news.css">
        <link rel="stylesheet" href="css/pricing.css">
        <link rel="stylesheet" href="css/prettyPhoto.css"/>
       <link rel="shortcut icon" href="images/bp.ico" type="image/x-icon" />
        <title>MockExamNG::$pg_title</title>

    </head>
_END;
    }

function display_menu($header)
    {
        echo <<<_END
       <body>
         <div id="blue-container">
            <header id="main-header">
                <div id="nav-container">
                    <a href="." title="Go Home">MockExamNG</a>
                    
                    <div class="clear"></div>
                </div><!--end of nav-container-->
            <h1>$header</h1>
       </header>
_END;
    }

function open_content()
    {
        echo <<<_END
         <section id="first-gray">
                <div id="gray-container">
_END;
    }

function display_footer()
    {
        echo <<<_END
             </div><!--end of gray-container-->
            </section>
            <div class="clear"></div>
            </div>
            <footer id="footer">
            <div id="footer-content">
                
                <div class="border-footer"></div>
                <div class="clear28"></div>
                <!--About Us-->
                <article class="three-columns">
                    <h3>About MockExamNG</h3>
                    <p>MockExamNG is an E-testing application designed by <a href="http://www.brightprogrammes.com">Bright Programmes</a>. Its objective is to help candidates - who would otherwise face electronic testing for the first time on the exam day- to get familiar and comfortable with computer based testing. </p>
                    <p>It was also developed with the aim of helping candidates access the level of their preparedness for various examinations as the test questions are based on a variety of past examination questions. This however does not replace instructor lead examination preparation.</p>
                    <p class="">We sincerely hope that you find this program useful. </p>
                </article>
                <!--Social Profiles-->
                <article class="three-columns">
                    <h3>Stay tunned</h3>
                    <h4>Subscribe to one of the following network</h4>
                    <nav id="social-nav">
                        <ul >

                            <li><a href="#" title="Follow us on Twitter"><div class="step">
                                        <span class="icon"><img src="images/twitter-icon.png" alt="Follow us on Twitter"></span>
                                        <div class="step-content">Follow us on Twitter</div>
                                    </div></a>
                            </li>
                            <li><a href="#" title="Become fan on Facebook"><div class="step">
                                        <span class="icon"><img src="images/facebook-icon.png" alt="Become fan on Facebook"></span>
                                        <div class="step-content">Become fan on Facebook</div>
                                    </div></a>
                            </li>
                         </ul>
                    </nav>

                </article>
                <!--Contact Form-->
                <article class="three-columns last">

                    <h3>Contact</h3>
                    <span id="result"></span>
                    <form id="contact" method="post" action="contact.php" class="cmxform">
                        <input type="text" name="name" placeholder="Enter your name" class="required"/>
                        <input type="email" name="email" placeholder="Enter your email address" class="required email"/>
                        <textarea placeholder="Type in your message" name="message" class="required">
                        </textarea>
                        <input type="submit" value="Send">
                    </form>

                </article>
                <div class="clear"></div>
                <div class="border-footer"></div>
                <div class="post-footer-content">
                    <h6><a href="http://www.brightprogrammes.com" target="_blank">Copyright 2013 MockExamNG - Designed by Bright Programmes.</a></h6>
                </div><!---end of post-footer-content-->

            </div><!--footer-content-->

        </footer>
        <script src="js/slides.min.jquery.js"></script>
        <script type="text/javascript" src="js/jquery.liquidcarousel.js"></script>
        <script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
         <!--[if lt IE 9]>
          <link rel="alternate stylesheet" type="text/css" href="css/ie8.css" title="internet explorer" media="screen">
        <![endif]-->
    </body>
</html>

_END;
    }

function newsletter_form()
    {
        echo <<<_END
         <div class="row-container" id="newsbox">
                        <h2>Signup page under construction</h2>
                        <div class="clear30"></div>
                        <p> Sorry. This page is still being developed.</p>
                        <p>However, if you would like us to contact you with updates about MockExamNG, please signup to our
                            Newsletter.</p>
                    <div class="clear30"></div>
                        <h2>Newsletter</h2>
                       <form class="myform" name="news">
                             <table border="0" cellpadding="20" cellspacing="20">
                                <tr>
                                   <td>Email<span class="error" id="f2"></span> </td>
                                   <td> <input type="text" name="email" id="email" value="" onblur="vEmail(this,'f2')"/></td>
                                </tr>
                            </table>
                             <input type="button" value="Subscribe" onClick="subscribe()"/>
                         </form><div class="clear30"></div>
                         <div class="clear30"></div><div class="clear30"></div><div class="clear30"></div><div class="clear30"></div>
                         <div class="clear30"></div><div class="clear30"></div>
                    </div>
_END;
    }
?>
