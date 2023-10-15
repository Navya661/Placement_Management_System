<?php
$connect = new mysqli("localhost", "root", "","helloworld"); // Establishing Connection with Server
#mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$usn = $_POST['usn'];
echo "$usn\n";
$name = $_POST['sname'];
echo "$name\n";
$comname = $_POST['comname'];
echo "$comname\n";
$date = $_POST['Date'];
echo "$date\n";
$attend = $_POST['Attendance'];
echo "$attend\n";
$wt = $_POST['WrittenTest'];
echo "$wt\n";
$gd = $_POST['GD'];
echo "$gd\n";
$tech = $_POST['Tech'];
echo "$tech\n";
$placed = $_POST['Placed'];
echo "$placed\n";
if($query =$connect->query("INSERT INTO updatedrive(USN, Name, CompanyName, Date, Attendence, WT, GD, Techical, Placed)
		VALUES('$usn', '$name', '$comname', '$date', '$attend', '$wt', '$gd', '$tech', '$placed')"))
        {
                      echo "<center>Data Inserted successfully...!!</center>";
		}
		else
		{ 
	       echo "<center>FAILED</center>";
	    }
}
?>