<?php

require_once 'meekrodb.2.3.class.php';
DB::$user = 'my_database_user';
DB::$password = 'my_database_password';
DB::$dbName = 'my_database_name';

// Make an array in php of all students in the class

// $students = array('Tristan', 'Josh', 'Bogdan', 'Lazlo', 'Keith', 'Will', 'Curtis', 'Joe', 'Kochan', 'Patrick', 'Jonathan', 'Jeremy');

$students = array('student'=>'Tristan', 'Josh', 'Bogdan', 'student2'=>'Lazlo', 'Keith', 'Will', 'Curtis', 'Joe', 'Kochan', 'Patrick', 'Jonathan', 'Jeremy');


foreach($students as $student){
	$query = "INSERT INTO students (name) VALUES ('".$student."')";
	print $query;
	print "<br />";
	mysql_query($query);
}

print "<pre>";
print_r($students);
print "</pre>";

$students1 = array(
	'Tristan', 
	'Josh', 
	'Bogdan', 
	'Lazlo', 
	'Keith', 
	'Will', 
	'Curtis', 
	'Joe', 
	'Kochan', 
	'Patrick', 
	'Jonathan', 
	'Jeremy'
);

print "<pre>";
print_r($students1);
print "</pre>";

// print_r($students1);

$students2 = array(
	'student0' => 'Tristan', 
	'student1' => 'Josh', 
	'student2' => 'Bogdan', 
	'student3' => 'Lazlo', 
	'student4' => 'Keith', 
	'student5' => 'Will', 
	'student6' => 'Curtis', 
	'student7' => 'Joe', 
	'student8' => 'Kochan', 
	'student9' => 'Patrick', 
	'student10' => 'Jonathan', 
	'student11' => 'Jeremy'
);

print "<pre>";
print_r($students2);
print "</pre>";



$students3 = array();
$students3['student1'] = 'Tristan';
$students3['student2'] = 'Josh';
$students3['student3'] = 'Bogdan';
$students3['student4'] = 'Lazlo';
$students3['student5'] = 'Keith';
$students3['student6'] = 'Will';
$students3['student7'] = 'Curtis';
$students3['student8'] = 'Joe';
$students3['student9'] = 'Kochan';
$students3['student10'] = 'Patrick';
$students3['student11'] = 'Jonathan';
$students3['student12'] = 'Jeremy';


// print_r($students3);


$students5 = array();
$students5[] = 'Tristan';
$students5[] = 'Josh';
$students5[] = 'Bogdan';
$students5[] = 'Lazlo';
$students5[] = 'Keith';
$students5[] = 'Will';
$students5[] = 'Curtis';
$students5[] = 'Joe';
$students5[] = 'Kochan';
$students5[] = 'Patrick';
$students5[] = 'Jonathan';
$students5[] = 'Jeremy';


print_r($students5);


$students6 = array();
array_push($students6, 'Tristan', 'josh', 'Patrick');

// array_push($students6, 'student1'=>'Tristan', 'student2'=>'josh');












