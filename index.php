<?php

require 'vendor/autoload.php';

if(isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case 'admin':
            include 'views/logic/show_admin.php';
            break;
        default:
            include 'views/logic/show_home.php';
            break;
    }
}
else
{
    include 'views/logic/show_home.php';
}