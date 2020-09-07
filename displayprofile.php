<?php
//host
$host = "sql312.epizy.com";
//user name
$username = "epiz_26495741";
//database password
$pwd = "M7Xghh6u3XT";
//database name.
$db = "epiz_26495741_emails";

$con=mysqli_connect($host,$username,$pwd,$db) or die("Unable to Connect");

if(mysqli_connect_error($con))
{
	echo "Failed to connect";
}

$query=mysqli_query($con,"SELECT * FROM contact_form_info");

if($query)
{
while($row=mysqli_fetch_array($query))
	{
	$flag[]=$row;
	}
print(json_encode($flag));
}
mysqli_close($con);
?>


