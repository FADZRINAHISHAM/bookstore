<html>
<head>
<title>Update Staff Record</title>
</head>
<body>
<?php
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'bookstore');
	$sql = "SELECT * FROM staff";
	$records = mysqli_query($con,$sql);
	echo "Staff Records";
?>
<table>
	<tr>
    	<th>Staff Name</th>
        <th>Staff I/C</th>
        <th>Staff Address</th>
        <th>Staff Age</th>
        <th>Staff Phone Number</th>
    </tr>
    <?php
	while($row = mysqli_fetch_array($records))
	{
		echo "<tr><form action=UpdateStaffEngine.php method=post>";
		echo "<input type=hidden name=staffid value='".$row['staffid']."'>";
		echo "<td><input type=text name=staffname value='".$row['staffname']."'></td>";
		echo "<td><input type=text name=staffic value='".$row['staffic']."'></td>"; 
		echo "<td><input type=text name=staffadd value='".$row['staffadd']."'></td>";
		echo "<td><input type=text name=staffage value='".$row['staffage']."'></td>";
		echo "<td><input type=text name=staffphonenum value='".$row['staffphonenum']."'></td>";
		echo "<td><input type=submit>";
		echo "</form></tr>";
	}
	?>
</body>
</html>