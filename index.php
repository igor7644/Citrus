<?php

require 'vendor/autoload.php';

if(isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case 'admin':
            include 'views/admin.php';
            break;
        default:
            include 'views/home.php';
            break;
    }
}
else
{
    include 'views/home.php';
}