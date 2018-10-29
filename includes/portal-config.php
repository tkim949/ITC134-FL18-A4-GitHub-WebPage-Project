<?php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['a4.php'] = "Welcome";
$nav1['a4.php#eunice'] = "Scrum Overview";
$nav1['a4.php#michael'] = "Example Scenerios and Use Cases";
$nav1['a4.php#taekyoung'] = "Benefits of Scrum";
$nav1['contact.php'] = "Contact Team";

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<a class=\"selected\" href=\"$url\">$text</a>";
        }else{
            $myReturn .= "<a href=\"$url\">$text</a>";
        }
    }
    
    return $myReturn;
}

?>
