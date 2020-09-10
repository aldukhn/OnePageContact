<?php

//الهوست

$host = "RRRRR.com";

//إسم المستخدم

$username = "RRRRRRR";

//كلمة مرور قاعدة البيانات

$pwd = "RRRRRRR";

//قاعدة البيانات.

$db = "RRRRRR";



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





