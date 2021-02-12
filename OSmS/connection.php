<?php 
$hostname="localhost";
$username="root";
$password="";
$dbname="osms";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if($conn)
{
	//echo "connected";
}
else
{
	echo "not";
}
 //$conn= new mysqli($hostname,$username,$password,$dbname);
/*if($conn-> connect_error)
{
	die("fail");

}
else
{
	echo "connected";
}
*/

 

 ?>