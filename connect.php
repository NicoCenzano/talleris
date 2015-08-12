<?php

￼$doc=fopen('/home/../mysql_user.txt','r');
￼$ar=fgetcsv("$doc",1000,' ');

$enlace= mysql_connect('localhost',$ar[0],$ar[1]);
  mysql_select_db("talleris", $enlace)or die(mysql_error());
  mysql_query("SET NAMES 'utf8'");
?>