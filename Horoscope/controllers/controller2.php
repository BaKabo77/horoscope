<?php
switch($action)
{
    case 'reponse':
        {
            var_dump($_REQUEST);
            $key = $_REQUEST['horoscope'];
            echo $signe[$key];
            break;
        }
    
    default:
    {
        include 'views/choix.php';
    }
}
