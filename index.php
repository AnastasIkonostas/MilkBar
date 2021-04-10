<?php


$page = isset($_GET['page']) ? $_GET['page'] : 'milk';

if ($page === 'milk')
{
    echo file_get_contents('milk.html');
}
elseif ($page === 'shota')
{
    echo file_get_contents('ShotaRustavelli.html');
}
elseif ($page === 'kyiv')
{
    echo file_get_contents('KYIVFOODMARKET.html');
}
elseif ($page === 'zym')
{
    echo file_get_contents('ZYM.html');
}
else
{
    echo file_get_contents('milk.html');
}



