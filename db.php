<?php
$ServerName = 'localhost';
$UserName = 'ferdawus';
$Password = 'ferdawus_fmt';
$DbName   = 'blood_finder';

$Connection = mysqli_connect($ServerName,$UserName,$Password,$DbName);
if (!$Connection) {
	die('connection error!' .mysqli_connect_error());
	
}
