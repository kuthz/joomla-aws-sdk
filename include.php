<?php

defined('_JEXEC') or die();

if (!defined('AMAZON_INCLUDED'))
{
    define('AMAZON_INCLUDED', '2.7.2');
    
    // Register the FOF autoloader
    require_once __DIR__ . '/aws-sdk/aws-autoloader.php';
}
