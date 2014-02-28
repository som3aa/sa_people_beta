<?php

//
$str = 'backend.pages.create';
$str = explode(".", $str);

//dd(isset($str[3]));

$str2 = 'Backend\PagesController@getIndex';

$txt = GetBetween($str2,'get',' ');