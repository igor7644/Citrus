<?php

require 'vendor/autoload.php';

if(isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case 'admin':
            include 'core/Service/show_admin.php';
            break;
        default:
            include 'core/Service/show_home.php';
            break;
    }
}
else
{
    include 'core/Service/show_home.php';
}