<!DOCTYPE html>
<html>
<head>
<title>PHP Demo</title>
</head>
<body>
<? php
	$studentName=$_GET['studentName'];
	$grade=$_GET['grade'];
	$section=$_GET['section'];
	$teacher=$_GET['TeacherName'];
	
	echo "Student Details </br>";
	
	$str=<<<EOD
	Student Name is $StudentName and He/She is in $grade
	grade in section $section and He/She is taught by $teacher
	EOD;
	echo $str;
?>
</body>
</html>
