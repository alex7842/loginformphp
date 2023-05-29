<?php
$servername="localhost";
$username="root";
$password="";
$database_name="dbtest";


$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$password=$_POST['password'];
	$love=$_POST['love'];
	$bio=$_POST['bio'];

	$sql_query="INSERT INTO dbtest (name,email,age,password,love,bio)  VALUES ('$name','$email','$age','$password','$love','$bio')";

	if (mysqli_query($conn,$sql_query))
	{
		echo "YOUR DATA HAS BEEN SUCCESFULLY INSERTED ";
	}
	else
	{
		echo "error:".$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);

}
?>